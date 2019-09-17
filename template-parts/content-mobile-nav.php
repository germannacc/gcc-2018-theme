<div class="off-canvas position-right mobile-menu" id="popout-menu" data-off-canvas>
  <div class="row expanded columns close-mobile">
    <?php  //close button
    gcc_wp_2018_close_button(); ?>
  </div>
  <div class="row expanded branding columns">
    
    <div class="small-12 columns tagline">
      <p class="lead"><?php bloginfo( 'description' ); ?></p>
    </div>

  </div>
  <div class="row expanded mobile-search">
    <div id="sb-search-mobile" class="sb-search">
      <form role="search" method="get" id="searchform-mobile" action="<?php echo get_home_url(); ?>/search_gcse/">
        <input type="hidden" name="cx" value="015787986713984774933:no8dqwkyepy" title="hidden">
        <input type="hidden" name="ie" value="utf8" title="hidden" />
        <input type="hidden" name="oe" value="utf8" title="hidden" />
        <input type=hidden name=domains value="<?php echo get_home_url();     //get the domain base for the search submit?>" title="home" />
        <input type=hidden name=sitesearch value="<?php echo get_home_url(); //get the url base for the search submit?>" title="home"  />
        <label for="search-mobile" class="hide"><?php _e('Search germanna.edu', 'gcc-wp-2018'); ?></label>
        <span class="right"><input type="text" name="q" id="search-mobile" title="search input" class="sb-search-input" placeholder="<?php _e('Search germanna.edu', 'gcc-wp-2018' );?>"></span>
        <input id="searchsubmit-mobile" class="sb-search-submit" type="submit" value="" aria-label="<?php _e('Submit', 'gcc-wp-2018')?>">
        <span class="sb-icon-search"></span>
      </form>
    </div>
  </div>
  <div class="row expanded no-js mobile-nav">
    <?php  //function located in inc/main-navigation.php
    gcc_wp_2018_mobile_offcanvas(); ?>
  </div>
</div>