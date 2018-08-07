<aside class="small-12 medium-4 large-3 gutter-small right page-nav" >

  <div class="widget">

    <h3><?php esc_html_e('Get started', 'gcc-wp-2018'); ?></h3>

  <nav class="department-links">

    <?php //get custom sidebar menu for section
    wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
    'menu' => 'Nursing Program Main Menu', 'container' => 'true', 'menu_class' => 'vertical menu' ) ); ?>

    <h3><?php esc_html_e('Important information', 'gcc-wp-2018'); ?></h3>
<?php //get custom sidebar menu for section
wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
    'menu' => 'Nursing Menu', 'container' => 'true', 'menu_class' => 'vertical menu' ) ); ?>

  </nav>

</div>

<?php //custom department widgets
dynamic_sidebar( 'nursing-widgets' ); ?>

</aside>
