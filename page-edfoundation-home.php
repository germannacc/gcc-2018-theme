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
