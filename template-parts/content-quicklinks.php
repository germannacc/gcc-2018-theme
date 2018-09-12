<?php
 $callto_button_1_text = get_field('callto_button_1_text', 'option');
 $callto_button_1_url = get_field('callto_button_1_url', 'option');
 $callto_button_2_text = get_field('callto_button_2_text', 'option');
 $callto_button_2_url = get_field('callto_button_2_url', 'option');
?>

<div class="button-group hide-for-large expanded calltos">
 <?php if( !empty($callto_button_1_text) ): ?>
  <a href="<?php echo $callto_button_1_url; ?>" class="button primary"><?php echo $callto_button_1_text; ?></a>
 <?php endif; ?>
 <?php if( !empty($callto_button_2_text) ): ?>
  <a href="<?php echo $callto_button_2_url; ?>" class="button secondary"><?php echo $callto_button_2_text; ?></a>
 <?php endif; ?>
</div>

<div class="title-bar hide-for-large expanded">
  <div class="title-bar-left">
    <button class="menu-icon float-right" type="button" data-toggle="popout-menu" data-open="offCanvasLeft"></button>
    <a href="<?php echo esc_url( home_url() )  ?>" class="logo"><?php bloginfo( 'name' ); ?></a>
  </div>
</div>


<!--quicklinks bar with search hide on medium -->
<div class="row expanded quicklinks top-bar show-for-large">

  <div class="small-12 medium-12 large-7 columns quicklinks-box collapse">

  <div class="top-bar-left collapse stacked-for-medium">

    <?php  //function located in inc/main-navigation.php
    gcc_wp_2018_quicklinks_bar(); ?>

  </div>


</div>

<div class="small-12 medium-12 large-5 columns quicklinks-box collapse">

<div class="small-12 medium-6 large-8 columns collapse">

  <?php //Start of Important Links Widget Container
    if ( is_active_sidebar( 'quicklinks-widgets' ) ) : ?>
    <?php dynamic_sidebar( 'quicklinks-widgets' ); ?>
    <?php endif; //End of Important Links Widget Container
   ?>

</div>

 <div class="small-12 medium-4 large-4 columns collapse right-calltos">

   <div class="top-bar-right float-right">


     <?php  //function located in inc/main-navigation.php
     gcc_wp_2018_calltos(); ?>

   </div>

 </div>
</div>
</div>
