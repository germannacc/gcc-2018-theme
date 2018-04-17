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
    <!--.sitemaincontent-->

    <footer class="marketing-site-footer">

        <!--Top Footer-->
        <div class="row expanded gutter-small">

            <!--Footer 1st Half-->
            <div class="medium-12 large-6 columns">

                <!--Footer Column 1-->
                <div class="medium-6 columns">

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
                </div>
                <!--.footercolumn1-->

                <!--Footer Column 2-->
                <div class="medium-6 columns">

                    <?php //Column 2 Heading
      if( !empty($footer_column_2_heading_text) ): ?>
                    <h4>
                        <?php echo $footer_column_2_heading_text; ?>
                    </h4>
                    <?php endif; ?>

                    <?php //Primary Address Text Block
      if( !empty($primary_address) ): ?>
                    <div class="marketing-site-footer-block">
                        <span class="fa fa-3x fa-map-marker" aria-hidden></span>
                        <p>
                            <?php echo $primary_address; ?>
                        </p>
                    </div>
                    <?php endif; ?>

                    <?php //Primary Phone Number Text Block
      if( !empty($primary_phone_number) ): ?>
                    <div class="marketing-site-footer-block">
                        <span class="fa fa-3x fa-mobile" aria-hidden></span>
                        <p>
                            <?php echo $primary_phone_number; ?>
                        </p>
                    </div>
                    <?php endif; ?>

                    <?php //e2Campus Alerts Text Block
      if( !empty($e2campus_button_text) ): ?>
                    <div class="marketing-site-footer-block">
                        <a href="<?php echo $e2campus_button_url; ?>" class="button primary expanded medium"><span class="fa fa-exclamation-triangle" aria-hidden></span>
      <?php echo $e2campus_button_text; ?></a>
                    </div>
                    <?php endif; ?>

                </div>
                <!--.footercolumn2-->

            </div>
            <!--.footer1sthalf-->

            <!--Footer 2nd Half-->
            <div class="medium-12 large-6 columns">

                <!--Footer Column 3-->
                <div class="medium-6 columns  footer-links">
                    <?php wp_nav_menu( array( 'menu' => 'Footer Col3 Menu', 'container' => 'true', 'menu_class' => 'menu vertical') ); ?>
                </div>
                <!--.footercolumn3-->

                <!--Footer Column 4-->
                <div class="medium-6 columns  footer-links">
                    <?php wp_nav_menu( array( 'menu' => 'Footer Col4 Menu', 'container' => 'true', 'menu_class' => 'menu vertical') ); ?>
                </div>
                <!--.footercolumn4-->

            </div>
            <!--.footer2ndthalf-->

        </div>
        <!--.topfooter-->

        <!--Bottom Footer-->
        <div class="marketing-site-footer-bottom">
            <div class="row align-middle">
                <div class="column" class="text-center">
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
        <!--.bottomfooter-->
    </footer>

    <!--Closing Site Divs Do not Remove-->
    </div>
    </div>
    </div>

    <?php wp_footer(); ?>

    </body>

    </html>
