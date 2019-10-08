<?php
/**
* 
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*
* Template Name: Local Scholarships
*
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
  while ( have_posts() ) : the_post(); ?>
  <?php //Page Heading
  get_template_part( 'template-parts/content', 'page-heading' );
  ?>
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
        <div class="row expanded" data-equalizer data-equalize-on="medium" id="sa-events">

          <?php // get raw date
$date = get_field('scholarship_deadline', false, false); ?>
<?php // make date object
$date = new DateTime($date); ?>

          <?php
          $args =  array (
          'post_type' => 'local_scholarships',
          'meta_key'      => 'scholarship_deadline',
          'orderby'     => 'meta_value_numb',
          'order'       => 'ASC',
          'posts_per_page'=> -1,
          );
          ?>
          <?php
          $query = new WP_Query( $args ); ?>
          <?php if ( $query->have_posts() ) : ?>
          <?php while ( $query->have_posts() ) : $query->the_post();?>

              
              <?php the_title('<h2>', '</h2>', 'gcc-wp-2018'); ?> 

              <p><?php the_field( 'scholarship_short_description' ); ?></p>

              <p><strong>Scholarship Deadline:</strong> <?php the_field( 'scholarship_deadline' ); ?></p>

              <?php if( get_field('scholarship_information') ): ?>

              <ul class="accordion" data-accordion data-allow-all-closed="true">
              
                <li class="accordion-item" data-accordion-item>
                  <a href="#" class="accordion-title">Scholarship Details</a>
                    <div class="accordion-content" data-tab-content>
                      
                      <?php the_field( 'scholarship_information' ); ?>

                    </div>
                  </li>
              
              </ul>

              <?php endif; ?>

           <?php if( get_field('scholarship_application_url') ): ?>
             
              <a href="<?php the_field( 'scholarship_application_url' ); ?>"><?php the_field( 'scholarship_application_button_text' ); ?></a>

            <?php endif; ?>



            <?php if( get_field('scholarship_information_url') ): ?>

              |            

              <a href="<?php the_field( 'scholarship_information_url' ); ?>"><?php the_field( 'scholarship_information_button_text' ); ?></a>

            <?php endif; ?>

        <hr>
                      
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        <?php else : ?>
        <p><?php esc_html_e( 'Sorry, no scholarships display', 'gcc-wp-2018'); ?></p>
        <?php endif; ?>
      </div>
        <footer class="entry-footer">
    <?php gcc_wp_2018_entry_footer(); ?>
    </footer><!-- .entry-footer -->
    </div>
  </div>

   <?php get_sidebar();?>

    </div><!--.pagecontent-->
    <?php endwhile; // End of the loop. ?>
  </article>
  <?php
  get_footer();