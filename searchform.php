
<div id="sb-search" class="sb-search">

    <form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>">
  
        <label for="search" class="hide"><?php _e('Search germanna.edu', 'gcc-wp-2018'); ?></label>



        <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" title="search input" class="sb-search-input" placeholder="<?php _e('Search germanna.edu', 'gcc-wp-2018');?>">
        

        <input id="searchsubmit" class="sb-search-submit" type="submit" value="" aria-label="<?php _e('Submit', 'gcc-wp-2018')?>">

        <button type="submit" id="searchsubmit-button" class="sb-icon-search" aria-label="Submit">
	   </button>

    </form>
</div>
