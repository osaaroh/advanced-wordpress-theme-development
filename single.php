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
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12">
                <?php if (have_posts()) :?>
                    <div class="post-wrap container">
                        <?php
                        //check if page is winvewblog home and not Front page.
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
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12">
                <?php get_sidebar() ?>
            </div>
        </div>

        <div class="container">
            
            <div class="prev-link">
                <?php
                    previous_post_link();
                ?>
            </div>
            <div class="next-link">
                <?php
                    next_post_link();
                ?>
            </div>
        </div>
        <h3>This is the Single.php file</h3>
    </div>
</main>
</div>
<?php //get_sidebar(); ?> <!--Include the sidebar -->
<div class="container mt-5">
            <?php get_footer(); ?>
</div>
