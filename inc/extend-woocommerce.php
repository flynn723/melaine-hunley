<?php

function melaine_hunley_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'melaine_hunley_add_woocommerce_support' );

// add_theme_support('woocommerce');

function melaine_hunley_breadcrumb_delimiter( $defaults ) {
	// Change the breadcrumb delimeter from '/' to '>'
	$defaults['delimiter'] = ' <i class="fa fa-angle-right"></i> ';
	return $defaults;
}
add_filter( 'woocommerce_breadcrumb_defaults', 'melaine_hunley_breadcrumb_delimiter' );



function melaine_hunley_related_products_args( $args ) {
	$args['posts_per_page'] = 3; // 4 related products
	$args['columns'] = 3; // arranged in 2 columns
	return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'melaine_hunley_related_products_args' );

/**
 * Rename "home" in breadcrumb
 */
/*
function melaine_hunley_breadcrumb_home_text( $defaults ) {
    // Change the breadcrumb home text from 'Home' to 'Apartment'
	$defaults['home'] = '<i class="fa fa-home"></i>';
	return $defaults;
}
add_filter( 'woocommerce_breadcrumb_defaults', 'melaine_hunley_breadcrumb_home_text' );
*/