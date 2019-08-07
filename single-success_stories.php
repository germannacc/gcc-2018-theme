<?php
/**
* The template for displaying all single posts
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
*
* @package gccwp-2018
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	while ( have_posts() ) : the_post(); ?>
	
	<div class="row expanded">
		<header class="hero-section">
			<?php //if the child page doesn't have a featured images
			//gcc_featured_image_on_child(); ?>
			<div class="hero-section-text">
				<h1 class="entry-title"><?php _e('Success Stories: ', 'gcc-wp-2018'); ?><?php the_title(); ?></h1>
				<?php gcc_wp_2018_page_icons() ?>
			</div>
			<div class="post-meta">
				<?php if ( 'post' === get_post_type() ) : ?>
			<p><strong></span><?php gcc_wp_2018_posted_on();
		?> | <?php gcc_wp_2018_entry_footer(); ?> </strong></p>
		<?php endif; ?>
	</div>
	<div class="crumbs-container">
		<nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>" role="navigation">
			<div title="breadcrumbs trail">
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
						<a href="<?php _e('/success/', 'gcc-wp-2018'); ?>">
							<?php _e('Success Stories', 'gcc-wp-2018'); ?>
						</a>
					</li>
					<li role="menuitem">
						<?php the_title(); ?>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<!--Page Content-->
<div class="row gutter-small expanded content-area">
	<div class="columns small-12 medium-9">
		<div class="entry-content" id="main" tabindex="0">
			<h2><?php the_field( 'story_heading' ); ?></h2>
			
			<?php // ACF Image Object
			$image     = get_field( 'story_image' );
			$alt       = $image['alt'];
			$imageSize = $image['sizes'][ 'large' ];
			
			echo '<img src="' . $imageSize . '" alt="' . $alt . '" style="margin-bottom: 20px;" />';
			?>
	<?php if( get_field('featured_quote') ): ?>			

	<div class="callout secondary">
				
				<?php the_field( 'featured_quote' ); ?>
				
			</div>
		   <?php endif; ?>
			<?php the_field( 'success_story_content' ); ?>
			
				<?php if( get_field('video_url') ): ?>		
			<h3><?php _e('Watch Story', 'gcc-wp-2018'); ?></h3>
			<div class="flex-video widescreen"><iframe width="560" height="315" src="<?php the_field( 'video_url' ); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
		<?php endif; ?>
			<div class="row expanded" data-equalizer data-equalize-on="large">
				<hr>
				<h3><?php _e('Other Stories', 'gcc-wp-2018'); ?></h3>
				<?php
				$this_post = $post->ID;
				$args =  array (
				'post_type' => 'success_stories',
				'posts_per_page'=>4,
				'order' => 'ASC',
				'orderby'        => 'rand',
				'post__not_in' => array($this_post)
				);
				// the query
				$the_query = new WP_Query( $args ); ?>
				<?php if ( $the_query->have_posts() ) : ?>
				<!-- pagination here -->
				<!-- the loop -->
				<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="small-12 medium-12 large-6 columns">
					<a href="<?php the_permalink(); ?>" class="stories">
						<div class="card">
							<?php // ACF Image Object
							$image     = get_field( 'story_image' );
							$alt       = $image['alt'];
							$imageSize = $image['sizes'][ 'large' ];
							echo '<img src="' . $imageSize . '" alt="' . $alt . '" />';
							?>
							
							<div class="card-section" data-equalizer-watch>
								<h3><?php the_title(); ?></h3>
							</div>
						</div>
					</a>
					
				</div>
				<?php endwhile; ?>
				<!-- end of the loop -->
				<!-- pagination here -->
				<?php wp_reset_postdata(); ?>
				<?php else : ?>
				<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
				<?php endif; ?>
				
				</div><!--.otherstories-->
			</div>
			
		</div>
		<aside class="small-12 medium-12 large-3 columns right page-nav hide-for-print" id="section-menu"  data-toggler="hide">
			<?php dynamic_sidebar('admissions-widgets'); ?>
		</aside>
		</div><!--.pagecontent-->
		<?php endwhile; // End of the loop. ?>
	</article>
	<?php
	get_footer();