<aside class="trending">

  <?php //Upcoming Events Widget Container
    if ( is_active_sidebar( 'upcoming-events-widgets' ) ) : ?>
    <?php dynamic_sidebar( 'upcoming-events-widgets' ); ?>
    <?php endif;
  ?>


  <?php //Latest Stories Widget Container
    if ( is_active_sidebar( 'latest-stories-widgets' ) ) : ?>
    <?php dynamic_sidebar( 'latest-stories-widgets' ); ?>
    <?php endif; //End of Important Links Widget Container
  ?>

</aside>
