<?php
/**
 * Meta_boxes
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Meta_Boxes {
    use Singleton;

    protected function __construct()
	{
		//wp_die('Hello');


		//load class
		$this->setup_hooks();
	}

	protected function setup_hooks(){
		//actions and filters

		add_action( 'add_meta_boxes', [$this, 'add_custom_meta_box']);

		add_action( 'save_post', [$this, 'save_post_meta_data' ] );
	}

	public function add_custom_meta_box(){
	$screens = ['post'];
	foreach($screens as $screen){
		add_meta_box(
			'hide-page-title',           //Unique ID,
			__('Hide page title', 'aquila'),//BoxTitle 
			[$this, 'custom_meta_box_html'], //Content callback. Must be of type callback
			$screen,
		'side');                 //$screen
	}}
	public function custom_meta_box_html($post){
	$value = get_post_meta( $post->ID, '_hide_page_title', true );
		?>
	<label for="aquila-field"><?php esc_html_e('Hide the page title', 'aquila'); ?></label>
	<select name="aquila_hide_title_field" id="aquila-field" class="postbox">
		<option value=""><?php esc_html_e('Select', 'aquila') ?></option>
		<option value="yes" <?php selected( $value, 'yes' ); ?>><?php esc_html_e('Yes', 'aquila') ?></option>
		<option value="no" <?php selected( $value, 'no' ); ?>><?php esc_html_e('No', 'aquila') ?></option>
	</select>
	<?php
	}

	function save_post_meta_data( $post_id ) {
	if ( array_key_exists( 'aquila_hide_title_field', $_POST ) ) {
		update_post_meta(
			$post_id,
			'_hide_page_title',
			$_POST['aquila_hide_title_field']
		);
	}
}
}