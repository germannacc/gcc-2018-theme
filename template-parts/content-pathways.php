<?php
//highlights section
$pathways_heading = get_field('pathways_heading');
$pathway_image = get_field('pathway_image');
$pathway_url = get_field('pathway_url');
 ?>
<div id="pathways" class="row gutter-small expanded">

<div class="pathways-content">

<h2 class="text-center"><?php the_field('pathways_heading'); ?></h2>

<div class="row gutter-small pathways-row-1 expanded">

<div class="columns small-12">

<?php
$args =  array (

'post_type' => 'pathways_home',
'posts_per_page' => -1

);
?>

<?php $query = new WP_Query( $args ); ?>

<?php if ( $query->have_posts() ) : ?>

<?php while ( $query->have_posts() ) : $query->the_post();?>

<div class="medium-6 large-3 columns" data-equalizer-watch>

  <div class="card">
    <a href="<?php the_field('pathway_url');?>">

        <?php
        $pathway_image = get_field('pathway_image');

        if( !empty($pathway_image) ):

        	// vars
        	$url = $pathway_image['url'];
        	$alt = $pathway_image['alt'];

        	// thumbnail
        	$size = 'large';
        	$thumb = $pathway_image['sizes'][ $size ];
        	$width = $pathway_image['sizes'][ $size . '-width' ];
        	$height = $pathway_image['sizes'][ $size . '-height' ];
             ?>
                    <img src="<?php echo $thumb; ?>" alt="<?php echo $alt;?>" width="<?php echo $width;?>" height="<?php echo $height;?>">

      <?php endif; ?>

     <div class="card-section">
      <?php the_title('<h3>', '</h3>'); ?>
      <span class="fa fa-2x fa-search-plus more-icon"></span>
    </div>
    </a>
  </div>

</div>

<?php endwhile; ?>

<?php wp_reset_postdata(); ?>

<?php else : ?>

	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018' ); ?></p>

<?php endif; ?>

</div>

</div>

</div>

</div>
