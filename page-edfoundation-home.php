<?php
//Names the page template for each section
/*
Template Name: Educational Foundation Home
*/
get_header();
$event_section_heading = get_field('events_section_heading');
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	while ( have_posts() ) : the_post(); ?>
	<div class="hero-section-text">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</div>
	<div class="row expanded crumbs-container">
     <div class="small-12 medium-8 large-9 columns">          <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>">
            <?php the_breadcrumb() ?>
          </nav>
       </div>
   <div class="small-12 medium-4 large-3 columns show-for-landscape">
      <?php gcc_wp_2018_page_icons() ?>
  </div>
	</div>
	<!--Page Content-->
	<div class="row gutter-small expanded content-area">
		<div class="small-12 medium-12 large-9">
			<?php // if the page has a featured image
			if  (has_post_thumbnail( ) ) {
			?>
			<header class="hero-section">
				<?php the_post_thumbnail('', array ('alt' => false));  ?>
			</header>
			<?php
			}
			else {
			//.pagesubbanner
			// if page doesn't have a featured image
			?>
			<?php } ?>
			<div class="entry-content" id="main" tabindex="0">
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
											$event_blurb = get_field('event_blurb');
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
				<div class="callout small primary">
					<h2><?php the_field('events_section_heading'); ?></h2>
					<?php the_title('<h2>', '</h2>', 'gcc-wp-2018'); ?>
					<div class="columns small-12 medium-4" itemscope itemtype="http://schema.org/Event">
						<?php if ( !empty($event_image)) : ?>
						<meta itemprop="thumbnail" content="<?php $event_image['url']; ?>" />
						<img src="<?php echo $event_image['url']; ?>" class="img-responsive" alt="<?php echo $event_image['alt']; ?>" style="margin-bottom: 20px;" />
						<?php endif; ?>
					</div>
					<div class="columns small-12 medium-8">
						<?php if ( !empty($event_blurb)) : ?>
						<p itemprop="about">
							<?php the_field('event_blurb'); ?>
						</p>
						<?php endif; ?>
						<p itemprop="location"><span class="fa fa-compass" aria-hidden="true" aria-label="location"></span>
						<strong><?php the_field('event_location'); ?></strong> <br/>
						<?php the_field('event_address'); ?>
					</p>
					<p  itemprop="doorTime"><span class="fa fa-clock-o" aria-hidden="true" aria-label="event time"></span>
					<?php the_field('event_time'); ?>
				</p>
				<a href="<?php echo get_the_permalink(); ?>"  class="button primary"><?php _e('Event details', 'gcc-wp-2018') ?></a>
			</div>
		</div>
		<?php		    }
		} else {
		// no posts found
		}
		/* Restore original Post Data */
		wp_reset_postdata();?>
	</div>
</div>
<footer class="entry-footer">
	<?php gcc_wp_2018_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	<?php get_sidebar(); ?>
	</div><!--.pagecontent-->
	<?php endwhile; // End of the loop. ?>
</article>
<?php
get_footer();