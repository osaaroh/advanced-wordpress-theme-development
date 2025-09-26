<?php
/**
 * Front page Template File
 * 
 * @package: Aquila
 * 
 */

?>

<?php get_header(); ?>

<main>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()): the_post(); ?>
            <article>
                <h2><a href="<?php the_permalink()?>"><?php the_title(); ?></a></h2>
                <?php the_excerpt(); ?>
            </article>
        <?php endwhile; ?>

    <?php else : ?>
        <p>Sorry, no content found! This is the </p>
    <?php endif; ?>
<h3>This is the Single.php file</h3>
</main>
<?php //get_sidebar(); ?> <!--Include the sidebar -->
<? get_footer(); ?>