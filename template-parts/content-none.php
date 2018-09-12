<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gccwp-2018
 */

?>
<div class="row gutter-small expanded content-area">

<div class="columns small-12 medium-9">

	<div class="entry-content">

<h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'gcc-wp-2018' ); ?></h1>

		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<p><?php
				printf(
					wp_kses(
						/* translators: 1: link to WP admin new post page. */
						__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'gcc-wp-2018' ),
						array(
							'a' => array(
								'href' => array(),
							),
						)
					),
					esc_url( admin_url( 'post-new.php' ) )
				);
			?></p>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'gcc-wp-2018' ); ?></p>
			<?php
				get_search_form();

		else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'gcc-wp-2018' ); ?></p>
			<?php


		endif; ?>

	</div>
	</div>

	<?php //Template Sidebar
 	 get_template_part( '/sidebars/archive-sidebar' ); ?>

</div>
