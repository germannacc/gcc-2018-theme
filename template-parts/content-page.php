<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gccwp-2018
 */

?>

<div class="row gutter-small expanded content-area">

<div class="columns small-12 medium-9 entry-content">

	<?php
		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'gcc-wp-2018' ),
			'after'  => '</div>',
		) );
	?>


	<?php if ( get_edit_post_link() ) : ?>

	<footer class="entry-footer">

		<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'gcc-wp-2018' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
		?>
	</footer><!-- .entry-footer -->
	<?php endif; ?>


</div>

</div><!--.pagecontent-->
