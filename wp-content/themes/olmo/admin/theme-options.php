<?php
//include theme options
include OLMOTHEMEDIR . '/admin/theme-options/general.php';
include OLMOTHEMEDIR . '/admin/theme-options/background.php';
include OLMOTHEMEDIR . '/admin/theme-options/header.php';
include OLMOTHEMEDIR . '/admin/theme-options/sidebar.php';
include OLMOTHEMEDIR . '/admin/theme-options/footer.php';
include OLMOTHEMEDIR . '/admin/theme-options/blog.php';
include OLMOTHEMEDIR . '/admin/theme-options/team.php';
include OLMOTHEMEDIR . '/admin/theme-options/portfolio.php';
include OLMOTHEMEDIR . '/admin/theme-options/woocommerce.php';
include OLMOTHEMEDIR . '/admin/theme-options/typography.php';
include OLMOTHEMEDIR . '/admin/theme-options/styling.php';
/**
 * Initialize the custom theme options.
 */
add_action( 'admin_init', 'olmo_theme_options', 1 );

/**
 * Build the custom settings & update OptionTree.
 */
function olmo_theme_options() {
  
  /* OptionTree is not loaded yet */
  if ( ! function_exists( 'ot_settings_id' ) )
    return false;
    
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( ot_settings_id(), array() );
  
  /**
   * Custom settings array that will eventually be 
   * passes to the OptionTree Settings API Class.
   */
  //available option functions - return type array()
  $general_options = olmo_general_options();
  $background_options = olmo_background_options();
  $header_options = olmo_header_options();
  $sidebar_options = olmo_sidebar_options();
  $footer_options = olmo_footer_options();
  $blog_options = olmo_blog_options();
  $team_options = olmo_team_options();
  $portfolio_options = olmo_portfolio_options();
  $woocommerce_options = olmo_woocommerce_options();
  $typography_options = olmo_typography_options();
  $styling_options = olmo_styling_options();


  //merge all available options
  $settings = array_merge( $general_options, $background_options, $header_options, $sidebar_options, $footer_options, $blog_options, $team_options, $portfolio_options, $woocommerce_options, $typography_options, $styling_options );

 

  $custom_settings = array( 
    'contextual_help' => array( 
      'sidebar'       => ''
    ),
    'sections'        => array( 
      array(
        'id'          => 'general_options',
        'title'       => esc_html__( 'General Options', 'olmo' )
      ),
      array(
        'id'          => 'background_options',
        'title'       => esc_html__( 'Background Options', 'olmo' )
      ),
     array(
        'id'          => 'header_options',
        'title'       => esc_html__( 'Header Options', 'olmo' )
      ),
      array(
        'id'          => 'footer_options',
        'title'       => esc_html__( 'Footer Options', 'olmo' )
      ),
      array(
        'id'          => 'sidebar_option',
        'title'       => esc_html__( 'Sidebar Options', 'olmo' )
      ),
      array(
        'id'          => 'blog_options',
        'title'       => esc_html__( 'Blog Options', 'olmo' )
      ),
      array(
        'id'          => 'team_options',
        'title'       => esc_html__( 'Team Options', 'olmo' )
      ),
	    array(
        'id'          => 'portfolio_options',
        'title'       => esc_html__( 'Portfolio Options', 'olmo' )
      ),
      array(
        'id'          => 'woocommerce_options',
        'title'       => esc_html__( 'WooCommerce Options', 'olmo' )
      ),
      array(
        'id'          => 'fonts',
        'title'       => esc_html__( 'Typography Options', 'olmo' )
      ),
      array(
        'id'          => 'styling_options',
        'title'       => esc_html__( 'Styling Options', 'olmo' )
      ),
	  
    ),
    'settings'        => $settings
  );

  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( ot_settings_id(), $custom_settings ); 
  }
  
  /* Lets OptionTree know the UI Builder is being overridden */
  global $ot_has_custom_theme_options;
  $ot_has_custom_theme_options = true;

  return $custom_settings[ 'settings' ];
  
}