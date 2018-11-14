<?php
//Names the page template for each section
/*
Template Name: Directory P-S
*/
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
	while ( have_posts() ) : the_post(); ?>

		<?php //Page Heading
		get_template_part( 'template-parts/content', 'page-directory-heading' );
 		?>

		<div class="row gutter-small expanded content-area">

			<div class="small-12 entry-content" id="main" tabindex="0">

			<?php
			    the_content();
			?>

			<?php


			// WP_Query arguments
$args = array(
	'post_type'              => array( 'directory' ),
	'nopaging'               => false,
	'posts_per_page'         => '10',
	'order'                  => 'DESC',
	'orderby'   						 => 'title',
	'tax_query' => array(
			array(
				'taxonomy' => 'directory_order',
				'field' => 'slug',
				'terms' => 'p-s'
			)
		)
);

// The Query
$loop = new WP_Query( $args );

// The Loop
if ( $loop ->have_posts() ) {
	while ( $loop ->have_posts() ) {
		$loop ->the_post();
		// do something

?>


<?php //Page Heading
get_template_part( 'template-parts/content', 'directory-blocks' );
?>


<?php
	}
}

else {
	// no posts found
?>

<div style="padding-bottom: 50rem;">
	<p><?php esc_html_e('Sorry, the directory is currently undergoing maintenance.', 'gcc-wp-2018') ?></p>
</div>
<?php
}

// Restore original Post Data
wp_reset_postdata();
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
