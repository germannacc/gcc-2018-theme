<div class="row expanded promotion" data-equalizer data-equalize-on="medium" id="promotion-events">
<?php
	$args =  array (
	'post_type' => 'event_promotions',
	'paged' => get_query_var('paged'),
	'posts_per_page'=>2,
	);
	?>
	<?php
	$query = new WP_Query( $args ); ?>
	
	<?php if ( $query->have_posts() ) : ?>
	<?php while ( $query->have_posts() ) : $query->the_post();?>
<div class="column small-12 medium-6 promotion-container">
<div class="card card-<?php the_field( 'promotion_event_color' ); ?>"  data-equalizer-watch>

<?php 

$image = get_field('promotion_event_image');

if( !empty($image) ): 

	// vars
	$url = $image['url'];
	$alt = $image['alt'];

	// thumbnail
	$size = 'large';
	$thumb = $image['sizes'][ $size ];
	$width = $image['sizes'][ $size . '-width' ];
	$height = $image['sizes'][ $size . '-height' ];

?>

<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />


<?php endif; ?>
  
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