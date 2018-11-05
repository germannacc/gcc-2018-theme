<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gccwp-2018
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
   while ( have_posts() ) : the_post(); ?>

   <?php
   get_template_part( 'template-parts/content', 'workforce-single-heading' );
   ?>

   <div class="row gutter-small expanded content-area">

     <?php //Page with Sidebar Template
     get_template_part( 'template-parts/content', 'workforce-news' ); ?>

     <?php //Template Sidebar
     get_sidebar(); ?>

<?php endwhile; // End of the loop. ?>

</article>

<?php
get_footer();
