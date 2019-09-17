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
        <?php  //germanna logo
        if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
        }
        ?>
      </div>

        <?php
        //primary navigation function located in inc/main-navigation.php
        gcc_wp_2018_main_navigation(); ?>
    </header>

  </div><!--.row-->
</div><!--.offcanvas-->
<?php
} ?>