<aside class="trending">

  <div class="widget">

      <h3 class="text-center"><?php esc_html_e('Upcoming Events', 'gcc-wp-2018') ?></h3>

      <?php //Upcoming Events Widget Container
        if ( is_active_sidebar( 'upcoming-events-widgets' ) ) : ?>
        <?php dynamic_sidebar( 'upcoming-events-widgets' ); ?>
        <?php endif;
      ?>

      <h3 class="text-center"><?php esc_html_e('Latest Stories', 'gcc-wp-2018') ?></h3>

      <?php //Latest Stories Widget Container
        if ( is_active_sidebar( 'latest-stories-widgets' ) ) : ?>
        <?php dynamic_sidebar( 'latest-stories-widgets' ); ?>
        <?php endif; //End of Important Links Widget Container
      ?>

      <h3 class="text-center"><?php esc_html_e('Latest Tweets', 'gcc-wp-2018') ?></h3>

      <a class="twitter-timeline" data-lang="en" data-tweet-limit="2" data-link-color="#a30a36" href="https://twitter.com/TwitterDev/timelines/539487832448843776?ref_src=twsrc%5Etfw"><?php _e('Germanna Tweets - Curated tweets by TwitterDev') ?></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

</div>


</aside>
