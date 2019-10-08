<?php
/**
* The sidebar for pages that pulls navigation and widgets for each parent and child pages.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package gccwp-2018
*/
?>
<aside class="small-12 medium-12 large-3 columns right page-nav hide-for-print" id="section-menu" data-toggler="hide">

<?php  //gpta
  
  if ( is_page('64') || $post->post_parent == '64' ) {
  //custom department widgets
  dynamic_sidebar( 'gladys-todd-widgets' );

  } ?>

</aside>