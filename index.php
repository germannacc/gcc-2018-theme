<?php
/**
 * The template for displaying all post.
 *
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gccwp-2018
 */
get_header();
$post_page_featured_image = get_field('post_page_featured_image', 'option');
$post_page_title= get_field('post_page_title', 'option');

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

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


<?php  if ( !empty( $post_page_featured_image ) ) { ?>

  <div class="row gutter-small expanded">

  <header class="hero-section hero-section-single">

<img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

      <div class="hero-section-text">
        <h1><?php echo $post_page_title; ?></h1>
      </div>

    <div class="row expanded crumbs-container show-for-medium">

      <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>" role="navigation">
          <?php gcc_wp_2018_post_page_breadcrumbs(); ?>
      </nav>

    </div>

  </header>

  </div>
  <?php  }  else {  //.pagesubbanner
  // if page doesn't have a featured image
  ?>
  <div class="row gutter-small expanded">

  <header class="hero-section-plain">

      <?php //if the child page doesn't have a featured images
      //gcc_featured_image_on_child(); ?>

      <div class="hero-section-text">
        <h1><?php echo $post_page_title; ?></h1>
      </div>

      <div class="crumbs-container-plain">
        <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>" role="navigation">
          <?php gcc_wp_2018_post_page_breadcrumbs(); ?>
        </nav>
      </div>

  </header>

  </div>

<?php } ?>

       <?php //Display all post content
       get_template_part( 'template-parts/content', 'postpage' );
       ?>

</article>

<?php
get_footer();
