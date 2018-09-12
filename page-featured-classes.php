<?php
//Names the page template for each section
/*
Template Name: Featured Classes
*/
get_header(); ?>

 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

 <?php
 	while ( have_posts() ) : the_post(); ?>

 		<div class="row gutter-small expanded content-area">

      <div class="small-12 columns">



      <?php
          the_content();
      ?>



    </div>



      <footer class="entry-footer">
        <?php gcc_wp_2018_entry_footer(); ?>
      </footer><!-- .entry-footer -->


 		</div>

 <?php endwhile; // End of the loop. ?>

 </article>

 <?php
 get_footer();
