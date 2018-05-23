<div class="title-bar hide-for-large">
<div class="title-bar-left">
  <button class="menu-icon float-right" type="button" data-open="main-menu"></button>
      <span class="title-bar-title"><?php bloginfo( 'name' ); ?></span>
</div>
</div>

<!--quicklinks bar with search hide on medium -->
<div class="row expanded quicklinks top-bar show-for-large">

  <div class="small-12 large-9 columns quicklinks-box collapse">


  <div class="top-bar-left collapse">

    <?php  //function located in inc/main-navigation.php
    gcc_wp_2018_quicklinks_bar(); ?>

  </div>


</div>

<div class="small-12 large-3 columns quicklinks-box collapse">


  <div class="top-bar-right float-right">

    <?php  //function located in inc/main-navigation.php
    gcc_wp_2018_calltos(); ?>

  </div>

</div>

</div>
