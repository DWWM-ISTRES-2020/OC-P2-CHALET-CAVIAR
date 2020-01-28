<?php
/**
 * Seguente functions and definitions
 *
 * @package Seguente
*/

// Use a child theme instead of placing custom functions here
// http://codex.wordpress.org/Child_Themes

/* ------------------------------------------------------------------------- *
 *  Load theme files
/* ------------------------------------------------------------------------- */	
require_once trailingslashit(get_template_directory()) .'functions/seguente-functions.php'; 			// Theme Custom Functions
require_once trailingslashit(get_template_directory()) .'functions/seguente-customizer.php';			// Load Customizer
require_once trailingslashit(get_template_directory()) .'functions/seguente-image-sliders.php'; 		// Theme Custom Functions
require_once trailingslashit(get_template_directory()) .'functions/seguente-woocommerce.php';			// WooCommerce Support
require_once trailingslashit(get_template_directory()) .'functions/wp_bootstrap_navwalker.php';

remove_action("wp_head", "wp_generator");

function wpt_remove_version() {
return ''; }
add_filter('the_generator', 'wpt_remove_version');