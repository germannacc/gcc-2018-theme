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
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0" />

<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>

<?php // ace tracking code for
if ( is_page('108') || $post->post_parent == '108' ) {  ?>
<script type="text/javascript">
var _monsido = _monsido || [];
_monsido.push(['_setDomainToken', '4tsVVD4d1Iw5kplXbM3eow']);
_monsido.push(['_withStatistics', 'true']);
</script>
<script async src="//cdn.monsido.com/tool/javascripts/monsido.js"></script>
<?php } ?>

<script type="text/javascript">
     var _monsido = _monsido || [];
     _monsido.push(['_setDomainToken', '14l5XpM9a7fdx1hVoA-QRQ']);
     _monsido.push(['_withStatistics', 'true']);
</script>
<script async src="//cdn.monsido.com/tool/javascripts/monsido.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-11698249-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-11698249-1');
</script>

<?php //google analytics tracking for ace
if ( is_page('108') || $post->post_parent == '108' ) { //ACE google tracking ?>
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-100518862-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-100518862-1');
</script>
<?php } ?>

</head>

<body <?php body_class(); ?>>

<div id="skip">
  <a href="#main" class="show-on-focus"><?php esc_html_e('skip to content', 'gcc-wp-2018') ?></a>
</div>

<?php
get_template_part( 'template-parts/content', 'weather-alert' );
?>
<div class="off-canvas-wrapper no-js">
  <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
    <?php main_menu(); //main sidebar navigation ?>
    <div class="off-canvas-content" data-off-canvas-content>
       <?php  //quicklinks
        get_template_part( 'template-parts/content', 'quicklinks' );
       ?>
        <main>
