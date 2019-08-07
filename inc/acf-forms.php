<?php
//af/form/button_attributes
function filter_submit_button_attributes( $attributes, $form, $args ) {
    $attributes['class'] .= ' button';

    return $attributes;
}
add_filter( 'af/form/button_attributes', 'filter_submit_button_attributes', 10, 3 );
add_filter( 'af/form/button_attributes/id=FORM_ID', 'filter_submit_button_attributes', 10, 3 );
add_filter( 'af/form/button_attributes/key=FORM_KEY', 'filter_submit_button_attributes', 10, 3 );

//changes submit button text
function filter_args( $args, $form ) {
    $args['submit_text'] = 'Submit new organization application';

    return $args;
}
add_filter( 'af/form/args', 'filter_args', 10, 2 );
add_filter( 'af/form/args/id=FORM_ID', 'filter_args', 10, 2 );
add_filter( 'af/form/args/key=form_5cb7498810cff', 'filter_args', 10, 2 );
