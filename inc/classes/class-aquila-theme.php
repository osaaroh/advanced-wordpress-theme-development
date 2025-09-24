<?php
/**
 * Bootstraps the Theme.
 *
 * @package Aquila
 */

namespace AQUILA_THEME\Inc;

use AQUILA_THEME\Inc\Traits\Singleton;

class AQUILA_THEME {
	use Singleton;

	protected function __construct()
	{


		//load class. Get instance func does something like 'new Assets()'
		Assets::get_instance();

		$this->setup_hooks();
	}

	protected function setup_hooks(){
		//actions and filters
		add_action('after_setup_theme', [$this, 'setup_theme']);
	}
	function setup_theme(){
			add_theme_support('title-tag');

			add_theme_support('custom-logo',[
				'header-text'=> ['site-title','site-description'],
				'height' => 100,
				'width' => 400,
				'flex-height' => true,
				'flex-width' => true,
			]);
		}

}