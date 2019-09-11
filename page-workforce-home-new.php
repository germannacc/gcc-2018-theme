<?php
/**
* Template Name: Workforce Home New
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package gccwp-2018
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
  while ( have_posts() ) : the_post(); ?>
  <?php //Page Heading
  get_template_part( 'template-parts/content', 'page-heading' );
  ?>
  <div class="row expanded gutter-small content-area">
   
    <div class="small-12 medium-12 large-9 float-left columns" >

      <?php putRevSlider( 'workforce-slider' ); ?>

      <div class="entry-content" id="main" tabindex="0">
      
      <?php get_template_part( 'template-parts/content', 'workforce-solutions' ); ?>

    <?php get_template_part( 'template-parts/content', 'workforce-newsletter' ); ?>

      <div data-equalizer data-equalize-by-row="true" data-equalize-on="medium">

       <h2><?php the_field('workforce_highlights_heading'); ?></h2>

         <?php
            the_content();
         ?>

        <?php get_template_part( 'template-parts/content', 'workforce-highlights' ); ?>

      </div>


      <footer class="entry-footer">
          <?php gcc_wp_2018_entry_footer(); ?>
      </footer><!-- .entry-footer -->


      </div>
    </div>
    
    <?php get_sidebar();?>
    
    <footer class="entry-footer">
      <?php gcc_wp_2018_entry_footer(); ?>
    </footer><!-- .entry-footer -->
  
  </div><!--.pagecontent-->
  
  <?php endwhile; // End of the loop. ?>
</article>
    <?php
    get_footer();