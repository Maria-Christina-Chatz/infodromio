<?php
include(OLMOTHEMEDIR . '/admin/scripts.php');
include(OLMOTHEMEDIR . '/admin/page-settings.php');
include(OLMOTHEMEDIR . '/admin/post-settings.php');
include(OLMOTHEMEDIR . '/admin/demo-import.php');

function olmo_options_filter($var){
    $var = (is_array($var) && ($var['type'] == 'background') || ($var['type'] == 'upload') || ($var['type'] == 'measurement') || ($var['type'] == 'typography') || ($var['type'] == 'colorpicker') || ($var['type'] == 'colorpicker-opacity'));

     return $var;
}


function olmo_custom_css_from_theme_options(){
	$custom_css = '';
	if( function_exists( 'ot_get_option' ) ):
    $settings = olmo_theme_options();
    $options = array_filter($settings, "olmo_options_filter");
    foreach ($options as $option) :
        if(isset($option['action'])){
            if( $option['type'] == 'background' ){
                $background = ot_get_option( $option['id'] );
                $background = (empty($background)) ? $option['std'] : $background;
                if( !empty($background) ){
                    foreach ($option['action'] as $value) {
                        if($value['selector'] != ''){
                            $custom_css .= $value['selector']. '{ ';
                            foreach( $background as $key => $value ){
                                if($key == 'background-image') $custom_css .= ($value != '')? $key. ': url('.esc_url($value).'); ' : '';
                                else $custom_css .= ($value != '')? $key. ': '.$value.'; ' : '';
                            }
                            $custom_css .= '}';
                        }
                    }
				}
			}
			elseif( $option['type'] == 'upload' ){
                $upload = ot_get_option( $option['id'] );
                $upload = ($upload == '') ? $option['std'] : $upload;
                if( $upload != '' ){
                    foreach ($option['action'] as $value) {
						if($value['property'] == 'cursor'){
							$custom_css .= ($value['selector'] != '')? $value['selector']. '{ '.$value['property'].': url('.esc_url($upload).'), auto; } ' : '';
						} else{
						$custom_css .= ($value['selector'] != '')? $value['selector']. '{ '.$value['property'].': url('.esc_url($upload).'); } ' : '';
						}
                    }
				}
			}
			
            elseif( $option['type'] == 'typography' ){
                $typography = ot_get_option( $option['id'], array() );        
                $typography = empty($typography) ? $option['std'] : $typography;
                if(!empty($typography)) {
                    foreach ($option['action'] as $value) {  
                        if($value['selector'] != ''){
                            $custom_css .= $value['selector']. '{ ';
                            foreach ($typography as $key => $value) {
                                if( $key == 'font-color'){
									$custom_css .= ( $value != '' )? 'color: '.$value.'; ' : '';
								}else{
								$custom_css .= ( $value != '' )? $key. ': '.$value.'; ' : '';
								}
                            }
                            $custom_css .= ' }';
                        }
                    }
         
				}
			}
            elseif( $option[ 'type' ] == 'colorpicker' ){
                if(is_page()) {
                    $colorpicker = get_post_meta(get_the_ID(), 'demo_page_color', true);
                } else {
                    $colorpicker = ot_get_option( $option['id'] );  
                }   

                $colorpicker = ($colorpicker == '') ? $option['std'] : $colorpicker;

                $rgb = olmo_hex2rgb($colorpicker);

                if( $colorpicker != '' ){
                    foreach ($option['action'] as $value) {
                        $colorpicker = isset($value['opacity'])? 'rgba('.$rgb.', '.$value['opacity'].')' : $colorpicker;
                        $custom_css .= ($value['selector'] != '')?$value['selector']. '{ '.$value['property'].': '.$colorpicker .'; } ' : '';
                    }
				}
			}
				elseif( $option[ 'type' ] == 'colorpicker-opacity' ){  
                $colorpicker_opacity = ot_get_option( $option['id'] );  

                $colorpicker_opacity = ($colorpicker_opacity == '') ? $option['std'] : $colorpicker_opacity;

                if( $colorpicker_opacity != '' ){
                    foreach ($option['action'] as $value) {
                        $custom_css .= ($value['selector'] != '')? $value['selector']. '{ '.$value['property'].': '.$colorpicker_opacity .'; } ' : '';
                    }
				}
		    }
            elseif( $option[ 'type' ] == 'measurement' ){ 
                $measurement =  ot_get_option( $option['id'], array() ); 
                $measurement = empty($measurement) ? $option['std'] : $measurement; 
                if( !empty( $measurement ) ) {
                    foreach ($option['action'] as $value) {  
                        if($value['selector'] != ''){
                            $custom_css .= $value['selector']. '{ ';
                            $custom_css .= $value['property'].': '.intval($measurement[0]).$measurement[1] .';';
                            $custom_css .= ' }';
                        }
                    }
				}
			}
        }//if(isset($option['action'])):
    endforeach;
	endif;
	return $custom_css;
}


function olmo_hex2rgb($hex) {
   $hex = str_replace("#", "", $hex);

   if(strlen($hex) == 3) {
      $r = hexdec(substr($hex,0,1).substr($hex,0,1));
      $g = hexdec(substr($hex,1,1).substr($hex,1,1));
      $b = hexdec(substr($hex,2,1).substr($hex,2,1));
   } else {
      $r = hexdec(substr($hex,0,2));
      $g = hexdec(substr($hex,2,2));
      $b = hexdec(substr($hex,4,2));
   }
   $rgb = array($r, $g, $b);
   $rgb_color = implode(",", $rgb); // returns the rgb values separated by commas
   return $rgb_color;
}

add_filter( 'ot_google_fonts_api_key', 'olmo_ot_google_fonts_api_key' );

function olmo_ot_google_fonts_api_key( $key ) {
  return (function_exists('ot_get_option'))? ot_get_option( 'google_api_key', '' ) : '';
}

function olmo_filter_ot_list_item_settings( $settings, $id ) {
  if ( 'header_social_icons' === $id ) {
    return array(array(
        'id'          => 'link',
        'label'       => esc_html__( 'Link', 'olmo' ),
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
        'label'       => esc_html__( 'Icon Class', 'olmo' ),
        'desc'        => esc_html__( 'Ex: fa-facebook-f', 'olmo' ),
        'std'         => '',
        'type'        => 'text',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
    ));
  }

  if ( 'team_social_icons' === $id ) {
    return array(array(
        'id'          => 'link',
        'label'       => esc_html__( 'Link', 'olmo' ),
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
        'label'       => esc_html__( 'Icon Class', 'olmo' ),
        'desc'        => esc_html__( 'Ex: fa-facebook-f', 'olmo' ),
        'std'         => '',
        'type'        => 'text',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
    ));
  }
  
  if ( 'create_sidebar' === $id ) {
    return array(array(
        'id'          => 'desc',
        'label'       => esc_html__( 'Description', 'olmo' ),
        'desc'        => esc_html__( '(optional)', 'olmo' ),
        'std'         => '',
        'type'        => 'text',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
    ));
  }
  
  if ( 'feature_info' === $id ) {
    return array(array(
        'id'          => 'number',
        'label'       => esc_html__( 'Number', 'olmo' ),
        'desc'        => esc_html__( 'Type number', 'olmo' ),
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
        'label'       => esc_html__( 'Featured text', 'olmo' ),
        'desc'        => esc_html__( 'Type featured text', 'olmo' ),
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
        'label'       => esc_html__( 'Set Icon', 'olmo' ),
        'desc'        => esc_html__( 'Paste a icon class here', 'olmo' ),
        'std'         => '',
        'type'        => 'text',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'min_max_step'=> '',
        'class'       => '',
        'condition'   => '',
        'operator'    => 'and'
      ));
  } 

  return $settings;
}
add_filter( 'ot_list_item_settings', 'olmo_filter_ot_list_item_settings', 10, 2 );