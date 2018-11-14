<?php
//Names the page template for each section
/*
Template Name: Search
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

			<div class="small-12 entry-content" id="main" tabindex="0">

			<?php
			    the_content();
			?>

			<script async>
		(function() {
			var cx = '004235661866003871264:hsv9lloki5k';
			var gcse = document.createElement('script');
			gcse.type = 'text/javascript';
			gcse.async = true;
			gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
			var s = document.getElementsByTagName('script')[0];
			s.parentNode.insertBefore(gcse, s);
		})();
	</script>

			</div>


			<footer class="entry-footer">
			  <?php gcc_wp_2018_entry_footer(); ?>
			</footer><!-- .entry-footer -->




		</div><!--.pagecontent-->

<?php endwhile; // End of the loop. ?>

</article>

<?php
get_footer();
