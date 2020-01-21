<?php
 $callto_button_1_text = get_field('callto_button_1_text', 'option');
 $callto_button_1_url = get_field('callto_button_1_url', 'option');
 $callto_button_2_text = get_field('callto_button_2_text', 'option');
 $callto_button_2_url = get_field('callto_button_2_url', 'option');
?>
<div class="button-group hide-for-xlarge expanded calltos">
 <?php if( !empty($callto_button_1_text) ): ?>
  <a href="<?php echo $callto_button_1_url; ?>" class="button primary"><?php echo $callto_button_1_text; ?></a>
 <?php endif; ?>
 <?php if( !empty($callto_button_2_text) ): ?>
  <a href="<?php echo $callto_button_2_url; ?>" class="button secondary"><?php echo $callto_button_2_text; ?></a>
 <?php endif; ?>
</div>
<div class="title-bar hide-for-xlarge expanded hide-for-print">
  <div class="title-bar-left">
    <button class="float-right" type="button" data-toggle="popout-menu" data-open="offCanvasLeft"><span class="fa fa-bars" aria-hidden="true"></span>Menu</button>

    <?php if ( get_theme_mod( 'gcc_wp_2018_mobile_logo' ) ) : ?>
        
        <a href="<?php echo esc_url( home_url() ); ?>" class="mobile-logo" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home" itemprop="url">

            <img src="<?php echo get_theme_mod( 'gcc_wp_2018_mobile_logo' ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="logo">

        </a>

        <?php else : ?>

        <hgroup>
            <h1 class="site-title"><a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <p class="site-description"><?php bloginfo( 'description' ); ?></p>
        </hgroup>

    <?php endif; ?>

  </div>
</div>

<div class="row expanded quicklinks top-bar show-for-xlarge" id="top-menu"  data-toggler="hide">

  <div class="small-12 large-9 columns quicklinks-box collapse">

  <div class="top-bar-left collapse stacked-for-medium">

    <?php  //function located in inc/main-navigation.php
    gcc_wp_2018_quicklinks_bar(); ?>

  </div>


</div>

<div class="small-12 large-3 columns quicklinks-box collapse ">

<div class="search-container">
  <?php get_search_form();  ?>
</div>

</div>
</div>
