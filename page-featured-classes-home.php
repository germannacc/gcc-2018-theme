<?php
//Names the page template for each section
/*
Template Name: Featured Classes Home
*/
get_header(); ?>

 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

 <?php
 	while ( have_posts() ) : the_post(); ?>


  <?php //Page Heading
  get_template_part( 'template-parts/content', 'page-heading' );
  ?>

 		<div id="pathways" class="row gutter-small expanded content-area">


      <div class="pathways-content">

      <div class="small-12 columns">

        <div class="entry-content" id="main" tabindex="0">

          <?php
          $args =  array (

          'post_type' => 'gcc_classes',
          'posts_per_page' => -1

          );
          ?>

          <?php $query = new WP_Query( $args ); ?>

          <?php if ( $query->have_posts() ) : ?>

          <?php while ( $query->have_posts() ) : $query->the_post();?>

            <?php // if the page has a featured image
            if  ( has_post_thumbnail())  { ?>

          <div class="medium-4 large-4 columns" data-equalizer-watch>


            <div class="card">
              <a href="<?php the_permalink(); ?>">


                <?php the_post_thumbnail(); ?>


               <div class="card-section">
                <?php the_title('<h3>', '</h3>'); ?>
                <span class="fa fa-2x fa-search-plus more-icon"></span>
              </div>
              </a>
            </div>


         </div>

          <?php } else {



          } ?>

          <?php endwhile; ?>

          <?php wp_reset_postdata(); ?>

          <?php else : ?>

          	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018' ); ?></p>

          <?php endif; ?>

    </div>


    </div>

  </div>


      <footer class="entry-footer">
        <?php gcc_wp_2018_entry_footer(); ?>
      </footer><!-- .entry-footer -->


 		</div>

 <?php endwhile; // End of the loop. ?>

 </article>

 <?php
 get_footer();
