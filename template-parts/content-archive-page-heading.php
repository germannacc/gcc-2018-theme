<header class="hero-section hero-section-single">
  <?php
  $post_page_title = get_field('post_page_title');
  $post_page_featured_image = get_field('post_page_featured_image', 'option');

  if( !empty($box_1_image) ):

    // vars
    $url = $post_page_featured_image['url'];
    $title = $post_page_featured_image['title'];
    $alt = $post_page_featured_image['alt'];
    $caption = $post_page_featured_image['caption'];

    // thumbnail
    $size = 'large';
    $thumb = $post_page_featured_image['sizes'][ $size ];
    $width = $post_page_featured_image['sizes'][ $size . '-width' ];
    $height = $post_page_featured_image['sizes'][ $size . '-height' ];
  ?>


<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

<?php endif; ?>

    <div class="hero-section-text" style="width: 75%;">
      <h1><?php the_field('post_page_title'); ?>
       </h1>
       <p><?php echo get_the_archive_title(); ?></p>

    </div>

  <div class="row expanded crumbs-container show-for-medium">

    <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>" role="navigation">

      <?php gcc_wp_2018_archive_breadcrumbs(); ?>

    </nav>

  </div>

</header>
