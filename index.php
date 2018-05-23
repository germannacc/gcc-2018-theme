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
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php // if the page has a featured image
  if  (has_post_thumbnail( $post->ID ) )  { ?>

  <div class="row gutter-small expanded">

  <header class="hero-section">

      <?php the_post_thumbnail(); ?>

      <div class="hero-section-text">
        <h1 class="entry-title"><?php esc_html_e('Germanna Highlights', 'gccwp-2018') ?></h1>
      </div>

    <div class="row expanded crumbs-container">

      <nav aria-label="<?php _e('You are here:', 'gccwp-2018');?>" role="navigation">
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
                <?php echo $post_title; ?>
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

  <header class="hero-section-plain">

    <div class="hero-section-text">
      <h1 class="entry-title"><?php esc_html_e('Germanna Highlights', 'gccwp-2018') ?></h1>
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
                <?php echo $post_title; ?>
            </li>
        </ul>
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
