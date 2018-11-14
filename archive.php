<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gccwp-2018
 */
get_header();
$post_page_featured_image = get_field('post_page_featured_image', 'option');
$post_page_title= get_field('post_page_title', 'option');

	// vars
	$url = $post_page_featured_image['url'];
	$title = $post_page_featured_image['title'];
	$alt = $post_page_featured_image['alt'];
	$caption = $post_page_featured_image['caption'];

	// thumbnail
	$size = 'large';
	$thumb = $post_page_featured_image['sizes'][ $size ];
	$width = $post_page_featured_image['sizes'][ $size . '-width' ];
	$height = $post_page_featured_image['sizes'][ $size . '-height' ];
?>

    <?php
		if ( have_posts() ) : ?>

        <header class="hero-section hero-section-single">

            <img src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

            <div class="hero-section-text" style="width: 75%;">
                <h1>
                    <?php echo $post_page_title; ?>
                </h1>
                <p>
                    <?php echo get_the_archive_title(); ?>
                </p>

            </div>

            <div class="row expanded crumbs-container show-for-medium">

                <nav aria-label="<?php _e('You are here:', 'gcc-wp-2018');?>" role="navigation">

                    <?php gcc_wp_2018_archive_breadcrumbs(); ?>

                </nav>

            </div>

        </header>

        <!--Page Content-->
        <div class="row gutter-small expanded content-area">

            <div class="small-12 medium-9 entry-content">

                <?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();

										/*
										 * Include the Post-Type-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
										 */

								?>

                    <div class="row latest-post">
                        <div class="medium-12 columns">


                            <a href="<?php the_permalink(); ?>"><?php the_title('<h2 class="screen-reader-text">', '</h2>') ?></a>

                            <h3 class="post-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>

                            <?php if ( 'post' === get_post_type() ) : ?>
                            <div class="entry-meta">
                                <p>
                                    <strong>
							<?php
	        		gcc_wp_2018_posted_on();
						?>
						<?php if (is_tag()) {
						# code...
						_e('| Posted in:', 'gcc-wp-2018'); echo single_tag_title(); ?>
					</strong></p>
                                <?php } ?>
                                </strong>
                                </p>
                            </div>
                            <!-- .entry-meta -->
                            <?php endif; ?>
                            <p>
                                <?php the_excerpt(

				sprintf(
						 wp_kses(
							 /* translators: %s: Name of current post. Only visible to screen readers */
							 __( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'gcc-wp-2018' ),
							 array(
								 'span' => array(
									 'class' => array(),
								 ),
							 )
						 ),
						 get_the_title()
					 )

			); ?>
                            </p>
                        </div>
                    </div>

                    <?php endwhile;

			the_posts_navigation(); ?>

            </div>


            <?php //Template Sidebar
		 	 get_template_part( '/sidebars/archive-sidebar' ); ?>

            <?php	else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>


        </div>

        <?php
get_footer();
