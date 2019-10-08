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
//add_filter( 'the_generator', 'gcc_wp_2018_remove_rss_version' );
// remove pesky injected css for recent comments widget
//add_filter( 'wp_head', 'gcc_wp_2018_remove_wp_widget_recent_comments_style', 1 );
// clean up comment styles in the head
//add_action( 'wp_head', 'gcc_wp_2018_remove_recent_comments_style', 1 );
}
add_action( 'after_setup_theme','gcc_wp_2018_start_cleanup' );
endif;
/**
* Clean up head
* ----------------------------------------------------------------------------
*/
if ( ! function_exists( 'gcc_wp_2018_cleanup_head' ) ) :
function gcc_wp_2018_cleanup_head() {
// remove WP 4.9+ dns-prefetch nonsense
remove_action( 'wp_head', 'wp_resource_hints', 2 );
// EditURI link
//remove_action( 'wp_head', 'rsd_link' , 10, 0 );
// Category feed links
//remove_action( 'wp_head', 'feed_links_extra', 3 );
// Windows Live Writer
//remove_action( 'wp_head', 'wlwmanifest_link' , 10, 0 );
// Index link
//remove_action( 'wp_head', 'index_rel_link' , 10, 0 );
// Previous link
//remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 );
// Start link
//remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
// Canonical
//remove_action( 'wp_head', 'rel_canonical', 10, 0 );
// Shortlink
//remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 );
// Links for adjacent posts
//remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );
// WP version
//remove_action( 'wp_head', 'wp_generator' , 10, 0 );
// remove WP 4.2+ emoji nonsense
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );
// Remove the REST API endpoint.
//remove_action('rest_api_init', 'wp_oembed_register_route');
// Turn off oEmbed auto discovery.
// Don't filter oEmbed results.
//remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);
// Remove oEmbed discovery links.
//remove_action('wp_head', 'wp_oembed_add_discovery_links');
// Remove oEmbed-specific JavaScript from the front-end and back-end.
//emove_action('wp_head', 'wp_oembed_add_host_js');
// Remove WP version from css
//add_filter( 'style_loader_src', 'gcc_wp_2018_remove_wp_ver_css_js', 9999 );
// Remove WP version from scripts
//add_filter( 'script_loader_src', 'gcc_wp_2018_remove_wp_ver_css_js', 9999 );
// Prevent unneccecary info from being displayed
add_filter( 'login_errors',create_function( '$a', 'return null;' ) );
// remove OneAll Social script from regular page
remove_action ('wp_head', 'oa_social_login_add_javascripts');
}
endif;
//remove plugin scripts
if ( ! function_exists( 'gcc_wp_2018_deregister_style' ) ) :
function gcc_wp_2018_deregister_style() {
	wp_deregister_style( 'fb_data_style' );
	wp_deregister_style( 'jquery-ui-css' );
	wp_deregister_style( 'UserAccessManagerLoginForm'  );
	wp_deregister_style( 'jquery-lazyloadxt-fadein' );
	wp_deregister_style( 'wp-block-library' );
	wp_deregister_style( 'wp-mediaelement' );
	wp_deregister_style( 'mediaelement' );
	wp_deregister_style( 'imgareaselect' );
	wp_deregister_style( 'wpcdt-public-css' );
	wp_deregister_style( 'ctct_form_styles' );
}
add_action( 'wp_enqueue_scripts','gcc_wp_2018_deregister_style' );
endif;
// // remove WP version from RSS
// if ( ! function_exists( 'gcc_wp_2018_remove_rss_version' ) ) :
// function gcc_wp_2018_remove_rss_version() { return ''; }
// endif;
// if ( ! function_exists( 'gcc_wp_2018_remove_wp_ver_css_js' ) ) :
// // remove WP version from scripts
// function gcc_wp_2018_remove_wp_ver_css_js( $src ) {
// if ( strpos( $src, 'ver=' ) ) {
// 	$src = remove_query_arg( 'ver', $src ); }
// return $src;
// }
// endif;
// remove injected CSS for recent comments widget
// if ( ! function_exists( 'gcc_wp_2018_remove_wp_widget_recent_comments_style' ) ) :
// function gcc_wp_2018_remove_wp_widget_recent_comments_style() {
// if ( has_filter( 'wp_head', 'wp_widget_recent_comments_style' ) ) {
// remove_filter( 'wp_head', 'wp_widget_recent_comments_style' );
// }
// }
// endif;
// remove injected CSS from recent comments widget
// if ( ! function_exists( 'gcc_wp_2018_remove_recent_comments_style' ) ) :
// function gcc_wp_2018_remove_recent_comments_style() {
// global $wp_widget_factory;
// if ( isset($wp_widget_factory->widgets['WP_Widget_Recent_Comments']) ) {
// remove_action( 'wp_head', array($wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style') );
// }
// }
// endif;
//do not remove the below functions, required for foundation shortcodes
if ( ! function_exists( 'gcc_wp_2018_clean_shortcodes' ) ) :
function gcc_wp_2018_clean_shortcodes( $content ) {
$array = array (
'<p>[' => '[',
']</p>' => ']',
']<br />' => ']'
);
$content = strtr( $content, $array );
return $content;
}
add_filter('the_content', 'gcc_wp_2018_clean_shortcodes');
endif;
/**Stop stripping html**/
// stop wp removing div tags
// paste everything below this line in your WP functions.php file below everything else. 
// always backup your data

function allow_all_tinymce_elements_attributes( $init ) {

    // Allow all elements and all attributes
    $ext = '*[*]';

    // Add to extended_valid_elements if it already exists
    if ( isset( $init['extended_valid_elements'] ) ) {
        $init['extended_valid_elements'] .= ',' . $ext;
    } else {
        $init['extended_valid_elements'] = $ext;
    }

    // return value
    return $init;
}
add_filter('tiny_mce_before_init', 'allow_all_tinymce_elements_attributes');

/**
* Remove [All in One SEO Pack] HTML Comments
* @link //gist.github.com/llgruff/a7ab776167aa0ed307ec445df54e5fdb
*/
if (defined('AIOSEOP_VERSION')) {
add_action('get_header', function() {
	ob_start(
		function($o) {
return preg_replace('/\n?<.*?One SEO Pack.*?>/mi','',$o);
}
);
});
add_action('wp_head', function() {
ob_end_flush();
}, 999);
}