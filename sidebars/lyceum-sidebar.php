<aside id="sidebar" class="small-12 medium-4 medium-pull-8 large-4 columns large-pull-8" role="complementary"> 
<div>        
<?php do_action( 'foundationpress_before_sidebar' ); ?>        
<h3><?php echo _e('Germanna Presents! Lyceum'); ?>
</h3>    
<?php //get custom sidebar menu for section
wp_nav_menu( array( //wp_nav_menu args, look at documentation for more options.
    'menu' => 'Lyceum Menu', 'container' => 'true', 'menu_class' => 'submenu no-bullet' ) ); ?>
</div>
    
    
<div>   
<?php //custom department widgets 
dynamic_sidebar( 'lyceum-widgets' ); ?>  
</div>
    
<?php do_action( 'foundationpress_after_sidebar' ); ?>   
</aside>