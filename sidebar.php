<?php 
/**
 * The sidebar containing the main widget area
 * 
 * @pakage aquila
 * 
 */

?>


<aside id="secondary" role="complementary">
    <?php dynamic_sidebar('sidebar-1'); ?>
</aside>

<aside class="sidebar">
    <?php //if (is_active_sidebar('main-sidebar')) : ?>
        <?php //dynamic_sidebar('main-sidebar'); ?>
    <?php // else : ?>
        <!-- <p>Add some widgets to the sidebar!</p> -->
    <?php //endif; ?>
</aside>