<?php function gcc_wp_2018_scripts() {
	wp_enqueue_style( 'gcc-wp-2018-style', get_stylesheet_uri() );

  wp_enqueue_style( 'gcc-wp-2018-theme', get_template_directory_uri() . '/dist/css/theme.min.css', array(), '201831', 'all' );

	if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
function my_jquery_enqueue() {
   wp_deregister_script('jquery');
  wp_enqueue_script( 'gcc-wp-2018-jquery', get_template_directory_uri() . '/dist/scripts/jquery.min.js', array(), '201831', false );
   wp_enqueue_script('jquery');
}

wp_enqueue_script( 'gcc-wp-2018-foundation', get_template_directory_uri() . '/dist/scripts/foundation.min.js', array(), '201831', true );

	//wp_enqueue_script( 'gcc-wp-2018-classie', get_template_directory_uri() . '/dist/scripts/classie.min.js', array(), '201831', true );

	// wp_enqueue_script( 'gcc-wp-2018-searchbox.js', get_template_directory_uri() . '/dist/scripts/searchbox.min.js', array(), '201831', true );

wp_enqueue_script( 'gcc-wp-2018-theme', get_template_directory_uri() . '/dist/scripts/theme.min.js', array(), '201831', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gcc_wp_2018_scripts' );
?>
