<?php function gcc_wp_2018_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'gcc_wp_2018_content_width', 640 );
}
add_action( 'after_setup_theme', 'gcc_wp_2018_content_width', 0 );
 ?>
