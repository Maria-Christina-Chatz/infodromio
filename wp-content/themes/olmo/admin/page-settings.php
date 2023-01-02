<?php
/**
 * Initialize the meta boxes. 
 */

add_action( 'admin_init', 'olmo_meta_boxes' );

function olmo_meta_boxes() {
  if( function_exists( 'ot_get_option' ) ): 
  $my_meta_box = array(
    'id'        => 'olmo_meta_box',
    'title'     => esc_html__('olmo Page Settings', 'olmo'),
    'desc'      => '',
    'pages'     => array( 'page' ),
    'context'   => 'normal',
    'priority'  => 'high',
    'fields'    => array(
	  array(
        'id'          => 'header_settings',
        'label'       => esc_html__('Header Settings', 'olmo'),      
        'type'        => 'tab',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'onepage_menu_select',
        'label'       => esc_html__( 'Select Menu(work only for onepage template)', 'olmo' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'select',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => olmo_menu_select(),
      ),
      array(
        'id'          => 'overwrite_header_style',
        'label'       => esc_html__('Overwrite Header Style', 'olmo'),
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'class'       => '',
        'choices'     => array(),
        'condition'	  => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'page_header_style',
        'label'       => esc_html__( 'Header Style', 'olmo' ),
        'desc'        => esc_html__( 'Select header style', 'olmo' ),
        'std'         => 'style1',
        'type'        => 'select',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'overwrite_header_style:is(on)',
        'operator'    => 'and',
        'choices'     => array(
		  array(
            'value'       => 'style1',
            'label'       => esc_html__( 'Style 1', 'olmo' ),
          ),
          array(
            'value'       => 'style2',
            'label'       => esc_html__( 'Style 2', 'olmo' ),
          ),
		  array(
            'value'       => 'style3',
            'label'       => esc_html__( 'Style 3', 'olmo' ),
      ),
        )
      ),
      array(
        'id'          => 'overwrite_banner_style',
        'label'       => esc_html__('Overwrite Banner Style', 'olmo'),
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'class'       => '',
        'choices'     => array(),
        'condition'	  => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'page_banner_style',
        'label'       => esc_html__( 'Banner Style', 'olmo' ),
        'desc'        => esc_html__( 'Select banner style', 'olmo' ),
        'std'         => 'style1',
        'type'        => 'select',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'overwrite_banner_style:is(on)',
        'operator'    => 'and',
        'choices'     => array(
		  array(
            'value'       => 'style1',
            'label'       => esc_html__( 'Style 1', 'olmo' ),
          ),
          array(
            'value'       => 'style2',
            'label'       => esc_html__( 'Style 2', 'olmo' ),
          ),
        )
      ),
      array(
        'id'          => 'overwrite_header_topbar',
        'label'       => esc_html__('Show Header Topbar', 'olmo'),
        'desc'        => '',
        'std'         => 'on',
        'type'        => 'on-off',
        'class'       => '',
        'choices'     => array(),
        'condition'	  => 'overwrite_header_style:is(on)',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'custom_title',
        'label'       => esc_html__('Custom Title', 'olmo'),
        'desc'        => '',
        'std'         => 'on',
        'type'        => 'on-off',
        'class'       => '',
        'choices'     => array(),
        'condition'	  => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'title',
        'label'       => esc_html__('Title', 'olmo'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
        'condition'	  => 'custom_title:is(on)'
      ),
      array(
        'id'          => 'subtitle',
        'label'       => esc_html__('Sub Title', 'olmo'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'rows'		  => 3,
        'choices'     => array(),
        'operator'    => 'and',
        'condition'	  => 'custom_title:is(on)'
      ),
	   array(
        'id'          => 'content_tab',
        'label'       => esc_html__('Layout Settings', 'olmo'),      
        'type'        => 'tab',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'page_layout',
        'label'       => esc_html__( 'Default Layout', 'olmo' ),
        'desc'        => '',
        'std'         => 'full',
        'type'        => 'radio-image',
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
            'label'       => esc_html__( 'Full Width', 'olmo' ),
            'src'         => OT_URL . '/assets/images/layout/full-width.png'
          ),
          array(
            'value'       => 'ls',
            'label'       => esc_html__( 'With Left Sidebar', 'olmo' ),
            'src'         => OT_URL . '/assets/images/layout/left-sidebar.png'
          ),
          array(
            'value'       => 'rs',
            'label'       => esc_html__( 'With Right sidebar', 'olmo' ),
            'src'         => OT_URL . '/assets/images/layout/right-sidebar.png'
          ),
        )
      ),
      array(
        'id'          => 'sidebar',
        'label'       => esc_html__('Select Sidebar', 'olmo'),
        'desc'        => '',
        'std'         => 'sidebar-1',
        'type'        => 'sidebar-select',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
        'condition'   => 'page_layout:not(full)'
      ),
	  array(
        'id'          => 'header_banner_type',
        'label'       => esc_html__( 'Header Banner Type', 'olmo' ),
        'desc'        => esc_html__( 'Select your header banner type', 'olmo' ),
        'std'         => 'bg_color',
        'type'        => 'select',
        'section'     => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'bg_color',
            'label'       => esc_html__( 'Background Color', 'olmo' ),
          ),
		  array(
            'value'       => 'custom_image',
            'label'       => esc_html__( 'Background Image', 'olmo' ),
          )
        )
      ),
      array(
        'id'          => 'page_header_custom_color',
        'label'       => esc_html__('Select Color', 'olmo'),
        'desc'        => '',
        'std'         => '#2f353e',
        'type'        => 'colorpicker',
        'section'     => 'blog_options',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
        'condition'   => 'header_banner_type:is(bg_color)',
      ),
	  array(
        'id'          => 'header_custom_image',
        'label'       => esc_html__( 'Background Image', 'olmo' ),
        'desc'        => esc_html__( 'Background image', 'olmo' ),
        'std'         => OLMOTHEMEURI. 'images/banner.jpg',
        'type'        => 'upload',
        'section'     => 'blog_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'header_banner_type:is(custom_image)',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'breadcrumb_bg_color',
        'label'       => esc_html__('Breadcrumb BG Color', 'olmo'),
        'desc'        => '',
        'std'         => '#ffffff',
        'type'        => 'colorpicker',
		'section'     => 'blog_options',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
        'condition'   => '',
      ),
	  array(
        'id'          => 'content_padding_type',
        'label'       => esc_html__( 'Main Content Padding', 'olmo' ),
        'desc'        => esc_html__( 'Main content padding', 'olmo' ),
        'std'         => 'with_padding',
        'type'        => 'select',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'no_padding',
            'label'       => esc_html__( 'Main Content No Padding', 'olmo' ),
          ),
		  array(
            'value'       => 'with_padding',
            'label'       => esc_html__( 'Main Content With Padding', 'olmo' ),
          )
        )
      ),
	  array(
        'id'          => 'content_background',
        'label'       => esc_html__('Content Background', 'olmo'),
        'desc'        => '',
        'std'         => '#ffffff',
        'type'        => 'colorpicker',
		    'section'     => 'blog_options',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
      ),
	  array(
        'id'          => 'footer_settings',
        'label'       => esc_html__('Footer Settings', 'olmo'),      
        'type'        => 'tab',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'overwrite_footer_style',
        'label'       => esc_html__('Overwrite Footer Style', 'olmo'),
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'class'       => '',
        'choices'     => array(),
        'condition'	  => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'page_footer_style',
        'label'       => esc_html__( 'Footer Style', 'olmo' ),
        'desc'        => esc_html__( 'Select footer style', 'olmo' ),
        'std'         => 'style1',
        'type'        => 'select',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'overwrite_footer_style:is(on)',
        'operator'    => 'and',
        'choices'     => array(
		  array(
            'value'       => 'style1',
            'label'       => esc_html__( 'Style 1', 'olmo' ),
          ),
          array(
            'value'       => 'style2',
            'label'       => esc_html__( 'Style 2', 'olmo' ),
          )
        )
      ),
      array(
        'id'          => 'overwrite_footer_top_widget',
        'label'       => esc_html__('Overwrite Footer Top Widget', 'olmo'),
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'class'       => '',
        'choices'     => array(),
        'condition'	  => 'overwrite_footer_style:is(on)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'demo_page_color',
        'label'       => esc_html__('Select Preset Color', 'olmo'),
        'desc'        => '',
        'std'         => '#0195ff',
        'type'        => 'colorpicker',
		    'section'     => 'blog_options',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
      ),
    )
  );
  
  ot_register_meta_box( $my_meta_box );
  endif;
}
?>