<?php
/**
 * footer widget area
 *
 *
 * @package WordPress
 * @subpackage olmo
 * @since Olmo 1.0.0
 */

$footer_widget_area = (function_exists('ot_get_option'))? ot_get_option('footer_widget_area', 'on') : 'on';
$overwrite_footer_style = get_post_meta(get_the_ID(), 'overwrite_footer_style', true);
	
if( $footer_widget_area == 'on' ):
	$footer_widget_box = (function_exists('ot_get_option'))? ot_get_option('footer_widget_box', 4) : 4;
	$footer_widget_logo = (function_exists('ot_get_option'))? ot_get_option( 'footer_widget_logo', 'off' ) : 'off';
	$footer_widget_box_column_serial = (function_exists('ot_get_option'))? ot_get_option('footer_widget_box_column_serial', '3,3,3,3') : '3,3,3,3';
		
	$col_class = 12/$footer_widget_box; ?> 
	<div class="row">
		<?php
		if($footer_widget_logo == 'on'):
			$footer_logo = (function_exists('ot_get_option'))? ot_get_option( 'footer_logo', OLMOTHEMEURI . 'images/logo.png' ) : OLMOTHEMEURI . 'images/logo.png'; ?>
			<div class="col-lg-3 col-md-12">
				<div class="footer-info mb-40">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
						<?php if($footer_logo != ''): ?>
							<img class="footer-logo" src="<?php echo esc_attr($footer_logo); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
						<?php else: ?>
							<?php echo esc_html( get_bloginfo( 'name', 'display' ) ); ?>
						<?php endif; ?>
					</a>
				</div>	
			</div>
		<?php endif; ?>

		<?php for( $i = 1; $i <= $footer_widget_box; $i++ ):
			$column_number = explode(',', $footer_widget_box_column_serial);
			$column_number = array_combine(range(1, count($column_number)), $column_number);                   
			if ( is_active_sidebar( 'footer-'.$i ) ) : ?>
				<div class="col-lg-<?php echo esc_attr($column_number[$i]); ?> col-md-6 footer-widget-area">
					<?php dynamic_sidebar( 'footer-'.$i ); ?>
				</div>
			<?php endif;
		endfor; ?>                
	</div>
<?php endif; ?>
<hr>