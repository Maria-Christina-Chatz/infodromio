<?php
/**
 * Register sidebars.
 *
 * Registers our main widget area and the front page widget areas.
 *
 * @since olmo 1.0
 */
function olmo_widgets_init() {
	register_sidebar( array(
		'name' => esc_html__( 'Main Sidebar', 'olmo' ),
		'id' => 'sidebar-1',
		'description' => esc_html__( 'Appears on posts and pages except the optional Front Page template, which has its own widgets', 'olmo' ),
		'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
		'after_widget' => '</div>',
		'before_title' => '<h6 class="h6-xl">',
		'after_title' => '</h6>',
	) );

	if( function_exists( 'ot_get_option' ) ):
		$sidebarArr = ot_get_option( 'create_sidebar', array() );
		if( !empty( $sidebarArr ) ){
			$i = 4;
			foreach ($sidebarArr as $sidebar) {

				register_sidebar( array(
					'name' => $sidebar['title'],
					'id' => 'sidebar-'.$i,
					'description' => $sidebar['desc'],
					'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h6 class="h6-xl">',
					'after_title' => '</h6>',
				) );
				$i++;
			}
		}
	endif;
	
	$footer_widget_area = (function_exists('ot_get_option'))? ot_get_option( 'footer_widget_area', 'on' ) : 'on';
	if( $footer_widget_area == 'on' ):
		$footer_widget_box = (function_exists('ot_get_option'))? ot_get_option( 'footer_widget_box', 4 ) : 4;
		for( $i = 1; $i <= $footer_widget_box; $i++ ):
			register_sidebar( array(
				'name' => sprintf(esc_html__( 'Footer Widget Area %d', 'olmo' ), $i),
				'id' => 'footer-'.$i,
				'description' => sprintf(esc_html__( 'Appears in Footer column %d', 'olmo' ), $i),
				'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h6 class="h6-xl">',
				'after_title' => '</h6>',
			) );
		endfor; 
	endif;

	$footer_widget_top_area = (function_exists('ot_get_option'))? ot_get_option('footer_widget_top_area', 'off') : 'off';
	if( $footer_widget_top_area == 'on' ):
		register_sidebar( array(
			'name' => esc_html__( 'Footer Widget Top Area', 'olmo' ),
			'id' => 'footer-widget-top',
			'description' => esc_html__( 'Appears in footer top', 'olmo' ),
			'before_widget' => '<div id="%1$s" class="widget clearfix %2$s">',
			'after_widget' => '</div>',
			'before_title' => '<h6 class="h6-xl">',
			'after_title' => '</h6>',
		) );
	endif;
}
add_action( 'widgets_init', 'olmo_widgets_init' );
?>