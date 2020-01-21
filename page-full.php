<?php
//Names the page template for each section
/*
Template Name: Full Width
*/
get_header(); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php
  while ( have_posts() ) : the_post(); ?>
  <?php //Page Heading
  get_template_part( 'template-parts/content', 'page-heading' );
  ?>
  <div class="row gutter-small expanded content-area">
    <div class="small-12 columns">
      <div class="entry-content" id="main" tabindex="0">
        <?php //Page Heading
        get_template_part( 'template-parts/content', 'page-alert' );
        ?>
        <?php
        the_content();
        ?>
      </div>
    </div>
    <footer class="entry-footer">
<?php $u_time = get_the_time('U');
$u_modified_time = get_the_modified_time('U');
if ($u_modified_time >= $u_time + 86400) {
echo "<p>Last modified on ";
  the_modified_time('F j, Y');
"</p> "; }  ?>
      <?php gcc_wp_2018_entry_footer(); ?>
      </footer><!-- .entry-footer -->
    </div>
    <?php endwhile; // End of the loop. ?>
  </article>
  <?php
  get_footer();