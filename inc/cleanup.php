<?php
/**
* Start cleanup functions
* ----------------------------------------------------------------------------
*/
if ( ! function_exists( 'gcc_wp_2018_start_cleanup' ) ) :
function gcc_wp_2018_start_cleanup() {
	// launching operation cleanup
	add_action( 'init', 'gcc_wp_2018_cleanup_head' );
	// remove WP version from RSS
	add_filter( 'the_generator', 'gcc_wp_2018_remove_rss_version' );
	// remove pesky injected css for recent comments widget
	add_filter( 'wp_head', 'gcc_wp_2018_remove_wp_widget_recent_comments_style', 1 );
	// clean up comment styles in the head
	add_action( 'wp_head', 'gcc_wp_2018_remove_recent_comments_style', 1 );

}
add_action( 'after_setup_theme','gcc_wp_2018_start_cleanup' );
endif;
/**
* Clean up head
* ----------------------------------------------------------------------------
*/
if ( ! function_exists( 'gcc_wp_2018_cleanup_head' ) ) :
function gcc_wp_2018_cleanup_head() {
	// EditURI link
	remove_action( 'wp_head', 'rsd_link' );
	// Category feed links
	remove_action( 'wp_head', 'feed_links_extra', 3 );
	// Post and comment feed links
	remove_action( 'wp_head', 'feed_links', 2 );
	// Windows Live Writer
	remove_action( 'wp_head', 'wlwmanifest_link' );
	// Index link
	remove_action( 'wp_head', 'index_rel_link' );
	// Previous link
	remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
	// Start link
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
	// Canonical
	remove_action( 'wp_head', 'rel_canonical', 10, 0 );
	// Shortlink
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
	// Links for adjacent posts
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
	// WP version
	remove_action( 'wp_head', 'wp_generator' );

	remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
	// Remove WP version from css
	add_filter( 'style_loader_src', 'gcc_wp_2018_remove_wp_ver_css_js', 9999 );
	// Remove WP version from scripts
	add_filter( 'script_loader_src', 'gcc_wp_2018_remove_wp_ver_css_js', 9999 );
	// Prevent unneccecary info from being displayed
	add_filter( 'login_errors',create_function( '$a', 'return null;' ) );


}
endif;
//remove plugin scripts
if ( ! function_exists( 'gcc_wp_2018_deregister_style' ) ) :
function gcc_wp_2018_deregister_style() {

		wp_deregister_style( 'wgs' );
		wp_deregister_style( 'wgs2' );
		wp_deregister_style( 'wgs3' );
		wp_deregister_style( 'wgs2-css' );
		wp_deregister_style( 'cdaily-style' );
		wp_deregister_style( 'cf7cf-style' );
		wp_deregister_style( 'dashicons' );
		wp_deregister_style( 'fb_data_style' );
		wp_deregister_style( 'contact-form-7' );
		wp_deregister_style( 'jquery-ui-css' );
		wp_deregister_style( 'wpah-front-styles'  );
		wp_deregister_style( 'UserAccessManagerLoginForm'  );
		wp_deregister_style( 'yoast-seo-adminbar' );
		wp_deregister_style( 'rs-plugin-settings' );

}
add_action( 'wp_enqueue_scripts','gcc_wp_2018_deregister_style' );
endif;

if ( ! function_exists( 'gcc_wp_2018_deregister_script' ) ) :
	 function gcc_wp_2018_deregister_script() {

				wp_deregister_script('google_cse_v2');

}
add_action( 'wp_enqueue_scripts','gcc_wp_2018_deregister_script' );
endif;

// remove WP version from RSS
if ( ! function_exists( 'gcc_wp_2018_remove_rss_version' ) ) :
function gcc_wp_2018_remove_rss_version() { return ''; }
endif;
if ( ! function_exists( 'gcc_wp_2018_remove_wp_ver_css_js' ) ) :
// remove WP version from scripts
function gcc_wp_2018_remove_wp_ver_css_js( $src ) {
	if ( strpos( $src, 'ver=' ) ) {
		$src = remove_query_arg( 'ver', $src ); }
	return $src;
}
endif;
// remove injected CSS for recent comments widget
if ( ! function_exists( 'gcc_wp_2018_remove_wp_widget_recent_comments_style' ) ) :
function gcc_wp_2018_remove_wp_widget_recent_comments_style() {
	if ( has_filter( 'wp_head', 'wp_widget_recent_comments_style' ) ) {
	remove_filter( 'wp_head', 'wp_widget_recent_comments_style' );
	}
}
endif;
// remove injected CSS from recent comments widget
if ( ! function_exists( 'gcc_wp_2018_remove_recent_comments_style' ) ) :
function gcc_wp_2018_remove_recent_comments_style() {
	global $wp_widget_factory;
	if ( isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments']) ) {
	remove_action( 'wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style') );
	}
}
endif;


?>
