<?php
/**
* The template for displaying search results pages
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
*
* @package gccwp-2018
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header>
		<div class="hero-section-text">
			<h1><?php _e('Search germanna.edu', 'gcc-wp-2018'); ?></h1>
			<?php gcc_wp_2018_page_icons() ?>
		</div>
		<div class="row expanded crumbs-container">
			<nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>">
				<?php the_breadcrumb() ?>
			</nav>
		</div>
	</header>
	<!--Page Content-->
	<div class="row expanded content-area">
		<div class="small-12 columns" >
			<div class="entry-content" id="main" tabindex="0">

				<?php
				global $query_string;
				$query_args = explode("&", $query_string);
				
				$search_query = array();
				
				foreach($query_args as $key => $string) {
				$query_split = explode("=", $string);
				$search_query[$query_split[0]] = urldecode($query_split[1]);
				} // foreach
				
				$the_query = new WP_Query($search_query);
				if ( $the_query->have_posts('post,page,attachment') ) :
				?>

				<h2><?php echo $wp_query->found_posts; ?> <?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>"</h2>
				<hr>
				<!-- the loop -->
				<?php while ( $the_query->have_posts('attachments') ) : $the_query->the_post(); ?>
				<h3>
				<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
				</h3>
				<p><?php the_date(); ?></p>
				<p><?php the_excerpt(); ?></p>
				<hr>
				<?php endwhile; ?>
				<!-- end of the loop -->
				<?php wp_reset_postdata(); ?>
				<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
			</div>
			<footer class="entry-footer">
				<?php gcc_wp_2018_entry_footer(); ?>
				</footer><!-- .entry-footer -->
				</div><!--.pagecontent-->
			</div>
		</article>
		<?php
		get_footer();