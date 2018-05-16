<div class="title-bar hide-for-large">
<div class="title-bar-left">
<button class="menu-icon float-right" type="button" data-open="main-menu"></button>
    <span class="title-bar-title"><?php bloginfo( 'name' ); ?></span>
</div>
</div>

<!--quicklinks bar with search hide on medium -->
<div class="row expanded quicklinks top-bar show-for-large sticky" data-sticky data-margin-top="0">

<div class="small-12 medium-7 columns quicklinks-box">

  <div class="top-bar-left collapse">

    <?php  //function located in inc/main-navigation.php
    gcc_wp_2018_quicklinks_bar(); ?>

  </div>

</div>

<div class="small-12 medium-3 columns quicklinks-box">

<?php //Start of Important Links Widget Container
  if ( is_active_sidebar( 'quicklinks-widgets' ) ) : ?>
  <?php dynamic_sidebar( 'quicklinks-widgets' ); ?>
  <?php endif; //End of Important Links Widget Container
?>

</div>

<div class="small-12 medium-2 columns quicklinks-box collapse">


<div class="top-bar-right float-right">

  <?php  //function located in inc/main-navigation.php
  gcc_wp_2018_calltos(); ?>

</div>

</div>


</div>
