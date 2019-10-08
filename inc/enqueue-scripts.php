<?php
function gcc_wp_2018_scripts() {
wp_enqueue_style( 'gcc-wp-2018-theme-styles', get_template_directory_uri() . '/dist/css/themeV6.min.css', array(), '20190930', 'all' );

if (is_page('home')) wp_enqueue_style( 'gcc-wp-2018-slider', get_template_directory_uri() . '/dist/css/owl.carousel.min.css', array(), '20190917', 'all' );

// Deregister the jquery version bundled with WordPress.
		wp_deregister_script( 'jquery' );

		// CDN hosted jQuery placed in the header, as some plugins require that jQuery is loaded in the header.
		wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '3.2.1', false );

// Deregister the jquery-migrate version bundled with WordPress.
		wp_deregister_script( 'jquery-migrate' );

// CDN hosted jQuery migrate for compatibility with jQuery 3.x
		wp_register_script( 'jquery-migrate', '//code.jquery.com/jquery-migrate-3.0.1.min.js', array('jquery'), '3.0.1', false );


wp_enqueue_script( 'gcc-wp-2018-foundation', get_template_directory_uri() . '/dist/scripts/foundation.min.js', array(), '20190813', true );

if (is_page('home')) wp_enqueue_script('gcc-wp-2018-owl', get_template_directory_uri() . '/dist/scripts/owl.carousel.min.js', array(), '20190813', true);

wp_enqueue_script( 'gcc-wp-2018-scripts', get_template_directory_uri() . '/dist/scripts/main.min.js', array(), '20190813', true );

if (is_page('home')) wp_enqueue_script( 'gcc-wp-2018-slider', get_template_directory_uri() . '/dist/scripts/slider.js', array(), '20190813', true );

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
}

if ( is_page('113') || is_page('12255') )  {

wp_enqueue_script( 'gcc-wp-2018-themepunch-tools', get_template_directory_uri() . '/dist/scripts/jquery.themepunch.tools.min.js', array(), '', true );
wp_enqueue_script( 'gcc-wp-2018-themepunch-revolution', get_template_directory_uri() . '/dist/scripts/jquery.themepunch.revolution.min.js', array(), '', true );
}
wp_enqueue_script( 'gcc-wp-2018-lazy-load', get_template_directory_uri() . '/dist/scripts/jquery.lazy.min.js', array(), '', true );
}
add_action( 'wp_enqueue_scripts', 'gcc_wp_2018_scripts', 10, 2);

//remove type tag from css and javascript
//add_filter('style_loader_tag', 'myplugin_remove_type_attr', 10, 2);
//add_filter('script_loader_tag', 'myplugin_remove_type_attr', 10, 2);
// function myplugin_remove_type_attr($tag, $handle) {
//   return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
// }

?>
