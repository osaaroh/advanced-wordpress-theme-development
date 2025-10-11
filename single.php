<?php
/**
 * Single Template File
 * 
 * @package: Aquila
 * 
 */

?>

<?php get_header(); ?>

<div id="primary">
<main id="main" class="site-main mt-5" role='main'>
    <?php if (have_posts()) :?>
        <div class="container">
            <?php
            //check if page is blog home and not Front page.
            if(is_home() && !is_front_page()){
                ?>
                <header class="mb-5">
                    <h1 class="page-title screen-reader-text">
                        <?php single_post_title() ?>
                    </h1>
                </header>
                <?php
            }

            while (have_posts()) : the_post();

            get_template_part('template-parts/content');

        endwhile;
            ?>

            
        </div>
        <?php 
        else :
            get_template_part('template-parts/content-none');
        endif;
        // aquila_pagination();
        //Module below for test
        //get_template_part('template-parts/content-none');
        ?>

        <div class="container">
            <?php
                previous_post_link();
                next_post_link();
            ?>
        </div>
<h3>This is the Single.php file</h3>
</main>
</div>
<?php //get_sidebar(); ?> <!--Include the sidebar -->
<?php get_footer(); ?>