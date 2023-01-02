<?php
	$sidebar = 'sidebar-1';
	if(is_page()) {
		$layout = get_post_meta( get_the_ID(), 'page_layout', true );
		$sidebar = get_post_meta( get_the_ID(), 'sidebar', true );		
		if($sidebar == '') $sidebar = 'sidebar-1';
		if($layout != ''){
			$layout = $layout;
		} else {
			$layout = 'full';
		}
	}
	elseif(is_single()){
		$layout = 'full';
	}
	else {
		$layout = (function_exists('ot_get_option'))? ot_get_option( 'blog_layout', 'rs' ) : 'rs';
		$sidebar = (function_exists('ot_get_option'))? ot_get_option( 'blog_sidebar', 'sidebar-1' ) : 'sidebar-1';
	}
	
	if(is_author()){
		$layout = 'full';
	}
	
	if(is_singular('portfolio')){
		$layout = (function_exists('ot_get_option'))? ot_get_option( 'portfolio_single_layout', 'full' ) : 'full';
		$sidebar = (function_exists('ot_get_option'))? ot_get_option( 'portfolio_single_sidebar', 'sidebar-1' ) : 'sidebar-1';
	}
	
	if(is_post_type_archive('portfolio')){
		$layout = (function_exists('ot_get_option'))? ot_get_option( 'portfolio_layout', 'full' ) : 'full';
		$sidebar = (function_exists('ot_get_option'))? ot_get_option( 'portfolio_sidebar', 'sidebar-1' ) : 'sidebar-1';
	}

	if ( class_exists( 'woocommerce' ) ){
		if( is_product() ){
			$layout = (function_exists('ot_get_option'))? ot_get_option( 'shop_single_layout', 'full' ) : 'full';
			$sidebar = (function_exists('ot_get_option'))? ot_get_option( 'shop_single_sidebar', 'sidebar-1' ) : 'sidebar-1';
		}
		elseif( is_woocommerce() ){
			$layout = (function_exists('ot_get_option'))? ot_get_option( 'shop_layout', 'full' ) : 'full';
			$sidebar = (function_exists('ot_get_option'))? ot_get_option( 'shop_sidebar', 'sidebar-1' ) : 'sidebar-1';
		}
	}

	if(is_singular('team')){
		$layout = 'full';
	}
	
	if(is_post_type_archive('team')){
		$layout = 'full';
	}

	if(is_singular('service')){
		$layout = 'full';
	}
	
	if(is_post_type_archive('service')){
		$layout = 'full';
	}
	
	if ( !is_active_sidebar( $sidebar ) ){
		$layout = 'full';
	}

?>
	</div>
</div>

	<?php if( $layout == 'rs' ): ?>
    
    <?php get_sidebar(); ?>
    
    <?php endif; // endif ?>
     
    </div>
    
</div>
</section>
<!-- Content Wrap -->