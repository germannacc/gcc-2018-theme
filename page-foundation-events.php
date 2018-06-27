<?php
//Names the page template for each section
/*
Template Name: Educational Foundation Events
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

			<?php $loop = new WP_Query( array( 'post_type' => 'foundation_events', 'posts_per_page' => -1, 'orderby' => 'post_id', 'order' => 'ASC',  ) ); ?>
								<?php while( $loop->have_posts() ) : $loop->the_post(); ?>
								<?php
								$general_description = get_field('general_description');
								?>

						<div class="row latest-post">

							<?php the_title('<h2>', '</h2>');  ?>

						  <p>
							   <?php the_field('general_description'); ?>
							</p>

              <a href="<?php the_permalink(); ?>" class="button primary"><?php _e('View event details', 'gcc-wp-2018') ?></a>

						</div>

					<?php endwhile; ?>
					<?php wp_reset_query(); ?>

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
