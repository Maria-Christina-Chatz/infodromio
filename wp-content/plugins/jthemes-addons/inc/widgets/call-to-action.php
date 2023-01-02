<?php
/**
 * Call to action widget class
 *
 * @since 2.8.0
 */
// Register and load the widget
function jthemes_load_calltoaction_widget() {
    register_widget( 'jthemes_calltoaction_widget' );
}
add_action( 'widgets_init', 'jthemes_load_calltoaction_widget' );
 
// Creating the widget 
class jthemes_calltoaction_widget extends WP_Widget {
 
function __construct() {
	parent::__construct(
	
	// Base ID of your widget
	'jthemes_calltoaction_widget', 
	
	// Widget name will appear in UI
	esc_html__('Call to Action Widget', 'jthemes'), 
	
	// Widget description
	array( 'description' => esc_html__( 'Jthemes Call to Action Widget', 'jthemes' ), ) 
	);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
	$cache = wp_cache_get('jthemes_calltoaction_widget', 'widget');
	
	if ( !is_array($cache) )
	$cache = array();
	
	if ( ! isset( $args['widget_id'] ) )
	$args['widget_id'] = $this->id;
	
	if ( isset( $cache[ $args['widget_id'] ] ) ) {
		echo esc_html($cache[ $args['widget_id'] ]);
		return;
	}
	
	ob_start();
	extract($args);
	
	$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : '';
	$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
	
	$calltoaction_title = ( ! empty( $instance['calltoaction_title'] ) ) ? $instance['calltoaction_title'] : '';
	$condescription = ( ! empty( $instance['condescription'] ) ) ? $instance['condescription'] : '';
	$linktext = ( ! empty( $instance['linktext'] ) ) ? $instance['linktext'] : '';
	$linkurl = ( ! empty( $instance['linkurl'] ) ) ? $instance['linkurl'] : '';

	echo $args['before_widget'];
	if ( ! empty( $title ) ){
		echo $args['before_title'] . $title . $args['after_title'];
	}
	?>
	<div class="footer-call-to-action">
		<div class="row d-flex align-items-center">
			<div class="col-lg-6">
				<?php if ( $calltoaction_title != ''): ?>
					<h4 class="call-to-action-title"><?php echo esc_html($calltoaction_title); ?></h4>
				<?php endif; ?>
				<?php if ( $condescription != ''): ?>
					<p class="call-to-action-description"><?php echo esc_html($condescription); ?></p>
				<?php endif; ?>
			</div>
			<div class="col-lg-6 text-right">
				<?php
				if ( $linktext != ''): ?>
				<div class="call-to-action-phone-link">
					<a href="tel:<?php echo esc_attr($linkurl); ?>"><?php echo esc_html($linktext); ?><span><i class="fas fa-phone"></i></span>
					</a>
				</div>
				<?php endif; ?>		
			</div>
		</div>
	</div>
	<?php
	echo $args['after_widget'];

	$cache[$args['widget_id']] = ob_get_flush();
	wp_cache_set('jthemes_calltoaction_widget', $cache, 'widget');
}
         
// Widget Backend 
public function form( $instance ) {
	$title     =isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
	$calltoaction_title     =isset( $instance['calltoaction_title'] ) ? esc_attr( $instance['calltoaction_title'] ) : '';
	$condescription     =isset( $instance['condescription'] ) ? esc_attr( $instance['condescription'] ) : '';
	$linktext     =isset( $instance['linktext'] ) ? esc_attr( $instance['linktext'] ) : '';
	$linkurl     =isset( $instance['linkurl'] ) ? esc_attr( $instance['linkurl'] ) : '';

	// Widget admin form
	?>
	<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php esc_html_e( 'Title', 'jthemes' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
	</p>
	<p>
		<label for="<?php echo $this->get_field_id( 'calltoaction_title' ); ?>"><?php esc_html_e( 'Action Title', 'jthemes' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'calltoaction_title' ); ?>" name="<?php echo $this->get_field_name( 'calltoaction_title' ); ?>" type="text" value="<?php echo esc_attr( $calltoaction_title ); ?>" />
	</p>
	<p>
		<label for="<?php echo $this->get_field_id( 'condescription' ); ?>"><?php esc_html_e( 'Description', 'jthemes' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'condescription' ); ?>" name="<?php echo $this->get_field_name( 'condescription' ); ?>" type="text" value="<?php echo esc_attr( $condescription ); ?>" />
	</p>
	<p>
		<label for="<?php echo $this->get_field_id( 'linktext' ); ?>"><?php esc_html_e( 'Phone Number', 'jthemes' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'linktext' ); ?>" name="<?php echo $this->get_field_name( 'linktext' ); ?>" type="text" value="<?php echo esc_attr( $linktext ); ?>" />
	</p>
	<p>
		<label for="<?php echo $this->get_field_id( 'linkurl' ); ?>"><?php esc_html_e( 'Phone number(without space)', 'jthemes' ); ?></label> 
		<input class="widefat" id="<?php echo $this->get_field_id( 'linkurl' ); ?>" name="<?php echo $this->get_field_name( 'linkurl' ); ?>" type="text" value="<?php echo esc_attr( $linkurl ); ?>" />
	</p>
	<?php 
}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = $old_instance;
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['calltoaction_title'] = ( ! empty( $new_instance['calltoaction_title'] ) ) ? strip_tags( $new_instance['calltoaction_title'] ) : '';
$instance['condescription'] = ( ! empty( $new_instance['condescription'] ) ) ? strip_tags( $new_instance['condescription'] ) : '';
$instance['linktext'] = ( ! empty( $new_instance['linktext'] ) ) ? strip_tags( $new_instance['linktext'] ) : '';
$instance['linkurl'] = ( ! empty( $new_instance['linkurl'] ) ) ? strip_tags( $new_instance['linkurl'] ) : '';

$alloptions = wp_cache_get( 'alloptions', 'options' );
if ( isset($alloptions['jthemes_calltoaction_widget']) ){
	delete_option('jthemes_calltoaction_widget');
}

return $instance;
		
}

} // Class jthemes_widget ends here