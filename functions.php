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
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';
/**
 * Functions which enhance custom post type columns.
 */
require get_template_directory() . '/inc/custom-columns.php';
/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
/**
 * Cleanup.
 */
require get_template_directory() . '/inc/cleanup.php';
/**
 * WP Forms Templates.
 */
require get_template_directory() . '/inc/form-templates/a-p-college-and-community-service.php';
require get_template_directory() . '/inc/form-templates/a-p-professional-growth-and-development.php';
require get_template_directory() . '/inc/form-templates/a-p-professional-management-effectiveness-and-leadership.php';
require get_template_directory() . '/inc/form-templates/a-p-recognition-award.php';
require get_template_directory() . '/inc/form-templates/a-p-rick-brehm-innovations.php';
require get_template_directory() . '/inc/form-templates/a-p-strategic-special-project.php';
require get_template_directory() . '/inc/form-templates/academic-advising-preparation.php';
require get_template_directory() . '/inc/form-templates/accomodation-letter-signup-form.php';
require get_template_directory() . '/inc/form-templates/alumni-registration.php';
require get_template_directory() . '/inc/form-templates/classified-college-and-community-service.php';
require get_template_directory() . '/inc/form-templates/classified-dreamwork.php';
require get_template_directory() . '/inc/form-templates/classified-exceptional-support.php';
require get_template_directory() . '/inc/form-templates/classified-presidential-commendation.php';
require get_template_directory() . '/inc/form-templates/classified-quality-customer-service.php';
require get_template_directory() . '/inc/form-templates/classified-recognition-award.php';
require get_template_directory() . '/inc/form-templates/contact-germanna.php';
require get_template_directory() . '/inc/form-templates/delagate-rsvp.php';
require get_template_directory() . '/inc/form-templates/ds-appointment-request.php';
require get_template_directory() . '/inc/form-templates/ds-intake-form.php';
require get_template_directory() . '/inc/form-templates/education-community-partner-workshop.php';
require get_template_directory() . '/inc/form-templates/formal-student-complaint.php';
require get_template_directory() . '/inc/form-templates/individual-rsvp.php';
require get_template_directory() . '/inc/form-templates/marketing-job-request.php';
require get_template_directory() . '/inc/form-templates/new-lpn-rn-step-1.php';
require get_template_directory() . '/inc/form-templates/new-lpn-rn-step-2.php';
require get_template_directory() . '/inc/form-templates/new-lpn-step-1.php';
require get_template_directory() . '/inc/form-templates/new-lpn-step-2.php';
require get_template_directory() . '/inc/form-templates/new-rn-step-1.php';
require get_template_directory() . '/inc/form-templates/new-rn-step-2.php';
require get_template_directory() . '/inc/form-templates/pta-application.php';
require get_template_directory() . '/inc/form-templates/reapply-lpn-rn-step-1.php';
require get_template_directory() . '/inc/form-templates/reapply-lpn-rn-step-2.php';
require get_template_directory() . '/inc/form-templates/reapply-lpn-step-1.php';
require get_template_directory() . '/inc/form-templates/reapply-lpn-step-2.php';
require get_template_directory() . '/inc/form-templates/reapply-rn-step-1.php';
require get_template_directory() . '/inc/form-templates/reapply-rn-step-2.php';
require get_template_directory() . '/inc/form-templates/request-information.php';
require get_template_directory() . '/inc/form-templates/revive-training-registration.php';
require get_template_directory() . '/inc/form-templates/schedule-request-for-gcc-president.php';
require get_template_directory() . '/inc/form-templates/t-f-community-impact.php';
require get_template_directory() . '/inc/form-templates/t-f-innovations-in-teaching-and-learning.php';
require get_template_directory() . '/inc/form-templates/t-f-institutional-responsibility.php';
require get_template_directory() . '/inc/form-templates/t-f-leadership.php';
require get_template_directory() . '/inc/form-templates/t-f-learning-environment.php';
require get_template_directory() . '/inc/form-templates/t-f-multicultural-enrichment.php';
require get_template_directory() . '/inc/form-templates/t-f-outstanding-faculty.php';
require get_template_directory() . '/inc/form-templates/t-f-rising-star.php';
require get_template_directory() . '/inc/form-templates/t-f-scholarly-and-creative-engagement.php';
require get_template_directory() . '/inc/form-templates/t-f-teaching-effectiveness.php';
require get_template_directory() . '/inc/form-templates/tutoring-appointment-request.php';
require get_template_directory() . '/inc/form-templates/welcome-day-registration-form.php';
require get_template_directory() . '/inc/form-templates/workforce-student-questionnaire.php';
