<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?> ">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); ?>
    </head>
    <body <? body_class() ?>>
        <?php 
            if (function_exists('wp_body_open')){
                wp_body_open();
            }
        ?>
        <div id="page" class="site">
        <header>
            <?php get_template_part('template-parts/header/nav'); ?>
            <?php //get_template_part('template-parts/content', 'post'); ?>
            
            <h1><?php //bloginfo('name'); ?></h1>
        </header>
        <div id="content" class="site-content"></div>