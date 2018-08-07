<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gccwp-2018
 */

get_header(); ?>


<?php
   while ( have_posts() ) : the_post(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

      <?php //Single Post Page Heading
      get_template_part( 'template-parts/content', 'page-heading' );
      ?>



      <!--Page Content-->
      <div class="row gutter-small expanded content-area">

      <div class="columns small-12 medium-9">

      	<div class="entry-content">

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


      <?php      $general_description = get_field('general_description');
      					$event_description = get_field('event_description');
      					$event_image = get_field('event_image');
      					$event_date = get_field('event_date');
      					$event_time = get_field('event_time');
      					$event_location = get_field('event_location');
      					$event_address = get_field('event_address');
      					$event_ticket_price = get_field('event_ticket_price');
      					$event_contact_phone = get_field('event_contact_phone');
      					$event_contact_email = get_field('event_contact_email');
      					$event_extra_info = get_field('event_extra_info');
      					$event_button_url = get_field('event_button_url');
      					$event_button_text = get_field('event_button_text');
      					?>

      <p>
         <?php the_field('general_description'); ?>
      </p>

      <h2><?php _e('About this years', 'gcc-wp-2018'); ?> <?php the_title(); ?> <?php _e('event', 'gcc-wp-2018'); ?></h2>

   <div class="row expanded">

         <div class="columns small-12 medium-6 event-description" style="padding-left: 0;">
             <?php the_field('event_description'); ?>
             <?php the_field('event_extra_info'); ?>
           <?php if ( !empty($event_button_text)) : ?>
           <a class="button" href="<?php echo $event_button_url; ?>"  target="_blank"><?php echo $event_button_text; ?></a>
         </div>

         <div class="columns small-12 medium-6">
           <?php if ( !empty($event_image)) : ?>
           <img src="<?php echo $event_image['url']; ?>" class="img-responsive" alt="<?php echo $event_image['alt']; ?>" style="margin-bottom: 20px;" />
           <?php endif ?>

             <div class="callout primary small">
                <h3><?php _e('Event Details', 'gcc-wp-admin') ?></h3>
              <p><span class="fa fa-compass" aria-hidden="true" aria-label="location"></span> <?php echo $event_location; ?></p>
              <p><span class="fa fa-calendar" aria-hidden="true" aria-label="event date"></span> <?php echo $event_date; ?></p>
              <p><span class="fa fa-clock-o" aria-hidden="true" aria-label="event time"></span> <?php echo $event_time; ?></p>
              <p><span class="fa fa-map-marker" aria-hidden="true" aria-label="event address"></span> <?php echo $event_address; ?></p>
              <p><span class="fa fa-dollar" aria-hidden="true" aria-label="event price"></span><?php echo $event_ticket_price; ?></p>
              <?php endif ?>
           </div>
         </div>

       </div>

       <h2 class="small"><?php _e('For questions about this event contact') ?></h2>
       <p><span class="fa fa-phone" aria-hidden="true" aria-label="event contact phone"></span> <?php echo $event_contact_phone; ?></p>
       <p><span class="fa fa-envelope" aria-hidden="true" aria-label="event contact email"></span> <a href="mailto:<?php echo $event_contact_email; ?>"><?php echo $event_contact_email; ?></a></p>

<!--end page content-->

      </div>
      </div>


      <aside class="small-12 medium-4 large-3 gutter-small right page-nav" >

        <div class="widget">

          <h3><?php //gets parent page title
          echo empty( $post->post_parent ) ? get_the_title( 52 ) : get_the_title( $post->post_parent );
          ?></h3>

        <nav class="department-links">

          <?php //get custom sidebar menu for section
          wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
          'menu' => 'Educational Foundation Menu', 'container' => 'true', 'menu_class' => 'vertical menu' ) ); ?>

        </nav>

      </div>

      <?php //custom department widgets
      dynamic_sidebar( 'edfoundation-widgets' ); ?>

      </aside>



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
