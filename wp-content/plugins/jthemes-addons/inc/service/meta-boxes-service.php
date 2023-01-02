<?php
/**
 * Initialize the meta boxes. 
 */
add_action( 'admin_init', 'service_meta_boxes' );

function service_meta_boxes(){
  global $wpdb, $post;
  if( function_exists( 'ot_get_option' ) ):
  $my_meta_boxx = array(
    'id'        => 'services_item_lists',
    'title'     => esc_html__('Services List', 'jthemes'),
    'desc'      => '',
    'pages'     => array( 'service' ),
    'context'   => 'normal',
    'priority'  => 'high',
    'fields'    => array(  
      array(
        'id'          => 'service_meta_image',
        'label'       => esc_html__( 'Service Image', 'jthemes' ),
        'desc'        => esc_html__( 'Icon for style 1', 'jthemes' ),
        'std'         => '',
        'type'        => 'upload',
        'section'     => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'feature_info',
        'label'       => esc_html__( 'List Items', 'jthemes' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array(
		  array(
            'id'          => 'select_icon',
            'label'       => esc_html__( 'Set Icon', 'jthemes' ),
            'desc'        => esc_html__( 'Paste a fontawesome icon class here', 'jthemes' ),
            'std'         => 'fas fa-check-circle',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          )
        )
      ),
    )
  );
  
  ot_register_meta_box( $my_meta_boxx );
  endif;  //if( function_exists( 'ot_get_option' ) ):
}
?>