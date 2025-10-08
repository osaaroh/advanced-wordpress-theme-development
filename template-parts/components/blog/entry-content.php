<?php
/**
 * Template for entry content
 * 
 * 
 * To be used inside wordpress The Loop.
 * 
 * @package Aquila
 */
?>

<h3><?php //the_title(); ?></h3>
<div><?php // the_excerpt(); ?></div>

<div class="entry-content">
    <?php 
        if (is_single()) {
            the_content(
                sprintf(
                    wp_kses(
                        __('Continue reading %s <span class="meta-nav">&rarr;</span>', 'aquila'),
                        [
                            'span' => [
                                'class' => []
                            ]
                        ]
                            ),
                            the_title('<span class="screen-reader-text">"', '"</span>', false)
                )
            );
        } else {
            aquila_the_excerpt(150);
        }
    ?>
</div>