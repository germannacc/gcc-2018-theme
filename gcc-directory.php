<?php
/**
 * Plugin Name: GCC Faculty & Staff Directory
 * Plugin URI: https://germanna.edu
 * Description: This is a plugin that pulls json data to display the directory.
 * Version: 1.0.0
 * Author: Germanna Marketing
 * Author URI: https://germanna.edu
 * License: GPL2
 */

 add_action( 'wp_enqueue_scripts', 'gcc_directory_enqueue_scripts' );
function gcc_directory_enqueue_scripts() {
	wp_enqueue_script( 'call', plugins_url( '/call.js', __FILE__ ), array('jquery'), '1.0', true );
}
