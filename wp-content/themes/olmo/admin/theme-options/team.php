<?php
function olmo_team_options( $options = array() ){
	$options = array(
	array(
        'id'          => 'team_title',
        'label'       => esc_html__( 'Team Header Title', 'olmo' ),
        'desc'        => esc_html__( 'Team page header title', 'olmo' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'team_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'team_subtitle',
        'label'       => esc_html__( 'Team Header Sub-Title', 'olmo' ),
        'desc'        => esc_html__( 'Team page header sub-title', 'olmo' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'team_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'team_column',
        'label'       => esc_html__( 'Team Column in Archive Page', 'olmo' ),
        'desc'        => '',
        'std'         => '3',
        'type'        => 'numeric-slider',
        'section'     => 'team_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '1,4,1',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'team_style',
        'label'       => esc_html__( 'Team Style', 'olmo' ),
        'desc'        => esc_html__( 'Select team style', 'olmo' ),
        'std'         => 'style1',
        'type'        => 'select',
        'section'     => 'team_options',
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
        'id'          => 'team_header_banner_type',
        'label'       => esc_html__( 'Header Banner Type', 'olmo' ),
        'desc'        => esc_html__( 'Select your header banner type', 'olmo' ),
        'std'         => 'team_custom_image',
        'type'        => 'select',
        'section'     => 'team_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'choices'     => array( 
          array(
            'value'       => 'team_bg_color',
            'label'       => esc_html__( 'Background Color', 'olmo' ),
          ),
		  array(
            'value'       => 'team_custom_image',
            'label'       => esc_html__( 'Custom Image', 'olmo' ),
          )
        )
      ),
	  array(
        'id'          => 'team_header_custom_color',
        'label'       => esc_html__('Select Color', 'olmo'),
        'desc'        => '',
        'std'         => '#2f353e',
        'type'        => 'colorpicker',
		'section'     => 'team_options',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
        'condition'   => 'team_header_banner_type:is(team_bg_color)',
      ),
	  array(
        'id'          => 'team_default_banner_image',
        'label'       => esc_html__( 'Background Image', 'olmo' ),
        'desc'        => esc_html__( 'Background image', 'olmo' ),
        'std'         => OLMOTHEMEURI. 'images/banner.jpg',
        'type'        => 'upload',
        'section'     => 'team_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'team_header_banner_type:is(team_custom_image)',
        'operator'    => 'and'
      ),
    );

	return apply_filters( 'olmo_team_options', $options );
}  
?>