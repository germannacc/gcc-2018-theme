<?php
//Names the page template for each section
/*
Template Name: Advising
*/
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
	while ( have_posts() ) : the_post(); ?>

		<?php //Page Heading
		get_template_part( 'template-parts/content', 'page-heading' );
 		?>

		<!--Page Content-->
		<div class="row gutter-small expanded content-area">

			<div class="small-12 medium-8 large-9 entry-content">

			<?php
			    the_content();
			?>

			<?php

if (is_page('program-of-study-information-sessions'))  {  ?>

<div id="adx120243">Loading Events...</div>
<script type="text/javascript">if (typeof jQuery != 'undefined') {
jQuery(document).ready(function () {
var adx="Events are temporarily unavailable. Please check back later.";
jQuery.ajax({ dataType: 'script', url:
'https://calendar.activedatax.com/germanna/EventListSyndicator.aspx?type=N&number=50&category=32-90&expire=Y&adpid=16&nem=No+events+are+available+that+match+your+request&sortorder=ASC&ver=2.0&target=adx120243'
});setTimeout(function() {if(typeof response=='undefined'){jQuery('#adx120243').html(adx);}}, 5000);
});}else { document.getElementById('adx120243').innerHTML = 'Events are temporarily unavailable because the jQuery library cannot be located.';
}</script>


<?php

}

?>

			</div>


			<footer class="entry-footer">
			  <?php gcc_wp_2018_entry_footer(); ?>
			</footer><!-- .entry-footer -->

			<?php //Template Sidebar
			get_template_part( '/sidebars/advising-sidebar' ); ?>

		</div><!--.pagecontent-->

<?php endwhile; // End of the loop. ?>

</article>

<?php
get_footer();
