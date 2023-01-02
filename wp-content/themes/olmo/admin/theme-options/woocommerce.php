<?php
function olmo_woocommerce_options( $options = array() ){
	$options = array(
	  array(
        'id'          => 'shop_title',
        'label'       => esc_html__( 'Shop Title', 'olmo' ),
        'desc'        => esc_html__( 'Shop page title', 'olmo' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'woocommerce_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'shop_subtitle',
        'label'       => esc_html__( 'Shop Sub-Title', 'olmo' ),
        'desc'        => esc_html__( 'Shop page sub title', 'olmo' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'woocommerce_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'shop_single_title',
        'label'       => esc_html__( 'Shop Single Title', 'olmo' ),
        'desc'        => esc_html__( 'Shop single page title', 'olmo' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'woocommerce_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'shop_single_subtitle',
        'label'       => esc_html__( 'Shop Single Sub-Title', 'olmo' ),
        'desc'        => esc_html__( 'Shop single page Sub title', 'olmo' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'woocommerce_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'product_number_show',
        'label'       => esc_html__( 'Product Row', 'olmo' ),
        'desc'        => '',
        'std'         => '2',
        'type'        => 'numeric-slider',
        'section'     => 'woocommerce_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '1,12,1',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'product_column',
        'label'       => esc_html__( 'Product Column', 'olmo' ),
        'desc'        => '',
        'std'         => '4',
        'type'        => 'numeric-slider',
        'section'     => 'woocommerce_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '1,4,1',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'related_product_column',
        'label'       => esc_html__( 'Related Product Column', 'olmo' ),
        'desc'        => '',
        'std'         => '4',
        'type'        => 'numeric-slider',
        'section'     => 'woocommerce_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '1,4,1',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'category_product_column',
        'label'       => esc_html__( 'Category Product Column', 'olmo' ),
        'desc'        => '',
        'std'         => '4',
        'type'        => 'numeric-slider',
        'section'     => 'woocommerce_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '1,4,1',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'shop_layout',
        'label'       => esc_html__( 'Shop layout', 'olmo' ),
        'desc'        => esc_html__( 'Shop layout for blog page', 'olmo' ),
        'std'         => 'full',
        'type'        => 'radio-image',
        'section'     => 'woocommerce_options',
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
        'id'          => 'shop_sidebar',
        'label'       => esc_html__( 'Shop Sidebar', 'olmo' ),
        'desc'        => esc_html__( 'Select your shop sidebar', 'olmo' ),
        'std'         => 'sidebar-1',
        'type'        => 'sidebar-select',
        'section'     => 'woocommerce_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'shop_layout:not(full)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'shop_single_layout',
        'label'       => esc_html__( 'Shop single post layout', 'olmo' ),
        'desc'        => esc_html__( 'Shop single post layout', 'olmo' ),
        'std'         => 'full',
        'type'        => 'radio-image',
        'section'     => 'woocommerce_options',
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
        'id'          => 'shop_single_sidebar',
        'label'       => esc_html__( 'Single shop Sidebar', 'olmo' ),
        'desc'        => esc_html__( 'Single shop sidebar', 'olmo' ),
        'std'         => 'sidebar-1',
        'type'        => 'sidebar-select',
        'section'     => 'woocommerce_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'shop_single_layout:not(full)',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'woo_header_banner_type',
        'label'       => esc_html__( 'Header Banner Type', 'olmo' ),
        'desc'        => esc_html__( 'Select your header banner type', 'olmo' ),
        'std'         => 'woo_custom_image',
        'type'        => 'select',
        'section'     => 'woocommerce_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'woo_bg_color',
            'label'       => esc_html__( 'Background Color', 'olmo' ),
          ),
		  array(
            'value'       => 'woo_custom_image',
            'label'       => esc_html__( 'Custom Image', 'olmo' ),
          ),
        )
      ),
	  array(
        'id'          => 'woo_header_custom_color',
        'label'       => esc_html__('Select Color', 'olmo'),
        'desc'        => '',
        'std'         => '#0195ff',
        'type'        => 'colorpicker',
		'section'     => 'woocommerce_options',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
        'condition'   => 'woo_header_banner_type:is(woo_bg_color)',
      ),
	  array(
        'id'          => 'woo_default_banner_image',
        'label'       => esc_html__( 'Background Image', 'olmo' ),
        'desc'        => esc_html__( 'Background image', 'olmo' ),
        'std'         => OLMOTHEMEURI. 'images/banner.jpg',
        'type'        => 'upload',
        'section'     => 'woocommerce_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'woo_header_banner_type:is(woo_custom_image)',
        'operator'    => 'and'
      ),
    );

	return apply_filters( 'olmo_woocommerce_options', $options );
}  
?>