<?php
function olmo_background_options( $options = array() ){
	$options = array(
	  array(
        'id'          => 'background_layout',
        'label'       => esc_html__( 'Background Layout', 'olmo' ),
        'desc'        => esc_html__( 'Background Layout', 'olmo' ),
        'std'         => 'wide',
        'type'        => 'select',
        'section'     => 'background_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'wide',
            'label'       => esc_html__( 'Wide', 'olmo' ),
          ),
          array(
            'value'       => 'boxed',
            'label'       => esc_html__( 'Boxed', 'olmo' ),
          )
        )
      ),
	  array(
        'id'          => 'boxed_background_image',
        'label'       => esc_html__( 'Boxed Background Image', 'olmo' ),
        'desc'        => esc_html__( 'Boxed background image', 'olmo' ),
        'std'         => OLMOTHEMEURI.'images/wood_03.jpg',
        'type'        => 'upload',
        'section'     => 'background_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'background_layout:is(boxed)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'body_background',
        'label'       => esc_html__( 'Body background', 'olmo' ),
        'desc'        => esc_html__( 'Background can be image or color', 'olmo' ),
        'std'         => array(),
        'type'        => 'background',
        'section'     => 'background_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'   => array(
                array(
                    'selector' => 'body'
                    )
            )
      ),
      array(
        'id'          => 'main_container_background',
        'label'       => esc_html__( 'Main container background', 'olmo' ),
        'desc'        => esc_html__( 'Background can be image or color', 'olmo' ),
        'std'         => array(),
        'type'        => 'background',
        'section'     => 'background_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'   => array(
                array(
                    'selector' => '.container'
                    )
            )
      ),
      array(
        'id'          => 'header_background',
        'label'       => esc_html__( 'Header background', 'olmo' ),
        'desc'        => esc_html__( 'Header Background', 'olmo' ),
        'std'         => array('background-image' => '', 'background-color' => ''),
        'type'        => 'background',
        'section'     => 'background_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'   => array(
                array(
                    'selector' => '.sidebar'
                    )
            )
      ),
	  array(
        'id'          => 'sidebar_background',
        'label'       => esc_html__( 'Sidebar background', 'olmo' ),
        'desc'        => esc_html__( 'Sidebar Background', 'olmo' ),
        'std'         => array('background-image' => '', 'background-color' => ''),
        'type'        => 'background',
        'section'     => 'background_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'   => array(
                array(
                    'selector' => '.sidebar'
                    )
            )
      ),
	  array(
        'id'          => 'footer_widget_background',
        'label'       => esc_html__( 'Footer Widget background', 'olmo' ),
        'desc'        => esc_html__( 'Footer Widget background', 'olmo' ),
        'std'         => array('background-image' => '', 'background-color' => ''),
        'type'        => 'background',
        'section'     => 'background_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'   => array(
                array(
                    'selector' => '.footer.section'
                    )
            )
      ),
	  array(
        'id'          => 'footer_copyright_background',
        'label'       => esc_html__( 'Footer Copyright background', 'olmo' ),
        'desc'        => esc_html__( 'Footer Copyright background', 'olmo' ),
        'std'         => array('background-image' => '', 'background-color' => ''),
        'type'        => 'background',
        'section'     => 'background_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'action'   => array(
                array(
                    'selector' => '.copyrights'
                    )
            )
      ),    
    );

	return apply_filters( 'olmo_background_options', $options );
}  
?>