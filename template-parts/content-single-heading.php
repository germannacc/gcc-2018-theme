<?php
/**
* Template part for displaying single post heading section in single.php
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*/
?>
<div class="row expanded">
  <header class="hero-section">
    <?php //if the child page doesn't have a featured images
    //gcc_featured_image_on_child(); ?>
    <div class="hero-section-text">
      <h1 class="entry-title"><?php the_title(); ?></h1>
    </div>
    <div class="post-meta">
      <?php if ( 'post' === get_post_type() ) : ?>
    <p><?php the_date();?></p>
  <?php endif; ?>
</div>
<div class="row expanded crumbs-container gutter-small">
     <div class="small-12 medium-8 large-9 columns">    
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
            <a href="<?php  echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
              <?php echo $post_title; ?>
            </a>
          </li>
          <li role="menuitem">
            <?php the_title(); ?>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <div class="small-12 medium-4 large-3 columns show-for-landscape">
    <?php gcc_wp_2018_page_icons() ?>
  </div>
</div>
</header>
</div>