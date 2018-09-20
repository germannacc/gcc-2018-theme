<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gccwp-2018
 * Template Name: Home
 */
get_header(); ?>

    <?php get_template_part( 'template-parts/content', 'hero-slider' ); ?>

    <?php get_template_part( 'template-parts/content', 'pathways' );  ?>

    <?php get_template_part( 'template-parts/content', 'getstarted' ); ?>

    <?php get_template_part( 'template-parts/content', 'highlights' ); ?>

    <footer class="entry-footer">
      <?php gcc_wp_2018_entry_footer(); ?>
    </footer><!-- .entry-footer -->

    <?php
    get_footer();
