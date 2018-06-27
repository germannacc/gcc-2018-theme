<?php
/**
 * The template for displaying all post.
 *
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gccwp-2018
 * Template Name: Germanna Highlights
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <?php //All Post Page Heading
        get_template_part( 'template-parts/content', 'page-heading' );
      ?>

       <?php //Display all post content
       get_template_part( 'template-parts/content', 'postpage' );
       ?>

</article>

<?php
get_footer();
