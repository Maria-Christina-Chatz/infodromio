<?php
function olmo_general_options( $options = array() ){
	
	$options = array(
	  array(
        'id'          => 'main_logo',
        'label'       => esc_html__( 'Header Logo', 'olmo' ),
        'desc'        => esc_html__( 'Header logo', 'olmo' ),
        'std'         => OLMOTHEMEURI . 'images/logo.png',
        'type'        => 'upload',
        'section'     => 'general_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'footer_widget_logo',
        'label'       => esc_html__( 'Footer Widget Logo', 'olmo' ),
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'general_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'footer_logo',
        'label'       => esc_html__( 'Footer Logo', 'olmo' ),
        'desc'        => esc_html__( 'Footer logo', 'olmo' ),
        'std'         => OLMOTHEMEURI . 'images/logo.png',
        'type'        => 'upload',
        'section'     => 'general_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'footer_widget_logo:not(off)',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'mobile_logo',
        'label'       => esc_html__( 'Responsive Logo', 'olmo' ),
        'desc'        => esc_html__( 'Logo for responsive devices( mobile, tab etc )', 'olmo' ),
        'std'         => OLMOTHEMEURI . 'images/logo-white.png',
        'type'        => 'upload',
        'section'     => 'general_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'preloader',
        'label'       => esc_html__( 'Display Preloader', 'olmo' ),
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'section'     => 'general_options',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	);

	return apply_filters( 'olmo_general_options', $options );
}
?>