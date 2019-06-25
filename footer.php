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
<<<<<<< HEAD

=======
>>>>>>> 2e005af4d960ad8060d6c95a9375ccffa7a06d70
<?php //closing main container, do not remove ?>
</main>
<footer class="marketing-site-footer hide-for-print">

<div class="row expanded gutter-small">
<<<<<<< HEAD

  <div class="small-12 medium-12 large-6 columns">

      <div class="medium-7 columns">

        <?php //Column 1 Heading
        if( !empty($footer_column_1_heading_text) ): ?>
                  <h4>
        <?php echo $footer_column_1_heading_text; ?>
                  </h4>
        <?php endif; ?>
        <?php //Mission Statement
        if( !empty($mission_statement_text) ): ?>
                    <p>
                    <?php echo $mission_statement_text; ?>
                    </p>
                    <?php endif; ?>

                    <ul class="menu vertical">
        <?php //Col 1 Link 1
        if( !empty($privacy_link_text ) ): ?>
                        <li>
                            <a href="<?php echo $privacy_link_url; ?>">
                                <?php echo $privacy_link_text;  ?>
                            </a>
                        </li>
        <?php endif; ?>
        <?php //Col 2 Link 2
        if( !empty($statements_link_text ) ): ?>
                        <li>
                            <a href="<?php echo $statements_link_url; ?>">
                                <?php echo $statements_link_text;  ?>
                            </a>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <?php gcc_wp_2018_social_icons(); ?>
       </div>

        <div class="medium-5 columns">
          <?php //Column 2 Heading
          if( !empty($footer_column_2_heading_text) ): ?>
                    <h4>
                        <?php echo $footer_column_2_heading_text; ?>
                    </h4>
          <?php endif; ?>
          <?php //Primary Address Text Block
          if( !empty($primary_address) ): ?>
                    <div class="marketing-site-footer-block">
                        <span class="fa fa-3x fa-map-marker" aria-hidden="true"></span>
                        <p>
                            <?php echo $primary_address; ?>
                        </p>
                    </div>
                    <?php endif; ?>
                    <?php //Primary Phone Number Text Block
          if( !empty($primary_phone_number) ): ?>
                    <div class="marketing-site-footer-block">
                        <span class="fa fa-3x fa-mobile" aria-hidden="true"></span>
                        <p>
                            <?php echo $primary_phone_number; ?>
                        </p>
                    </div>
                    <?php endif; ?>
                    <?php //e2Campus Alerts Text Block
          if( !empty($e2campus_button_text) ): ?>
                    <div class="marketing-site-footer-block">
                        <a href="<?php echo $e2campus_button_url; ?>" class="button primary expanded medium"><span class="fa fa-exclamation-triangle show-for-large-only"  aria-hidden="true"></span>
          <?php echo $e2campus_button_text; ?></a>
                    </div>
                    <?php endif; ?>

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

=======
  <div class="small-12 medium-12 large-6 columns">
    <div class="medium-7 columns">
      <p>
        <?php the_field('mission_statement_text', 'option'); ?>
      </p>
      <ul class="menu">
        <li>
          <a href="<?php the_field('privacy_link_url', 'option'); ?>">
            <?php the_field('privacy_link_text', 'option');  ?>
          </a>
        </li>
        <li>
          <a href="<?php the_field('statements_link_url', 'option'); ?>">
            <?php  the_field('statements_link_text', 'option');  ?>
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
>>>>>>> 2e005af4d960ad8060d6c95a9375ccffa7a06d70
  </div>

</div>
<<<<<<< HEAD

<div class="marketing-site-footer-bottom hide-for-print">

  <div class="row align-middle">
      <div class="column text-center">
          <p>&copy;
              <?php echo date('Y'); ?>
              <?php bloginfo( 'name' ); ?>
          </p>
          <?php if( !empty($bottom_footer_text) ): ?>
          <?php echo $bottom_footer_text; ?>
          <?php endif; ?>
      </div>
  </div>

=======
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
<div class="marketing-site-footer-bottom hide-for-print">
<div class="row align-middle">
  <div class="column text-center">
    <p>&copy;
      <?php echo date('Y'); ?>
      <?php bloginfo( 'name' ); ?>
    </p>
    <?php  the_field('bottom_footer_text', 'option'); ?>
  </div>
</div>
>>>>>>> 2e005af4d960ad8060d6c95a9375ccffa7a06d70
</div>
</footer>
<?php
get_template_part( 'template-parts/content', 'mobile-nav' );
?>
<<<<<<< HEAD


<?php //closing Site Divs Do not Remove ?>
    </div>
  </div>
=======
<?php //closing Site Divs Do not Remove ?>
</div>
</div>
>>>>>>> 2e005af4d960ad8060d6c95a9375ccffa7a06d70
</div>
<?php wp_footer(); ?>
<<<<<<< HEAD

<script>
    $(document).foundation();
=======
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
>>>>>>> 2e005af4d960ad8060d6c95a9375ccffa7a06d70
</script>
</body>
</html>