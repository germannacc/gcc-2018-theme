<aside class="trending">
  <div class="widget">
    <div class="events-calendar">
    
    <a href="https://calendar.activedatax.com/germanna/default.aspx?type=&#038;view=Summary" id="calendar-widget">

      <div class="calendar-widget"></div>

      </a> 

    </div>

      <?php //Latest Stories Widget Container
        if ( is_active_sidebar( 'latest-stories-widgets' ) ) : ?>
        <?php dynamic_sidebar( 'latest-stories-widgets' ); ?>
        <?php endif; //End of Important Links Widget Container
      ?>

      <h3 class="text-center"><?php esc_html_e('@GermannaCC', 'gcc-wp-2018') ?></h3>

      <a class="twitter-timeline" data-lang="en" data-tweet-limit="3" data-link-color="#a30a36" href="https://twitter.com/germannacc?ref_src=twsrc%5Etfw"><?php _e('Latest Tweets', 'gcc-wp-2018') ?></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

    </div>
</aside>
