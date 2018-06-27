<?php
//Names the page template for each section
/*
Template Name: Catalog and Student Handbook
*/
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
	while ( have_posts() ) : the_post(); ?>

		<?php //Page Heading
		get_template_part( 'template-parts/content', 'page-heading' );
		?>

		<?php // Gets the alert custom post type id for each sub page needing special announcement
		$post_id = 5452;
		$queried_post = get_post($post_id);
		$content = $queried_post->post_content;
		$content = apply_filters('the_content', $content);
		if ($content) { ?>
			<div class="row expanded page-alert">

				<div class='callout alert' data-closable>
					<?php echo "$content"; ?>
					<a href='#' class='close' aria-hidden="true" role="button"><span class='icon-remove-circle'></span></a>
					<button class="close-button" aria-label="<?php esc_html_e('Dismiss alert', 'gcc-wp-2018'); ?>" type="button" data-close>
						 <span aria-hidden="true">&times;</span>
				 </button>
			 </div>

	 </div>
			<?php
			}
			else {
			}
			?>

		<!--Page Content-->
		<div class="row gutter-small expanded content-area">

			<?php //Page with Sidebar Template
			get_template_part( 'template-parts/content', 'sidebarpage' ); ?>

			<?php //Template Sidebar
			get_template_part( '/sidebars/catalog-sidebar' ); ?>

		</div><!--.pagecontent-->

<?php endwhile; // End of the loop. ?>

</article>

<?php
get_footer();
