<?php
if ( ! function_exists('jthemes_team_post_type') ) {

// Register Custom Post Type
function jthemes_team_post_type() {

	$labels = array(
		'name'                => _x( 'Teams', 'Post Type General Name', 'jthemes' ),
		'singular_name'       => _x( 'Team', 'Post Type Singular Name', 'jthemes' ),
		'menu_name'           => __( 'Teams', 'jthemes' ),
		'parent_item_colon'   => __( 'Parent Team:', 'jthemes' ),
		'all_items'           => __( 'All Teams', 'jthemes' ),
		'view_item'           => __( 'View Team', 'jthemes' ),
		'add_new_item'        => __( 'Add New Team', 'jthemes' ),
		'add_new'             => __( 'Add New', 'jthemes' ),
		'edit_item'           => __( 'Edit Team', 'jthemes' ),
		'update_item'         => __( 'Update Team', 'jthemes' ),
		'search_items'        => __( 'Search Team', 'jthemes' ),
		'not_found'           => __( 'Not found', 'jthemes' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'jthemes' ),
	);

	$rewrite = array(
		'slug'                => 'team',
		'with_front'          => true,
		'pages'               => true,
		'feeds'               => true,
	);

	$args = array(
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'revisions', 'thumbnail', 'excerpt' ),
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
		'query_var'           => 'team',
		'rewrite'             => $rewrite,
		'capability_type'     => 'page',
	);
	register_post_type( 'team', $args );

}

// Hook into the 'init' action
add_action( 'init', 'jthemes_team_post_type', 0 );

}

include 'meta-boxes-team.php';
?>