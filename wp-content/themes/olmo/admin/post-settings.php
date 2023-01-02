<?php
/**
 * Initialize the meta boxes. 
 */

add_action( 'admin_init', 'olmo_post_meta_boxes' );

function olmo_post_meta_boxes() {
  if( function_exists( 'ot_get_option' ) ): 
  $my_meta_box = array(
    'id'        => 'olmo_post_meta_box',
    'title'     => esc_html__('Olmo Post Settings', 'olmo'),
    'desc'      => '',
    'pages'     => array( 'post' ),
    'context'   => 'normal',
    'priority'  => 'high',
    'fields'    => array(
	  array(
        'id'          => 'header_settings',
        'label'       => esc_html__('Content Settings', 'olmo'),      
        'type'        => 'tab',
        'operator'    => 'and'
      ),
      array(
        'id'          => 'video_link',
        'label'       => esc_html__('Video Link', 'olmo'),
        'desc'        => esc_html__('Only Work for post formate video', 'olmo'),
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
      ),
	  array(
        'id'          => 'audio_link',
        'label'       => esc_html__('Audio Link', 'olmo'),
        'desc'        => esc_html__('Only Work for post formate audio', 'olmo'),
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
      ),
	  array(
        'id'          => 'image_gallery',
        'label'       => esc_html__('Gallery', 'olmo'),
        'desc'        => esc_html__('Only Work for post formate gallery', 'olmo'),
        'std'         => '',
        'type'      => 'gallery',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
      ),
	  array(
        'id'          => 'quote_text',
        'label'       => esc_html__('Quote', 'olmo'),
        'desc'        => esc_html__('Only Work for post formate quote', 'olmo'),
        'std'         => '',
        'type'        => 'textarea',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
      ),
	  array(
        'id'          => 'quote_text_url',
        'label'       => esc_html__('Quote URL', 'olmo'),
        'desc'        => esc_html__('Only Work for post formate quote', 'olmo'),
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
      ),
	  array(
        'id'          => 'quote_cite',
        'label'       => esc_html__('Quote Cite', 'olmo'),
        'desc'        => esc_html__('Only Work for post formate quote', 'olmo'),
        'std'         => '',
        'type'        => 'text',
        'class'       => '',
        'choices'     => array(),
        'operator'    => 'and',
      ),
    )
  );
  
  ot_register_meta_box( $my_meta_box );
  endif;
}
?>