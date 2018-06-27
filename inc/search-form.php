<?php
/**
 * Generate custom search form
 *
 * @param string $form Form HTML.
 * @return string Modified form HTML.
 **/
function gcc_wp_2018_search_form( $form ) {
    $form = ?>

    <form role="search" method="get" id="searchform" action="<?php echo get_home_url(); esc_html('/search_gcse/', 'gcc-wp-2018')?>">
        <input type="hidden" name="cx" value="015787986713984774933:no8dqwkyepy" title="hidden">
        <input type="hidden" name="ie" value="utf8" title="hidden" />
        <input type="hidden" name="oe" value="utf8" title="hidden" />
        <input type="text" name="q" id="search" title="search input" class="sb-search-input" placeholder="<?php _e('Search  test Germanna...', 'gcc-wp-2018');?>'">
        <input type=hidden name=domains value="<?php esc_html('/search_gcse/', 'gcc-wp-2018')  //get the domain base for the search submit?>" title="home" />
        <input type=hidden name=sitesearch value="<?php  esc_html('/search_gcse/', 'gcc-wp-2018')  //get the url base for the search submit?>" title="home" />
        <input id="searchsubmit" class="sb-search-submit" type="submit" value="" aria-label="<?php _e('Submit')?>">
        <span class="sb-icon-search"></span>
    </form>


<?php

return $form;
}
add_filter( 'get_search_form', 'gcc_wp_2018_search_form' );  ?>
