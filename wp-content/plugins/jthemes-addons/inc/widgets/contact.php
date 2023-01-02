<?php
/**
 * Contact widget class
 *
 * @since 2.8.0
 */
// Register and load the widget
function jthemes_load_widget() {
    register_widget( 'jthemes_contact_widget' );
}
add_action( 'widgets_init', 'jthemes_load_widget' );
 
// Creating the widget 
class jthemes_contact_widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'jthemes_contact_widget', 
 
// Widget name will appear in UI
esc_html__('Contact Widget', 'jthemes'), 
 
// Widget description
array( 'description' => esc_html__( 'Jthemes Contact Widget', 'jthemes' ), ) 
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
	$cache = wp_cache_get('jthemes_contact_widget', 'widget');
	
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
	
	$condescription = ( ! empty( $instance['condescription'] ) ) ? $instance['condescription'] : '';
	$linktext = ( ! empty( $instance['linktext'] ) ) ? $instance['linktext'] : '';
	$linkurl = ( ! empty( $instance['linkurl'] ) ) ? $instance['linkurl'] : '';

	echo $args['before_widget'];
	if ( ! empty( $title ) ){
		echo $args['before_title'] . $title . $args['after_title'];
	}
?>
<ul class="footer-contact">
<?php
if ( $condescription != ''): ?>
<li><h5 class="phone-icon"><span><a href="tel:<?php echo esc_attr($condescription); ?>"><?php echo esc_html($condescription); ?></a></span>
</h5></li>
<?php endif; ?>
<?php if ( $linktext != '' ): ?>
<li><h5 class="email-icon"><span><a href="mailto:<?php echo esc_attr($linktext); ?>"><?php echo esc_html($linktext); ?></a></span>
</h5></li>
<?php endif; ?>

<?php if ( $linkurl != '' ): ?>
<li><h5 class="address-icon"><span><?php echo esc_html($linkurl); ?></span>
</h5></li>
<?php endif; ?>
</ul>
<?php
echo $args['after_widget'];

$cache[$args['widget_id']] = ob_get_flush();
wp_cache_set('jthemes_contact_widget', $cache, 'widget');

}
         
// Widget Backend 
public function form( $instance ) {
$title     =isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
$condescription     =isset( $instance['condescription'] ) ? esc_attr( $instance['condescription'] ) : '';
$linktext     =isset( $instance['linktext'] ) ? esc_attr( $instance['linktext'] ) : '';
$linkurl     =isset( $instance['linkurl'] ) ? esc_attr( $instance['linkurl'] ) : '';

// Widget admin form
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p><label for="<?php echo $this->get_field_id( 'condescription' ); ?>"><?php _e( 'Phone Number:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'condescription' ); ?>" name="<?php echo $this->get_field_name( 'condescription' ); ?>" type="text" value="<?php echo esc_attr( $condescription ); ?>" /></p>
<p><label for="<?php echo $this->get_field_id( 'linktext' ); ?>"><?php _e( 'Email Address:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'linktext' ); ?>" name="<?php echo $this->get_field_name( 'linktext' ); ?>" type="text" value="<?php echo esc_attr( $linktext ); ?>" /></p>
<p><label for="<?php echo $this->get_field_id( 'linkurl' ); ?>"><?php _e( 'Office Address:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'linkurl' ); ?>" name="<?php echo $this->get_field_name( 'linkurl' ); ?>" type="text" value="<?php echo esc_attr( $linkurl ); ?>" /></p>
<?php 
}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = $old_instance;
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['condescription'] = ( ! empty( $new_instance['condescription'] ) ) ? strip_tags( $new_instance['condescription'] ) : '';
$instance['linktext'] = ( ! empty( $new_instance['linktext'] ) ) ? strip_tags( $new_instance['linktext'] ) : '';
$instance['linkurl'] = ( ! empty( $new_instance['linkurl'] ) ) ? strip_tags( $new_instance['linkurl'] ) : '';

$alloptions = wp_cache_get( 'alloptions', 'options' );
if ( isset($alloptions['jthemes_contact_widget']) ){
	delete_option('jthemes_contact_widget');
}

return $instance;
		
}

} // Class jthemes_widget ends here