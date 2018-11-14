<?php
//Names the page template for each section
/*
Template Name: Workforce Highlights
*/
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
  	while ( have_posts() ) : the_post(); ?>

  		<?php //Page Heading
  		get_template_part( 'template-parts/content', 'page-heading' );
  		?>

  		<!--Page Content-->
  		<div class="row gutter-small expanded content-area">

        <div class="small-12 medium-8 large-9 gutter-small entry-content" id="main" tabindex="0">

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

  			<?php get_sidebar();?>

  		</div><!--.pagecontent-->

  <?php endwhile; // End of the loop. ?>


</article>

<?php
get_footer();
