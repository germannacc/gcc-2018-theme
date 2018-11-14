<div class="row gutter-small expanded">

<header class="hero-section">

  <?php //if the child page doesn't have a featured images
  //gcc_featured_image_on_child(); ?>

  <div class="hero-section-text">

    <?php

global $post;     // if outside the loop

if ( !is_page('directory') && $post->post_parent ) {
    // This is a subpage
    ?>  <h1><?php esc_html_e('Faculty &amp; Staff Directory: ', 'gcc-wp-2018'); the_title(); ?></h1>

<?php } else {
    // This is not a subpage
    the_title('<h1>', '</h1>', 'gcc-wp-2018');
}
?>

  </div>

  <div class="crumbs-container-plain  show-for-medium">

        <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>" aria-label="Breadcrumb">
          <?php the_breadcrumb() ?>
        </nav>

  </div>
</header>


</div>
