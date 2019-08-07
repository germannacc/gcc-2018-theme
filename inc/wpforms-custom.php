<?php

/**
 * WPForms, description above field
 * @author Bill Erickson
 * @see https://www.billerickson.net/code/wpforms-description-above-field
 *
 * @param array $properties, field properties
 * @return array
 */
function ea_wpforms_description_above_field( $properties ) {
	$properties['description']['position'] = 'before';
	return $properties;
}
add_filter( 'wpforms_field_properties', 'ea_wpforms_description_above_field' );