<?php
$title = '';
$subtitle = '';
$bg_class = 'bg-snow';

if(is_singular('portfolio')){
	$title = '';
} elseif(is_single()){
	$title = (function_exists('ot_get_option'))? ot_get_option('blog_single_title', '') : '';
	$subtitle = (function_exists('ot_get_option'))? ot_get_option('blog_single_subtitle', '') : '';
} elseif( is_home() ){		
	$title = (function_exists('ot_get_option'))? ot_get_option('blog_title', '') : '';
	$subtitle = (function_exists('ot_get_option'))? ot_get_option('blog_subtitle', '') : '';
} elseif ( is_category() ){
	$title = esc_html__( 'Category Archives: ', 'olmo' ).single_cat_title( '', false );
	if ( category_description() ) :
		$subtitle = category_description();
	endif;

} elseif(is_search()){
	$title = esc_html__('Search Result', 'olmo');
	$subtitle = esc_html__( 'This is a Search Results Page for: '. get_search_query(), 'olmo' );
} elseif ( is_author() ){
	$title = esc_html__( 'Author Archives: ', 'olmo' ).'' . get_the_author() . '';
	if ( category_description() ) :
		$subtitle = category_description();
	endif;
} elseif( is_tag() ) {
	$title = esc_html__( 'Tag Archives: ', 'olmo' ).single_tag_title( '', false );
	if ( tag_description() ) :
		$subtitle = tag_description();
	endif;
} elseif ( is_archive() ){	
		
	if ( is_day() ) :
		$title =  esc_html__( 'Daily Archives: ', 'olmo' ).'' . get_the_date() . '';
	elseif ( is_month() ) :
		$title = esc_html__( 'Monthly Archives: ', 'olmo' ). '' . get_the_date( esc_html_x( 'F Y', 'monthly archives date format', 'olmo' ) ) . '' ;
	elseif ( is_year() ) :
		$title = esc_html__( 'Yearly Archives: ', 'olmo' ).'' . get_the_date( esc_html_x( 'Y', 'yearly archives date format', 'olmo' ) ) . '' ;
	else :
		$title = esc_html__( 'Archives', 'olmo' );
	endif;
} elseif(is_404()){
	$title = esc_html__('Page Not Found', 'olmo');
	$subtitle = esc_html__( 'Sorry page not found...', 'olmo');
} elseif( is_page() ){
	$title = get_the_title();
	$custom_title = get_post_meta( get_the_ID(), 'custom_title', true );
	if( $custom_title == 'on' ){
		$alt_title = get_post_meta( get_the_ID(), 'title', true );
		$title = ( $alt_title != '' )? $alt_title : $title;

		$alt_subtitle = get_post_meta( get_the_ID(), 'subtitle', true );
		$subtitle = ( $alt_subtitle != '' )? $alt_subtitle : $subtitle;
	}
} else {
	$title = get_the_title();
}

if(is_post_type_archive('portfolio')){
	$title = (function_exists('ot_get_option'))? ot_get_option('portfolio_title', esc_html__('We Care About The Details', 'olmo')) : '';
	$subtitle = (function_exists('ot_get_option'))? ot_get_option('portfolio_subtitle', esc_html__('Aliquam a augue suscipit, luctus neque purus ipsum neque dolor primis a libero tempus, blandit and cursus varius and magnis sapien', 'olmo')) : '';
}

if ( class_exists( 'woocommerce' ) ){
	if( is_product() ){
		$title = (function_exists('ot_get_option'))? ot_get_option('shop_single_title', esc_html__('Product Details', 'olmo')) : esc_html__('Product Details', 'olmo');
		$subtitle = (function_exists('ot_get_option'))? ot_get_option('shop_single_subtitle', '') : '';
	}
	elseif( is_woocommerce() ){
		$shop_page_id = wc_get_page_id( 'shop' );
		$page_title   = get_the_title( $shop_page_id );
		$title = (function_exists('ot_get_option'))? ot_get_option('shop_title', $page_title) : $page_title;
		$subtitle = (function_exists('ot_get_option'))? ot_get_option('shop_subtitle', '') : '';
	}
}

$header_style = (function_exists('ot_get_option'))? ot_get_option( 'header_style', 'style1' ) : 'style1';
$banner_classes = 'header-'.$header_style.' '.$bg_class;
?>

<?php if($title != '' || $subtitle != ''): ?>
	<div class="container">
		<div class="row justify-content-center">	
			<div class="col-lg-10 col-xl-8">
				<div class="section-title title-01 mb-80">		

					<!-- Title -->	
					<h2 class="h2-md"><?php echo esc_html($title); ?></h2>	

					<!-- Text -->
					<?php if($subtitle != ''): ?>	
						<p class="p-xl"><?php echo wp_kses($subtitle, array('p'=>array())); ?></p>
					<?php endif; ?>
					<?php
					$show_breadcrumbs =  (function_exists('ot_get_option'))? ot_get_option('show_breadcrumbs', 'off') : 'off';
					if($show_breadcrumbs == 'on'): ?>
						<div class="breadcrumb-content text-center">
							<?php olmo_breadcrumbs(); ?>
						</div>
					<?php endif; ?>	
				</div>	
			</div>
		</div>	
	</div>
<?php endif; ?>
    
