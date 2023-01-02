<?php
/**
 * The Header for multipage of theme
 *
 * Displays all of the <head> section and everything up till </header>
 *
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php $preloader = (function_exists('ot_get_option'))? ot_get_option( 'preloader', 'off' ) : 'off'; ?>
    <?php if($preloader == 'on'): ?>
        <div id="loading" class="skyblue-loading">
			<div id="loading-center">
				<div id="loading-center-absolute">
					<div class="object" id="object_one"></div>
					<div class="object" id="object_two"></div>
					<div class="object" id="object_three"></div>
					<div class="object" id="object_four"></div>
				</div>
			</div>
		</div>
    <?php endif; ?>

    <div id="wrapper">
        <?php
        $overwrite_header_style = get_post_meta(get_the_ID(), 'overwrite_header_style', true);
        if($overwrite_header_style == 'on'){
            $header_style = get_post_meta(get_the_ID(), 'page_header_style', true);
        }else{
            $header_style = (function_exists('ot_get_option'))? ot_get_option( 'header_style', 'style1' ) : 'style1';
        }        
        ?>
        <?php get_template_part( 'header/header', $header_style ); ?>

        