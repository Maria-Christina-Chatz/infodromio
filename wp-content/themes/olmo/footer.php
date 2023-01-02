<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 */
$overwrite_footer_style = get_post_meta(get_the_ID(), 'overwrite_footer_style', true);
if($overwrite_footer_style == 'on'){
	$footer_style = get_post_meta(get_the_ID(), 'page_footer_style', true);
}else{
	$footer_style = (function_exists('ot_get_option'))? ot_get_option('footer_style', 'style1') : 'style1';
}

$footer_widget_area = (function_exists('ot_get_option'))? ot_get_option('footer_widget_area', 'on') : 'on';

if(is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) || is_active_sidebar( 'footer-widget-top' )):
	$top_padding = ' with-padding-top';
else:
	$top_padding = ' no-padding-top';
endif;

if($overwrite_footer_style == 'on'){
	$footer_widget_top_area = get_post_meta(get_the_ID(), 'overwrite_footer_top_widget', true);
}else{
	$footer_widget_top_area = (function_exists('ot_get_option'))? ot_get_option('footer_widget_top_area', 'off') : 'off';
}

if($footer_widget_top_area == 'on'): ?>
	<?php if ( is_active_sidebar( 'footer-widget-top' ) ) : ?>
		<section id="newsletter-1" class="bg-snowsmoke-gradient newsletter-section division">
			<div class="container">
				<div class="newsletter-wrapper bg-white">
					<div class="row d-flex align-items-center">
						<!-- NEWSLETTER FORM -->
						<div class="col">
							<?php dynamic_sidebar( 'footer-widget-top' ); ?>							
						</div>	  <!-- END NEWSLETTER FORM -->
					</div>	  <!-- End row -->
				</div>    <!-- End newsletter-wrapper -->
			</div>	   <!-- End container -->	
		</section>	<!-- END NEWSLETTER-1 -->
	<?php endif;
endif;
?>
	<footer id="footer-4" class="footer division<?php echo esc_attr($top_padding); ?>">
		<div class="container">
			<?php			
			if($footer_widget_area == 'on'):
				if(is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) || is_active_sidebar( 'footer-widget-top' )): ?>

					<?php get_template_part('footer/footer-widget-area', ''); ?>
					
			<?php endif;
			endif; ?>

			<!-- BOTTOM FOOTER -->
			<div class="bottom-footer">
				<div class="row row-cols-1 row-cols-md-2 d-flex align-items-center">

					<div class="col">
						<div class="footer-copyright">
							<?php
							$copyright_text = (function_exists('ot_get_option'))? ot_get_option( 'copyright_text', sprintf(esc_html__('%1$s &copy; Copyright, Olmo. All rights reserved.', 'olmo'), date('Y'))) : sprintf(esc_html__('%1$s &copy; Copyright, Olmo. All rights reserved.', 'olmo'), date('Y'));
							echo wp_kses(do_shortcode($copyright_text), array('div'=>array('class'=>array(), 'id'=>array()), 'a'=>array('class'=>array(), 'title'=>array(), 'href'=>array()), 'p'=>array('class'=>array())));
							?>
						</div>
					</div>
					<div class="col">
						<?php											
						wp_nav_menu(array(
						'theme_location'  => 'footer-menu',
						'menu_class'      => 'bottom-footer-list text-secondary text-end',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'fallback_cb'     => '',
						'container'       => '',
						'depth'			  => 1
						));
						?>
					</div>

				</div>  <!-- End row -->
			</div>	<!-- BOTTOM FOOTER -->
		</div>
		<div class="dmtop"><a href="#"></a></div>	
	</footer>	<!-- FOOTER-4 -->

</div>
<!-- Wrapper Ends -->
  <?php wp_footer(); ?>
</body>
</html>