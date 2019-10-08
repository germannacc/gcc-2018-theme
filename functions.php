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
 require get_template_directory() . '/inc/enqueue-scripts.php';
/**
* Foundation Menus.
*/
 require get_template_directory() . '/inc/main-navigation.php';
/**
* Theme supports.
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
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/branding-sidebar.php';
/**
 * Custom Breadcrumbs
 */
require get_template_directory() . '/inc/breadcrumbs.php';
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
 * Social Icons.
 */
require get_template_directory() . '/inc/social-icons.php';
/**
 * Weather alerts.
 */
// require get_template_directory() . '/inc/weather-alert.php';
/**
 * Register widgets.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
require get_template_directory() . '/inc/widgets.php';
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';
/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';
/**
 * Custom template tags for WPForms.
 */
require get_template_directory() . '/inc/form-templates/casting-call-form-template.php';
/**
/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Cleanup.
 */
require get_template_directory() . '/inc/cleanup.php';
