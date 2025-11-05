<?php
/**
 * Enqueue Theme Assets
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Assets {
    use Singleton;

    protected function __construct()
	{
		//wp_die('Hello');


		//load class
		$this->setup_hooks();
	}

	protected function setup_hooks(){
		//actions and filters

		//Since we want to use a function 'register_styles' in our add_action hook we have to put it in an array 
		add_action('wp_enqueue_scripts', [$this, 'register_styles']);
		add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
	}

	public function register_styles(){

		//Register Styles -  can also use register script
		wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(AQUILA_DIR_PATH.'/style.css'), 'all');

		wp_register_style('bootstrap-css', AQUILA_DIR_URI.'/assets/src/library/css/bootstrap.min.css', [], false, 'all');

		//Enqueue Styles
		wp_enqueue_style('style-css');
		wp_enqueue_style('bootstrap-css');
		wp_enqueue_style('fonts', get_template_directory_uri().'/assets/src/library/fonts/fonts.css', [], false, 'all');

	}
	public function register_scripts(){
		//You can use either enqueue only, and you can register 1st before enqueueing

		// wp_enqueue_script('main-js', AQUILA_DIR_URI.'/assets/src/js/main.js', ['jquery'], filemtime(get_template_directory().'/assets/src/js/main.js'), true);

		// Switch to main.js build version
		wp_enqueue_script('main-js', AQUILA_BUILD_JS_URI.'/main.js', ['jquery'], filemtime(AQUILA_BUILD_JS_DIR_PATH.'/main.js'), true);

		wp_register_script('bootstrap-js', AQUILA_DIR_URI.'/assets/src/library/js/bootstrap.bundle.min.js', ['jquery'], false, true);

		//Enqueue Script
		wp_enqueue_script('bootstrap-js');
	}
}