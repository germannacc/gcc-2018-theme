<div class="title-bar hide-for-large">
<div class="title-bar-left">
<button class="menu-icon" type="button" data-open="main-menu"></button>
    <span class="title-bar-title"><?php bloginfo( 'name' ); ?></span>
</div>
</div>

<!--quicklinks bar with search hide on medium -->
<div class="quicklinks top-bar show-for-large sticky" data-sticky data-margin-top="0">

  <div class="top-bar-left">

    <?php  //function located in inc/main-navigation.php
    gcc_wp_2018_quicklinks_bar(); ?>

  </div>

  <div class="top-bar-right">

    <?php //function location in inc/social-icons.php
    gcc_wp_2018_social_icons(); ?>

  </div>

</div>
