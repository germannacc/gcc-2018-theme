<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php wp_head(); ?></title>
    <link rel="stylesheet" href="dist/css/style.min.css">
  </head>
  <body  data-smooth-scroll>

    <div id="skip"><a href="<?php esc_html('#main', 'gcc-wp-2018'); ?>"><?php _e('Skip to Main Content', 'gcc-wp-2018') ?></a></div>


    <!--.mainnavigation-->

    <div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

    <?php include_once('parts/sidebar.php'); ?>

    <div class="off-canvas-content" data-off-canvas-content>

    <?php include_once('parts/quicklinks.php'); ?>
    <?php// include_once('parts/weather-alert.php'); ?>
