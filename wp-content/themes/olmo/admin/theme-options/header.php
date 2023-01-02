<?php
function olmo_header_options( $options = array() ){
  $social_array = array(						
    array(
      'title' => esc_html__( 'Facebook', 'olmo' ),
      'link'  => '#',
      'social_class'=> 'fa-facebook-f'
      ),
    array(
      'title' => esc_html__( 'Twitter', 'olmo' ),
      'link'  => '#',
      'social_class'=> 'fa-twitter'
      ),
      array(
      'title' => esc_html__( 'Behance', 'olmo' ),
      'link'  => '#',
      'social_class'=> 'fa-behance'
      ),
       array(
      'title' => esc_html__( 'Youtube', 'olmo' ),
      'link'  => '#',
      'social_class'=> 'fa-youtube'
      ),						
    );
	$options = array(
		array(
        'id'          => 'header_style',
        'label'       => esc_html__( 'Header Style', 'olmo' ),
        'desc'        => esc_html__( 'Select header style', 'olmo' ),
        'std'         => 'style1',
        'type'        => 'select',
        'section'     => 'header_options',
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
          ),
		  array(
            'value'       => 'style3',
            'label'       => esc_html__( 'Style 3', 'olmo' ),
      ),
        )
    ),
    array(
      'id'          => 'banner_style',
      'label'       => esc_html__( 'Banner Style', 'olmo' ),
      'desc'        => esc_html__( 'Select banner style', 'olmo' ),
      'std'         => 'style1',
      'type'        => 'select',
      'section'     => 'header_options',
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
        ),
      )
  ),
	  array(
        'id'          => 'show_breadcrumbs',
        'label'       => esc_html__( 'Display Breadcrumbs', 'olmo' ),
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'header_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'bredcrumb_menu_prefix',
        'label'       => esc_html__( 'Breadcrumb Prefix', 'olmo' ),
        'desc'        => esc_html__( 'Breadcrumb prefix', 'olmo' ),
        'std'         => 'Home',
        'type'        => 'text',
        'section'     => 'header_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'show_breadcrumbs:not(off)',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'header_button',
        'label'       => esc_html__( 'Header Button', 'olmo' ),
        'desc'        => esc_html__( 'Header Button', 'olmo' ),
        'std'         => 'Get Started',
        'type'        => 'text',
        'section'     => 'header_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'header_button_link',
        'label'       => esc_html__( 'Header Button Link', 'olmo' ),
        'desc'        => esc_html__( 'Header Button Link', 'olmo' ),
        'std'         => '#',
        'type'        => 'text',
        'section'     => 'header_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'call_to_action_text',
        'label'       => esc_html__( 'Call to Action Text', 'olmo' ),
        'desc'        => esc_html__( 'Call to action text', 'olmo' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'header_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'call_to_action_number',
        'label'       => esc_html__( 'Call to Action Number', 'olmo' ),
        'desc'        => esc_html__( 'Call to action number', 'olmo' ),
        'std'         => '',
        'type'        => 'text',
        'section'     => 'header_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'show_plus_icon_in_menu',
        'label'       => esc_html__( 'Display Icon in Menu', 'olmo' ),
        'desc'        => '',
        'std'         => 'on',
        'type'        => 'on-off',
        'section'     => 'header_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'google_analytics_code',
        'label'       => esc_html__( 'Google Analytics', 'olmo' ),
        'desc'        => esc_html__( 'Google analytics code', 'olmo' ),
        'std'         => '',
        'type'        => 'textarea-simple',
        'section'     => 'header_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	);
	return apply_filters( 'olmo_header_options', $options );
} 
?>