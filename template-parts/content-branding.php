<?php

  $callto_button_1_text = get_field('callto_button_1_text', 'option');
  $callto_button_1_url = get_field('callto_button_1_url', 'option');
  $callto_button_2_text = get_field('callto_button_2_text', 'option');
  $callto_button_2_url = get_field('callto_button_2_url', 'option');
  $tips_url = get_field('tips_url ', 'option');

?>


<header id="top-branding" class="reveal-for-large" data-off-canvas>

<div class="row expanded branding">

  <div class="small-12 medium-3 columns">

  <a href="<?php echo esc_url( home_url() ) ?>" class="logo"><?php bloginfo( 'name' ); ?></a>
  <p class="tagline lead"><?php bloginfo( 'description' ); ?></p>

</div>

<div class="small-12 medium-9 columns">

  <div class="button-group expanded calltos pull-right">
   <?php if( !empty($callto_button_1_text) ): ?>
    <a href="<?php echo $callto_button_1_url; ?>" class="button primary"><?php echo $callto_button_1_text; ?></a>
   <?php endif; ?>
   <?php if( !empty($callto_button_2_text) ): ?>
    <a href="<?php echo $callto_button_2_url; ?>" class="button secondary"><?php echo $callto_button_2_text; ?></a>
   <?php endif; ?>
  </div>

</div>

</div>

<nav class="row top-nav">

<?php
//function located in inc/main-navigation.php
gcc_wp_2018_top_bar(); ?>

</nav>

</header>
