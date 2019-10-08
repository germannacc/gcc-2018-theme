<?php

// The Loop
if ( $loop ->have_posts() ) {
	while ( $loop ->have_posts() ) {

		$loop ->the_post();

    // do something
$employee_location = get_field('employee_location');
$employee_phone = get_field('employee_phone');
$employee_email = get_field('employee_email');
$size = 'medium'; // (thumbnail, medium, large, full or custom size)
?>

<div class="small-12 medium-4 columns directory">

<div class="callout employee-profile">

<?php
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
<p class="position-info"><?php echo strip_tags (get_the_term_list( '', 'job_title'))?><br/>
<?php echo strip_tags (get_the_term_list( '', 'department'))?><br/>
</p>

<p class="contact-info">
<?php echo strip_tags (get_the_term_list( '', 'locations'))?><br/>
<a href="mailto:<?php the_field('employee_email'); ?>"><?php the_field('employee_email'); ?></a>

<br/>

<?php esc_html_e('(540) ', 'gcc-wp-admin');  the_field('employee_phone'); ?>
</p>

</div>
</div>
}

}
<?php
else {
// no posts found
?>

<p><?php esc_html_e('Sorry, the directory is currently undergoing maintenance.', 'gcc-wp-2018') ?></p>

<?php

}

// Restore original Post Data
wp_reset_postdata(); ?>
