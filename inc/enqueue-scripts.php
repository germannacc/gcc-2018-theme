<?php function gcc_wp_2018_scripts() {
	wp_enqueue_style( 'gcc-wp-2018-style', get_stylesheet_uri() );

  wp_enqueue_style( 'gcc-wp-2018-theme', get_template_directory_uri() . '/dist/css/theme.min.css', array(), '201831', 'all' );

  wp_enqueue_script( 'gcc-wp-2018-jquery', '//code.jquery.com/jquery-2.0.0.min.js', array(), '201831', true );

	wp_enqueue_script( 'gcc-wp-2018-foundation', get_template_directory_uri() . '/dist/scripts/foundation.min.js', array(), '201831', true );

	wp_enqueue_script( 'gcc-wp-2018-classie', get_template_directory_uri() . '/dist/scripts/classie.js', array(), '201831', true );

	wp_enqueue_script( 'gcc-wp-2018-uisearch.js', get_template_directory_uri() . '/dist/scripts/uisearch.js', array(), '201831', true );

	wp_enqueue_script( 'gcc-wp-2018-main', get_template_directory_uri() . '/dist/scripts/main.min.js', array(), '201831', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gcc_wp_2018_scripts' );
?>
