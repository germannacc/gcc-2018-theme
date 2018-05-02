<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 */
get_header(); ?>
<?php
if ( have_posts() ) :

else : ?>

<div class="row expanded hero-section">

<header class="hero-section">
  <img src="https://placeimg.com/640/480/nature" alt="page heading" width="640" height="300" style="height: 100%;">

  <div class="row expanded" style="text-align: center; padding: 12% 0 14% 0; color: #ffffff; background-color: rgba(0, 0, 0, .6);">
		<div class="small-6 small-offset-3 columns">

    <h1 class="page-title"><?php esc_html_e( 'Nothing Found', 'gcc-wp-2018' ); ?></h1>

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

			<p><?php esc_html_e( 'It seems the information you are looking for can&rsquo;t be found. Please use the search box below and try again.', 'gcc-wp-2018' ); ?></p>

			<p><?php esc_html_e('Still having trouble?', 'gcc-wp-2018' );?></p>
			<p><a href="" class="button primary"><?php esc_html_e('Send us a question.', 'gcc-wp-2018' ); ?></a>
		  </p>

			<form role="search" method="get" id="searchform" style="position: relative; margin-top: 2rem;" action="<?php esc_html('/search_gcse/', 'gcc-wp-2018')?>">
					<input type="hidden" name="cx" value="015787986713984774933:no8dqwkyepy" title="hidden">
					<input type="hidden" name="ie" value="utf8" title="hidden" />
					<input type="hidden" name="oe" value="utf8" title="hidden" />
					<input type="text" name="q" id="search" title="search input" style="height: 49px;" placeholder="<?php _e('Search Germanna...', 'gcc-wp-2018');?>'">
					<input type=hidden name=domains value="<?php echo get_home_url();     //get the domain base for the search submit?>" title="home" />
					<input type=hidden name=sitesearch value="<?php echo get_home_url(); //get the url base for the search submit?>" title="home" />
					<input id="searchsubmit" class="sb-search-submit" type="submit" value="" aria-label="<?php _e('Submit')?>">
					<span class="sb-icon-search"></span>
			</form>

      </div>
		</div>

  </header>
</div>
			<?php

	endif; ?>

<?php endif;
?>
<?php
get_footer();
