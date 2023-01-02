<?php
if ( ! function_exists('jthemes_portfolio_post_type') ) {

	// Register Custom Post Type
	function jthemes_portfolio_post_type() {

		$labels = array(
			'name'                => _x( 'Portfolio', 'Post Type General Name', 'jthemes' ),
			'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'jthemes' ),
			'menu_name'           => esc_html__( 'Portfolio', 'jthemes' ),
			'parent_item_colon'   => esc_html__( 'Parent Item:', 'jthemes' ),
			'all_items'           => esc_html__( 'All Items', 'jthemes' ),
			'view_item'           => esc_html__( 'View Item', 'jthemes' ),
			'add_new_item'        => esc_html__( 'Add New Item', 'jthemes' ),
			'add_new'             => esc_html__( 'Add New', 'jthemes' ),
			'edit_item'           => esc_html__( 'Edit Item', 'jthemes' ),
			'update_item'         => esc_html__( 'Update Item', 'jthemes' ),
			'search_items'        => esc_html__( 'Search Item', 'jthemes' ),
			'not_found'           => esc_html__( 'Not found', 'jthemes' ),
			'not_found_in_trash'  => esc_html__( 'Not found in Trash', 'jthemes' ),
		);
		
		$rewrite = array(
			'slug'                => 'portfolio',
			'with_front'          => true,
			'pages'               => true,
			'feeds'               => true,
		);
		
		$args = array(
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail'),
			'taxonomies'          => array( 'portfolio_category', 'portfolio_tag' ),
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
			'query_var'           => 'portfolio',
			'rewrite'             => $rewrite,
			'capability_type'     => 'page', 
		);
		
		register_post_type( 'portfolio', $args );

	}

	// Hook into the 'init' action
	add_action( 'init', 'jthemes_portfolio_post_type', 0 );

	}

	if ( ! function_exists( 'jthemes_portfolio_category_taxonomy' ) ) {

	// Register Custom Taxonomy
	function jthemes_portfolio_category_taxonomy() {

		$labels = array(
			'name'                       => _x( 'Categories', 'Taxonomy General Name', 'jthemes'),
			'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'jthemes'),
			'menu_name'                  => esc_html__( 'Category', 'jthemes'),
			'all_items'                  => esc_html__( 'All Items', 'jthemes'),
			'parent_item'                => esc_html__( 'Parent Item', 'jthemes'),
			'parent_item_colon'          => esc_html__( 'Parent Item:', 'jthemes'),
			'new_item_name'              => esc_html__( 'New Item Name', 'jthemes'),
			'add_new_item'               => esc_html__( 'Add New Item', 'jthemes'),
			'edit_item'                  => esc_html__( 'Edit Item', 'jthemes'),
			'update_item'                => esc_html__( 'Update Item', 'jthemes'),
			'separate_items_with_commas' => esc_html__( 'Separate items with commas', 'jthemes'),
			'search_items'               => esc_html__( 'Search Items', 'jthemes'),
			'add_or_remove_items'        => esc_html__( 'Add or remove items', 'jthemes'),
			'choose_from_most_used'      => esc_html__( 'Choose from the most used items', 'jthemes'),
			'not_found'                  => esc_html__( 'Not Found', 'jthemes'),
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
		register_taxonomy( 'portfolio_category', array( 'portfolio' ), $args );

	}

	// Hook into the 'init' action
	add_action( 'init', 'jthemes_portfolio_category_taxonomy', 0 );

	}

	if ( ! function_exists( 'jthemes_portfolio_tag_taxonomy' ) ) {

	// Register Custom Taxonomy
	function jthemes_portfolio_tag_taxonomy() {

		$labels = array(
			'name'                       => _x( 'Tags', 'Taxonomy General Name', 'jthemes'),
			'singular_name'              => _x( 'Tag', 'Taxonomy Singular Name', 'jthemes'),
			'menu_name'                  => esc_html__( 'Tag', 'jthemes'),
			'all_items'                  => esc_html__( 'All Items', 'jthemes'),
			'parent_item'                => esc_html__( 'Parent Item', 'jthemes'),
			'parent_item_colon'          => esc_html__( 'Parent Item:', 'jthemes'),
			'new_item_name'              => esc_html__( 'New Item Name', 'jthemes'),
			'add_new_item'               => esc_html__( 'Add New Item', 'jthemes'),
			'edit_item'                  => esc_html__( 'Edit Item', 'jthemes'),
			'update_item'                => esc_html__( 'Update Item', 'jthemes'),
			'separate_items_with_commas' => esc_html__( 'Separate items with commas', 'jthemes'),
			'search_items'               => esc_html__( 'Search Items', 'jthemes'),
			'add_or_remove_items'        => esc_html__( 'Add or remove items', 'jthemes'),
			'choose_from_most_used'      => esc_html__( 'Choose from the most used items', 'jthemes'),
			'not_found'                  => esc_html__( 'Not Found', 'jthemes'),
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
		register_taxonomy( 'portfolio_tag', array( 'portfolio' ), $args );

	}

	// Hook into the 'init' action
	add_action( 'init', 'jthemes_portfolio_tag_taxonomy', 0 );

}

require_once 'meta-boxes-portfolio.php';

?>