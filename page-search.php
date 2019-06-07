<?php
//Names the page template for each section
/*
Template Name: Search
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php //Page Heading
  get_template_part( 'template-parts/content', 'page-heading' );
  ?>
  <div class="row gutter-small expanded content-area">
    <div class="small-12 columns">
      <div class="entry-content" id="main" tabindex="0">
        <?php //Page Heading
        get_template_part( 'template-parts/content', 'page-alert' );
        ?>
      </div>
    </div>
    <footer class="entry-footer">
      <?php gcc_wp_2018_entry_footer(); ?>
      </footer><!-- .entry-footer -->
    </div>
  </article>
  <?php
  get_footer();