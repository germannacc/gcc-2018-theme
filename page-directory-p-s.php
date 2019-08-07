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
	<div class="row gutter-small expanded content-area"  data-equalizer data-equalize-on="medium" id="test-eq">
		<div class="small-12 entry-content" id="main" tabindex="0">
			<?php
			the_content();
			?>
			<?php
			$request = wp_remote_get( 'https://applications.germanna.edu/directory/directory.json');
			$body = wp_remote_retrieve_body( $request);
			$data = json_decode($body, false);
			if( ! empty( $data ) ) {
			foreach( $data->employee as $employees ) {
			if ( $employees->employee_info) {
			?>
			<?php echo '<div class="small-12 medium-12 large-6 columns sort-directory">';
					echo '<div class="callout small primary employee-profile" data-equalizer-watch>';
							echo '<h2>'. $employees->employee_info->firstName. ' '. $employees->employee_info->lastName. '</h2>';
							echo '<div class="profile-container">';
									echo '<div class="small-4 medium-4 large-4 columns">';
											echo '<img src="'. $employees->employee_info->picturePath.'" />';
									echo '</div>';
									echo '<div class="small-8 medium-8 large-8 columns">';
											echo '<p class="position-info"><strong>' . $employees->employee_info->title . '</strong><br/>' . $employees->employee_info->department . '<br/>' . $employees->employee_info->locationCampus . '<br/>';
													echo '<a href="mailto:'. $employees->employee_info->email.'">' . $employees->employee_info->email. '</a><br/>' . $employees->employee_info->phone . '</p>';
											echo '</div>';
									echo '</div>';
							echo '</div>';
					echo '</div>';
					}
					}
					}
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