<?php
//Names the page template for each section
/*
Template Name: Educational Foundation Home
*/
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
	while ( have_posts() ) : the_post(); ?>

		<?php //Page Heading
		get_template_part( 'template-parts/content', 'page-heading' );
		?>

		<!--Page Content-->
		<div class="row gutter-small expanded content-area">

			<div class="small-12 medium-8 large-9 entry-content">

			<?php
			    the_content();
			?>

      <?php

			// The Query
			$the_query = new WP_Query($args = array(
					'post_type' => 'foundation_events',
			) );

			// The Loop
			if ( $the_query->have_posts() ) {

					while ( $the_query->have_posts() ) {
							$the_query->the_post();

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
	<h2><?php _e('Upcoming scholarship events'); ?></h2>

	<div class="callout small primary">

		<?php the_title('<h2>', '</h2>'); ?>

		<div class="columns small-12 medium-4">

			<?php if ( !empty($event_image)) : ?>
			<meta itemprop="thumbnail" content="<?php $event_image['url']; ?>" />
			<img src="<?php echo $event_image['url']; ?>" class="img-responsive" alt="<?php echo $event_image['alt']; ?>" style="margin-bottom: 20px;" />
			<?php endif ?>

		</div>
		<div class="columns small-12 medium-8">


			<p itemprop="location" itemscope itemtype="http://schema.org/Place"><span class="fa fa-compass" aria-hidden="true" aria-label="location"></span>
					<?php echo $event_location; ?>
			</p>

			<p><span class="fa fa-clock-o" aria-hidden="true" aria-label="event time"></span>
					<?php echo $event_time; ?>
			</p>
			<p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><span class="fa fa-map-marker" aria-hidden="true" aria-label="event address"></span>
					<?php echo $event_address; ?>
			</p>


				<a href="<?php echo get_the_permalink(); ?>"  class="button primary"><?php _e('Learn more about the ') ?><?php the_title(); ?></a>


	</div>


	</div>

<?php		    }



		} else {
		    // no posts found
		}
		/* Restore original Post Data */
		wp_reset_postdata();?>





			</div>


			<footer class="entry-footer">
			  <?php gcc_wp_2018_entry_footer(); ?>
			</footer><!-- .entry-footer -->





			<?php //Template Sidebar
			get_template_part( '/sidebars/edfoundation-sidebar' ); ?>

		</div><!--.pagecontent-->

<?php endwhile; // End of the loop. ?>

</article>

<?php
get_footer();
