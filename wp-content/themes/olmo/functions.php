<?php
/**
 * olmo functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link http://codex.wordpress.org/Theme_Development
 * @link http://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * @link http://codex.wordpress.org/Plugin_API
 */

//Define variable
define('OLMOTHEMEVERSION', '1.0.5' );
define('OLMOTHEMEURI', trailingslashit( get_template_directory_uri() ) );
define('OLMOTHEMEDIR', trailingslashit( get_template_directory() ) );

if ( ! isset( $content_width ) ) {
	$content_width = 900;
}

if ( ! function_exists( 'olmo_setup' ) ) :
/**
 * olmo setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 *
 */
function olmo_setup() {

	/*
	 * Make olmo available for translation.
	 *
	 * Translations can be added to the /languages/ directory.
	 * If you're building a theme based on olmo, use a find and
	 * replace to change THEMESNAME to the name of your theme in all
	 * template files.
	 */
	load_theme_textdomain( 'olmo', OLMOTHEMEDIR . '/languages' );

	// Add RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	// This theme uses wp_nav_menu() in two locations.
	register_nav_menus( array(
		'main-menu'   => esc_html__( 'Main Menu', 'olmo' ),
		'footer-menu'   => esc_html__( 'Footer Menu', 'olmo' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	/*
	 * Enable support for Post Formats.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	add_theme_support( 'post-formats', array( 'video', 'audio', 'quote', 'gallery' ) );

	// This theme uses its own gallery styles.
	add_filter( 'use_default_gallery_style', '__return_false' );
	
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'olmo-thumbnail', 980, 700, true );
	add_image_size( 'olmo-medium', 800, 900, false );
	
	add_theme_support( 'title-tag' );
	
	// Add support for Block Styles.
	add_theme_support( 'wp-block-styles' );

	// This theme support woocommerce
	add_theme_support( 'woocommerce' );
	
	// Add support for full and wide align images.
	add_theme_support( 'align-wide' );
	
	// Add support for editor styles.
	add_theme_support( 'editor-styles' );
	
	// Enqueue editor styles.
	add_editor_style( 'style-editor.css' );

}
endif; // olmo_setup
add_action( 'after_setup_theme', 'olmo_setup' );

/**
 * Theme Options
 */
require OLMOTHEMEDIR . 'admin/theme-options.php';

/**
 * Function for the back end.
 *
 */
require OLMOTHEMEDIR . 'admin/functions.php';

require OLMOTHEMEDIR . 'admin/widgets.php';

/**
 * Enqueue scripts and styles for the front end.
 *
 */
require OLMOTHEMEDIR . 'include/scripts-css.php';
 
 /*
 * tgm plugins
 *
 */
 require OLMOTHEMEDIR . 'library/tgm-plugins.php';


/**
 * Function for the front end.
 *
 */
require OLMOTHEMEDIR . 'include/mr-image-resize.php';
require OLMOTHEMEDIR . 'include/functions.php';
require OLMOTHEMEDIR . 'include/elementor-widgets.php';

?>