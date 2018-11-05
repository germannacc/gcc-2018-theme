 <div id="workforce" class="row expanded" >

 <div class="workforce-explore-content">

	<h1 class="text-center"><?php the_field('page_heading'); ?></h1>

	<div class="row expanded" data-equalizer data-equalize-on="large">

	 <div class="small-12 medium-12 large-4 columns">

		 <div class="callout alert text-center" data-equalizer-watch>
							 <?php
							 $box_1_image = get_field('box_1_image');
												// vars
												$url = $box_1_image['url'];
												$title = $box_1_image['title'];
												$alt = $box_1_image['alt'];
												$caption = $box_1_image['caption'];

												// thumbnail
												$size = 'large';
												$thumb = $box_1_image['sizes'][ $size ];
												$width = $box_1_image['sizes'][ $size . '-width' ];
												$height = $box_1_image['sizes'][ $size . '-height' ];

							 if( !empty($box_1_image) ):   ?>
							 <img src="<?php echo $box_1_image['url']; ?>" alt="<?php echo $box_1_image['alt']; ?>" height="220" width="330" class="responsive" />
							 <?php endif; ?>

							 <h2><?php the_field('box_1_heading'); ?></h2>
							 <p class="description"><?php the_field('box_1_description'); ?></p>

							 <a href="<?php the_field('box_1_url');?>" class="button expanded" ><?php the_field('box_1_button_text'); ?></a>

		 </div>

	 </div>

	 <div class="small-12 medium-12 large-4 gutter-small columns" >

		 <div class="callout alert text-center" data-equalizer-watch>
			 <?php //credentials box
			 $box_2_image = get_field('box_2_image');
								// vars
								$url = $box_2_image['url'];
								$title = $box_2_image['title'];
								$alt = $box_2_image['alt'];
								$caption = $box_2_image['caption'];

								// thumbnail
								$size = 'large';
								$thumb = $box_2_image['sizes'][ $size ];
								$width = $box_2_image['sizes'][ $size . '-width' ];
								$height = $box_2_image['sizes'][ $size . '-height' ];
				 if( !empty($box_2_image) ): ?>
				 <img src="<?php echo $box_2_image['url']; ?>" alt="<?php echo $box_1_image['alt']; ?>" height="220" width="330" class="responsive" />
				 <?php endif; ?>

				 <h2><?php the_field('box_2_heading');  ?></h2>

				 <p class="description"><?php the_field('box_2_description'); ?></p>

				 <a href="<?php the_field('box_2_url');?>" class="button expanded" ><?php the_field('box_2_button_text'); ?></a>
		 </div>

	</div>

	<div class="small-12 medium-12 large-4 columns">

		<div class="callout alert  text-center" data-equalizer-watch>
			<?php //tuition assistance box
			$box_3_image = get_field('box_3_image');
							 // vars
							 $url = $box_3_image['url'];
							 $title = $box_3_image['title'];
							 $alt = $box_3_image['alt'];
							 $caption = $box_3_image['caption'];

							 // thumbnail
							 $size = 'large';
							 $thumb = $box_3_image['sizes'][ $size ];
							 $width = $box_3_image['sizes'][ $size . '-width' ];
							 $height = $box_3_image['sizes'][ $size . '-height' ];
				if( !empty($box_3_image) ): ?>
				<img src="<?php echo $box_3_image['url']; ?>" alt="<?php echo $box_1_image['alt']; ?>" height="220" width="330" class="responsive" />
				<?php endif; ?>

				<h2><?php the_field('box_3_heading');  ?></h2>
				<p class="description"><?php the_field('box_3_description'); ?></p>

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

			<h2><?php the_field('box_4_heading'); ?></h2>
			<p class="description"><?php the_field('box_4_description'); ?></p>

		 <a href="<?php the_field('box_4_url');?>" class="button expanded" ><?php  the_field('box_4_button_text'); ?></a>
		</div>

	</div>

	<div class="small-12 medium-4 columns">
		<div class="callout alert  text-center" data-equalizer-watch>
			<?php
				if( !empty($box_5_image) ): ?>
				<img src="<?php echo $box_5_image['url']; ?>" alt="<?php echo $box_1_image['alt']; ?>" height="64" width="94" class="img-responsive" />
				<?php endif; ?>

				<h2><?php the_field('box_5_heading');  ?></h2>
				<p class="description"><?php the_field('box_4_description');  ?></p>

			 <a href="<?php the_field('box_5_url');?>" class="button expanded" ><?php  the_field('box_5_button_text'); ?></a>
		</div>
	</div>

</div>

</div>

</div>
