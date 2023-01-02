<?php
function olmo_typography_options( $options = array() ){    
    $options = array(
		array(
        'id'          => 'google_api_key',
        'label'       => esc_html__( 'Google API Key', 'olmo' ),
        'desc'        => esc_html__( 'Google API key for getting google fonts', 'olmo' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),    
		array( // Google Font API
            'id'          => 'google_fonts',
            'label'       => esc_html__('Google Fonts.', 'olmo'),
            'desc'        => esc_html__('You can add multiple google fonts and set it to any tag.', 'olmo'),
            'std'         => array( 
			  array(
				'family'    => 'Roboto',
				'variants'  => array( '400', '700' ),
				'subsets'   => array( 'latin' )
			  ),
			),
            'type'        => 'google-fonts',
            'section'     => 'fonts',
            'class'       => ''
        ),
		array(
        'id'          => 'body',
        'label'       => esc_html__( 'Body &amp; Content p', 'olmo' ),
        'desc'        => '',
        'std'         => '',
        'selector'    => 'body', 
        'type'        => 'typography',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'      => array(
                array(
                'selector' => 'body',
                'property'   => ''
                ),
            )         
      ),
      array(
        'id'          => 'body_a',
        'label'       => esc_html__( 'Body a', 'olmo' ),
        'desc'        => '',
        'std'         => '',         
        'type'        => 'typography',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'      => array(
                array(
                'selector'    => 'a', 
                'property'   => ''
                ),
            )
      ),
      array(
        'id'          => 'menu_a',
        'label'       => esc_html__( 'Menu a', 'olmo' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'      => array(
                array(
                'selector'    => '.navbar-nav > li > a', 
                'property'   => ''
                ),
            )
      ),
      array(
        'id'          => 'submenu_a',
        'label'       => esc_html__( 'Submenu a', 'olmo' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'      => array(
                array(
                'selector'    => '.olmo-dd a,.olmo-mm a', 
                'property'   => ''
                ),
            )
      ),
      array(
        'id'          => 'h1',
        'label'       => esc_html__( 'H1', 'olmo' ),
        'desc'        => '',
        'std'         => '',
        'selector'    => 'h1',
        'type'        => 'typography',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'      => array(
                array(
                'selector'    => 'h1',
                'property'   => ''
                ),
            ) 
      ),
      array(
        'id'          => 'h2',
        'label'       => esc_html__( 'H2', 'olmo' ),
        'desc'        => '',
        'std'         => '',
        'selector'    => 'h2',
        'type'        => 'typography',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'      => array(
                array(
                'selector'    => 'h2',
                'property'   => ''
                ),
            ) 
      ),
      array(
        'id'          => 'h3',
        'label'       => esc_html__( 'H3', 'olmo' ),
        'desc'        => '',
        'std'         => '',
        'selector'    => 'h3',
        'type'        => 'typography',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'      => array(
                array(
                'selector'    => 'h3',
                'property'   => ''
                ),
            ) 
      ),
      array(
        'id'          => 'h4',
        'label'       => esc_html__( 'H4', 'olmo' ),
        'desc'        => '',
        'std'         => '',
        'selector'    => 'h4',
        'type'        => 'typography',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'      => array(
                array(
                'selector'    => 'h4',
                'property'   => ''
                ),
            ) 
      ),
      array(
        'id'          => 'h5',
        'label'       => esc_html__( 'H5', 'olmo' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'      => array(
                array(
                    'selector'    => 'h5',
                    'property'   => ''
                ),
            ),
      ),
      array(
        'id'          => 'h6',
        'label'       => esc_html__( 'H6', 'olmo' ),
        'desc'        => '',
        'std'         => '',        
        'type'        => 'typography',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'      => array(
                array(
                'selector'    => 'h6',
                'property'   => ''
                ),
            ),
      ),
      array(
        'id'          => 'sidebar_fonts',
        'label'       => esc_html__( 'Sidebar typography options', 'olmo' ),
        'desc'        => esc_html__( 'Only Applied on sidebar widget area', 'olmo' ),
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'      => array(
                array(
                'selector'    => '.sidebar',
                'property'   => ''
                ),
            ),
      ),
      array(
        'id'          => 'sidebar_title',
        'label'       => esc_html__( 'Sidebar Title', 'olmo' ),
        'desc'        => '',
        'std'         => '',        
        'type'        => 'typography',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'      => array(
                array(
                'selector'    => '.sidebar .widget-title',
                'property'   => ''
                ),
            ),
      ),
      array(
        'id'          => 'sidebar_p',
        'label'       => esc_html__( 'Sidebar p', 'olmo' ),
        'desc'        => '',
        'std'         => '',                
        'type'        => 'typography',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
		'action'      => array(
                array(
                'selector'    => '.sidebar p',
                'property'   => ''
                ),
            ),
      ),
      array(
        'id'          => 'sidebar_link',
        'label'       => esc_html__( 'Sidebar Link', 'olmo' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'      => array(
                array(
                'selector'    => '.sidebar a',
                'property'   => ''
                ),
            ) 
      ),
      array(
        'id'          => 'footer_typography_option',
        'label'       => esc_html__( 'Footer Typography option', 'olmo' ),
        'desc'        => esc_html__( 'Only applied on footer.', 'olmo' ),
        'std'         => '',
        'type'        => 'textblock-titled',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_p',
        'label'       => esc_html__( 'Footer p', 'olmo' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'      => array(
                array(
                    'selector'    => '.footer-bottom-part p, .copyrights p',
                    'property'   => ''
                ),
            ),
      ),
	  array(
        'id'          => 'footer_widget_title',
        'label'       => esc_html__( 'Footer Widget Title', 'olmo' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'      => array(
                array(
                    'selector'    => '.footer-bottom-part .widget-title',
                    'property'   => ''
                ),
            ),
      ),
	  array(
        'id'          => 'footer_widget_content',
        'label'       => esc_html__( 'Footer Widget Content', 'olmo' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'      => array(
                array(
                    'selector'    => '.footer .footer-bottom-part .footer-contact h5',
                    'property'   => ''
                ),
            ),
      ),
      array(
        'id'          => 'footer_link',
        'label'       => esc_html__( 'Footer Link', 'olmo' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'typography',
        'section'     => 'fonts',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'      => array(
                array(
                    'selector'    => '.footer-bottom-part .footer-widget-area ul li a, .copyrights .footer-menu li a',
                    'property'   => ''
                ),
            ),
      ),
    );

	return apply_filters( 'olmo_typography_options', $options );
}   
?>