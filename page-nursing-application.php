<?php
//Names the page template for each section
/*
Template Name: Nursing Applications
*/
get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
  while ( have_posts() ) : the_post(); ?>

    <?php //Page Heading
    get_template_part( 'template-parts/content', 'page-heading' );
    ?>

    <!--Page Content-->
    <div class="row gutter-small expanded content-area">

      <?php //Page with Sidebar Template
      get_template_part( 'template-parts/content', 'sidebarpage' ); ?>

      <?php //Template Sidebar
      get_template_part( '/sidebars/default-sidebar' ); ?>

    </div><!--.pagecontent-->

<?php endwhile; // End of the loop. ?>

</article>

<?php
get_footer();
