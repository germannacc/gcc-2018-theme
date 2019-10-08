<?php
/*
Template Name: Pathway Descriptions
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
      get_template_part( 'template-parts/content', 'fullpage' ); ?>


    </div><!--.pagecontent-->

<?php endwhile; // End of the loop. ?>

</article>

<?php
get_footer();
