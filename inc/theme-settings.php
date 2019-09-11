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
    acf_add_options_page(array(
		'page_title' 	=> 'Home Slides',
		'menu_title'	=> 'Home Slides',
		'menu_slug' 	=> 'home-slides',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'position' => 4
	));
    acf_add_options_page(array(
		'page_title' 	=> 'Announcement',
		'menu_title'	=> 'Announcement',
		'menu_slug' 	=> 'special-announcement',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'position' => 4
	));
    acf_add_options_page(array(
		'page_title' 	=> 'Workforce Slides',
		'menu_title'	=> 'Workforce Slides',
		'menu_slug' 	=> 'workforce-slides',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
		'position' => 4
	));
}
function gcc_pagination() {
    global $wp_query;
    echo paginate_links();
}

//display featured images on child pages
add_action( 'gcc_wp_2018_before_post', 'gcc_featured_image_on_child' );
/**
 * Change WPForms capability requirement.
 *
 * @param string $cap
 * @return string
 */
function wpforms_custom_capability( $cap ) {

	// unfiltered_html by default means Editors and up.
	// See more about WordPress roles and capabilities
	// https://codex.wordpress.org/Roles_and_Capabilities
	return 'moderate_comments';
}
add_filter( 'wpforms_manage_cap', 'wpforms_custom_capability' );