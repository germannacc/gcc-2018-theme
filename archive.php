<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package gccwp-2018
 */

get_header(); ?>

	<?php
		if ( have_posts() ) : ?>

		<header class="hero-section">

		      <img width="3333" height="2500" src="<?php esc_html_e('https://germannacc.staging.wpengine.com/wp-content/uploads/2018/05/gcc-fac-rooftop-featured-image.jpg', 'gcc-wp-2018'); ?>" alt="<?php the_title(); ?>" sizes="(max-width: 3333px) 100vw, 3333px"   />

		  <div class="hero-section-text">
				<?php
				  the_archive_title('<h1>', '</h1>');
					the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</div>

		  <div class="row expanded crumbs-container">

				<nav aria-label="<?php esc_html_e('You are here:', 'gcc-wp-2018');?>" role="navigation">
		        <ul class="breadcrumbs">

		            <?php $home_page = get_the_title( get_option('page_on_front'));
								$post_title = get_the_archive_title();

								 ?>
		            <li role="menuitem">
		                <a href="<?php echo get_site_url(); ?>">
		                    <?php echo $home_page; ?>
		                </a>
		            </li>
								<li role="menuitem">
										<a href="<?php esc_html_e('/highlights/', 'gcc-wp-2018');?>">
												<?php _e('Highlights', 'gcc-wp-2018'); ?>
										</a>
								</li>
								<li role="menuitem">
										<a href="<?php  echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
												<?php echo $post_title; ?>
										</a>
								</li>
		            <li role="menuitem" class="disabled">
		                <?php the_title(); ?>
		            </li>


		        </ul>
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

			<h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

			<?php if ( 'post' === get_post_type() ) : ?>
	      <div class="entry-meta float-right">
	        <p><strong><span class="fa fa-calendar" aria-hidden="true"></span><?php
	        gcc_wp_2018_posted_on();
	        ?> </strong></p>
	      </div><!-- .entry-meta -->
	  	<?php endif; ?>
			<p><?php the_excerpt(

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
	 </div>


		<?php	else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

  <?php //Template Sidebar
 	 get_template_part( '/sidebars/archive-sidebar' ); ?>

	 <footer class="entry-footer">
		 <?php gcc_wp_2018_entry_footer(); ?>
	 </footer><!-- .entry-footer -->


<?php
get_footer();
