<?php
//setup custom columns for post type
add_filter( 'manage_directory_posts_columns', 'set_custom_edit_directory_columns', 5 );
function set_custom_edit_directory_columns( $columns ) {
  unset( $columns['date'],
         $columns['comments'],
         $columns['tags']
       );
  $columns['employee_image'] = __( 'Photo', 'gcc-wp-2018');
  $columns['employee_department'] = __( 'Department', 'gcc-wp-2018'); // Department column
  $columns['employee_job_title'] = __( 'Title', 'gcc-wp-2018'); // Title column
  $columns['employee_email'] = __( 'Email', 'gcc-wp-2018'); // Email column
  $columns['employee_phone'] = __( 'Phone', 'gcc-wp-2018'); // Phone column
  return $columns;
}
//add data to new columns
add_action( 'manage_directory_posts_custom_column' , 'custom_directory_column', 5, 2 );
function custom_directory_column( $column, $post_id ) {
  switch ( $column ) {
    // display a list of the custom taxonomy terms assigned to the post
       case 'employee_image' :
       $employee_image = get_field('employee_image');
       if( !empty($employee_image) ) :
       	// vars
       	$url = $employee_image['url'];
       	$alt = $employee_image['alt'];
       	// thumbnail
       	$size = 'thumbnail';
       	$thumb = $employee_image['sizes'][ $size ];
       	$width = $employee_image['sizes'][ $size . '-width' ];
       	$height = $employee_image['sizes'][ $size . '-height' ];
       		 ?>
       <img src="<?php echo $thumb; ?>" alt="<?php echo $alt;?>" width="<?php echo $width;?>" height="<?php echo $height;?>" class="thumbnail">
       <?php endif;
       break;
        case 'employee_department' :
        $terms = get_the_term_list( $post_id , 'employee_department' , '' , ', ' , '' );
        echo is_string( $terms ) ? $terms : '—';
        break;

        case 'employee_job_title' :
        $terms = get_the_term_list( $post_id , 'employee_job_title' , '' , ', ' , '' );
        echo is_string( $terms ) ? $terms : '—';
        break;

        case 'employee_email' :
        $employee_email = get_field('employee_email');
        echo the_field('employee_email');
        break;

        case 'employee_phone' :
        $employee_phone = get_field('employee_phone');
        echo the_field('employee_phone');
        break;
  }
}
//add data to the new column
add_filter( 'manage_edit-directory_sortable_columns', 'set_custom_directory_sortable_columns' );
function set_custom_directory_sortable_columns( $columns ) {
  $columns['employee_department'] = 'employee_department';
  $columns['employee_job_title'] = 'employee_job_title';

  return $columns;
}
//Sortable column
add_action( 'pre_get_posts', 'directory_custom_orderby' );
function directory_custom_orderby( $query ) {
  if ( ! is_admin() )
    return;
  $orderby = $query->get( 'orderby');
}
