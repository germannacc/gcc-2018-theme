<div class="row expanded promotion" data-equalizer id="promotion-events">
<?php
	$args =  array (
	'post_type' => 'event_promotions',
	'paged' => get_query_var('paged'),
	'posts_per_page'=>3,
	);
	?>
	<?php
	$query = new WP_Query( $args ); ?>
	
	<?php if ( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : $query->the_post();?>
<div class="column small-12 medium-6 large-4 promotion-container">
<div class="card card-<?php the_field( 'promotion_event_color' ); ?>"  data-equalizer-watch>

<?php // ACF Image Object

$image = get_field('promotion_event_image');
// vars
$url = $image['url'];

?>

<div class="card-image" style="background-image: url('<?php echo $url ?>');"></div>
  
  <div class="card-section">
	<?php the_title('<h2>', '</h2>', 'gcc-wp-2018') ?>

<?php if( get_field('promotion_event_date') ): ?>
  	<p class="promotion-date"><?php the_field( 'promotion_event_date' ); ?></p>
<?php endif; ?>

    <p class="promotion-description"><?php the_field( 'promotion_event_description' ); ?></p>
    <a class="button small" href="<?php the_field( 'promotion_event_button_url' ); ?>"><?php the_field( 'promotion_event_button_text' ); ?></a>
  </div>
</div>
</div>

	<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
	<?php else : ?>
	
	<?php endif; ?>

</div>