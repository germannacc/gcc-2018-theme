<?php
/**
* The template for displaying all default page template.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* Template Name: Testing
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
  while ( have_posts() ) : the_post(); ?>
  <header>
    <div class="hero-section-text">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      <?php gcc_wp_2018_page_icons() ?>
    </div>
    <div class="row expanded crumbs-container">
      <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>">
        <?php the_breadcrumb() ?>
      </nav>
    </div>
  </header>
  <!--Page Content-->
  <div class="row expanded content-area">
    <div class="small-12 medium-12 large-9 float-left columns" >
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
        <?php  //setup alert from parent page and pulls the field into subpages.
        $page_alert = get_field('page_alert');
        global $post;
        if ( get_field('page_alert', $post->post_parent ) ):
        if ( is_page ('testing-services', ''))
        ?>
        <div class="row expanded">
          <div class='callout announcement small' data-closable>
            <?php the_field('page_alert', $post->post_parent );?>
            <a href='#' class='close' aria-hidden="true" role="button"><span class='icon-remove-circle'></span></a>
            <button class="close-button" aria-label="<?php esc_html_e('Dismiss alert', 'gcc-wp-2018'); ?>" type="button" data-close>
            <span aria-hidden="true">&times;</span>
            </button>
            
          </div>
        </div>
        <?php endif; ?>
        <?php
        the_content();
        ?>
      </div>
    </div>
    <?php get_sidebar();?>
    <footer class="entry-footer">
      <?php gcc_wp_2018_entry_footer(); ?>
      </footer><!-- .entry-footer -->
      </div><!--.pagecontent-->
      <?php endwhile; // End of the loop. ?>
    </article>
    <?php
    get_footer();