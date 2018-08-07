<?php
//Names the page template for each section
/*
Template Name: Workforce Home
*/

/*headings*/
$page_heading = get_field('page_heading');
$workforce_highlights_heading = get_field('workforce_highlights_heading');
$social_media_heading = get_field('social_media_heading');
/*boxes*/
$box_1_heading = get_field('box_1_heading');
$box_1_description = get_field('box_1_description');
$box_1_image = get_field('box_1_image');
$box_1_url= get_field('box_1_url');
$box_1_button_text = get_field('box_1_button_text');
$box_2_heading = get_field('box_2_heading');
$box_2_description = get_field('box_2_description');
$box_2_image = get_field('box_2_image');
$box_2_url= get_field('box_2_url');
$box_2_button_text = get_field('box_2_button_text');
$box_3_heading = get_field('box_3_heading');
$box_3_description = get_field('box_3_description');
$box_3_image = get_field('box_3_image');
$box_3_url= get_field('box_3_url');
$box_3_button_text = get_field('box_3_button_text');
$box_4_heading = get_field('box_4_heading');
$box_4_description = get_field('box_4_description');
$box_4_button_text = get_field('box_4_button_text');
$box_4_url= get_field('box_4_url');
$box_5_heading = get_field('box_5_heading');
$box_5_description = get_field('box_5_description');
$box_5_button_text = get_field('box_5_button_text');
$box_5_url= get_field('box_5_url');
/*social media*/
$facebook_url = get_field('facebook_url');
$twitter_url = get_field('twitter_url');
$youtube_url = get_field('youtube_url');
$online_chat_url = get_field('online_chat_url');
/*Extras*/
$highlights_button_text = get_field('highlights_button_text');
$highlights_button_url = get_field('highlights_button_url');
/*Sign up box*/
$sign_up_box_heading = get_field('sign_up_box_heading');
$sign_up_box_description = get_field('sign_up_box_description');
$sign_up_box_action_url = get_field('sign_up_box_action_url');
$sign_up_box_button_text = get_field('sign_up_box_button_text');

get_header(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="row column expanded no-gutter">

	    <?php putRevSlider( 'workforce-slider' ); ?>

	</div>

<?php
	while ( have_posts() ) : the_post(); ?>

 <div id="workforce" class="row expanded" >

 <div class="workforce-explore-content">

	<h1 class="text-center"><?php the_field('page_heading'); ?></h1>

	<div class="row expanded" data-equalizer data-equalize-on="medium">

	 <div class="small-12 medium-4 columns">

		 <div class="callout alert text-center" data-equalizer-watch>
			 <?php //apprentice box
							 if( !empty($box_1_image) ): ?>
							 <img src="<?php echo $box_1_image['url']; ?>" alt="<?php echo $box_1_image['alt']; ?>" height="220" width="330" class="responsive" />
							 <?php endif; ?>

							 <h2><?php echo $box_1_heading; ?></h2>
							 <p class="description"><?php echo $box_1_description; ?></p>

							 <a href="<?php the_field('box_1_url');?>" class="button expanded" ><?php the_field('box_1_button_text'); ?></a>

		 </div>

	 </div>

	 <div class="small-12 medium-4 gutter-small columns" >

		 <div class="callout alert text-center" data-equalizer-watch>
			 <?php //credentials box
				 if( !empty($box_2_image) ): ?>
				 <img src="<?php echo $box_2_image['url']; ?>" alt="<?php echo $box_1_image['alt']; ?>" height="220" width="330" class="responsive" />
				 <?php endif; ?>

				 <h2><?php echo $box_2_heading; ?></h2>

				 <p class="description"><?php echo $box_2_description; ?></p>

				 <a href="<?php the_field('box_2_url');?>" class="button expanded" ><?php the_field('box_2_button_text'); ?></a>
		 </div>

	</div>

	<div class="small-12 medium-4 columns">

		<div class="callout alert  text-center" data-equalizer-watch>
			<?php //tuition assistance box
				if( !empty($box_3_image) ): ?>
				<img src="<?php echo $box_3_image['url']; ?>" alt="<?php echo $box_1_image['alt']; ?>" height="220" width="330" class="responsive" />
				<?php endif; ?>

				<h2><?php echo $box_3_heading; ?></h2>
				<p class="description"><?php echo $box_3_description; ?></p>

			 <a href="<?php the_field('box_3_url');?>" class="button expanded" ><?php the_field('box_3_button_text'); ?></a>
		</div>

	</div>

</div>

<div class="row expanded"  data-equalizer data-equalize-on="medium">


	<div class="small-12 medium-8 columns" >

		<div class="callout alert  text-center" data-equalizer-watch>
			<?php //online training box
			if( !empty($box_4_image) ): ?>
			<img src="<?php echo $box_4_image['url']; ?>" alt="<?php echo $box_1_image['alt']; ?>" height="64" width="94" class="img-responsive" />
			<?php endif; ?>

			<h2><?php echo $box_4_heading; ?></h2>
			<p class="description"><?php echo $box_4_description; ?></p>

		 <a href="<?php the_field('box_4_url');?>" class="button expanded" ><?php  the_field('box_4_button_text'); ?></a>
		</div>

	</div>

	<div class="small-12 medium-4 columns">
		<div class="callout alert  text-center" data-equalizer-watch>
			<?php
				if( !empty($box_5_image) ): ?>
				<img src="<?php echo $box_5_image['url']; ?>" alt="<?php echo $box_1_image['alt']; ?>" height="64" width="94" class="img-responsive" />
				<?php endif; ?>

				<h2><?php echo $box_5_heading; ?></h2>
				<p class="description"><?php echo $box_5_description; ?></p>

			 <a href="<?php the_field('box_5_url');?>" class="button expanded" ><?php  the_field('box_5_button_text'); ?></a>
		</div>
	</div>

</div>

</div>

</div>

<?php get_template_part( 'template-parts/content', 'workforce-newsletter' ); ?>


<div class="row gutter-small expanded content-area">

			<div class="small-12 medium-8 large-9 entry-content" >


     <h2><?php the_field('workforce_highlights_heading'); ?></h2>

			<?php
			    the_content();
			?>

			<?php

			$args =  array (

			'post_type' => 'workforce-highlights',
			'paged' => get_query_var('paged'),
			'posts_per_page'=>10,

			);
			?>

			<?php

			$query = new WP_Query( $args ); ?>

			<?php if ( $query->have_posts() ) : ?>

			<?php while ( $query->have_posts() ) : $query->the_post();?>

				<?php if ( has_post_thumbnail() ) : ?>
					<div class="row latest-post">
					<div class="medium-12 large-4 columns collapse">

							<?php gcc_wp_2018_post_thumbnail(); ?>

					</div>
					<div class="medium-12 large-8 columns collapse">
					<h3 class="post-title"><?php the_title(); ?></h3>
					<?php if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta float-right">
							<p><strong><span class="fa fa-calendar" aria-hidden="true"></span><?php
							gcc_wp_2018_posted_on();
							?> </strong></p>
						</div><!-- .entry-meta -->
				 <?php endif; ?>
					<?php the_content(); ?>

					</div>
					</div>

				<?php else: ?>

					<div class="row latest-post">
					<div class="medium-12 columns">
					<h3 class="post-title"><?php the_title(); ?></h3>
					<?php if ( 'post' === get_post_type() ) : ?>
						<div class="entry-meta float-right">
							<p><strong><span class="fa fa-calendar" aria-hidden="true"></span><?php
							gcc_wp_2018_posted_on();
							?> </strong></p>
						</div><!-- .entry-meta -->
				<?php endif; ?>
					<?php the_content(); ?>

					</div>
					</div>

			<?php endif; ?>

			<?php endwhile; ?>

			<?php wp_reset_postdata(); ?>

			<?php else : ?>

			<p><?php esc_html_e( 'Sorry, no posts matched your criteria.', 'gcc-wp-2018'); ?></p>

			<?php endif; ?>


			</div>


			<footer class="entry-footer">
			  <?php gcc_wp_2018_entry_footer(); ?>
			</footer><!-- .entry-footer -->


			<?php //Template Sidebar
			get_template_part( '/sidebars/workforce-sidebar' ); ?>

		</div><!--.pagecontent-->

<?php endwhile; // End of the loop. ?>

</article>

<?php
get_footer();
