<aside class="small-12 medium-3 gutter-small right page-nav" >

  <div class="widget">

    <h3><?php //gets parent page title
    echo empty( $post->post_parent ) ? get_the_title( $post->ID ) : get_the_title( $post->post_parent );
    ?></h3>

  <nav class="department-links">

    <?php //get custom sidebar menu for section
    wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
    'menu' => 'Diversity Menu', 'container' => 'true', 'menu_class' => 'vertical menu' ) ); ?>

    <h3><?php echo _e('College Reports'); ?></h3>
<?php //get custom sidebar menu for section
wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
    'menu' => 'Diversity Secondary Sidebar Menu', 'container' => 'true', 'menu_class' => 'submenu no-bullet' ) ); ?>

  </nav>

</div>

<?php //custom department widgets
dynamic_sidebar( 'diversity-widgets' ); ?>

</aside>
