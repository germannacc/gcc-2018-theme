<?php
//Names the page template for each section
/*
Template Name: Directory A-E
*/
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
	while ( have_posts() ) : the_post(); ?>

		<?php //Page Heading
		get_template_part( 'template-parts/content', 'page-directory-heading' );
 		?>

		<div class="row gutter-small expanded content-area">

			<div class="small-12 entry-content">

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
				'terms' => 'a-e'
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

		$employee_department = get_field('employee_department');
		$employee_job_title = get_field('employee_job_title');
		$employee_location= get_field('employee_location');
		$employee_phone = get_field('employee_phone');
		$employee_email = get_field('employee_email');
		$size = 'medium'; // (thumbnail, medium, large, full or custom size)
?>



<div class="small-12 medium-4 columns directory">

<div class="callout employee-profile">

<?php
$employee_image = get_field('employee_image');

if( !empty($employee_image) ) :

	// vars
	$url = $employee_image['url'];
	$alt = $employee_image['alt'];

	// thumbnail
	$size = 'medium';
	$thumb = $employee_image['sizes'][ $size ];
	$width = $employee_image['sizes'][ $size . '-width' ];
	$height = $employee_image['sizes'][ $size . '-height' ];
	?>
						<img src="<?php echo $thumb; ?>" alt="<?php echo $alt;?>" width="<?php echo $width;?>" height="<?php echo $height;?>" class="thumbnail">

<?php endif; ?>

	<?php the_title('<h3>','</h3>');  ?>
    <p class="position-info"><?php the_field('employee_job_title'); ?><br/>
		<?php the_field('employee_department'); ?><br/>
		</p>

		<p class="contact-info">
			<?php the_field('employee_location'); ?><br/>

		<a href="mailto:<?php the_field('employee_email'); ?>"><?php the_field('employee_email'); ?></a>

				<br/>
				<?php esc_html_e('(540) ', 'gcc-wp-admin');  the_field('employee_phone'); ?>
		</p>

	</div>
</div>

<?php
	}
}

else {
	// no posts found
?>

<p><?php esc_html_e('Sorry, the directory is currently undergoing maintenance.', 'gcc-wp-2018') ?></p>

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
