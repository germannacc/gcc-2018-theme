<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package gccwp-2018
 */

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

<?php
   while ( have_posts() ) : the_post(); ?>

	 <div class="row gutter-small expanded hero-section">

	 <header class="hero-section">
	   <img src="https://placeimg.com/640/480/nature" alt="page heading" width="640" height="300">
	   <div class="hero-section-text">
	      <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<?php if ( 'post' === get_post_type() ) : ?>
					<div class="entry-meta float-right">
						<p><strong><span class="fa fa-calendar" aria-hidden="true"></span><?php
						gcc_wp_2018_posted_on();
						?> </strong> | <?php gcc_wp_2018_entry_footer(); ?></p>

					</div><!-- .entry-meta -->
			<?php endif; ?>
	   </div>

	 </header>

	 </div><!--.page-heading-->

	 <div class="row expanded crumbs-container">

	       <nav aria-label="<?php _e('You are here:');?>" role="navigation">
	         <ul class="breadcrumbs">

	           <?php $home_page = get_the_title( get_option('page_on_front')); ?>
	               <li role="menuitem"><a href="<?php echo get_site_url(); ?>"><?php echo $home_page; ?></a></li>

	               <?php
	               // if there is a parent, display the link to go back to parent page
	               $parent_title = get_the_title( $post->post_parent );
	               if ( $parent_title != the_title('', '', false) ) { ?>
	               <li role="menuitem" class="disabled"><a href="<?php echo get_permalink( $post->post_parent ) ?>"><?php echo $parent_title; ?></a></li>
	               <?php } else if ( $parent_title == the_title('', '', false)) { ?>

	               <li class="last" role="menuitem"><?php echo $parent_title; ?></li>
	               <?php }
	               // if the page is a child page display page title
	               if
	               ( is_page() && $post->post_parent != the_title('', '', false) ) { ?>
	               <?php the_title('<li class="last">', '</li>'); ?>
	               <?php } ?>

	         </ul>
	       </nav>

	 </div>


     <!--Page Content-->
     <div class="row gutter-small expanded content-area">

     <div class="columns small-12 medium-9">

			 <div class="entry-content">

			 <?php
			the_content( sprintf(
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
		) );

      // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

	?>

 </div>
</div>

<?php //Template Sidebar
get_template_part( '/sidebars/default-sidebar' ); ?>

</div><!--.pagecontent-->

<?php if ( get_edit_post_link() ) : ?>

	<footer class="entry-footer">
		<?php gcc_wp_2018_entry_footer(); ?>
	</footer><!-- .entry-footer -->

<?php endif; ?>

<?php endwhile; // End of the loop. ?>

 </article>

<?php
get_footer();
