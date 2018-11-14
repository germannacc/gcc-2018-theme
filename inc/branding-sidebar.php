<?php
//The main branding section of the website on the left side.
function main_menu() {
  $callto_button_1_text = get_field('callto_button_1_text', 'option');
  $callto_button_1_url = get_field('callto_button_1_url', 'option');
  $callto_button_2_text = get_field('callto_button_2_text', 'option');
  $callto_button_2_url = get_field('callto_button_2_url', 'option');
  $sidebar_ad_1_text = get_field('sidebar_ad_1_text', 'option');
  $sidebar_ad_1_url = get_field('sidebar_ad_1_url', 'option');
  $sidebar_ad_1_image = get_field('sidebar_ad_1_image', 'option');
  $sidebar_ad_2_text = get_field('sidebar_ad_2_text', 'option');
  $sidebar_ad_2_url = get_field('sidebar_ad_2_url', 'option');
  $sidebar_ad_2_image = get_field('sidebar_ad_2_image', 'option');
  $tips_url = get_field('tips_url ', 'option');
?>
    <div class="off-canvas position-left reveal-for-xlarge" id="main-menu" data-toggler="hide">

        <button class="close-button" aria-label="<?php _e('Close menu', 'gcc-wp-2018'); ?>" type="button" data-close>
        <span aria-hidden="true">&times;</span>

      </button>

        <div class="row column">

            <div id="menu-container" class="off-canvas position-left reveal-for-large" data-off-canvas>

                <div class="row branding">
                  <map name="Brandingbar">
                    <div class="button-group expanded calltos">
                        <?php if( !empty($callto_button_1_text) ): ?>
                        <a href="<?php echo $callto_button_1_url; ?>" class="button primary">
                        <?php echo $callto_button_1_text;
?>
                        </a>
                        <?php endif; ?>
                        <?php if( !empty($callto_button_2_text) ): ?>
                        <a href="<?php echo $callto_button_2_url; ?>" class="button secondary">
                            <?php echo $callto_button_2_text;
?>
                        </a>
                        <?php endif; ?>
                    </div>
                  </map>

										<?php
										if ( function_exists( 'the_custom_logo' ) ) {
    the_custom_logo();
}
?>

                    <p class="tagline lead">
                        <?php bloginfo( 'description' ); ?>
                    </p>

                </div>

          <?php
          //function located in inc/main-navigation.php
          gcc_wp_2018_main_navigation(); ?>

                <div class="menu-extras">

                  <?php

$image = get_field('sidebar_ad_1_image', 'option');

if( !empty($image) ):

	// vars
	$url = $image['url'];
	$title = $image['title'];
	$caption = $image['caption'];

	// thumbnail
	$size = 'large';
	$thumb = $image['sizes'][ $size ];
	$width = $image['sizes'][ $size . '-width' ];
	$height = $image['sizes'][ $size . '-height' ];

?>

  <a href="<?php echo $sidebar_ad_1_url; ?>" class="career-coach"><span><?php echo $sidebar_ad_1_text; ?></span>

    <img src="<?php echo $thumb; ?>" alt="" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

  </a>

<?php endif; ?>

<?php

$image = get_field('sidebar_ad_2_image', 'option');

if( !empty($image) ):

// vars
$url = $image['url'];
$title = $image['title'];
$caption = $image['caption'];

// thumbnail
$size = 'large';
$thumb = $image['sizes'][ $size ];
$width = $image['sizes'][ $size . '-width' ];
$height = $image['sizes'][ $size . '-height' ];

?>

<a href="<?php echo $sidebar_ad_2_url; ?>" class="menu-banner"><span><?php echo $sidebar_ad_2_text; ?></span>

<img src="<?php echo $thumb; ?>" alt="" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

</a>

<?php endif; ?>

                  <?php if( !empty($tips_url) ): ?>

                  <a href="<?php echo $tips_url;?>" class="tips-logo" aria-hidden="true">
                      <?php echo _e(
                  'T.I.P.S.', 'gcc-wp-2018' ); ?>
                  </a>

                 <?php endif; ?>

                </div>

            </div>

        </div>
    </div>
<?php
} ?>
