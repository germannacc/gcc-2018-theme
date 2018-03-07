<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package gccwp-2018
 */
  $callto_button_1_text = get_field('callto_button_1_text', 'option');
  $callto_button_1_url = get_field('callto_button_1_url', 'option');
  $callto_button_2_text = get_field('callto_button_2_text', 'option');
  $callto_button_2_url = get_field('callto_button_2_url', 'option');
  $tips_url = get_field('tips_url ', 'option');
?>
<div  class="off-canvas position-left reveal-for-large" id="main-menu"  data-off-canvas data-position="left">
<div class="row column">

<div id="main-menu" class="off-canvas position-left reveal-for-large" data-off-canvas>

<div class="row branding">

  <div class="button-group expanded calltos">
   <?php if( !empty($callto_button_1_text) ): ?>
    <a href="<?php echo $callto_button_1_url; ?>" class="button primary"><?php echo $callto_button_1_text; ?></a>
   <?php endif; ?>
   <?php if( !empty($callto_button_2_text) ): ?>
    <a href="<?php echo $callto_button_2_url; ?>" class="button secondary"><?php echo $callto_button_2_text; ?></a>
   <?php endif; ?>
  </div>

      <a href="<?php bloginfo( 'url' ); ?>" class="logo"><?php bloginfo( 'name' ); ?></a>
      <p class="tagline lead"><?php bloginfo( 'description' ); ?></p>

</div>

<?php
//function located in inc/main-navigation.php
gcc_wp_2018_main_navigation(); ?>

<div class="menu-extras">
  <?php if( !empty($tips_url) ): ?>

      <a href="<?php echo $tips_url;?>" class="tips-logo"><?php echo _e(
        'T.I.P.S.'); ?></a>

 <?php endif; ?>
</div>

</div>

</div>
</div>
