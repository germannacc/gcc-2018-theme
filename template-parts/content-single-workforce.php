<?php
/**
 * Template part for displaying single post content in single.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gccwp-2018
 */

?>
<!--Page Content-->
<div class="row gutter-small expanded content-area">

	<div class="small-12 medium-8 large-9 gutter-small entry-content">


	<div class="entry-content">

	<?php
 the_content( sprintf(
 wp_kses(
	 /* translators: %s: Name of current post. Only visible to screen readers */
	 __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gcc-wp-2018' ),
	 array(
		 'span' => array(
			 'class' => array(),
		 ),
	 )
 ),
 get_the_title()
)

); ?>


<?php getPrevNext();

get_the_category_list();

?>


<?php

 // If comments are open or we have at least one comment, load up the comment template.
 if ( comments_open() || get_comments_number() ) :
	 comments_template();
 endif;

?>

</div>
</div>

<?php //Template Sidebar
get_sidebar(); ?>


</div><!--.pagecontent-->

<?php if ( get_edit_post_link() ) : ?>

	<footer class="entry-footer">
		<?php gcc_wp_2018_entry_footer(); ?>
	</footer><!-- .entry-footer -->

<?php endif; ?>
