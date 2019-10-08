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

<?php  
  
 dynamic_sidebar( 'scholars-widgets' );

?>

</aside>