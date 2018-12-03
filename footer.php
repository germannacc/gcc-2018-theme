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
  $bottom_footer_text = get_field('bottom_footer_text', 'option');
  $footer_column_1_heading_text = get_field('footer_column_1_heading_text', 'option');
  $footer_column_2_heading_text = get_field('footer_column_2_heading_text', 'option');
  $mission_statement_text = get_field('mission_statement_text', 'option');
  $privacy_link_text = get_field('privacy_link_text', 'option');
  $privacy_link_url = get_field('privacy_link_url', 'option');
  $statements_link_text = get_field('statements_link_text', 'option');
  $statements_link_url = get_field('statements_link_url', 'option');
  $primary_address = get_field('primary_address', 'option');
  $primary_phone_number = get_field('primary_phone_number', 'option');
  $e2campus_button_text = get_field('e2campus_button_text', 'option');
  $e2campus_button_url = get_field('e2campus_button_url', 'option');
?>
</main>
<footer class="marketing-site-footer hide-for-print">
<div class="row expanded gutter-small">
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
      <div class="medium-6 columns  footer-links">
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
              <?php if( !empty($bottom_footer_text) ): ?>
              <?php echo $bottom_footer_text; ?>
              <?php endif; ?>
          </div>
      </div>
  </div>
</footer>
<?php
 get_template_part( 'template-parts/content', 'mobile-nav' );
?>
<!--Closing Site Divs Do not Remove-->
</div>
</div>
</div>

<?php wp_footer(); ?>
<script>
    $(document).foundation();
</script>
<?php if ( is_page('108') || $post->post_parent == '108' ) {  ?>
    //tutoring monsido script
    <script type="text/javascript">
    var _monsido = _monsido || [];
    _monsido.push(['_setDomainToken', '4tsVVD4d1Iw5kplXbM3eow']);
    _monsido.push(['_withStatistics', 'true']);
</script>
<script src="//cdn.monsido.com/tool/javascripts/monsido.js"></script>
<?php } ?>
<script type="text/javascript">
           var _monsido = _monsido || [];
           _monsido.push(['_setDomainToken', '14l5XpM9a7fdx1hVoA-QRQ']);
           _monsido.push(['_withStatistics', 'true']);
       </script>
       <script src="//cdn.monsido.com/tool/javascripts/monsido.js"></script>
</body>
</html>
