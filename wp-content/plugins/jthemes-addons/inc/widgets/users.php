<?php
/**
 * Contact widget class
 *
 * @since 2.8.0
 */
// Register and load the widget
function jthemes_load_user_widget() {
    register_widget( 'Jthemes_User_Widget' );
}
add_action( 'widgets_init', 'jthemes_load_user_widget' );
 
// Creating the widget 
class Jthemes_User_Widget extends WP_Widget {
 
function __construct() {
parent::__construct(
 
// Base ID of your widget
'jthemes_user_widget', 
 
// Widget name will appear in UI
esc_html__('Users Widget', 'jthemes'), 
 
// Widget description
array( 'description' => esc_html__( 'Jthemes User Widget', 'jthemes' ), ) 
);
}
 
// Creating widget front-end
 
public function widget( $args, $instance ) {
	$cache = wp_cache_get('jthemes_user_widget', 'widget');
	
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
	
	$list_users = ( ! empty( $instance['list_users'] ) ) ? $instance['list_users'] : '';

	echo $args['before_widget'];
	if ( ! empty( $title ) ){
		echo $args['before_title'] . $title . $args['after_title'];
	}
?>
<div class="user-widget">
	<?php if (!empty($list_users)):
		$get_user = get_user_by( 'id', $list_users );
		$author_id = $get_user->ID; ?>
		<div class="user-img text-center">
			<?php echo get_avatar( get_the_author_meta( $get_user->user_email ), 140 ); ?>
			<h5><?php echo $get_user->first_name; ?> <?php echo $get_user->last_name; ?></h5>
			<?php if($get_user->description != ''): ?>
			<p><?php echo wp_trim_words($get_user->description, 15, ''); ?></p>
			<?php endif; ?>
			<div class="user-social">
				<?php if(get_the_author_meta('facebook', $author_id) != ''): ?>
				<a href="<?php echo esc_url(get_the_author_meta('facebook', $author_id)); ?>"><i class="fab fa-facebook-f"></i></a>
				<?php endif; ?>
				<?php if(get_the_author_meta('twitter', $author_id) != ''): ?>
				<a href="<?php echo esc_url(get_the_author_meta('twitter', $author_id)); ?>"><i class="fab fa-twitter"></i></a>
				<?php endif; ?>
				<?php if(get_the_author_meta('behance', $author_id) != ''): ?>
				<a href="<?php echo esc_url(get_the_author_meta('behance', $author_id)); ?>"><i class="fab fa-behance"></i></a>
				<?php endif; ?>
				<?php if(get_the_author_meta('linkedin', $author_id) != ''): ?>
				<a href="<?php echo esc_url(get_the_author_meta('linkedin', $author_id)); ?>"><i class="fab fa-linkedin"></i></a>
				<?php endif; ?>    
				<?php if(get_the_author_meta('youtube', $author_id) != ''): ?>
				<a href="<?php echo esc_url(get_the_author_meta('youtube', $author_id)); ?>"><i class="fab fa-youtube"></i></a>
				<?php endif; ?> 
			</div><!-- end ul -->
		</div>
	<?php endif; ?>
</div>
<?php
echo $args['after_widget'];

$cache[$args['widget_id']] = ob_get_flush();
wp_cache_set('jthemes_user_widget', $cache, 'widget');

}
         
// Widget Backend 
public function form( $instance ) {
$title     =isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
$list_users     =isset( $instance['list_users'] ) ? esc_attr( $instance['list_users'] ) : '';



// Widget admin form
$users = get_users();
?>
<p>
<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label> 
<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
</p>
<p>
<label for="<?php echo esc_attr($this->get_field_id( 'list_users' )); ?>"><?php esc_html_e( 'Select User', 'jthemes' ); ?></label>
<select name="<?php echo esc_attr($this->get_field_name( 'list_users' )); ?>" id="<?php echo esc_attr($this->get_field_id( 'list_users' )); ?>">
<?php
foreach ( $users as $user ) {
	if($list_users == $user->ID){
		$selected = 'selected';
	} else {
		$selected = '';
	}
    echo '<option value="'.esc_attr($user->ID).'" '.$selected.'>' . esc_html( $user->display_name ) . '</option>';
}
?>
</select>
</p>
<?php 
}
     
// Updating widget replacing old instances with new
public function update( $new_instance, $old_instance ) {
$instance = $old_instance;
$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
$instance['list_users'] = ( ! empty( $new_instance['list_users'] ) ) ? strip_tags( $new_instance['list_users'] ) : '';

$alloptions = wp_cache_get( 'alloptions', 'options' );
if ( isset($alloptions['jthemes_user_widget']) ){
	delete_option('jthemes_user_widget');
}

return $instance;
		
}

} // Class Jthemes_User_Widget ends here