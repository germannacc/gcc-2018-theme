<!--Page Content-->
<div class="row gutter-small expanded content-area">

<div class="small-12 medium-9 entry-content" id="main" tabindex="0">

  <?php
  $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

  $args =  array (

  'post_type' => 'post',
  'posts_per_page'=>-5,
  'paged'          => $paged
  );
  ?>

  <?php

  $query = new WP_Query( $args ); ?>

  <?php if ( $query->have_posts() ) : ?>

  <?php while ( $query->have_posts() ) : $query->the_post();?>

  <?php if ( has_post_thumbnail() ) : ?>

      <div class="row latest-post">

      <div class="medium-12 columns">
          <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p><?php the_excerpt(
        sprintf(
        			wp_kses(
        				/* translators: %s: Name of current post. Only visible to screen readers */
        				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gcc-wp-2018' ),
        				array(
        					'span' => array(
        						'class' => array(),
        					),
        				)
        			),
        			get_the_title()
        		)

      ); ?></p>

      </div>
      </div>

    <?php else: ?>

      <div class="row latest-post">
      <div class="medium-12 columns">
<h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <p><?php the_excerpt(

        sprintf(
        			wp_kses(
        				/* translators: %s: Name of current post. Only visible to screen readers */
        				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gcc-wp-2018' ),
        				array(
        					'span' => array(
        						'class' => array(),
        					),
        				)
        			),
        			get_the_title()
        		)

      ); ?></p>

      </div>
      </div>

  <?php  endif; ?>

<?php endwhile;  ?>


      <?php wp_reset_postdata(); ?>

      <?php else : ?>

      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018' ); ?></p>

      <?php endif; ?>


      <div class="nav-previous alignleft"><?php next_posts_link( '<span class="fa fa-chevron-left" aria-hidden="true" style="padding-right: .5rem;"></span>Older posts' ); ?></div>
      <div class="nav-next alignright"><?php previous_posts_link( 'Newer posts <span class="fa fa-chevron-right" aria-hidden="true" style="padding-left: .5rem;"></span>' ); ?>
      </div>



</div>

<?php //Template Sidebar
get_sidebar(); ?>

</div>
<!--.pagecontent-->
