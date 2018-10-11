<?php // if the page has a featured image
if  (has_post_thumbnail( ) )  { ?>

<header class="hero-section">

<?php the_post_thumbnail('', array ('alt' => false));  ?>

</header>

<div class="hero-section-text">
   <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
</div>

<div class="row expanded crumbs-container">

      <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>">
        <?php the_breadcrumb() ?>
      </nav>

</div>


<?php  }  else {  //.pagesubbanner
// if page doesn't have a featured image
?>

<div class="row gutter-small expanded">

<header class="hero-section-plain">


  <?php //if the child page doesn't have a featured images
  //gcc_featured_image_on_child(); ?>

  <div class="hero-section-text">

     <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
  </div>

  <div class="crumbs-container-plain  show-for-medium">

        <nav aria-label="<?php _e('You are here:');?>" aria-label="Breadcrumb">
          <?php the_breadcrumb() ?>
        </nav>

  </div>
</header>


</div>

<?php } ?>
