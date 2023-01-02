<?php
function olmo_portfolio_options( $options = array() ){
	$options = array(
	array(
        'id'          => 'portfolio_title',
        'label'       => esc_html__( 'Portfolio Header Title', 'olmo' ),
        'desc'        => esc_html__( 'Portfolio page header title', 'olmo' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'portfolio_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'portfolio_subtitle',
        'label'       => esc_html__( 'Portfolio Header Sub-Title', 'olmo' ),
        'desc'        => esc_html__( 'Portfolio page header sub-title', 'olmo' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'portfolio_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
		array(
        'id'          => 'portfolio_layout',
        'label'       => esc_html__( 'Portfolio layout', 'olmo' ),
        'desc'        => esc_html__( 'Portfolio layout for portfolio page', 'olmo' ),
        'std'         => 'full',
        'type'        => 'radio-image',
        'section'     => 'portfolio_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'full',
            'label'       => esc_html__( 'Full width', 'olmo' ),
            'src'         => OT_URL . '/assets/images/layout/full-width.png'
          ),
          array(
            'value'       => 'ls',
            'label'       => esc_html__( 'Left sidebar', 'olmo' ),
            'src'         => OT_URL . '/assets/images/layout/left-sidebar.png'
          ),
          array(
            'value'       => 'rs',
            'label'       => esc_html__( 'Right sidebar', 'olmo' ),
            'src'         => OT_URL . '/assets/images/layout/right-sidebar.png'
          )
        )
      ),
      array(
        'id'          => 'portfolio_sidebar',
        'label'       => esc_html__( 'Portfolio Sidebar', 'olmo' ),
        'desc'        => esc_html__( 'Select your portfolio sidebar', 'olmo' ),
        'std'         => 'sidebar-1',
        'type'        => 'sidebar-select',
        'section'     => 'portfolio_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'portfolio_layout:not(full)',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'portfolio_single_title',
        'label'       => esc_html__( 'Portfolio Single Header Title', 'olmo' ),
        'desc'        => esc_html__( 'Portfolio single header title', 'olmo' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'portfolio_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'portfolio_single_subtitle',
        'label'       => esc_html__( 'Portfolio Single Header Sub-Title', 'olmo' ),
        'desc'        => esc_html__( 'Portfolio single header sub-title', 'olmo' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'portfolio_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'portfolio_single_layout',
        'label'       => esc_html__( 'Portfolio single post layout', 'olmo' ),
        'desc'        => esc_html__( 'Portfolio single post layout', 'olmo' ),
        'std'         => 'full',
        'type'        => 'radio-image',
        'section'     => 'portfolio_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'full',
            'label'       => esc_html__( 'Full width', 'olmo' ),
            'src'         => OT_URL . '/assets/images/layout/full-width.png'
          ),
          array(
            'value'       => 'ls',
            'label'       => esc_html__( 'Left sidebar', 'olmo' ),
            'src'         => OT_URL . '/assets/images/layout/left-sidebar.png'
          ),
          array(
            'value'       => 'rs',
            'label'       => esc_html__( 'Right sidebar', 'olmo' ),
            'src'         => OT_URL . '/assets/images/layout/right-sidebar.png'
          )
        )
      ),
    array(
        'id'          => 'portfolio_single_sidebar',
        'label'       => esc_html__( 'Single post Sidebar', 'olmo' ),
        'desc'        => esc_html__( 'Single post sidebar', 'olmo' ),
        'std'         => 'sidebar-1',
        'type'        => 'sidebar-select',
        'section'     => 'portfolio_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'single_layout:not(full)',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'portfolio_header_banner_type',
        'label'       => esc_html__( 'Header Banner Type', 'olmo' ),
        'desc'        => esc_html__( 'Select your header banner type', 'olmo' ),
        'std'         => 'portfolio_custom_image',
        'type'        => 'select',
        'section'     => 'portfolio_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'portfolio_bg_color',
            'label'       => esc_html__( 'Background Color', 'olmo' ),
          ),
		  array(
            'value'       => 'portfolio_custom_image',
            'label'       => esc_html__( 'Custom Image', 'olmo' ),
          )
        )
      ),
	  array(
        'id'          => 'portfolio_header_custom_color',
        'label'       => esc_html__('Select Color', 'olmo'),
        'desc'        => '',
        'std'         => '#2f353e',
        'type'        => 'colorpicker',
		'section'     => 'portfolio_options',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
        'condition'   => 'portfolio_header_banner_type:is(portfolio_bg_color)',
      ),
	  array(
        'id'          => 'portfolio_default_banner_image',
        'label'       => esc_html__( 'Background Image', 'olmo' ),
        'desc'        => esc_html__( 'Background image', 'olmo' ),
        'std'         => OLMOTHEMEURI. 'images/banner.jpg',
        'type'        => 'upload',
        'section'     => 'portfolio_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'portfolio_header_banner_type:is(portfolio_custom_image)',
        'operator'    => 'and'
      ),
    );

	return apply_filters( 'olmo_portfolio_options', $options );
}  
?>