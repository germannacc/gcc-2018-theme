
<div id="sb-search" class="sb-search">
    <form role="search" method="get" id="searchform"  action="<?php echo get_home_url(); ?>/search_gcse/">

        <input type="hidden" name="cx" value="015787986713984774933:no8dqwkyepy" title="hidden">
        <input type="hidden" name="ie" value="utf8" title="hidden" />
        <input type="hidden" name="oe" value="utf8" title="hidden" />
        <input type=hidden name=domains value="<?php echo get_home_url(); //get the domain base for the search submit?>" title="home" />
        <input type=hidden name=sitesearch value="<?php echo get_home_url(); //get the url base for the search submit?>" title="home"  />
        <label class="hide" for="search"><?php _e('Search germanna.edu', 'gcc-wp-2018'); ?></label>
        
        <input type="text" name="q" id="search" title="search input" class="sb-search-input" placeholder="<?php _e('Search germanna.edu', 'gcc-wp-2018');?>">
        
        <label class="hide" for="searchsubmit"><?php _e('Search submit', 'gcc-wp-2018'); ?></label>

        <input id="searchsubmit" class="sb-search-submit" type="submit" value="" aria-label="<?php _e('Submit', 'gcc-wp-2018')?>">
        
        <button type="submit" id="searchsubmit-button" class="sb-icon-search" aria-label="Submit">
	   </button>

    </form>
</div>
