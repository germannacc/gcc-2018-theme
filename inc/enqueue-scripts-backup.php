<?php
function gcc_wp_2018_scripts() {
wp_enqueue_style( 'gcc-wp-2018-theme-styles', get_template_directory_uri() . '/dist/css/theme.min.css', array(), '20190813', 'all' );

wp_enqueue_style( 'gcc-wp-2018-slider', get_template_directory_uri() . '/dist/css/owl.carousel.min.css', array(), '20190813', 'all' );

//wp_enqueue_style( 'gcc-wp-2018-slider-theme', get_template_directory_uri() . '/dist/css/owl.carousel.default.min.css', array(), '201831', 'all' );

// unregister the jQuery at first

wp_deregister_script('jquery');

// register to footer (the last function argument should be true)
wp_register_script('gcc-wp-2018-jquery', get_theme_file_uri('/dist/scripts/jquery.min.js' ));
wp_enqueue_script( 'gcc-wp-2018-jquery', '', array(), '20190813', true );

add_action('wp_enqueue_scripts', 'gcc_wp_2018_move_jquery_to_footer');

wp_enqueue_script( 'gcc-wp-2018-foundation', get_template_directory_uri() . '/dist/scripts/foundation.min.js', array(), '20190813', true );

if (is_page('home')) wp_enqueue_script('gcc-wp-2018-owl', get_template_directory_uri() . '/dist/scripts/owl.carousel.min.js', array(), '20190813', true);

wp_enqueue_script( 'gcc-wp-2018-scripts', get_template_directory_uri() . '/dist/scripts/main.min.js', array(), '20190813', true );

if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
}

wp_enqueue_script( 'gcc-wp-2018-lazy-load', get_template_directory_uri() . '/dist/scripts/jquery.lazy.min.js', array(), '', true );
}

add_action( 'wp_enqueue_scripts', 'gcc_wp_2018_scripts', 10, 2);
//remove type tag from css and javascript


//Add async to js
add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);
function add_defer_attribute($tag, $handle) {
// add script handles to the array below
 $scripts_to_defer = array('gcc-wp-2018-themepunch-tools', 'gcc-wp-2018-themepunch-revolution');
 foreach($scripts_to_defer as $defer_script) {
    if ($defer_script === $handle) {
       return str_replace(' src', ' defer src', $tag);
    }
 }
 return $tag;
}