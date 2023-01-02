<?php
add_action( 'woocommerce_before_shop_loop_item_title', 'olmo_template_loop_product_before_thumbnail', 5 );
add_action( 'woocommerce_after_shop_loop_item_title', 'olmo_template_loop_product_after_thumbnail', 10 );

function olmo_template_loop_product_before_thumbnail(){
	?>
    <span class="image-wrap">
    <?php
}

function olmo_template_loop_product_after_thumbnail(){
	?>
    </span>
    <?php
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'olmo_loop_columns');
if (!function_exists('olmo_loop_columns')) {
	function olmo_loop_columns() {
        $product_number_show = (function_exists('ot_get_option'))? ot_get_option( 'product_number_show', 2 ) : 2;
		return $product_number_show; // 2 products per row
	}
}

remove_action( 'woocommerce_before_shop_loop_item', 'woocommerce_template_loop_product_link_open', 10 );
remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_product_link_close', 5 );

add_action( 'woocommerce_before_shop_loop_item', 'olmo_template_loop_product_link_open', 10 );
add_action( 'woocommerce_after_shop_loop_item', 'olmo_template_loop_product_link_close', 15 );

function olmo_template_loop_product_link_open() {
	?>
    <div class="shop-box clearfix">
    <?php
}

function olmo_template_loop_product_link_close() {
	?>
    </div>
    <?php
}

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10 );

add_action( 'woocommerce_before_shop_loop_item_title', 'olmo_template_loop_product_thumbnail', 10 );

function olmo_template_loop_product_thumbnail($size = 'woocommerce_thumbnail', $deprecated1 = 0, $deprecated2 = 0, $args = array()) {
	global $post;
	global $product;

    $featured_product_ids = wc_get_featured_product_ids();
    $product_id = $product->get_id();
	?>
    <div class="item_image">
        <a class="image_wrap" href="<?php echo esc_url(get_permalink()); ?>">
            <?php 
            if ( has_post_thumbnail() ) {
                the_post_thumbnail( $size );
            } else {
                echo wc_placeholder_img( $size );
            } ?>
        </a>
        <?php if ( in_array( $product_id, $featured_product_ids ) ): ?>
            <span class="coming_soon text-uppercase"><?php echo esc_html__('Featured', 'olmo'); ?></span>
        <?php endif; ?>
    </div>
    <?php
}

remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );
add_action( 'woocommerce_shop_loop_item_title', 'olmo_template_loop_product_title', 10 );

function olmo_template_loop_product_title(){
	global $post;
	global $product;
	?>
    <div class="item_content">
        <h3 class="item_title">
            <a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a>
        </h3>
        <div class="d-flex align-items-center justify-content-between">
            <?php if ( $price_html = $product->get_price_html() ) : ?>
            <span class="item_price"><?php echo wp_kses($price_html, array('p'=>array('class'=>array()), 'del'=>array('class'=>array()), 'ins'=>array('class'=>array()), 'span'=>array('class'=>array())));  ?></span>
            <?php endif; ?>
        </div>
    </div>
    <?php
}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 10 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_sharing', 50 );

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 5 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 10 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_price', 15 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 20 );
add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 25 );

add_action( 'woocommerce_after_single_product_summary', 'olmo_output_product_data_tabs_start', 5 );
function olmo_output_product_data_tabs_start(){
	?>
    <div class="woo-tabs stretch-content">
    	<div class="container">
    <?php
}

add_action( 'woocommerce_after_single_product_summary', 'olmo_output_product_data_tabs_end', 25 );
function olmo_output_product_data_tabs_end(){
	?>
    </div>
    </div>
    <?php
}

add_filter( 'woocommerce_dropdown_variation_attribute_options_args', 'olmo_filter_dropdown_args', 10 );

function olmo_filter_dropdown_args( $args ) {
    $attribute             = get_taxonomy($args['attribute']);
	if(!empty($attribute)){
	$args['show_option_none'] = apply_filters( 'the_title', $attribute->labels->name );
	}
    return $args;
}

function olmo_change_page_menu_classes($menu){
    global $post;
    if (get_post_type($post) == 'portfolio' || get_post_type($post) == 'tribe_events' || get_post_type($post) == 'give_forms')
    {
        $menu = str_replace( 'current_page_parent', '', $menu ); // remove all current_page_parent classes
    }
    return $menu;
}
add_filter( 'nav_menu_css_class', 'olmo_change_page_menu_classes', 10,2 );

// Display the Woocommerce Discount Percentage on the Sale Badge for variable products and single products
add_filter( 'woocommerce_sale_flash', 'display_percentage_on_sale_badge', 20, 3 );
function display_percentage_on_sale_badge( $html, $post, $product ) {

  if( $product->is_type('variable')){
      $percentages = array();

      // This will get all the variation prices and loop throughout them
      $prices = $product->get_variation_prices();

      foreach( $prices['price'] as $key => $price ){
          // Only on sale variations
          if( $prices['regular_price'][$key] !== $price ){
              // Calculate and set in the array the percentage for each variation on sale
              $percentages[] = round( 100 - ( floatval($prices['sale_price'][$key]) / floatval($prices['regular_price'][$key]) * 100 ) );
          }
      }
      // Displays maximum discount value
      $percentage = max($percentages) . '%';

  } elseif( $product->is_type('grouped') ){
      $percentages = array();

       // This will get all the variation prices and loop throughout them
      $children_ids = $product->get_children();

      foreach( $children_ids as $child_id ){
          $child_product = wc_get_product($child_id);

          $regular_price = (float) $child_product->get_regular_price();
          $sale_price    = (float) $child_product->get_sale_price();

          if ( $sale_price != 0 || ! empty($sale_price) ) {
              // Calculate and set in the array the percentage for each child on sale
              $percentages[] = round(100 - ($sale_price / $regular_price * 100));
          }
      }
     // Displays maximum discount value
      $percentage = max($percentages) . '%';

  } else {
      $regular_price = (float) $product->get_regular_price();
      $sale_price    = (float) $product->get_sale_price();

      if ( $sale_price != 0 || ! empty($sale_price) ) {
          $percentage    = round(100 - ($sale_price / $regular_price * 100)) . '%';
      } else {
          return $html;
      }
  }
  return '<span class="onsale">' . esc_html__( '-', 'olmo' ) . ' '. $percentage . '</span>';
}

// New badge for recent products
add_action( 'woocommerce_before_shop_loop_item_title', 'olmo_new_badge', 3 );
          
function olmo_new_badge() {
   global $product;
   $newness_days = 30; // Number of days the badge is shown
   $created = strtotime( $product->get_date_created() );
   if ( ( time() - ( 60 * 60 * 24 * $newness_days ) ) < $created ) {
      echo '<span class="new-badge onsale">' . esc_html__( 'NEW', 'olmo' ) . '</span>';
   }
}
?>