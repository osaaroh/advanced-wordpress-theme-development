<?php
/**
 * Enqueue Theme Assets
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class Block_Patterns {
    use Singleton;

    protected function __construct()
	{
		//load class
		$this->setup_hooks();
	}

	protected function setup_hooks(){
		//actions and filters
        add_action('init', [$this, 'register_block_patterns']);
        add_action('init', [$this, 'register_block_pattern_categories']);
	}

    public function register_block_patterns(){
        if (function_exists('register_block_pattern')) {
            register_block_pattern(
                'aquila/cover',
                [
                    'title'=>__('Aquila Cover', 'aquila'),
                    'description'=>__('Aquila Cover Block with image and text', 'aquila'),
                    'categories' => ['cover'],
                    'content' => '<!-- wp:cover {"url":"https://my-first-theme.local/wp-content/uploads/2025/11/wallpaperflare.com_wallpaper-2-1024x576.jpg","id":114,"dimRatio":50,"customOverlayColor":"#706f6f","isUserOverlayColor":false,"sizeSlug":"large","layout":{"type":"constrained"}} -->
<div class="wp-block-cover"><img class="wp-block-cover__image-background wp-image-114 size-large" alt="" src="https://my-first-theme.local/wp-content/uploads/2025/11/wallpaperflare.com_wallpaper-2-1024x576.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#706f6f"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"large"} -->
<h1 class="wp-block-heading has-text-align-center has-large-font-size">Never let your  memories be greater than your dreams</h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">A mind that is stretched by a new experience can never go back to its old dimensions</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
<div class="wp-block-buttons"><!-- wp:button {"textAlign":"center","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-text-align-center wp-element-button">Blogs</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div></div>
<!-- /wp:cover -->'
                ]
            );
        }
    }

    public function register_block_pattern_categories(){
        $pattern_categories = [
            'cover' => __('Cover', 'aquila'),
            'carousel' => __('Carousel', 'aquila'),
        ];

        if (!empty($pattern_categories) && is_array($pattern_categories)) {
            foreach ($pattern_categories as $pattern_catergory => $pattern_category_label){
                register_block_pattern_category(
                    $pattern_catergory,
                    array('label'=> $pattern_category_label)
                );    
            } 
        }
    }
}

