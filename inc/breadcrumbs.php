<?php
/**
 * Custom breadcrumbs for this theme
 *
 *
 * @package gccwp-2018
 */
 //post page breadcrumbs
 if ( ! function_exists( 'gcc_wp_2018_post_page_breadcrumbs' ) ) :
 	function gcc_wp_2018_post_page_breadcrumbs() {  ?>
		<ul class="breadcrumbs">
				<?php $home_page = get_the_title( get_option('page_on_front'));
				$post_title = get_the_title( get_option('page_for_posts'));
				 ?>
				<li role="menuitem">
						<a href="<?php echo get_site_url(); ?>">
								<?php echo $home_page; ?>
						</a>
				</li>
				<li role="menuitem">
								<?php echo $post_title; ?>
				</li>
		</ul>
	<?php }
	endif;
//archive breadcrumbs
if ( ! function_exists( 'gcc_wp_2018_archive_breadcrumbs' ) ) :
	function gcc_wp_2018_archive_breadcrumbs() {  ?>
		<ul class="breadcrumbs">
	 		 <?php $home_page = get_the_title( get_option('page_on_front'));
	 		 $post_title = get_the_title( get_option('page_for_posts'));
	 			?>
	 		 <li role="menuitem">
	 				 <a href="<?php echo get_site_url(); ?>">
	 						 <?php echo $home_page; ?>
	 				 </a>
	 		 </li>
 			 <li role="menuitem">
 						 <a href="<?php esc_html_e('/blog/', 'gcc-wp-2018'); ?>"> <?php _e('Germanna highlights & news', 'gcc-wp-2018');?></a>
 			</li>
	 		 <?php if (is_archive()) : ?>
 			 <li role="menuitem">
 						 <?php echo the_archive_title(); ?>
 			</li>
	 		<?php else : ?>
 			<?php if (is_tag()); ?>
 			 <li role="menuitem">
						<?php echo _e('Tag:', 'gcc-wp-2018'); single_tag_title(); ?>
 			</li>
 		 <?php endif; ?>
	  </ul>
<?php }
endif;  ?>
