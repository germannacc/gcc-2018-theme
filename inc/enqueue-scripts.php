<?php function gcc_wp_2018_scripts() {
	wp_enqueue_style( 'gcc-wp-2018-theme', get_template_directory_uri() . '/dist/css/theme.min.css', array(), '201831', 'all' );

 wp_enqueue_script( 'gcc-wp-2018-foundation', get_template_directory_uri() . '/dist/scripts/foundation.min.js', array(), '201831', true );

 	if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
 function my_jquery_enqueue() {
    wp_deregister_script('jquery');
   wp_enqueue_script( 'gcc-wp-2018-jquery', get_template_directory_uri() . '/dist/scripts/jquery.min.js', array(), '201831', false );

 }

  if ( is_front_page() ){
  		wp_enqueue_script( 'gcc-wp-2018-animations', get_template_directory_uri() . '/dist/scripts/aos.js', array(), '201831', true);
  }

	//wp_enqueue_script( 'gcc-wp-2018-classie', get_template_directory_uri() . '/dist/scripts/classie.min.js', array(), '201831', true );

	// wp_enqueue_script( 'gcc-wp-2018-searchbox.js', get_template_directory_uri() . '/dist/scripts/searchbox.min.js', array(), '201831', true );

wp_enqueue_script( 'gcc-wp-2018-theme', get_template_directory_uri() . '/dist/scripts/theme.min.js', array(), '201831', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gcc_wp_2018_scripts' );
//Add async to js

function add_defer_attribute($tag, $handle) {
   // add script handles to the array below
   $scripts_to_defer = array('gcc-wp-2018-foundation', 'gcc-wp-2018-animations' , 'gcc-wp-2018-theme');

   foreach($scripts_to_defer as $defer_script) {
      if ($defer_script === $handle) {
         return str_replace(' src', ' defer="defer" src', $tag);
      }
   }
   return $tag;
}
add_filter('script_loader_tag', 'add_defer_attribute', 10, 2);

/*function add_async_attribute($tag, $handle) {
   // add script handles to the array below
   $scripts_to_async = array('gcc-wp-2018-jquery');

   foreach($scripts_to_async as $async_script) {
      if ($async_script === $handle) {
         return str_replace(' src', ' async src', $tag);
      }
   }
   return $tag;
}
add_filter('script_loader_tag', 'add_async_attribute', 10, 2);*/
?>
