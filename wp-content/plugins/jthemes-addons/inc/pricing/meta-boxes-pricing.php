<?php
/**
 * Initialize the meta boxes. 
 */
add_action( 'admin_init', 'pricing_meta_boxes' );

function pricing_meta_boxes(){
  global $wpdb, $post;
  if( function_exists( 'ot_get_option' ) ):
  $my_meta_boxx = array(
    'id'        => 'my_meta_box',
    'title'     => esc_html__('Package Information', 'jthemes'),
    'desc'      => '',
    'pages'     => array( 'pricing' ),
    'context'   => 'normal',
    'priority'  => 'high',
    'fields'    => array(
	array(
        'id'          => 'currency',
        'label'       => esc_html__( 'Currency', 'jthemes' ),
        'desc'        => '',
        'std'         => '$',
        'type'        => 'text',
        'rows'        => '1',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'pricing_price',
        'label'       => esc_html__( 'Price', 'jthemes' ),
        'desc'        => '',
        'std'         => '7',
        'type'        => 'text',
        'rows'        => '1',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'fraction',
        'label'       => esc_html__( 'Fraction', 'jthemes' ),
        'desc'        => '',
        'std'         => '.99',
        'type'        => 'text',
        'rows'        => '1',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
	  array(
        'id'          => 'period',
        'label'       => esc_html__( 'Price Period', 'jthemes' ),
        'desc'        => '',
        'std'         => '/Month',
        'type'        => 'text',
        'rows'        => '1',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'discount',
        'label'       => esc_html__( 'Discount', 'jthemes' ),
        'desc'        => '',
        'std'         => '30',
        'type'        => 'text',
        'rows'        => '1',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
    array(
        'id'          => 'pricing_featured',
        'label'       => esc_html__( 'Featured', 'jthemes' ),
        'desc'        => '',
        'std'         => 'off',
        'type'        => 'on-off',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'featured_title',
        'label'       => esc_html__( 'Featured Title', 'jthemes' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'rows'        => '1',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => 'pricing_featured:is(on)',
        'operator'    => 'and'
      ),  
      array(
        'id'          => 'feature_info',
        'label'       => esc_html__( 'Feature info', 'jthemes' ),
        'desc'        => '',
        'std'         => '',
        'type'        => 'list-item',
        'section'     => 'general',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array(
          array(
            'id'          => 'number',
            'label'       => esc_html__( 'Number', 'jthemes' ),
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
          array(
            'id'          => 'pricing_list_text',
            'label'       => esc_html__( 'Text', 'jthemes' ),
            'desc'        => '',
            'std'         => '',
            'type'        => 'text',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'min_max_step'=> '',
            'class'       => '',
            'condition'   => '',
            'operator'    => 'and'
          ),
		  array(
            'id'          => 'select_icon',
            'label'       => esc_html__( 'Set Icon', 'jthemes' ),
            'desc'        => esc_html__( 'Paste a icon class here', 'jthemes' ),
            'std'         => 'fa fa-envelope-o',
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
      array(
        'id'          => 'button_link',
        'label'       => esc_html__( 'Button link', 'jthemes' ),
        'desc'        => '',
        'std'         => '#',
        'type'        => 'text',
        'rows'        => '1',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ), 
      array(
        'id'          => 'button_text',
        'label'       => esc_html__( 'Button text', 'jthemes' ),
        'desc'        => '',
        'std'         => 'Order Now',
        'type'        => 'text',
        'rows'        => '1',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ),
         
    )
  );
  
  ot_register_meta_box( $my_meta_boxx );
  endif;  //if( function_exists( 'ot_get_option' ) ):
}
?>