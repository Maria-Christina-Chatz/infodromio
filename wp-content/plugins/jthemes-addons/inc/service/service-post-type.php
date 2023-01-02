<?php
if ( ! function_exists('jthemes_service_post_type') ) {

// Register Custom Post Type
function jthemes_service_post_type() {

	$labels = array(
		'name'                => _x( 'Services', 'Post Type General Name', 'jthemes' ),
		'singular_name'       => _x( 'Service', 'Post Type Singular Name', 'jthemes' ),
		'menu_name'           => __( 'Services', 'jthemes' ),
		'parent_item_colon'   => __( 'Parent Service:', 'jthemes' ),
		'all_items'           => __( 'All Services', 'jthemes' ),
		'view_item'           => __( 'View Service', 'jthemes' ),
		'add_new_item'        => __( 'Add New Service', 'jthemes' ),
		'add_new'             => __( 'Add New', 'jthemes' ),
		'edit_item'           => __( 'Edit Service', 'jthemes' ),
		'update_item'         => __( 'Update Service', 'jthemes' ),
		'search_items'        => __( 'Search Service', 'jthemes' ),
		'not_found'           => __( 'Not found', 'jthemes' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'jthemes' ),
	);

	$rewrite = array(
		'slug'                => 'service',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);

	$args = array(
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'revisions', 'page-attributes', 'thumbnail', 'excerpt' ),
		'taxonomies'          => array( 'service_category', 'service_tag' ),
		'hierarchical'        => true,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'query_var'           => 'service',
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'service', $args );

}

// Hook into the 'init' action
add_action( 'init', 'jthemes_service_post_type', 0 );

}

if ( ! function_exists( 'jthemes_service_category_taxonomy' ) ) {

	// Register Custom Taxonomy
	function jthemes_service_category_taxonomy() {
	
		$labels = array(
			'name'                       => _x( 'Service Categories', 'Taxonomy General Name', 'jthemes'),
			'singular_name'              => _x( 'Service Category', 'Taxonomy Singular Name', 'jthemes'),
			'menu_name'                  => __( 'Service Categories', 'jthemes'),
			'all_items'                  => __( 'All Items', 'jthemes'),
			'parent_item'                => __( 'Parent Item', 'jthemes'),
			'parent_item_colon'          => __( 'Parent Item:', 'jthemes'),
			'new_item_name'              => __( 'New Item Name', 'jthemes'),
			'add_new_item'               => __( 'Add New Item', 'jthemes'),
			'edit_item'                  => __( 'Edit Item', 'jthemes'),
			'update_item'                => __( 'Update Item', 'jthemes'),
			'separate_items_with_commas' => __( 'Separate items with commas', 'jthemes'),
			'search_items'               => __( 'Search Items', 'jthemes'),
			'add_or_remove_items'        => __( 'Add or remove items', 'jthemes'),
			'choose_from_most_used'      => __( 'Choose from the most used items', 'jthemes'),
			'not_found'                  => __( 'Not Found', 'jthemes'),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy( 'service_category', array( 'service' ), $args );
	
	}
	
	// Hook into the 'init' action
	add_action( 'init', 'jthemes_service_category_taxonomy', 0 );
	
	}
	
	if ( ! function_exists( 'jthemes_service_tag_taxonomy' ) ) {
	
	// Register Custom Taxonomy
	function jthemes_service_tag_taxonomy() {
	
		$labels = array(
			'name'                       => _x( 'Service Tags', 'Taxonomy General Name', 'jthemes'),
			'singular_name'              => _x( 'Service Tag', 'Taxonomy Singular Name', 'jthemes'),
			'menu_name'                  => __( 'Service Tags', 'jthemes'),
			'all_items'                  => __( 'All Tags', 'jthemes'),
			'parent_item'                => __( 'Parent Tag', 'jthemes'),
			'parent_item_colon'          => __( 'Parent Item:', 'jthemes'),
			'new_item_name'              => __( 'New Item Name', 'jthemes'),
			'add_new_item'               => __( 'Add New Item', 'jthemes'),
			'edit_item'                  => __( 'Edit Item', 'jthemes'),
			'update_item'                => __( 'Update Item', 'jthemes'),
			'separate_items_with_commas' => __( 'Separate items with commas', 'jthemes'),
			'search_items'               => __( 'Search Items', 'jthemes'),
			'add_or_remove_items'        => __( 'Add or remove items', 'jthemes'),
			'choose_from_most_used'      => __( 'Choose from the most used items', 'jthemes'),
			'not_found'                  => __( 'Not Found', 'jthemes'),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy( 'service_tag', array( 'service' ), $args );
	
	}
	
	// Hook into the 'init' action
	add_action( 'init', 'jthemes_service_tag_taxonomy', 0 );
	
	}

include 'meta-boxes-service.php';
?>