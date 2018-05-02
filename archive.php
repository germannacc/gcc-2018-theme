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


		<div class="row gutter-small expanded hero-section">

		    <header class="hero-section">
		        <img src="https://placeimg.com/640/480/nature" alt="page heading" width="640" height="300">
		        <div class="hero-section-text">

							<?php
								the_archive_title( '<h1 class="page-title screen-reader-text">', '</h1>' );
								the_archive_description( '<div class="archive-description">', '</div>' );
							?>

		        </div>
		    </header>

		</div>
		<!--.page-heading-->

		<div class="row expanded crumbs-container">

		    <nav aria-label="<?php _e('You are here:');?>" role="navigation">
		        <ul class="breadcrumbs">

		            <?php $home_page = get_the_title( get_option('page_on_front'));
								$post_title = get_the_title( get_option('page_for_posts', true) );

								 ?>
		            <li role="menuitem">
		                <a href="<?php echo get_site_url(); ?>">
		                    <?php echo $home_page; ?>
		                </a>
		            </li>
								<li role="menuitem">
										<a href="<?php  echo get_permalink( get_option( 'page_for_posts' ) ); ?>">
												<?php echo $post_title; ?>
										</a>
								</li>
		            <li role="menuitem" class="disabled">
		                <?php 	the_archive_title(); ?>
		            </li>


		        </ul>
		    </nav>

		</div>


				 <!--Page Content-->
				 <div class="row gutter-small expanded content-area">

				 <div class="small-12 medium-9  entry-content">

								<?php
								/* Start the Loop */
								while ( have_posts() ) : the_post();

										/*
										 * Include the Post-Type-specific template for the content.
										 * If you want to override this in a child theme, then include a file
										 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
										 */

								?>

	    <a href="<?php the_permalink(); ?>"><?php the_title('<h2 class="screen-reader-text">', '</h2>') ?></a>

			<?php if ( 'post' === get_post_type() ) : ?>
	      <div class="entry-meta float-right">
	        <p><strong><span class="fa fa-calendar" aria-hidden="true"></span><?php
	        gcc_wp_2018_posted_on();
	        ?> </strong></p>
	      </div><!-- .entry-meta -->
	  <?php endif; ?>

				 <?php
				     the_excerpt();
				 ?>

			<?php endwhile;

			the_posts_navigation(); ?>

		<?php	else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>



				 </div>



		<?php //Template Sidebar
 	 get_template_part( '/sidebars/default-sidebar' ); ?>

	 <footer class="entry-footer">
		 <?php gcc_wp_2018_entry_footer(); ?>
	 </footer><!-- .entry-footer -->


	 </div>

<?php
get_footer();
