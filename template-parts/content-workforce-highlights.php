<div class="row">
	<?php
	$args =  array (
	'post_type' => 'workforce_news_post',
	'paged' => get_query_var('paged'),
	'posts_per_page'=>4,
	);
	?>
	<?php
	$query = new WP_Query( $args ); ?>
	<?php if ( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : $query->the_post();?>
	<?php if ( has_post_thumbnail() ) : ?>
	<div class="columns medium-6">
		<div class="callout callout-workforce-highlights primary small" data-equalizer-watch>
			<h4 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			<?php the_post_thumbnail( 'full', array('class' => 'callout-image')); ?>
			<p><?php the_excerpt(); ?></p>
		</div>
	</div>
	<?php endif; ?>
	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
	<?php else : ?>
	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018'); ?></p>
	<?php endif; ?>
</div>