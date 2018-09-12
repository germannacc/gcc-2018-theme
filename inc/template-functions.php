<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package gccwp-2018
 */
/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function gcc_wp_2018_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	return $classes;
}
add_filter( 'body_class', 'gcc_wp_2018_body_classes' );
/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function gcc_wp_2018_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'gcc_wp_2018_pingback_header' );

//numbered page nation
// Pagination
if ( ! function_exists( 'foundationpress_pagination' ) ) :
function foundationpress_pagination() {
	global $wp_query;
	$big = 999999999; // This needs to be an unlikely integer
	// For more options and info view the docs for paginate_links()
	// http://codex.wordpress.org/Function_Reference/paginate_links
	$paginate_links = paginate_links( array(
		'base' => str_replace( $big, '%#%', html_entity_decode( get_pagenum_link( $big ) ) ),
		'current' => max( 1, get_query_var( 'paged' ) ),
		'total' => $wp_query->max_num_pages,
		'mid_size' => 5,
		'prev_next' => true,
	'prev_text' => __( '&laquo;', 'foundationpress' ),
	'next_text' => __( '&raquo;', 'foundationpress' ),
		'type' => 'list',
	) );
	$paginate_links = str_replace( "<ul class='page-numbers'>", "<ul class='pagination'>", $paginate_links );
		$paginate_links = str_replace( '<li><span class="page-numbers dots">', "<li><a href='#'>", $paginate_links );
			$paginate_links = str_replace( "<li><span class='page-numbers current'>", "<li class='current'><a href='#'>", $paginate_links );
			$paginate_links = str_replace( '</span>', '</a>', $paginate_links );
			$paginate_links = str_replace( "<li><a href='#'>&hellip;</a></li>", "<li><span class='dots'>&hellip;</span></li>", $paginate_links );
			$paginate_links = preg_replace( '/\s*page-numbers/', '', $paginate_links );
			// Display the pagination if more than one page is found
			if ( $paginate_links ) {
				echo '<div class="pagination-centered">';
					echo $paginate_links;
			echo '</div><!--// end .pagination -->';
			}
			}
			endif;
			/**
			* A fallback when no navigation is selected by default.
			*/
			if ( ! function_exists( 'foundationpress_menu_fallback' ) ) :
			function foundationpress_menu_fallback() {
			echo '<div class="alert-box secondary">';
				// Translators 1: Link to Menus, 2: Link to Customize
				printf( __( 'Please assign a menu to the primary menu location under %1$s or %2$s the design.', 'foundationpress' ),
				sprintf(  __( '<a href="%s">Menus</a>', 'foundationpress' ),
				get_admin_url( get_current_blog_id(), 'nav-menus.php' )
				),
				sprintf(  __( '<a href="%s">Customize</a>', 'foundationpress' ),
				get_admin_url( get_current_blog_id(), 'customize.php' )
				)
				);
			echo '</div>';
			}
			endif;
