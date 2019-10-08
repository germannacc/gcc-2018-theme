<?php
/**
* Default page template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*
* Template Name: GPTA
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
  while ( have_posts() ) : the_post(); ?>
  <header>
    <div class="hero-section-text">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </div>
    <div class="row expanded crumbs-container gutter-small">
      <div class="small-12 medium-8 large-9 columns">
        <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>">
          <?php the_breadcrumb() ?>
        </nav>
      </div>
      <div class="small-12 medium-4 large-3 columns show-for-landscape">
        <?php gcc_wp_2018_page_icons() ?>
      </div>
    </div>
</header>
  <div class="row expanded content-area">
    <div class="small-12 medium-12 large-9 float-left columns" >
      <?php // if the page has a featured image
      if  (has_post_thumbnail( ) )  { ?>
      <div class="hero-section hide-for-print visible-for-medium-up hidden-for-small-only" id="featured-image" data-toggler="hide" >
        <?php the_post_thumbnail('', array ('class' => 'lazy'));  ?>
      </div>
      <?php  }  else {  //.pagesubbanner
      // if page doesn't have a featured image
      ?>
      <?php } ?>
      <div class="entry-content" id="main" tabindex="0">
        <?php //Page Heading
          get_template_part( 'template-parts/content', 'page-alert' );
        ?>
        <?php
        the_content();
        ?>
      </div>
    </div>
    
  <?php get_template_part( 'sidebars/gpta-sidebar' ); ?>    

<footer class="entry-footer">
      <?php gcc_wp_2018_entry_footer(); ?>
      </footer><!-- .entry-footer -->
      </div><!--.pagecontent-->
      <?php endwhile; // End of the loop. ?>
    </article>
    <?php
    get_footer();