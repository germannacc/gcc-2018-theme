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
<footer class="marketing-site-footer hide-for-print">
<div class="row expanded gutter-small">
  <div class="small-12 medium-12 large-6 columns">
    <div class="small-12 medium-7 columns">
      <p>
        <?php the_field('mission_statement_text', 'option'); ?>
      </p>
      <ul class="footer-horizontal-links">
        <li>
          <a href="<?php the_field('privacy_link_url', 'option'); ?>">
            <?php the_field('privacy_link_text', 'option');  ?>
          </a>
        </li>
        <li>
          <a href="<?php the_field('statements_link_url', 'option'); ?>">
            <?php the_field('statements_link_text', 'option');  ?>
          </a>
        </li>
      </ul>
      <?php gcc_wp_2018_social_icons(); ?>
    </div>
    <div class="medium-5 columns">
      <div class="marketing-site-footer-block">
        <span class="fa fa-3x fa-map-marker" aria-hidden="true"></span>
        <p>
          <?php the_field('primary_address', 'option'); ?>
        </p>
      </div>
      <div class="marketing-site-footer-block">
        <span class="fa fa-3x fa-mobile" aria-hidden="true"></span>
        <p>
          <?php  the_field('primary_phone_number', 'option'); ?>
        </p>
      </div>

  <div class="marketing-site-footer-block">
        <a href="<?php the_field('e2campus_button_url', 'option'); ?>" class="button primary expanded medium"><span class="fa fa-exclamation-triangle show-for-large-only"  aria-hidden="true"></span>
      <?php the_field('e2campus_button_text', 'option'); ?></a>
  </div>
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
      
      <span><?php echo get_field( 'tips_text', 'options' ); ?></span></a>
    
    </div>
  </div>

<div class="small-12 medium-7 large-6 columns">

<div class="text-center">
  <p>&copy;
    <?php echo date('Y'); ?>
    <?php bloginfo( 'name' ); ?><br/>
      <?php the_field('bottom_footer_text', 'option'); ?>

  </p>
</div>

</div>

</div>

</div>
<?php wp_footer(); ?>
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
<script>
$(document).foundation();

$(function() {
        $('.lazy').Lazy();
});
</script>
</body>
</html>