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


  <div class="row gutter-small expanded">

  <header class="hero-section">

      <img width="3333" height="2500" src="<?php esc_html_e('https://germannacc.staging.wpengine.com/wp-content/uploads/2018/05/gcc-fac-rooftop-featured-image.jpg', 'gcc-wp-2018'); ?>" alt="<?php the_title(); ?>" sizes="(max-width: 3333px) 100vw, 3333px"   />


      <div class="hero-section-text">
        <h1 class="entry-title"><?php esc_html_e('Germanna Highlights & News', 'gccwp-2018') ?></h1>
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


       <?php //Display all post content
       get_template_part( 'template-parts/content', 'postpage' );
       ?>

</article>

<?php
get_footer();
