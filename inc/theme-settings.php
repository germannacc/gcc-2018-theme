<?php
if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));


}
?>
<?php
function gcc_pagination() {
    global $wp_query;
    echo paginate_links();
}

//display featured images on child pages

add_action( 'gcc_wp_2018_before_post', 'gcc_featured_image_on_child' );
function gcc_featured_image_on_child () {
    if( is_page() ) {
        $parents = get_post_ancestors( get_the_ID() );
        $id = ($parents) ? $parents[count($parents)-1]: $post->ID;
        echo get_the_post_thumbnail($id, 'full');
    }
}

 ?>
