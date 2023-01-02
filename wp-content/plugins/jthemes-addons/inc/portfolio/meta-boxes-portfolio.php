<?php
/**
 * Initialize the meta boxes. 
 */
add_action( 'admin_init', 'portfolio_meta_boxes' );

function portfolio_meta_boxes(){
  //global $wpdb, $post;
  if( function_exists( 'ot_get_option' ) ):
  $my_meta_boxx = array(
    'id'        => 'my_meta_box',
    'title'     => esc_html__('Portfolio Settings', 'jthemes'),
    'desc'      => '',
    'pages'     => array( 'portfolio' ),
    'context'   => 'normal',
    'priority'  => 'high',
    'fields'    => array(
	array(
        'id'          => 'port_custom_title',
        'label'       => esc_html__('Custom Title', 'jthemes'),
        'desc'        => '',
        'std'         => 'on',
        'type'        => 'on-off',
        'class'       => '',
        'choices'     => array(),
        'condition'	  => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'port_title',
        'label'       => esc_html__('Title', 'jthemes'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
        'condition'	  => 'port_custom_title:is(on)'
      ),
      array(
        'id'          => 'port_subtitle',
        'label'       => esc_html__('Sub Title', 'jthemes'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'rows'		  => 3,
        'choices'     => array(),
        'operator'    => 'and',
        'condition'	  => 'port_custom_title:is(on)'
      ),
	  array(
        'id'          => 'port_author',
        'label'       => esc_html__('Author', 'jthemes'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
        'condition'	  => ''
      ),
	  array(
        'id'          => 'port_date',
        'label'       => esc_html__('Date', 'jthemes'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
        'condition'	  => ''
      ),
      array(
        'id'          => 'port_location',
        'label'       => esc_html__('Location', 'jthemes'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
        'condition'	  => ''
      ),
	  array(
        'id'          => 'port_link',
        'label'       => esc_html__('Website', 'jthemes'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
        'condition'	  => ''
      ),
	  )
  );
  
  ot_register_meta_box( $my_meta_boxx );
  endif;  //if( function_exists( 'ot_get_option' ) ):
}
?>