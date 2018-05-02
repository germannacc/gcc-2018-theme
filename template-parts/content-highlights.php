<?php
//highlights section
$highlights_heading = get_field('highlights_heading');
 ?>


<div id="highlights" class="row expanded" data-equalizer>

<div class="highlights-content">

<h2  class="text-center"><?php the_field('highlights_heading'); ?></h2>

<div class="large-8 columns">

  <?php get_template_part( 'template-parts/content', 'latest-post' );
  ?>
  
</div>

<div class="large-4 columns">

  <?php get_template_part( 'template-parts/content', 'trending' );
  ?>

</div>

</div>

</div>
