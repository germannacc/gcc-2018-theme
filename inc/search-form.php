<?php
/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 **/
function gcc_wp_2018_search_form( $form ) {
    $form = ?>
    <div id="sb-search" class="sb-search">
        <form role="search" method="get" id="searchform"  action="<?php echo get_home_url(); ?>/search_gcse/">
            <input type="hidden" name="cx" value="015787986713984774933:no8dqwkyepy" title="hidden">
            <input type="hidden" name="ie" value="utf8" title="hidden" />
            <input type="hidden" name="oe" value="utf8" title="hidden" />
            <input type=hidden name=domains value="<?php echo get_home_url();     //get the domain base for the search submit?>" title="home" />
            <input type=hidden name=sitesearch value="<?php echo get_home_url(); //get the url base for the search submit?>" title="home"  />
            <label for="search" class="hide"><?php _e('Search Germanna', 'gcc-wp-2018'); ?></label>
            <span align="right"><input type="text" name="q" id="search" title="search input" class="sb-search-input" placeholder="<?php _e('Search Germanna...', 'gcc-wp-2018');?>'"></span>
            <input id="searchsubmit" class="sb-search-submit" type="submit" value="" aria-label="<?php _e('Submit', 'gcc-wp-2018'); ?>">
            <button type="submit" id="searchsubmit-button" class="sb-icon-search" aria-label="Submit">
    	   </button>
        </form>

    </div>
<?php
return $form;
}
add_filter( 'get_search_form', 'gcc_wp_2018_search_form' );?>
<?function gcc_wp_2018_mobile_search( $form ) {
    $form = ?>
    <div class="row expanded mobile-search">
      <div id="sb-search-mobile" class="sb-search">
       <form role="search" method="get" id="searchform-mobile" action="<?php echo get_home_url(); ?>/search_gcse/">
         <input type="hidden" name="cx" value="015787986713984774933:no8dqwkyepy" title="hidden">
         <input type="hidden" name="ie" value="utf8" title="hidden" />
         <input type="hidden" name="oe" value="utf8" title="hidden" />
         <input type=hidden name=domains value="<?php echo get_home_url();     //get the domain base for the search submit?>" title="home" />
         <input type=hidden name=sitesearch value="<?php echo get_home_url(); //get the url base for the search submit?>" title="home"  />
         <label for="search-mobile" class="hide"><?php _e('Search Germanna', 'gcc-wp-2018'); ?></label>
         <span align="right"><input type="text" name="q" id="search-mobile" title="search input" class="sb-search-input" placeholder="<?php _e('Search Germanna...', 'gcc-wp-2018' );?>'"></span>
         <input id="searchsubmit-mobile" class="sb-search-submit" type="submit" value="" aria-label="<?php _e('Submit', 'gcc-wp-2018')?>">
         <span class="sb-icon-search"></span>
       </form>
      </div>
    </div>
<?php
return $form;
}
add_filter( 'mobile_search', 'gcc_wp_2018_mobile_search' );  ?>
