<?php function gcc_wp_2018_scripts() {
	wp_enqueue_style( 'gcc-wp-2018-theme', get_template_directory_uri() . '/dist/css/theme.min.css', array(), '201831', 'all' );

 	if (!is_admin()) add_action("wp_enqueue_scripts", "my_jquery_enqueue", 11);
 function my_jquery_enqueue() {
    wp_deregister_script('jquery');
    wp_enqueue_script( 'gcc-wp-2018-jquery', get_template_directory_uri() . '/dist/scripts/jquery.min.js', array(), '201831', false );

 }

  wp_enqueue_script( 'gcc-wp-2018-foundation', get_template_directory_uri() . '/dist/scripts/foundation.min.js', array(), '201831', true );

  if ( is_front_page() || is_page('workforce') ){
  		wp_enqueue_script( 'gcc-wp-2018-animations', get_template_directory_uri() . '/dist/scripts/aos.js', array(), '201831', true);
  }

wp_enqueue_script( 'gcc-wp-2018-theme', get_template_directory_uri() . '/dist/scripts/theme.min.js', array(), '201831', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'gcc_wp_2018_scripts', 10, 2);

//remove type tag from css and javascript
add_filter('style_loader_tag', 'myplugin_remove_type_attr', 10, 2);
add_filter('script_loader_tag', 'myplugin_remove_type_attr', 10, 2);

function myplugin_remove_type_attr($tag, $handle) {
    return preg_replace( "/type=['\"]text\/(javascript|css)['\"]/", '', $tag );
}

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

?>