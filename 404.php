<?php
/**
* The template for displaying 404 pages (Not Found)
*
* @package WordPress
*/
get_header(); ?>
<div class="row expanded hero-section-404">
	<?php
	$error_page_heading = get_field('error_page_heading', 'option');
	$error_page_error_message_1 = get_field('error_page_error_message_1', 'option');
	$error_page_error_message_2 = get_field('error_page_error_message_2', 'option');
	$error_page_button_text = get_field('error_page_button_text', 'option');
	$error_page_button_url = get_field('error_page_button_url', 'option');
	$error_page_background_image = get_field('error_page_background_image', 'option');
					// vars
					$url = $error_page_background_image['url'];
					$title = $error_page_background_image['title'];
					$alt = $error_page_background_image['alt'];
					$caption = $error_page_background_image['caption'];
					// thumbnail
					$size = 'large';
					$thumb = $error_page_background_image['sizes'][ $size ];
					$width = $error_page_background_image['sizes'][ $size . '-width' ];
					$height = $error_page_background_image['sizes'][ $size . '-height' ];
	if( !empty($error_page_background_image) ):   ?>
	<img src="<?php echo $error_page_background_image['url']; ?>" alt="<?php echo $error_page_background_image['alt']; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" class="responsive" />
	<?php endif; ?>
	<div class="row expanded hero-section-404-text">
		<div class="small-8 small-offset-2 columns">
			<h1 class="page-title"><?php echo $error_page_heading; ?></h1>
			<?php
			if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>
			<p><?php
					printf(
						wp_kses(
							/* translators: 1: link to WP admin new post page. */
							__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'gcc-wp-2018' ),
							array(
								'a' => array(
									'href' => array(),
								),
							)
						),
						esc_url( admin_url( 'post-new.php' ) )
					);
			?></p>
			<?php elseif ( is_search() ) : ?>
			<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'gcc-wp-2018' ); ?></p>
			<?php
				get_search_form();
			else : ?>
			<p><?php  echo $error_page_error_message_1;  ?></p>
			<p><?php echo $error_page_error_message_2;  ?></p>
			<p><a href="<?php echo $error_page_button_url; ?>" class="button primary"><?php echo $error_page_button_text; ?></a>
		</p>
		<form role="search" method="get" id="searchform-404" style="position: relative; margin-top: 2rem;" action="<?php echo get_home_url(); ?>/search_gcse/">
			<input type="hidden" name="cx" value="015787986713984774933:no8dqwkyepy" title="hidden" >
			<input type="hidden" name="ie" value="utf8" title="hidden" />
			<input type="hidden" name="oe" value="utf8" title="hidden" />
			<input type=hidden name=domains value="<?php echo get_home_url();     //get the domain base for the search submit?>" title="home" />
			<input type=hidden name=sitesearch value="<?php echo get_home_url(); //get the url base for the search submit?>" title="home"  />
			<input type="text" name="q" id="search-404" title="search input" class="sb-search-input" placeholder="<?php _e('Search germanna.edu', 'gcc-wp-2018');?>" style="height: 49px;">
			<input id="searchsubmit-404" class="sb-search-submit" type="submit" value="" aria-label="<?php _e('Submit', 'gcc-wp-2018')?>">
			<button type="submit" id="searchsubmit-button-404" class="sb-icon-search" aria-label="Submit">
			</button>
		</form>
	</div>
</div>
</div>
<?php
endif;
get_footer();