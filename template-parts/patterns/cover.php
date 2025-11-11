<?php
/**
 * Cover Block Pattern Template
 * 
 * @package aquila
 */
// Didn't need to use variable cover style as it is for only css
$cover_style = sprintf('background-image:url(%s); min-height:640px', esc_url(AQUILA_BUILD_IMG_URI.'/patterns/cover.jpg'));
?>

<!-- wp:cover {"url":"https://my-first-theme.local/wp-content/themes/advanced-theme-1/assets/build/src/img/patterns/cover.jpg","id":114,"dimRatio":50,"customOverlayColor":"#706f6f","isUserOverlayColor":false,"minHeight":640,"sizeSlug":"large","metadata":{"categories":["cover"],"patternName":"aquila/cover","name":"Aquila Cover"},"align":"full","className":"has-background-dim aquila-cover","layout":{"type":"constrained"}} -->
<div class="wp-block-cover alignfull has-background-dim aquila-cover" style="min-height:640px"><img class="wp-block-cover__image-background wp-image-114 size-large" alt="" src="https://my-first-theme.local/wp-content/themes/advanced-theme-1/assets/build/src/img/patterns/cover.jpg" data-object-fit="cover"/><span aria-hidden="true" class="wp-block-cover__background has-background-dim" style="background-color:#706f6f"></span><div class="wp-block-cover__inner-container"><!-- wp:heading {"textAlign":"center","level":1,"fontSize":"large"} -->
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
<!-- /wp:cover -->