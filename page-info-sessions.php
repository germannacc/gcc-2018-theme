<?php
//Names the page template for each section
/*
Template Name: Information Sessions
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

<div id="adx080484">Loading Events...</div>
<script type="text/javascript">if (typeof jQuery != 'undefined') {
jQuery(document).ready(function () {
var adx="Events are temporarily unavailable. Please check back later.";
jQuery.ajax({ dataType: 'script', url: 'https://calendar.activedatax.com/germanna/EventListSyndicator.aspx?type=N&number=50&category=50-0&expire=Y&adpid=16&nem=No+events+are+available+that+match+your+request&sortorder=ASC&ver=2.0&target=adx080484'
});setTimeout(function() {if(typeof response=='undefined'){jQuery('#adx080484').html(adx);}}, 5000);
});}else { document.getElementById('adx080484').innerHTML = 'Events are temporarily unavailable because the jQuery library cannot be located.'; }</script>

			</div>


			<footer class="entry-footer">
			  <?php gcc_wp_2018_entry_footer(); ?>
			</footer><!-- .entry-footer -->





			<?php //Template Sidebar
			get_template_part( '/sidebars/information-sessions-sidebar' ); ?>

		</div><!--.pagecontent-->

<?php endwhile; // End of the loop. ?>

</article>

<?php
get_footer();
