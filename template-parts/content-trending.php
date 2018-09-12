<aside class="trending">

  <div class="widget">

    <a href="<?php esc_html_e('https://calendar.activedatax.com/germanna/default.aspx?type=&view=Summary', 'gcc-wp-2018')?>" class="events-calendar img-thumbnail" aria-hidden="true">
        <?php echo _e(
          'Upcoming events', 'gcc-wp-2018' ); ?>
    </a>

      <h3 class="text-center"><?php esc_html_e('Germanna Today', 'gcc-wp-2018') ?></h3>

      <?php //Latest Stories Widget Container
        if ( is_active_sidebar( 'latest-stories-widgets' ) ) : ?>
        <?php dynamic_sidebar( 'latest-stories-widgets' ); ?>
        <?php endif; //End of Important Links Widget Container
      ?>

      <h3 class="text-center"><?php esc_html_e('Latest tweets', 'gcc-wp-2018') ?></h3>

      <a class="twitter-timeline" data-lang="en" data-tweet-limit="3" data-link-color="#a30a36" href="https://twitter.com/germannacc?ref_src=twsrc%5Etfw"><?php _e('Germanna Tweets - Curated tweets by TwitterDev', 'gcc-wp-2018') ?></a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

</div>


</aside>
