<?php
//Names the page template for each section
/*
Template Name: Directory Directory
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	while ( have_posts() ) : the_post(); ?>
	<?php //Page Heading
	get_template_part( 'template-parts/content', 'page-directory-heading' );
	?>
	<div class="row gutter-small expanded content-area"  data-equalizer data-equalize-on="medium" id="test-eq">
		<div class="small-12 entry-content" id="main" tabindex="0">
			<?php
			the_content();
			?>
		</div>
		<footer class="entry-footer">
			<?php gcc_wp_2018_entry_footer(); ?>
			</footer><!-- .entry-footer -->
		</div>
		<?php endwhile; // End of the loop. ?>
	</article>
	<?php
	get_footer();