<?php
/**
 * The template for displaying all default page template.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gccwp-2018
 */
 get_header(); ?>

 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

 <?php
 	while ( have_posts() ) : the_post(); ?>



    <div class="hero-section-text">
       <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </div>

    <div class="row expanded crumbs-container">

          <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>">
            <?php the_breadcrumb() ?>
          </nav>

    </div>

 		<!--Page Content-->
 		<div class="row expanded content-area">

      <div class="small-12 medium-9 float-left columns">

        <?php // if the page has a featured image
        if  (has_post_thumbnail( ) )  { ?>

        <header class="hero-section">

        <?php the_post_thumbnail('', array ('alt' => false));  ?>

        </header>


          <?php  }  else {  //.pagesubbanner
          // if page doesn't have a featured image
          ?>


          <?php } ?>

     <div class="entry-content">

      <?php //Page Heading
      get_template_part( 'template-parts/content', 'page-alert' );
      ?>

      <?php
        the_content();
      ?>

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
