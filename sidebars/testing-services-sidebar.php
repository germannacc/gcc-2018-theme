<aside class="small-12 medium-3 gutter-small right page-nav" >

  <div class="widget">

    <h3><?php //gets parent page title
    echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );
    ?></h3>

  <nav class="department-links">

    <?php //get custom sidebar menu for section
    wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
    'menu' => 'Testing Menu', 'container' => 'true', 'menu_class' => 'vertical menu' ) ); ?>

    <h3><?php echo _e('Available Test'); ?></h3>
    <?php //get custom sidebar menu for section from custom-sidebars.php
    wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
    'menu' => 'Available Test Menu', 'container' => 'true', 'menu_class' => 'vertical menu' ) ); ?>

  </nav>

</div>

<?php //custom department widgets
dynamic_sidebar( 'testing-services-widgets' ); ?>

</aside>
