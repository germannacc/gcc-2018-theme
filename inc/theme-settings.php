<?php
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'GCC 2018 Settings',
		'menu_title'	=> 'GCC 2018 Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'position' => 2
	));
    acf_add_options_page(array(
		'page_title' 	=> 'Emergency Alert',
		'menu_title'	=> 'Emergency Alert',
		'menu_slug' 	=> 'emergency-alert',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'position' => 3
	));
}
function gcc_pagination() {
    global $wp_query;
    echo paginate_links();
}
function gcc_featured_image_on_child () {
	global $post;
  if(is_page()&&($post->post_parent==$pid||is_page($pid)))  {

        $parents = get_post_ancestors( get_the_ID() );
        $id = ($parents) ? $parents[count($parents)-1]: $post->ID;
        echo get_the_post_thumbnail($id, 'full');
    }
}
//display featured images on child pages
add_action( 'gcc_wp_2018_before_post', 'gcc_featured_image_on_child' );
?>
