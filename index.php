<?php
/**
 * Main Template File
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
            ?>
            <div class="row">
                <?php 
                $index =0;
                $no_of_columns = 3;

                //start the loop
                while (have_posts()) : the_post();
                
                if (0===$index % $no_of_columns){
                    ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                    <?php
                }
                get_template_part('template-parts/content');
                $index++;
                if (0 !== $index && 0 === $index % $no_of_columns) {
                    ?>
                    </div>
                    <?php   
                }
                endwhile;
                ?>
            </div>
            
        </div>
        <?php 
        else :
            get_template_part('template-parts/content-none');
        endif;
        get_template_part('template-parts/content-none');
        ?>
<h3>This is the Index.php file</h3>
</main>
</div>
<?php //get_sidebar(); ?> <!--Include the sidebar -->
<?php get_footer(); ?>