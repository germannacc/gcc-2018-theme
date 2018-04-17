<article>

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

    <div class="row">
    <div class="medium-4 columns">
    <img src="https://placehold.it/600x370&text=Featured Image" alt="image for article" alt="article preview image">
    </div>
    <div class="medium-8 columns">
    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

    <p><?php the_excerpt(); ?></p>
    </div>
    </div>

    <hr>

<?php endwhile; ?>

  <?php wp_reset_postdata(); ?>

<?php else : ?>

	<p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>

<?php endif; ?>

</article>
