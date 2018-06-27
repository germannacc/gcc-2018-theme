<?php
/**
 * Template part for displaying single post heading section in single.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gccwp-2018
 */
?>
<?php // if the page has a featured image
if  ( has_post_thumbnail())  { ?>

<div class="row gutter-small expanded">

<header class="hero-section-single">

    <?php the_post_thumbnail(); ?>

    <div class="hero-section-text">
       <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
       <?php if ( 'post' === get_post_type() ) : ?>
         <div class="entry-meta float-right">
           <p><strong><span class="fa fa-calendar" aria-hidden="true"></span><?php
           gcc_wp_2018_posted_on();
           ?> </strong> | <?php gcc_wp_2018_entry_footer(); ?></p>
         </div>
     <?php endif; ?>
    </div>

  <div class="row expanded crumbs-container show-for-medium">

    <nav aria-label="<?php _e('You are here:');?>" role="navigation">
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
    </nav>

  </div>

</header>

</div>


<?php  }  else {  //.pagesubbanner
// if page doesn't have a featured image
?>


<div class="row gutter-small expanded">

<header class="hero-section-single">

      <img width="3333" height="2500" src="<?php esc_html_e('https://germannacc.staging.wpengine.com/wp-content/uploads/2018/05/gcc-fac-rooftop-featured-image.jpg', 'gcc-wp-2018'); ?>" alt="<?php the_title(); ?>" sizes="(max-width: 3333px) 100vw, 3333px"   />

  <div class="hero-section-text">
     <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
     <?php if ( 'post' === get_post_type() ) : ?>
       <div class="entry-meta float-right">
         <p><strong><span class="fa fa-calendar" aria-hidden="true"></span><?php
         gcc_wp_2018_posted_on();
         ?> </strong> | <?php gcc_wp_2018_entry_footer(); ?></p>
       </div>
   <?php endif; ?>
  </div>

  <div class="crumbs-container-plain">

    <nav aria-label="<?php _e('You are here:');?>" role="navigation">
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
    </nav>

  </div>

</header>

</div>

<?php } ?>
