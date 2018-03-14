<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gccwp-2018
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="skip"><a href="<?php echo esc_html('#main');?>"><?php _e('Skip to Main Content') ?></a></div>

    <div class="off-canvas-wrapper">

			<?php  //movile menu
			get_template_part( 'template-parts/content', 'mobile-nav' );
			?>


    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

<?php get_sidebar(); ?>


<div class="off-canvas-content" data-off-canvas-content>

<?php  //quicklinks
get_template_part( 'template-parts/content', 'quicklinks' );
?>

<?php

//  get_template_part( 'template-parts/content', 'weather-alert' );
?>

<!--Main Content-->
<main id="main">
