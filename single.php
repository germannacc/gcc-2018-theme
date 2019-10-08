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

      <?php //Single Post Page Heading
      get_template_part( 'template-parts/content', 'single-heading' );
      ?>

   	  <?php //Single Post Content
      get_template_part( 'template-parts/content', 'single' );
      ?>

<?php endwhile; // End of the loop. ?>


</article>

<?php
get_footer();
