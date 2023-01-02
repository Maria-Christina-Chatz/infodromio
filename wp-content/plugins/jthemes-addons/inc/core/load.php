<?php
class Jthemes_Shortcodes {

	/**
	 * Constructor
	 */
	function __construct() {
		add_action( 'plugins_loaded',             array( __CLASS__, 'init' ) );
		add_action( 'init',                       array( __CLASS__, 'register' ) );
		add_action( 'init',                       array( __CLASS__, 'update' ), 20 );
		register_activation_hook( TS_PLUGIN_FILE, array( __CLASS__, 'activation' ) );
		register_activation_hook( TS_PLUGIN_FILE, array( __CLASS__, 'deactivation' ) );
	}

	/**
	 * Plugin init
	 */
	public static function init() {
		// Make plugin available for translation
		load_plugin_textdomain( 'jthemes', false, dirname( plugin_basename( TS_PLUGIN_FILE ) ) . '/languages/' );
		// Setup admin class
		$admin = new Sunrise4( array(
				'file'       => TS_PLUGIN_FILE,
				'slug'       => 'ts',
				'prefix'     => 'ts_option_',
				'textdomain' => 'su'
			) );
		// Top-level menu
		$admin->add_menu( array(
				'page_title'  => __( 'Settings', 'jthemes' ) . ' &lsaquo; ' . __( 'Jthemes Shortcodes', 'jthemes' ),
				'menu_title'  => apply_filters( 'ts/menu/shortcodes', __( 'Shortcodes', 'jthemes' ) ),
				'capability'  => 'manage_options',
				'slug'        => 'jthemes',
				'icon_url'    => 'dashicons-editor-code',
				'position'    => '80.11',
				'options'     => array(
					array(
						'type' => 'opentab',
						'name' => __( 'About', 'jthemes' )
					),
					array(
						'type'     => 'about',
						'callback' => array( 'Ts_Admin_Views', 'about' )
					),
					array(
						'type'    => 'closetab',
						'actions' => false
					),
					array(
						'type' => 'opentab',
						'name' => __( 'Settings', 'jthemes' )
					),
					array(
						'type'    => 'checkbox',
						'id'      => 'custom-formatting',
						'name'    => __( 'Custom formatting', 'jthemes' ),
						'desc'    => __( 'Disable this option if you have some problems with other plugins or content formatting', 'jthemes' ) . '<br /><a href="http://gndev.info/kb/custom-formatting/" target="_blank">' . __( 'Documentation article', 'jthemes' ) . '</a>',
						'default' => 'on',
						'label'   => __( 'Enabled', 'jthemes' )
					),
					array(
						'type'    => 'checkbox',
						'id'      => 'skip',
						'name'    => __( 'Skip default values', 'jthemes' ),
						'desc'    => __( 'Enable this option and the generator will insert a shortcode without default attribute values that you have not changed. As a result, the generated code will be shorter.', 'jthemes' ),
						'default' => 'on',
						'label'   => __( 'Enabled', 'jthemes' )
					),
					array(
						'type'    => 'text',
						'id'      => 'prefix',
						'name'    => __( 'Shortcodes prefix', 'jthemes' ),
						'desc'    => sprintf( __( 'This prefix will be added to all shortcodes by this plugin. For example, type here %s and you\'ll get shortcodes like %s and %s. Please keep in mind: this option is not affects your already inserted shortcodes and if you\'ll change this value your old shortcodes will be broken', 'jthemes' ), '<code>ts_</code>', '<code>[ts_button]</code>', '<code>[ts_column]</code>' ),
						'default' => 'ts_'
					),
					array(
						'type'    => 'text',
						'id'      => 'hotkey',
						'name'    => __( 'Insert shortcode Hotkey', 'jthemes' ),
						'desc'    => sprintf( '%s<br><a href="https://rawgit.com/jeresig/jquery.hotkeys/master/test-static-01.html" target="_blank">%s</a> | <a href="https://github.com/jeresig/jquery.hotkeys#notes" target="_blank">%s</a>', __( 'Here you can define custom hotkey for the Insert shortcode popup window. Leave this field empty to disable hotkey', 'jthemes' ), __( 'Hotkey examples', 'jthemes' ), __( 'Additional notes', 'jthemes' ) ),
						'default' => 'alt+i'
					),
					array(
						'type'    => 'hidden',
						'id'      => 'skin',
						'name'    => __( 'Skin', 'jthemes' ),
						'desc'    => __( 'Choose global skin for shortcodes', 'jthemes' ),
						'default' => 'default'
					),
					array(
						'type' => 'closetab'
					),
					array(
						'type' => 'opentab',
						'name' => __( 'Custom CSS', 'jthemes' )
					),
					array(
						'type'     => 'custom_css',
						'id'       => 'custom-css',
						'default'  => '',
						'callback' => array( 'Ts_Admin_Views', 'custom_css' )
					),
					array(
						'type' => 'closetab'
					)
				)
			) );
		// Settings submenu
		$admin->add_submenu( array(
				'parent_slug' => 'jthemes',
				'page_title'  => __( 'Settings', 'jthemes' ) . ' &lsaquo; ' . __( 'Jthemes Shortcodes', 'jthemes' ),
				'menu_title'  => apply_filters( 'ts/menu/settings', __( 'Settings', 'jthemes' ) ),
				'capability'  => 'manage_options',
				'slug'        => 'jthemes',
				'options'     => array()
			) );
		// Examples submenu
		$admin->add_submenu( array(
				'parent_slug' => 'jthemes',
				'page_title'  => __( 'Examples', 'jthemes' ) . ' &lsaquo; ' . __( 'Jthemes Shortcodes', 'jthemes' ),
				'menu_title'  => apply_filters( 'ts/menu/examples', __( 'Examples', 'jthemes' ) ),
				'capability'  => 'edit_others_posts',
				'slug'        => 'Jthemes-examples',
				'options'     => array(
					array(
						'type' => 'examples',
						'callback' => array( 'Ts_Admin_Views', 'examples' )
					)
				)
			) );
		// Cheatsheet submenu
		$admin->add_submenu( array(
				'parent_slug' => 'jthemes',
				'page_title'  => __( 'Cheatsheet', 'jthemes' ) . ' &lsaquo; ' . __( 'Jthemes Shortcodes', 'jthemes' ),
				'menu_title'  => apply_filters( 'ts/menu/examples', __( 'Cheatsheet', 'jthemes' ) ),
				'capability'  => 'edit_others_posts',
				'slug'        => 'Jthemes-cheatsheet',
				'options'     => array(
					array(
						'type' => 'cheatsheet',
						'callback' => array( 'Ts_Admin_Views', 'cheatsheet' )
					)
				)
			) );
		// Add-ons submenu
		$admin->add_submenu( array(
				'parent_slug' => 'jthemes',
				'page_title'  => __( 'Add-ons', 'jthemes' ) . ' &lsaquo; ' . __( 'Jthemes Shortcodes', 'jthemes' ),
				'menu_title'  => apply_filters( 'ts/menu/addons', __( 'Add-ons', 'jthemes' ) ),
				'capability'  => 'edit_others_posts',
				'slug'        => 'Jthemes-addons',
				'options'     => array(
					array(
						'type' => 'addons',
						'callback' => array( 'Ts_Admin_Views', 'addons' )
					)
				)
			) );
		// Translate plugin meta
		__( 'Jthemes Shortcodes', 'jthemes' );
		__( 'Jthemes', 'jthemes' );
		__( 'Supercharge your WordPress theme with mega pack of shortcodes', 'jthemes' );
		// Add plugin actions links
		add_filter( 'plugin_action_links_' . plugin_basename( TS_PLUGIN_FILE ), array( __CLASS__, 'actions_links' ), -10 );
		// Add plugin meta links
		add_filter( 'plugin_row_meta', array( __CLASS__, 'meta_links' ), 10, 2 );
		// Jthemes Shortcodes is ready
		do_action( 'ts/init' );
	}

	/**
	 * Plugin activation
	 */
	public static function activation() {
		self::timestamp();
		update_option( 'ts_option_version', TS_PLUGIN_VERSION );
		do_action( 'ts/activation' );
	}

	/**
	 * Plugin deactivation
	 */
	public static function deactivation() {
		do_action( 'ts/deactivation' );
	}

	/**
	 * Plugin update hook
	 */
	public static function update() {
		$option = get_option( 'ts_option_version' );
		if ( $option !== TS_PLUGIN_VERSION ) {
			update_option( 'ts_option_version', TS_PLUGIN_VERSION );
			do_action( 'ts/update' );
		}
	}

	/**
	 * Register shortcodes
	 */
	public static function register() {
		// Prepare compatibility mode prefix
		$prefix = ts_cmpt();
		// Loop through shortcodes
		foreach ( ( array ) Ts_Data::shortcodes() as $id => $data ) {
			if ( isset( $data['function'] ) && is_callable( $data['function'] ) ) $func = $data['function'];
			elseif ( is_callable( array( 'Ts_Shortcodes', $id ) ) ) $func = array( 'Ts_Shortcodes', $id );
			elseif ( is_callable( array( 'Ts_Shortcodes', 'ts_' . $id ) ) ) $func = array( 'Ts_Shortcodes', 'ts_' . $id );
			else continue;
			// Register shortcode
			add_shortcode( $prefix . $id, $func );
		}
		// Register [media] manually // 3.x
		add_shortcode( $prefix . 'media', array( 'Ts_Shortcodes', 'media' ) );
	}

	/**
	 * Add timestamp
	 */
	public static function timestamp() {
		if ( !get_option( 'ts_installed' ) ) update_option( 'ts_installed', time() );
	}

	/**
	 * Add plugin actions links
	 */
	public static function actions_links( $links ) {
		$links[] = '<a href="' . admin_url( 'admin.php?page=Jthemes-examples' ) . '">' . __( 'Examples', 'jthemes' ) . '</a>';
		$links[] = '<a href="' . admin_url( 'admin.php?page=Jthemes' ) . '#tab-0">' . __( 'Where to start?', 'jthemes' ) . '</a>';
		return $links;
	}

	/**
	 * Add plugin meta links
	 */
	public static function meta_links( $links, $file ) {
		// Check plugin
		if ( $file === plugin_basename( TS_PLUGIN_FILE ) ) {
			unset( $links[2] );
			$links[] = '<a href="http://gndev.info/Jthemes/" target="_blank">' . __( 'Project homepage', 'jthemes' ) . '</a>';
			$links[] = '<a href="http://wordpress.org/support/plugin/Jthemes/" target="_blank">' . __( 'Support forum', 'jthemes' ) . '</a>';
			$links[] = '<a href="http://wordpress.org/extend/plugins/Jthemes/changelog/" target="_blank">' . __( 'Changelog', 'jthemes' ) . '</a>';
		}
		return $links;
	}
}

/**
 * Register plugin function to perform checks that plugin is installed
 */
function Jthemes_shortcodes() {
	return true;
}

new Jthemes_Shortcodes;
