<?php
/**
* The template for displaying all default page template.
*
* This is the template that displays all pages by default.
* Please note that this is the WordPress construct of pages
* and that other 'pages' on your WordPress site may use a
* different template.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*
* Template Name: Math Resources V2
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
        <?php //Page Heading
        get_template_part( 'template-parts/content', 'page-alert' );
        ?>
        <?php
        the_content();
        ?>
        <ul class="tabs" data-tabs id="example-tabs">
          <li class="tabs-title is-active"><a href="#panel1c" aria-selected="true">
          <?php _e('Tutoring appointments', 'gcc-wp-2018'); ?></a></li>
          <li class="tabs-title"><a href="#panel2c">
          <?php _e('FAC Math Center', 'gcc-wp-2018'); ?></a></li>
          <li class="tabs-title"><a href="#panel3c">
          <?php _e('Math resources', 'gcc-wp-2018'); ?></a></li>
          <li class="tabs-title"><a href="#panel4c">
          <?php _e('Academic links ', 'gcc-wp-2018'); ?></a></li>
        </ul>
        <div class="tabs-content" data-tabs-content="example-tabs">
          <!-- Tab 1 -->
          <div class="tabs-panel is-active" id="panel1c">
            <?php the_field( 'tutoring_appointments_content' ); ?>
          </div>
          <!-- Tab 2 -->
          <div class="tabs-panel" id="panel2c">
            <?php the_field( 'fac_math_center_content' ); ?>
          </div>
          <!-- Tab 3 -->
          <div class="tabs-panel" id="panel3c">
            <h2><?php _e('Math resources', 'gcc-wp-2018'); ?></h2>
            <p><strong><?php _e('Review topics: ', 'gcc-wp-2018'); ?></strong><?php the_field( 'review_topics_blurb' ); ?></p>
            <p><strong><?php _e('Course essentials: ', 'gcc-wp-2018'); ?></strong><?php the_field( 'course_essentials_blurb' ); ?></p>
            
            <?php if ( have_rows( 'accordion_item' ) ) : ?>
            <ul class="accordion"  data-accordion data-allow-all-closed="true">
              <?php while ( have_rows( 'accordion_item' ) ) : the_row(); ?>
              <li class="accordion-item" data-accordion-item>
                <!-- Accordion tab title -->
                <a href="#" class="accordion-title"><?php the_sub_field( 'accordion_item_title' ); ?></a>
                <!-- Accordion tab content: it would start in the open state due to using the `is-active` state class. -->
                <div class="accordion-content" data-tab-content>
                  <h2><?php the_sub_field( 'accordion_item_title' ); ?></h2>
                  <div class="row">
                    
                    <!-- course tabs -->
                    <ul class="tabs" data-tabs id="example-tabs">
                      <?php if ( get_sub_field( 'review_handouts' ) ) : ?>
                      <li class="tabs-title is-active"><a href="#review-<?php the_sub_field('course_number')?>" aria-selected="true"><?php _e('Review topics', 'gcc-wp-2018'); ?></a></li>
                      <?php endif; ?>
                      <?php if ( get_sub_field( 'algebra_basics_handouts' ) ) : ?>
                      <li class="tabs-title"><a data-tabs-target="basics-<?php the_sub_field('course_number')?>" href="#basics-<?php the_sub_field('course_number')?>"><?php _e('Course essentials', 'gcc-wp-2018'); ?></a></li>
                      <?php endif; ?>
                    </ul>
                    <!-- .tabs-nav -->
                    <div class="tabs-content" data-tabs-content="example-tabs">
                      <!-- review topics tab -->
                      <?php if ( get_sub_field( 'review_handouts' ) ) : ?>
                      <div class="tabs-panel is-active" id="review-<?php the_sub_field('course_number')?>">
                        
                        <h3><?php _e('Review topics', 'gcc-wp-2018'); ?></h3>
                        <hr>
                        <style>
                        .accordion-content ul {
                        margin-bottom:  0;
                        }
                        </style>
                        <div class="callout primary small">
                          
                          <h3><?php _e('Handouts', 'gcc-wp-2018'); ?></h3>
                          
                          <!-- handouts content -->
                          <?php the_sub_field( 'review_handouts' ); ?>
                          
                        </div>
                        <div class="callout primary small">
                          <h3><?php _e('Videos', 'gcc-wp-2018'); ?></h3>
                          
                          <!-- videos content -->
                          <?php the_sub_field( 'review_videos' ); ?>
                        </div>
                        
                        <?php endif; ?>
                        
                        <?php if ( get_sub_field( 'algebra_basics_handouts' ) ) : ?>
                      </div>
                      <!-- algebra basics tab -->
                      <div class="tabs-panel" id="basics-<?php the_sub_field('course_number')?>">
                        
                        <h3><?php _e('Course essentials', 'gcc-wp-2018'); ?></h3>
                        <hr>
                        <div class="callout primary small">
                          
                          <h3><?php _e('Handouts', 'gcc-wp-2018'); ?></h3>
                          <!-- handouts content -->
                          <?php the_sub_field( 'algebra_basics_handouts' ); ?>
                        </div>
                        <div class="callout primary small">
                          <h3><?php _e('Videos', 'gcc-wp-2018'); ?></h3>
                          
                          <!-- videos content -->
                          <?php the_sub_field( 'algebra_basics_videos' ); ?>
                        </div>
                        
                      </div>
                      <?php endif; ?>
                      </div><!-- .tabs-content -->
                      </div><!-- .tabs-row -->
                      </div><!-- .accordion-item-content -->
                      </li>  <!-- .accordion-item -->
                      <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                  </div>
                  <!-- .end of math resources tab -->
                  <!-- Tab 4 -->
                  <div class="tabs-panel" id="panel4c">
                    <?php the_field( 'academic_links_content' ); ?>
                  </div>
                </div>
                <?php the_field( 'additional_content' ); ?>
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