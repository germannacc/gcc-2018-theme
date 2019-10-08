<?php
/**
* Template Name: Student Activities Events
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
      <?php the_title( '<h1 class="entry-title">Student Organization Events: ', '</h1>' ); ?>
    </div>
    <div class="row expanded crumbs-container gutter-small">
      <div class="small-12 medium-8 large-9 columns">
        <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>">
                 <ul class="breadcrumbs">
          <?php $home_page = get_the_title( get_option('page_on_front'));
          $post_title = get_the_title( get_option('page_for_posts'));
          ?>
        <li role="menuitem">
            <a href="<?php echo get_site_url(); ?>">
              <?php echo $home_page; ?>
            </a>
          </li>
          <li role="menuitem">
            <a href="<?php esc_html('https://germannacc.staging.wpengine.com/student-activities/') ?>">
              <?php _e('Student Activies') ?>
            </a>
          </li>
          <li role="menuitem">
            <a href="<?php esc_html('https://germannacc.staging.wpengine.com/student-activities/student-organization-events/') ?>">
              <?php _e('Events') ?>
            </a>
          </li>
          <li role="menuitem">
            <?php the_title(); ?>
          </li>
        </ul>
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
        <div class="row expanded">
          <?php
          $args =  array (
            'post_type' => 'sa_events',
            'meta_key'      => 'event_date',
            'orderby'     => 'meta_value',
            'order'       => 'DESC'
          );
          ?>

          <?php
          $query = new WP_Query( $args ); ?>
          <?php if ( $query->have_posts() ) : ?>
          <?php while ( $query->have_posts() ) : $query->the_post();?>
          <div class="small-12 medium-12 large-6 columns">
            <div class="callout primary small">
              
              <?php the_title('<h2>', '</h2>', 'gcc-wp-2018'); ?>

              <p style="margin-bottom: 0;"><?php the_field( 'event_description' ); ?></p>

              <p  style="margin-bottom: 0;"><?php the_field( 'event_date' ); ?></p>

              <p style="margin-bottom: 0;"><?php the_field( 'event_location' ); ?></p>

              <?php if( get_field('event_start_time') ): ?>
              <p><?php the_field('event_start_time'); ?> - <?php the_field('event_end_time'); ?></p>
              <?php endif; ?>

              <?php if( get_field('event_details') ): ?>
              <a href="<?php echo the_permalink(); ?>" class="button primary"><?php _e('Learn more', 'gcc-wp-2018'); ?></a>
              <?php endif; ?>
            </div>
            
          </div>
          
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p><?php esc_html_e( 'Sorry, no currents to display', 'gcc-wp-2018'); ?></p>
        <?php endif; ?>
      </div>

    </div>
  </div>

   <?php get_sidebar();?>

    </div><!--.pagecontent-->
    <?php endwhile; // End of the loop. ?>
  </article>
  <?php
  get_footer();