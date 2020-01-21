<?php
//Names the page template for each section
/*
Template Name: Workforce Home
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row column expanded no-gutter">
	    <?php putRevSlider( 'workforce-nov-4' ); ?>
	</div>

     <?php
		while ( have_posts() ) : the_post(); ?>

	<?php get_template_part( 'template-parts/content', 'workforce-solutions' ); ?>

	<?php get_template_part( 'template-parts/content', 'workforce-newsletter' ); ?>

	<div class="row gutter-small expanded content-area">

			<div class="small-12 medium-12 large-8 entry-content" id="main" tabindex="0" data-equalizer data-equalize-by-row="true" data-equalize-on="medium">

	     <h2><?php the_field('workforce_highlights_heading'); ?></h2>

		   <?php
				  the_content();
					?>

					<?php get_template_part( 'template-parts/content', 'workforce-highlights' ); ?>

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
