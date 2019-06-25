<?php // if the page has a featured image
if  (has_post_thumbnail( ) )  { ?>
<header>
  <div class="hero-section-text">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <?php gcc_wp_2018_page_icons() ?>
  </div>
  <div class="row expanded crumbs-container">
    <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>">
      <?php the_breadcrumb() ?>
    </nav>
  </div>
  <div class="hero-section hide-for-print" id="big-featured-image" data-toggler="hide" >
    <?php the_post_thumbnail('', array ('alt' => false));  ?>
  </div>
</header>
<?php  }  else {  //.pagesubbanner
// if page doesn't have a featured image
?>
<header class="row gutter-small expanded">
  <div class="hero-section-">
    <?php //if the child page doesn't have a featured images
    //gcc_featured_image_on_child(); ?>
    <div class="hero-section-text">
      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </div>
    <div class="crumbs-container show-for-medium">
      <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>" aria-label="Breadcrumb">
        <?php the_breadcrumb() ?>
      </nav>
    </div>
  </div>
</header>
<?php } ?>