<?php
/**
* Donate page template.
* Template Name: Donate
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
  <div class="row expanded content-area">
    <div class="small-12 medium-12 large-9 float-left columns" >
      <?php // if the page has a featured image
      if  (has_post_thumbnail( ) )  { ?>
      <div class="hero-section hide-for-print visible-for-medium-up hidden-for-small-only" id="featured-image" data-toggler="hide" >
        <?php the_post_thumbnail('', array ('alt' => false));  ?>
      </div>
      <?php  }  else {  //.pagesubbanner
      // if page doesn't have a featured image
      ?>
      <?php } ?>
      <div class="entry-content" id="main" tabindex="0">
        <?php //Page Heading
        get_template_part( 'template-parts/content', 'page-alert' );
        ?>
        <?php
        the_content();
        ?>

        <div id="bbox-root"></div>
<script type="text/javascript">
       window.bboxInit = function () {
           bbox.showForm('7ac5f578-b467-4690-815f-dc7eab20bca5');
       };
       (function () {
           var e = document.createElement('script'); e.async = true;
           e.src = 'https://bbox.blackbaudhosting.com/webforms/bbox-min.js';
           document.getElementsByTagName('head')[0].appendChild(e);
       } ());
</script>

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