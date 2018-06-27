<?php
if ( ! function_exists( 'gcc_wp_2018_page_alert' ) ) :

function gcc_wp_2018_page_alert() {  ?>

	<?php // Gets the alert custom post type id for each sub page needing special announcement
	$page_alert = get_field('page_alert', $post->post_parent);

	 if ($page_alert) { ?>
		 <div class="row expanded">

			 <div class='callout announcement' data-closable>
				 <?php the_field('page_alert', $post->post_parent); ?>
				 <a href='#' class='close' aria-hidden="true" role="button"><span class='icon-remove-circle'></span></a>
				 <button class="close-button" aria-label="<?php esc_html_e('Dismiss alert', 'gcc-wp-2018'); ?>" type="button" data-close>
					 	<span aria-hidden="true">&times;</span>
				</button>
	 		</div>

	</div>

		 <?php
		 }
		 else {

		 }


}
endif;
?>
