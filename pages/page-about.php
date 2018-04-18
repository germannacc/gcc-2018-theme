<?php
//Names the page template for each section
/*
Template Name: About Germanna
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

	      <?php
				$post_id = 5447;
				$queried_post = get_post($post_id);
				$content = $queried_post->post_content;
				$content = apply_filters('the_content', $content);
				if ($content) { ?>
						<div class='alert-box alert'>
							<?php echo "$content"; ?>
							<a href='#' class='close' aria-hidden="true" role="button">
								<span class='icon-remove-circle'></span>
						  </a>
						</div>
					<?php
					}
					else {
					}
					?>

	      <?php //Page with Sidebar Template
	      get_template_part( 'template-parts/content', 'sidebarpage' ); ?>

	      <?php //Template Sidebar
	      get_template_part( '/sidebars/default-sidebar' ); ?>

    </div><!--.pagecontent-->

<?php endwhile; // End of the loop. ?>

</article>

<?php
get_footer();
