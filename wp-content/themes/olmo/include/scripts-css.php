<?php
/**
 * Enqueue scripts and styles for the front end.
 *
 */
function olmo_scripts() {
	// Add Lato font, used in the main stylesheet.
	$fonts_url = olmo_fonts_url();
	if ( ! empty( $fonts_url ) ){
		wp_enqueue_style( 'olmo-fonts', esc_url_raw( $fonts_url ), array(), null );
	}
	wp_enqueue_style( 'bootstrap', esc_url(OLMOTHEMEURI . 'css/bootstrap.css'), array(), null );
	wp_enqueue_style( 'owl-carousel', esc_url(OLMOTHEMEURI . 'css/owl.carousel.min.css'), array(), null );	
	wp_enqueue_style( 'magnific-popup', esc_url(OLMOTHEMEURI . 'css/magnific-popup.css'), array(), null );
	wp_enqueue_style( 'olmo-fade-down', esc_url(OLMOTHEMEURI . 'css/dropdown-effects/fade-down.css'), array(), null );
	wp_enqueue_style( 'olmo-menu', esc_url(OLMOTHEMEURI . 'css/menu.css'), array(), null );
	wp_enqueue_style( 'animate', esc_url(OLMOTHEMEURI . 'css/animate.css'), array(), null );
	wp_enqueue_style( 'olmo-custom-icon', esc_url(OLMOTHEMEURI . 'css/custom-icon.css'), array(), null );
	wp_enqueue_style( 'olmo-styles', esc_url(OLMOTHEMEURI . 'css/styles.css'), array(), null );
	wp_enqueue_style( 'olmo-responsive', esc_url(OLMOTHEMEURI . 'css/responsive.css'), array(), null );

	// Load our main stylesheet.
	wp_enqueue_style( 'olmo-style', get_stylesheet_uri() );

	//scripts
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ){
		wp_enqueue_script( 'comment-reply' );
	}
	wp_enqueue_script( 'bootstrap', esc_url(OLMOTHEMEURI . 'js/lib/bootstrap.min.js'), array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'modernizr', esc_url(OLMOTHEMEURI . 'js/lib/modernizr.custom.js'), array( 'jquery' ), '', true );
	wp_enqueue_script( 'jquery-easing', esc_url(OLMOTHEMEURI . 'js/lib/jquery.easing.js'), array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'materialize', esc_url(OLMOTHEMEURI . 'js/lib/materialize.js'), array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'jquery-appear', esc_url(OLMOTHEMEURI . 'js/lib/jquery.appear.js'), array( 'jquery' ), '', true );
	wp_enqueue_script( 'olmo-menu', esc_url(OLMOTHEMEURI . 'js/lib/menu.js'), array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'imagesloaded-pkgd', esc_url(OLMOTHEMEURI . 'js/lib/imagesloaded.pkgd.min.js'), array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'isotope-pkgd', esc_url(OLMOTHEMEURI . 'js/lib/isotope.pkgd.min.js'), array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'owl-carousel', esc_url(OLMOTHEMEURI . 'js/lib/owl.carousel.min.js'), array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'magnific-popup', esc_url(OLMOTHEMEURI . 'js/lib/jquery.magnific-popup.min.js'), array( 'jquery' ), '1.0', true );
	wp_enqueue_script( 'jquery-fitvid', esc_url(OLMOTHEMEURI . 'js/lib/jquery.fitvid.js'), array( 'jquery' ), '1.0', true );	
	wp_enqueue_script( 'counter', esc_url(OLMOTHEMEURI . 'js/lib/counter.js'), array( 'jquery' ), '', true );
	wp_enqueue_script( 'wow', esc_url(OLMOTHEMEURI . 'js/lib/wow.js'), array( 'jquery' ), '', true );		
	wp_enqueue_script( 'olmo-scripts', esc_url(OLMOTHEMEURI . 'js/scripts.js'), array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'olmo_scripts' );

function olmo_styles_custom_banner() {
	
	wp_enqueue_style('olmo-custom-banner-style', OLMOTHEMEURI . 'css/custom_style_banner.css');
	$custom_css = '';
	$banner_image = '';	
	$header_banner_type = get_post_meta(get_the_ID(), 'header_banner_type', true);
	if($header_banner_type == 'custom_image'):
		$banner_image = get_post_meta(get_the_ID(), 'header_custom_image', true);
	endif;
	if($banner_image != ''){
		$custom_css .= ".bg-banner, .minimal_fashion_breadcrumb.breadcrumb_section {
			background-image: url(".esc_url($banner_image).");
		}";    
    }
	
	if(is_singular('give_forms') || is_post_type_archive('give_forms') || is_tax( 'give_forms_category' )):
		$header_banner_type = (function_exists('ot_get_option'))? ot_get_option( 'donation_header_banner_type', 'donation_bg_color' ) : 'donation_bg_color';	
		if($header_banner_type == 'donation_custom_image'):
			$default_banner_image = (function_exists('ot_get_option'))? ot_get_option( 'donation_default_banner_image', OLMOTHEMEURI. 'images/banner.jpg' ) : OLMOTHEMEURI. 'images/banner.jpg';
			$custom_css .= ".bg-banner, .minimal_fashion_breadcrumb.breadcrumb_section {
				background-image: url(".esc_url($default_banner_image).");
			}";
		else:
			$banner_color = (function_exists('ot_get_option'))? ot_get_option( 'donation_header_custom_color', '#2f353e' ) : '#2f353e';
			$custom_css .= ".bg-banner, .minimal_fashion_breadcrumb.breadcrumb_section {
				background-color: ".$banner_color.";
			}";
		endif;
	elseif(is_singular('portfolio') || is_post_type_archive('portfolio')):
		$header_banner_type = (function_exists('ot_get_option'))? ot_get_option( 'portfolio_header_banner_type', 'portfolio_bg_color' ) : 'portfolio_bg_color';	
		if($header_banner_type == 'portfolio_custom_image'):
			$default_banner_image = (function_exists('ot_get_option'))? ot_get_option( 'portfolio_default_banner_image', OLMOTHEMEURI. 'images/banner.jpg' ) : OLMOTHEMEURI. 'images/banner.jpg';
			$custom_css .= ".bg-banner, .minimal_fashion_breadcrumb.breadcrumb_section {
				background-image: url(".esc_url($default_banner_image).");
			}";
		else:
			$banner_color = (function_exists('ot_get_option'))? ot_get_option( 'portfolio_header_custom_color', '#2f353e' ) : '#2f353e';
			$custom_css .= ".bg-banner, .minimal_fashion_breadcrumb.breadcrumb_section {
				background-color: ".$banner_color.";
			}";
		endif;
	elseif(is_page()):
		$breadcrumb_class = 'bgwhite';
		$breadcrumb_bg_color = get_post_meta(get_the_ID(), 'breadcrumb_bg_color', true);
		if($breadcrumb_bg_color != ''){
			$custom_css .= ".breadcrumb-content.bgwhite {
				background-color: ".$breadcrumb_bg_color.";
			}";
		} else{
			$custom_css .= ".breadcrumb-content.bgwhite {
				background-color: #fff;
			}";
		}
		$header_banner_type = get_post_meta(get_the_ID(), 'header_banner_type', true);
		if($header_banner_type == 'custom_image'):
			$banner_image = get_post_meta(get_the_ID(), 'header_custom_image', true);
			$custom_css .= ".bg-banner, .minimal_fashion_breadcrumb.breadcrumb_section {
				background-image: url(".esc_url($banner_image).");
			}";
		else:
			$banner_color = get_post_meta(get_the_ID(), 'page_header_custom_color', true);
			if($banner_color != ''){
				$custom_css .= ".bg-banner, .minimal_fashion_breadcrumb.breadcrumb_section {
				background-color: ".$banner_color.";
				}";
			} else{
				$custom_css .= ".bg-banner, .minimal_fashion_breadcrumb.breadcrumb_section {
				background-color: #2f353e;
				}";
			}
					
		endif;
		
		$content_background = get_post_meta(get_the_ID(), 'content_background', true);
			if($content_background != ''){
				$custom_css .= ".section-main-container.section.bgwhite{
				background-color: ".$content_background.";
				}";
			} else{
				$custom_css .= ".section-main-container.section.bgwhite{
				background-color: #ffffff;
				}";
			}
				
	elseif(is_home()):
		$header_banner_type = (function_exists('ot_get_option'))? ot_get_option( 'blog_header_banner_type', 'blog_bg_color' ) : 'blog_bg_color';	
		if($header_banner_type == 'blog_custom_image'):
			$default_banner_image = (function_exists('ot_get_option'))? ot_get_option( 'blog_default_banner_image', OLMOTHEMEURI. 'images/banner.jpg' ) : OLMOTHEMEURI. 'images/banner.jpg';
			$custom_css .= ".bg-banner, .minimal_fashion_breadcrumb.breadcrumb_section {
				background-image: url(".esc_url($default_banner_image).");
			}";
		else:
			$banner_color = (function_exists('ot_get_option'))? ot_get_option( 'blog_header_custom_color', '#2f353e' ) : '#2f353e';
			$custom_css .= ".bg-banner, .minimal_fashion_breadcrumb.breadcrumb_section {
				background-color: ".$banner_color.";
			}";   
    	endif;	
	else:
		$header_banner_type = (function_exists('ot_get_option'))? ot_get_option( 'blog_header_banner_type', 'blog_bg_color' ) : 'blog_bg_color';	
		if($header_banner_type == 'blog_custom_image'):
			$default_banner_image = (function_exists('ot_get_option'))? ot_get_option( 'blog_default_banner_image', OLMOTHEMEURI. 'images/banner.jpg' ) : OLMOTHEMEURI. 'images/banner.jpg';
			$custom_css .= ".bg-banner, .minimal_fashion_breadcrumb.breadcrumb_section {
				background-image: url(".esc_url($default_banner_image).");
			}";
		else:
			$banner_color = (function_exists('ot_get_option'))? ot_get_option( 'blog_header_custom_color', '#2f353e' ) : '#2f353e';
			$custom_css .= ".bg-banner, .minimal_fashion_breadcrumb.breadcrumb_section {
				background-color: ".$banner_color.";
			}";
		endif;
	endif;

	if(class_exists( 'woocommerce' )):
		if( is_product() || is_woocommerce()){
			$header_banner_type = (function_exists('ot_get_option'))? ot_get_option( 'woo_header_banner_type', 'woo_bg_color' ) : 'woo_bg_color';	
			if($header_banner_type == 'woo_custom_image'):
				$default_banner_image = (function_exists('ot_get_option'))? ot_get_option( 'woo_default_banner_image', OLMOTHEMEURI. 'images/banner.jpg' ) : OLMOTHEMEURI. 'images/banner.jpg';
				$custom_css .= ".bg-banner, .minimal_fashion_breadcrumb.breadcrumb_section {
					background: url(".esc_url($default_banner_image).");
				}";
			else:
				$banner_color = (function_exists('ot_get_option'))? ot_get_option( 'woo_header_custom_color', '#2f353e' ) : '#2f353e';
				$custom_css .= ".bg-banner, .minimal_fashion_breadcrumb.breadcrumb_section {
					background-color: ".$banner_color.";
				}";   
			endif;
		}
	endif;
	
	$background_layout = (function_exists('ot_get_option'))? ot_get_option( 'background_layout', 'wide' ) : 'wide';
	if($background_layout == 'boxed'){
		$boxed_background_image = (function_exists('ot_get_option'))? ot_get_option( 'boxed_background_image', OLMOTHEMEURI.'images/wood_03.jpg' ) : OLMOTHEMEURI.'images/wood_03.jpg';
		$custom_css .='body.boxed {
			background: url('.esc_url($boxed_background_image).') repeat left center;
		}';
	}
	
	$custom_css .= olmo_custom_css_from_theme_options();
    wp_add_inline_style( 'olmo-custom-banner-style', $custom_css );

}
add_action( 'wp_enqueue_scripts', 'olmo_styles_custom_banner' );

//disable elementor default animations
add_action( 'elementor/frontend/after_enqueue_scripts',function() {
	wp_dequeue_style( 'e-animations' );
	wp_deregister_style( 'e-animations' );    
}, 100 );
?>