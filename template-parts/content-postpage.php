<div class="small-12 medium-9">

  <?php

  $args =  array (

  'post_type' => 'post',
  'paged' => get_query_var('paged'),
  'posts_per_page'=>10,

  );
  ?>

  <?php

  $query = new WP_Query( $args ); ?>

  <?php if ( $query->have_posts() ) : ?>

  <?php while ( $query->have_posts() ) : $query->the_post();?>

  <?php if ( has_post_thumbnail() ) : ?>
    <div class="row entry-content">
    <div class="medium-4 columns">

        <?php gcc_wp_2018_post_thumbnail(); ?>

    </div>
    <div class="medium-8 columns">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php if ( 'post' === get_post_type() ) : ?>
      <div class="entry-meta float-right">
        <p><strong><span class="fa fa-calendar" aria-hidden="true"></span><?php
        gcc_wp_2018_posted_on();
        ?> </strong></p>
      </div><!-- .entry-meta -->
   <?php endif; ?>
    <p><?php the_excerpt(
      sprintf(
      			wp_kses(
      				/* translators: %s: Name of current post. Only visible to screen readers */
      				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'us_backup' ),
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

    <hr/>


  <?php else: ?>

    <div class="row entry-content">
    <div class="medium-12 columns">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
    <?php if ( 'post' === get_post_type() ) : ?>
      <div class="entry-meta float-right">
        <p><strong><span class="fa fa-calendar" aria-hidden="true"></span><?php
        gcc_wp_2018_posted_on();
        ?> </strong></p>
      </div><!-- .entry-meta -->
  <?php endif; ?>
    <p><?php the_excerpt(

      sprintf(
      			wp_kses(
      				/* translators: %s: Name of current post. Only visible to screen readers */
      				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'us_backup' ),
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

    <hr/>


  <?php endif; ?>

      <?php endwhile;

       the_posts_navigation();

      ?>

      <?php wp_reset_postdata(); ?>

      <?php else : ?>

      <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

      <?php endif; ?>


</div>
