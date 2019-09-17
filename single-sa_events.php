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
  <header>
    <div class="hero-section-text">
      <?php the_title( '<h1 class="entry-title">Student Organization Events: ', '</h1>' ); ?>
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

        <div class="row">
          <?php
          $args =  array (
          'post_type' => 'sa_events',
          );
          ?>
          <?php
          $query = new WP_Query( $args ); ?>
          <?php if ( $query->have_posts() ) : ?>
          <?php while ( $query->have_posts() ) : $query->the_post();?>
               
              <?php the_title('<h2>', '</h2>', 'gcc-wp-2018'); ?>

              <p><?php _e('<strong>Event Description: </strong>', 'gcc-wp-2018'); the_field( 'event_description' ); ?></p>

              <p><?php _e('<strong>Event Date: </strong>', 'gcc-wp-2018');  the_field( 'event_date' ); ?></p>

              <p><?php _e('<strong>Event Location: </strong>', 'gcc-wp-2018');  the_field( 'event_location' ); ?></p>

              <?php if( get_field('event_start_time') ): ?>
              <p><?php _e('<strong>Event Time: </strong>', 'gcc-wp-2018'); the_field('event_start_time'); ?> <?php _e('- ', 'gcc-wp-2018'); ?><?php the_field('event_end_time'); ?></p>
              <?php endif; ?>

              <?php if( get_field('event_details') ): ?>

              <?php the_field( 'event_details' ); ?>

              <?php endif; ?>

        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p><?php esc_html_e( 'Sorry, no currents to display', 'gcc-wp-2018'); ?></p>
        <?php endif; ?>


      </div>
    </div>
    <aside class="small-12 medium-12 large-4 columns right page-nav hide-for-print" id="section-menu"  data-toggler="hide">
      <?php dynamic_sidebar( 'student-activities-widgets' ); ?>
    </aside>
    <?php endwhile; // End of the loop. ?>
  </article>
  <?php
  get_footer();