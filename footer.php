<?php
/**
* The template for displaying the footer
*
* Contains the closing of the #content div and all content after.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package gccwp-2018
*/
?>
<?php //closing main container, do not remove ?>
</main>


<footer class="site-footer hide-for-print">
<div class="top-footer row expanded gutter-small">
  <div class="small-12 medium-12 large-6 columns">
    <div class="small-12 medium-7 columns">
  
     <?php  //germanna logo
        if ( function_exists( 'the_custom_logo' ) ) {
        the_custom_logo();
        }
    ?>
    <p>
        <?php the_field('primary_address', 'option'); ?><br/>
       <a href="tel:<?php  the_field('primary_phone_number', 'option'); ?>">
       <?php  the_field('primary_phone_number', 'option'); ?></a>
    </p>

     <h2><?php _e('#germanna', 'gcc-wp-2018'); ?></h2>
      <div class="social">
      <?php gcc_wp_2018_social_icons(); ?>
    </div>
    </div>
    <div class="medium-5 columns">



  </div>
</div>
<div class="small-12 medium-12 large-6 columns">
  <div class="medium-6 columns footer-links">
    <map name="FooterMenu1">
    <?php wp_nav_menu( array( 'menu' => 'Footer Col3 Menu', 'container' => 'true', 'menu_class' => 'menu vertical') ); ?>
    </map>
  </div>
  <div class="medium-6 columns  footer-links">
    <map name="FooterMenu2">
    <?php wp_nav_menu( array( 'menu' => 'Footer Col4 Menu', 'container' => 'true', 'menu_class' => 'menu vertical') ); ?>
    </map>
  </div>
</div>
</div>
<div class="site-footer-bottom hide-for-print">

  <div class="row expanded bottom-footer-content">
  
  <div class="small-12 medium-5 large-6 columns">

    <div class="tips">
      
      <a href="<?php echo get_field( 'tips_url', 'options' ); ?>" class="tips-logo" aria-hidden="true">
      
      <span><?php echo get_field( 'tips_text', 'options' ); ?><span class="hide-text">report an incident</span></span></a>
    
    </div>
  </div>

<div class="small-12 medium-7 large-6 columns">

  <p>&copy;
    <?php echo date('Y'); ?>
    <?php bloginfo( 'name' ); ?><br/>
      <?php the_field('bottom_footer_text', 'option'); ?>

  </p>


</div>

</div>

</div>
</footer>


<?php
get_template_part( 'template-parts/content', 'mobile-nav' );
?>


</div>
</div>
</div>


<?php wp_footer(); ?>

<script>
  
  $(document).foundation();
  
  $(function() {
        $('.lazy').Lazy();
  });
  
</script>

<?php
if ( is_page('107') || $post->post_parent == '107' ) {  ?>
<!-- begin SnapEngage code for testing -->
<script type="text/javascript">
(function() {
var se = document.createElement('script'); se.type = 'text/javascript'; se.async = true;
se.src = '//storage.googleapis.com/code.snapengage.com/js/3d972e28-153d-4d31-978a-36c1648909ba.js';
var done = false;
se.onload = se.onreadystatechange = function() {
if (!done&&(!this.readyState||this.readyState==='loaded'||this.readyState==='complete')) {
done = true;
/* Place your SnapEngage JS API code below */
/* SnapEngage.allowChatSound(true); Example JS API: Enable sounds for Visitors. */
}
};
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(se, s);
})();
</script>
<!-- end SnapEngage code -->
<?php
}
?>
<?php
if ( is_page('44') || $post->post_parent == '44' ) {  ?>
<!-- begin SnapEngage code for counseling -->
<script type="text/javascript">
(function() {
var se = document.createElement('script'); se.type = 'text/javascript'; se.async = true;
se.src = '//storage.googleapis.com/code.snapengage.com/js/6c8b2bc0-51a5-4181-817e-709cb15c4910.js';
var done = false;
se.onload = se.onreadystatechange = function() {
if (!done&&(!this.readyState||this.readyState==='loaded'||this.readyState==='complete')) {
done = true;
/* Place your SnapEngage JS API code below */
/* SnapEngage.allowChatSound(true); Example JS API: Enable sounds for Visitors. */
}
};
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(se, s);
})();
</script>
<!-- end SnapEngage code -->
<?php
}
?>
</body>
</html>