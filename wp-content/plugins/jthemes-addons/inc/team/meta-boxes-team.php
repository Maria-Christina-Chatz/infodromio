<?php
/**
 * Initialize the meta boxes. 
 */
add_action( 'admin_init', 'team_meta_boxes' );

function team_meta_boxes(){
  global $wpdb, $post;
  if( function_exists( 'ot_get_option' ) ):
    $social_array = array(						
      array(
        'title' => esc_html__( 'Facebook', 'jthemes' ),
        'link'  => '#',
        'social_class'=> 'fa-facebook-f'
        ),
      array(
        'title' => esc_html__( 'Twitter', 'jthemes' ),
        'link'  => '#',
        'social_class'=> 'fa-twitter'
        ),
        array(
        'title' => esc_html__( 'Behance', 'jthemes' ),
        'link'  => '#',
        'social_class'=> 'fa-behance'
        ),
         array(
        'title' => esc_html__( 'Youtube', 'jthemes' ),
        'link'  => '#',
        'social_class'=> 'fa-youtube'
        ),						
      );
  $my_meta_boxx = array(
    'id'        => 'teams_item_lists',
    'title'     => esc_html__('Services List', 'jthemes'),
    'desc'      => '',
    'pages'     => array( 'team' ),
    'context'   => 'normal',
    'priority'  => 'high',
    'fields'    => array(
      array(
        'id'          => 'team_designation',
        'label'       => esc_html__('Designation', 'jthemes'),
        'desc'        => '',
        'std'         => 'Founder',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
        'condition'	  => ''
      ),
      array(
        'id'          => 'team_email',
        'label'       => esc_html__('Email', 'jthemes'),
        'desc'        => '',
        'std'         => 'maryanna@rundex.com',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
        'condition'	  => ''
      ),
      array(
        'id'          => 'team_phone',
        'label'       => esc_html__('Phone', 'jthemes'),
        'desc'        => '',
        'std'         => '02-078475399',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
        'condition'	  => ''
      ),
      array(
        'id'          => 'team_address',
        'label'       => esc_html__('Address', 'jthemes'),
        'desc'        => '',
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
        'condition'	  => ''
      ),   
      array(
        'id'          => 'team_social_icons',
        'label'       => esc_html__( 'Social Icons', 'jthemes' ),
        'desc'        => '',
        'std'         => $social_array,
        'type'        => 'list-item',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and',
        'settings'    => array( 
          array(
            'id'          => 'link',
            'label'       => esc_html__( 'Link', 'jthemes' ),
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
            'id'          => 'social_class',
            'label'       => esc_html__( 'Icon Class', 'jthemes' ),
            'desc'        => esc_html__( 'Ex: fa-facebook-f', 'jthemes' ),
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
        ),
      ),
    )
  );
  
  ot_register_meta_box( $my_meta_boxx );
  endif;  //if( function_exists( 'ot_get_option' ) ):
}
?>