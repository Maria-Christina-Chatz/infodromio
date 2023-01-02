<?php
function olmo_footer_options( $options = array() ){	
	$options = array(
		array(
        'id'          => 'footer_style',
        'label'       => esc_html__( 'Footer Style', 'olmo' ),
        'desc'        => esc_html__( 'Select footer style', 'olmo' ),
        'std'         => 'style1',
        'type'        => 'select',
        'section'     => 'footer_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
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
        'id'          => 'footer_widget_top_area',
        'label'       => esc_html__( 'Footer Widget Top Area', 'olmo' ),
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'footer_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_widget_area',
        'label'       => esc_html__( 'Footer Widget Area', 'olmo' ),
        'desc'        => '',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'footer_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_widget_box',
        'label'       => esc_html__( 'Footer Widget Box', 'olmo' ),
        'desc'        => '',
        'std'         => '4',
        'type'        => 'numeric-slider',
        'section'     => 'footer_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '1,4,1',
        'class'       => '',
        'condition'   => 'footer_widget_area:not(off)',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_widget_box_column_serial',
        'label'       => esc_html__( 'Footer Widget Column Serial', 'olmo' ),
        'desc'        => esc_html__( 'Write column number seperate by comma', 'olmo' ),
        'std'         => '3,3,3,3',
        'type'        => 'text',
        'section'     => 'footer_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'footer_widget_area:not(off)',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'copyright_text',
        'label'       => esc_html__( 'Copyright Text', 'olmo' ),
        'desc'        => '',
        'std'         => sprintf(esc_html__('%1$s &copy; Copyright, Olmo. All rights reserved.', 'olmo'), date('Y')),
        'type'        => 'textarea',
        'section'     => 'footer_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
    );

	return apply_filters( 'olmo_footer_options', $options );
}  
?>