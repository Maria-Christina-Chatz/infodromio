<?php
	$bg_class = 'bg-snow';
	$col_class = 'col-md-8 col-12';
	$sidebar = 'sidebar-1';
	if(is_page()){
		$layout = get_post_meta( get_the_ID(), 'page_layout', true );
		$sidebar = get_post_meta( get_the_ID(), 'sidebar', true );		
		if($sidebar == '') $sidebar = 'sidebar-1';
		if($layout != ''){
			$layout = $layout;
		} else {
			$layout = 'full';
		}
	}elseif(is_single()){
		$layout = 'full';
		$container_class = 'col-lg-10 offset-lg-1';
	}
	else{
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
	
	if( $layout == 'full' ){
		if(is_single()){
			$container_class = 'col-lg-10 offset-lg-1';
		} else {
			$container_class = 'col-md-12 col-12';
		}
		
	}
	else{
		$container_class = $col_class;
	}

$content_padding_type = get_post_meta(get_the_ID(), 'content_padding_type', true);
$class_pad = '';
if($content_padding_type == 'no_padding'):
	$class_pad = 'no-padding '.$bg_class;
else:
	$class_pad = 'with-padding '.$bg_class;
endif;

$section_classes = 'inner-page-hero section-main-container section '.$class_pad;

$overwrite_banner_style = get_post_meta(get_the_ID(), 'overwrite_banner_style', true);
if($overwrite_banner_style == 'on'){
	$banner_style = get_post_meta(get_the_ID(), 'page_banner_style', true);
}else{
	$banner_style = (function_exists('ot_get_option'))? ot_get_option( 'banner_style', 'style1' ) : 'style1';
}
?>

<?php if($banner_style == 'style2'){
	$section_classes = 'section-main-container section '.$class_pad;
	?>
	<?php if( $layout == 'ls' ){?>
		<section class="breadcrumb_section minimal_fashion_breadcrumb text-center d-flex align-items-center clearfix">
			<?php if(is_page_template( 'page-templates/home-page.php' )): ?>
			<?php else: ?>
				<?php if(is_page()): ?>
						<?php get_template_part( 'header/banner', '' ); ?>
				<?php else: ?>
				<?php get_template_part( 'header/banner', '' ); ?>
				<?php endif; ?>
			<?php endif; ?>
		</section>
		<section class="<?php echo esc_attr($section_classes); ?>">
			<div class="container">
				<div class="row">
					<?php if( $layout != 'full' ): ?>    
					<?php get_sidebar(); ?>                
					<?php endif; // endif ?>
					
					<div class="<?php echo esc_attr($container_class); ?>">
						<div class="content">
	<?php } else { ?>
	<section class="breadcrumb_section minimal_fashion_breadcrumb text-center d-flex align-items-center clearfix">
		<?php if(is_page_template( 'page-templates/home-page.php' )): ?>
		<?php else: ?>
			<?php if(is_page()): ?>
					<?php get_template_part( 'header/banner', '' ); ?>
			<?php else: ?>
			<?php get_template_part( 'header/banner', '' ); ?>
			<?php endif; ?>
		<?php endif; ?>
	</section>
	<section class="<?php echo esc_attr($section_classes); ?>">
		<div class="container">    
			<div class="row">    
				<div class="<?php echo esc_attr($container_class); ?>">
					<div class="content">
	<?php } ?>

<?php } else { ?>
	<?php if( $layout == 'ls' ){?>
		<section class="<?php echo esc_attr($section_classes); ?>">
			<?php if(is_page_template( 'page-templates/home-page.php' )): ?>
			<?php else: ?>
				<?php if(is_page()): ?>
						<?php get_template_part( 'header/banner', '' ); ?>
				<?php else: ?>
				<?php get_template_part( 'header/banner', '' ); ?>
				<?php endif; ?>
			<?php endif; ?>

			<div class="container">
				<div class="row">
					<?php if( $layout != 'full' ): ?>    
					<?php get_sidebar(); ?>                
					<?php endif; // endif ?>
					
					<div class="<?php echo esc_attr($container_class); ?>">
						<div class="content">
	<?php } else { ?>
	<section class="<?php echo esc_attr($section_classes); ?>">
		<?php if(is_page_template( 'page-templates/home-page.php' )): ?>
		<?php else: ?>
			<?php if(is_page()): ?>
					<?php get_template_part( 'header/banner', '' ); ?>
			<?php else: ?>
			<?php get_template_part( 'header/banner', '' ); ?>
			<?php endif; ?>
		<?php endif; ?>
		<div class="container">    
			<div class="row">    
				<div class="<?php echo esc_attr($container_class); ?>">
					<div class="content">
	<?php } ?>
<?php } ?>