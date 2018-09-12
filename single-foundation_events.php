<?php
/**
 * The template for displaying all foundation events
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gccwp-2018
 */

get_header(); ?>

<?php
while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

   <?php //Single Post Content
   get_template_part( 'template-parts/content', 'foundaton-events-heading' );
   ?>

  <!--Page Content-->
  <div class="row gutter-small expanded content-area">

    <?php //Single Post Content
     get_template_part( 'template-parts/content', 'foundaton-events' );
     ?>

     <?php //Template Sidebar
			get_template_part( '/sidebars/foundation-events-sidebar' ); ?>

    <?php if ( get_edit_post_link() ) : ?>

  	<footer class="entry-footer">
  		<?php gcc_wp_2018_entry_footer(); ?>
  	</footer><!-- .entry-footer -->

 <?php endif; ?>

  </div>

</article>

<?php endwhile; // End of the loop. ?>

<?php
get_footer();
