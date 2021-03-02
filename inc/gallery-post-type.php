<?php

// Register Custom Post Type
function melaine_hunley_setup_register_cpt_gallery() {

	$labels = array(
		'name'                  => _x( 'Galleries', 'Post Type General Name', 'melaine-hunley' ),
		'singular_name'         => _x( 'Gallery', 'Post Type Singular Name', 'melaine-hunley' ),
		'menu_name'             => __( 'Galleries', 'melaine-hunley' ),
		'name_admin_bar'        => __( 'Gallery', 'melaine-hunley' ),
		'archives'              => __( 'Gallery Archives', 'melaine-hunley' ),
		'attributes'            => __( 'Gallery Attributes', 'melaine-hunley' ),
		'parent_item_colon'     => __( 'Parent Gallery:', 'melaine-hunley' ),
		'all_items'             => __( 'All Galleries', 'melaine-hunley' ),
		'add_new_item'          => __( 'Add New Gallery', 'melaine-hunley' ),
		'add_new'               => __( 'Add New', 'melaine-hunley' ),
		'new_item'              => __( 'New Gallery', 'melaine-hunley' ),
		'edit_item'             => __( 'Edit Gallery', 'melaine-hunley' ),
		'update_item'           => __( 'Update Gallery', 'melaine-hunley' ),
		'view_item'             => __( 'View Gallery', 'melaine-hunley' ),
		'view_items'            => __( 'View Galleries', 'melaine-hunley' ),
		'search_items'          => __( 'Search Gallery', 'melaine-hunley' ),
		'not_found'             => __( 'Not found', 'melaine-hunley' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'melaine-hunley' ),
		'featured_image'        => __( 'Featured Image', 'melaine-hunley' ),
		'set_featured_image'    => __( 'Set featured image', 'melaine-hunley' ),
		'remove_featured_image' => __( 'Remove featured image', 'melaine-hunley' ),
		'use_featured_image'    => __( 'Use as featured image', 'melaine-hunley' ),
		'insert_into_item'      => __( 'Insert into gallery', 'melaine-hunley' ),
		'uploaded_to_this_item' => __( 'Uploaded to this gallery', 'melaine-hunley' ),
		'items_list'            => __( 'Galleries list', 'melaine-hunley' ),
		'items_list_navigation' => __( 'Galleries list navigation', 'melaine-hunley' ),
		'filter_items_list'     => __( 'Filter galleries list', 'melaine-hunley' ),
	);
	$args = array(
		'label'                 => __( 'Gallery', 'melaine-hunley' ),
		'description'           => __( 'Gallery Description', 'melaine-hunley' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'gallery_category' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'				=> 'dashicons-images-alt2',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'show_in_rest'              => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'gallery', $args );

}
add_action( 'init', 'melaine_hunley_setup_register_cpt_gallery', 0 );




// Register Custom Taxonomy - Gallery Category
function melaine_hunley_setup_register_gallery_category_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Gallery Categories', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Categories', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_in_rest'              => true,
		'show_tagcloud'              => false,
	);
	register_taxonomy( 'gallery_category', array( 'gallery' ), $args );

}
add_action( 'init', 'melaine_hunley_setup_register_gallery_category_taxonomy', 0 );


function gallery_post_type_support() {
	add_post_type_support( 'gallery', 'excerpt' ); //change page with your post type slug.
}
add_action( 'init', 'gallery_post_type_support' );

