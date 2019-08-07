<?php
//Names the page template for each section
/*
Template Name: Workforce Highlights
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
  while ( have_posts() ) : the_post(); ?>
  <div class="row expanded">
    <header class="hero-section">
      <?php //if the child page doesn't have a featured images
      //gcc_featured_image_on_child(); ?>
      <div class="hero-section-text">
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </div>
      <div class="row expanded crumbs-container gutter-small">
             <div class="small-12 medium-8 large-9 columns">

        <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>" role="navigation">
          <ul class="breadcrumbs">
            <?php $home_page = get_the_title( get_option('page_on_front'));
            $post_title = get_the_title( get_option('workforce-highlights'));
            ?>
            <li role="menuitem">
              <a href="<?php echo get_site_url(); ?>">
                <?php echo $home_page; ?>
              </a>
            </li>
            <li role="menuitem">
              <a href="<?php esc_html_e('/workforce/', 'gcc-wp-2018'); ?>">
                <?php _e('Workforce', 'gcc-wp-2018') ?>
              </a>
            </li>
            <li role="menuitem">
              <?php echo $post_title; ?>
            </li>
          </ul>
        </nav>
        </div>
   <div class="small-12 medium-4 large-3 columns show-for-landscape">
    <?php gcc_wp_2018_page_icons() ?>
  </div>
      </div>
    </header>
  </div>
  <!--Page Content-->
  <div class="row gutter-small expanded content-area">
    <div class="small-12 medium-12 large-9 gutter-small entry-content" id="main" tabindex="0">
      <?php //Page Heading
      get_template_part( 'template-parts/content', 'page-alert' );
      ?>
      <?php
      the_content();
      ?>
      <?php
      $args =  array (
      'post_type' => 'workforce_news_post',
      'posts_per_page'=>-1,
      );
      ?>
      <?php
      $query = new WP_Query( $args ); ?>
      <?php if ( $query->have_posts() ) : ?>
      <?php while ( $query->have_posts() ) : $query->the_post();?>
      <?php if ( has_post_thumbnail() ) : ?>
      <div class="row latest-post">
        <div class="medium-5 columns">
          <?php gcc_wp_2018_post_thumbnail(); ?>
        </div>
        <div class="medium-7 columns">
          <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <p><?php the_excerpt(); ?></p>
        </div>
      </div>
      <?php else: ?>
      <div class="row latest-post">
        <div class="medium-12 columns">
          <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
          <?php if ( 'workforce_news_post' === get_post_type() ) : ?>
          <div class="entry-meta float-right">
            <p><strong><span class="fa fa-calendar" aria-hidden="true"></span><?php
            gcc_wp_2018_posted_on();
          ?> </strong></p>
          </div><!-- .entry-meta -->
          <?php endif; ?>
          <p><?php the_excerpt(); ?></p>
        </div>
      </div>
      <?php endif; ?>
      <?php endwhile; ?>
      <?php wp_reset_postdata(); ?>
      <?php else : ?>
      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018'); ?></p>
      <?php endif; ?>
    </div>
    <footer class="entry-footer">
      <?php gcc_wp_2018_entry_footer(); ?>
      </footer><!-- .entry-footer -->
      <aside class="small-12 medium-12 large-3 columns right page-nav hide-for-print" id="section-menu"  data-toggler="hide">
        <?php dynamic_sidebar( 'workforce-widgets' ); ?>
      </aside>
      </div><!--.pagecontent-->
      <?php endwhile; // End of the loop. ?>
    </article>
    <?php
    get_footer();