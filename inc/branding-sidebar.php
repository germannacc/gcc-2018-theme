<?php
//The main branding and navigations section of the website on the left side, shows on desktops, hidden for mobile.
function main_menu() {
?>
<div class="off-canvas position-left reveal-for-xlarge" id="main-menu" data-toggler="hide">

  <button class="close-button" aria-label="<?php _e('Close menu', 'gcc-wp-2018'); ?>" type="button" data-close>
  <span aria-hidden="true">&times;</span>
  </button>
  
  <div class="row column">

    <header id="menu-container" class="off-canvas position-left reveal-for-large" data-off-canvas>
      
      <div class="row branding">
        <map name="Brandingbar">
        <div class="button-group expanded calltos">
          <a href="<?php //request info button  
           the_field('callto_button_1_url', 'option'); ?>" class="button primary">
            <?php echo the_field('callto_button_1_text', 'option'); ?>
          </a>
          <a href="<?php //apply now button
          the_field('callto_button_2_url', 'option'); ?>" class="button secondary">
            <?php echo the_field('callto_button_2_text', 'option'); ?>
          </a>
        </div><!--.calltos-->
        </map>
        <?php  //germanna logo
        if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
        }
        ?>
        <p class="tagline lead">
          <?php bloginfo( 'description' );//germanna tagline?>
        </p>

      </div><!--.branding-->

<!--         <p class="timer-text">
 -->        <?php // the_field('timer_text', 'option'); //timer text ?>
<!--         </p>
 -->
        <?php // echo do_shortcode('[wpcdt-countdown id="26372"]'); //timer shortcode ?>
        
        <?php
        //primary navigation function located in inc/main-navigation.php
        gcc_wp_2018_main_navigation(); ?>

        <div class="menu-extras">
          <?php //menu callto image 1         

         // ACF Image Object
         $image     = get_field( 'sidebar_ad_1_image', 'options' );
         $alt       = $image['alt'];
         $imageSize = $image['sizes'][ 'large' ];
                  
          ?>
          
          <a href="<?php the_field('sidebar_ad_1_url', 'option');  ?>" class="career-coach">
            <span><?php the_field('sidebar_ad_1_text', 'option'); ?></span>
            <img src="<?php echo $imageSize; ?>" alt="<?php echo $alt; ?>" class="lazy" width="350" height="350" />
          </a>
          
 
          <?php //menu callto image 2
        
         // ACF Image Object
         $image     = get_field( 'sidebar_ad_2_image', 'options' );
         $alt       = $image['alt'];
         $imageSize = $image['sizes'][ 'large' ];
                  
          ?>
          <a href="<?php the_field('sidebar_ad_2_url', 'option');  ?>" class="menu-banner"><span><?php the_field('sidebar_ad_2_text', 'option'); ?></span>
          
          <img src="<?php echo $imageSize; ?>" alt="<?php echo $alt; ?>" class="lazy" width="350" height="350"  />
          </a>

      </div><!--.menuextras-->

    </header>

  </div><!--.row-->
</div><!--.offcanvas-->
<?php
} ?>