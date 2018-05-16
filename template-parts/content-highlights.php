<?php
//highlights section
$highlights_heading = get_field('highlights_heading');
 ?>


<div id="highlights" class="row expanded" data-equalizer>

<div class="highlights-content">

<h2  class="text-center"><?php the_field('highlights_heading'); ?></h2>

<div class="large-8 columns" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-once="true">

  <?php get_template_part( 'template-parts/content', 'latest-post' );
  ?>

  <a href="<?php esc_html_e('/highlights/'); ?>" class="button expanded"><?php esc_html_e('View All Highlights'); ?></a>


</div>

<div class="large-4 columns"  data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-once="true">

  <?php get_template_part( 'template-parts/content', 'trending' );
  ?>

</div>

</div>


</div>
