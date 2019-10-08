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
            <a href="/student-activities/">
              <?php _e('Financial Aid') ?>
            </a>
          </li>        
          <li role="menuitem">
            <a href="/student-activities/">
              <?php _e('Scholarship Information') ?>
            </a>
          </li>
          <li role="menuitem">
            <a href="/student-activities/events/">
              <?php _e('Local Scholarships') ?>
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

 
               
              <?php the_title('<h2>', '</h2>', 'gcc-wp-2018'); ?>

              

            

          </div>
      
      </div>

    </div>
  
    <aside class="small-12 medium-12 large-4 columns right page-nav hide-for-print" id="section-menu"  data-toggler="hide">
      <?php dynamic_sidebar( 'student-activities-widgets' ); ?>
    </aside>

      </div>

    <?php endwhile; // End of the loop. ?>
  </article>
  <?php
  get_footer();