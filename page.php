<?php
/**
 * The template for displaying all pages
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

    <div class="row gutter-small expanded hero-section">

    <?php  get_template_part( 'template-parts/content', 'page-heading' );
 ?>

    </div><!--.page-heading-->

    <div class="row expanded crumbs-container">

          <nav aria-label="You are here:" role="navigation">
            <ul class="breadcrumbs">
              <li><a href="#">Home</a></li>
              <li><a href="#">Features</a></li>
              <li class="disabled">Gene Splicing test</li>
              <li><span class="show-for-sr">Current: </span> Cloning</li>
            </ul>
          </nav>

    </div>

  <!--Page Content-->
<?php  get_template_part( 'template-parts/content', 'page' ); ?>

<?php endwhile; // End of the loop. ?>

</article>

<?php get_footer();
