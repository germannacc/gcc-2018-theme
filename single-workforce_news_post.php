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
    <div class="columns small-12 medium-12 large-9">
      <?php // if the page has a featured image
      if  (has_post_thumbnail( ) )  { ?>
      <div class="hero-section hide-for-print visible-for-medium-up hidden-for-small-only" id="featured-image" data-toggler="hide" >
        <?php the_post_thumbnail('', array ('alt' => false));  ?>
      </div>
      <?php  }  else {  //.pagesubbanner
      // if page doesn't have a featured image
      ?>
      <?php } ?>
      <div class="entry-content" id="main" tabindex="0">
        <?php
        the_content( sprintf(
        wp_kses(
        /* translators: %s: Name of current post. Only visible to screen readers */
        __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gcc-wp-2018' ),
        array(
          'span' => array(
            'class' => array(),
          ),
        )
        ),
        get_the_title()
        )
        ); ?>
      </div>
    </div>
    <aside class="small-12 medium-12 large-4 columns right page-nav hide-for-print" id="section-menu"  data-toggler="hide">
      <?php dynamic_sidebar( 'workforce-widgets' ); ?>
    </aside>
    <?php endwhile; // End of the loop. ?>
  </article>
  <?php
  get_footer();