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
   while ( have_posts() ) : the_post('gcc_classes'); ?>

   

   <?php
      the_content();
    ?>



<?php endwhile; // End of the loop. ?>


</article>

<?php
get_footer();
