<div class="small-12 medium-6 columns directory">
	<div class="callout employee-profile">
		<?php
		$employee_department = get_field('employee_department');
		$employee_job_title = get_field('employee_job_title');
		$employee_location= get_field('employee_location');
		$employee_phone = get_field('employee_phone');
		$employee_email = get_field('employee_email');
		$size = 'medium'; // (thumbnail, medium, large, full or custom size)
		$employee_image = get_field('employee_image');
		if( !empty($employee_image) ) :
			// vars
			$url = $employee_image['url'];
			$alt = $employee_image['alt'];
			// thumbnail
			$size = 'medium';
			$thumb = $employee_image['sizes'][ $size ];
			$width = $employee_image['sizes'][ $size . '-width' ];
			$height = $employee_image['sizes'][ $size . '-height' ];
		?>
		<img src="<?php echo $thumb; ?>" alt="<?php echo $alt;?>" width="<?php echo $width;?>" height="<?php echo $height;?>" class="thumbnail">
		<?php endif; ?>
		<?php the_title('<h3>','</h3>');  ?>
		<p class="position-info"><?php echo (get_the_term_list( '', 'job_title'))?><br/>
			<?php echo (get_the_term_list( '', 'department'))?><br/>
		</p>
		<p class="contact-info">
			<?php echo (get_the_term_list( '', 'locations'))?><br/>
			<a href="mailto:<?php the_field('employee_email'); ?>"><?php the_field('employee_email'); ?></a>
			<br/>
			<?php esc_html_e('(540) ', 'gcc-wp-2018');  the_field('employee_phone'); ?>
		</p>
	</div>
</div>