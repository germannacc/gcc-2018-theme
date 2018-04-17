<?php
/**
 * gccwp-2018 functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gccwp-2018
 */

 /**
  * Enqueue scripts and styles.
  */
require get_template_directory() . '/inc/theme-supports.php';
/**
 * Custom Post Types.
 */
require get_template_directory() . '/inc/custom-post-types.php';
/**
 * Theme Settings
 */
require get_template_directory() . '/inc/theme-settings.php';

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
require get_template_directory() . '/inc/content-width.php';
/**
 * Register Menus.
 */
require get_template_directory() . '/inc/menus.php';
/**
 * Foundation Menus.
 */
require get_template_directory() . '/inc/main-navigation.php';
/**
 * Social Icons.
 */
require get_template_directory() . '/inc/social-icons.php';
/**
 * Register widgets.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
require get_template_directory() . '/inc/widgets.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue-scripts.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
