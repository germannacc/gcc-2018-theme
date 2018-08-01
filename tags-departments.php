<?php
/**
 * The template for displaying department taxonomy for the directory
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gccwp-2018
 */

get_header(); ?>

	<?php
		if ( have_posts() ) : ?>


 <!--Page Content-->
 <div class="row gutter-small expanded content-area">

	 <div class="small-12 entry-content">

		 <div class="small-12 medium-3 columns">

								<?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();

										/*
										 * Include the Post-Type-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
										 */

								?>

								<div class="small-12 medium-9 columns">


					 <?php //Page Heading
					 get_template_part( 'template-parts/content', 'directory-blocks' );
					 ?>


					 </div>


			<?php endwhile;

		?>

		</div>
	 </div>
 </div>


		<?php	else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>



	 <footer class="entry-footer">
		 <?php gcc_wp_2018_entry_footer(); ?>
	 </footer><!-- .entry-footer -->


<?php
get_footer();
