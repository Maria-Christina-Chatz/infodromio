<?php
/**
 * Recent_Posts widget class
 *
 * @since 2.8.0
 */
class Rundex_Widget_Categories extends WP_Widget {

    function __construct() {
        $widget_ops = array('classname' => 'jthemes_categories_widget', 'description' => esc_html__( "Category Lists", 'rundex') );
		parent::__construct( 
// Base ID of your widget
'jthemes_categories_widget', 

// Widget name will appear in UI
esc_html__('Rundex Categories', 'jthemes'), 
// Widget description
array( 'description' => esc_html__( 'Jthemes Categories Widget', 'jthemes' ), ) 
);

    }

    function widget($args, $instance) {
        $cache = wp_cache_get('jthemes_categories_widget', 'widget');

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

        $title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : esc_html__( 'Categories', 'rundex' );
        $title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
        $show_count = isset( $instance['show_count'] ) ? $instance['show_count'] : false;
		
		$categories = get_categories( array('parent' => 0, 'hide_empty' => 1, 'orderby' => 'term_order' ) );
        if ($categories) : ?>
        <?php echo wp_kses($before_widget,array(
			'div' => array(
			  'id' => array(),
			  'class' => array()
			),
		  )); ?>
        <?php if ( $title ) echo wp_kses($before_title,array('h3' => array('class' => array()), 'span' => array())) . esc_html($title) . wp_kses($after_title,array('h3' => array(),'span' => array())); ?>
        <ul class="rundex-categories">
        <?php foreach($categories as $key => $cat):
		if($key == 5){
			break;
		}
		?>
        <li class="cat-item">
        <a href="<?php echo esc_url(get_category_link($cat->term_id)); ?>"><?php echo esc_html($cat->name); ?> <span class="post_count"><?php echo esc_html($cat->category_count); ?></span></a>
        
        </li>
        <?php endforeach; ?>
        </ul>
        
        
        <?php echo wp_kses($after_widget,array(
			'div' => array(),
		  )); ?>
<?php
        // Reset the global $the_post as this query will have stomped on it
        wp_reset_postdata();

        endif;

        $cache[$args['widget_id']] = ob_get_flush();
        wp_cache_set('jthemes_categories_widget', $cache, 'widget');
    }

    function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
        $instance['title'] = strip_tags($new_instance['title']);
        $instance['show_count'] = (bool) $new_instance['show_count'];

        $alloptions = wp_cache_get( 'alloptions', 'options' );
        if ( isset($alloptions['jthemes_categories_widget']) )
            delete_option('jthemes_categories_widget');

        return $instance;
    }

    function form( $instance ) {
        $title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
        $show_count = isset( $instance['show_count'] ) ? (bool) $instance['show_count'] : false;
?>
        <p><label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php esc_html_e( 'Title:', 'rundex' ); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>

        <p><input class="checkbox" type="checkbox" <?php checked( $show_count ); ?> id="<?php echo esc_attr($this->get_field_id( 'show_count' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'show_count' )); ?>" />
        <label for="<?php echo esc_attr($this->get_field_id( 'show_count' )); ?>"><?php esc_html_e( 'Display Count?', 'rundex' ); ?></label></p>
<?php
    }
	

}

function rundex_register_custom_category_widgets() {
    register_widget( 'Rundex_Widget_Categories' );
}
add_action( 'widgets_init', 'rundex_register_custom_category_widgets' );