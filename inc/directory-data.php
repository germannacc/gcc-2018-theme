<?php

function my_scripts(){

 //file where AJAX code will be found
 wp_enqueue_script( 'my-script-handle', get_template_directory_uri() . '/dist/js/directory-data.js', array('jquery'), true );

//passing variables to the javascript file
wp_localize_script('my-script-handle', 'frontEndAjax', array(
 'ajaxurl' => admin_url( 'admin-ajax.php' ),
 'nonce' => wp_create_nonce('ajax_nonce')
 ));

}
add_action( 'wp_enqueue_scripts', 'my_scripts' );


function my_ajax_function(){

  //checking the nonce. will die if it is no good.
   check_ajax_referer('ajax_nonce', 'nonce');


//now we can get the data we passed via $_POST[]. make sure it isn't empty first.
if(! empty( $_POST['data_to_pass'] ) ){
   $my_paragraphs_text = esc_html($_POST['data_to_pass']);
}

//if the textarea equals a certain value we will send back a different string
if($my_paragraphs_text == 'saltnpixels is so cool'){
   $ajax_response = array('data_from_backend' => 'yes it is!!');
}
else{
   $ajax_response = array('data_from_backend' => "These are not the droids you're looking for…");
}

 echo json_encode( $ajax_response );  //always echo an array encoded in json
die();

}

add_action( 'wp_ajax_nopriv_my_ajax_function', 'my_ajax_function' );
add_action( 'wp_ajax_my_ajax_function', 'my_ajax_function' );
