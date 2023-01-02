<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Olmo_Slider extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-slider';
    }

    public function get_title() {

        return esc_html__( 'Slider', 'olmo'  );

    }

    public function get_icon() { 
        return 'eicon-image-rollover';
    }

    public function get_categories() {
        return [ 'olmo-all-elements' ];
    }

    protected function register_controls() {

		$this->start_controls_section(
			'content_section',
			[
				'label' => esc_html__( 'Content', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
			]
        );
		
		$repeater = new \Elementor\Repeater();

        $repeater->add_control(
			'sliders_image',
			[
				'label' => esc_html__( 'Slider Image', 'olmo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
        
        $repeater->add_control(
			'slider_title',
			[
				'label' => esc_html__( 'Slider Title', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'OLMO IS CERTIFIED
				CLEANING COMPANY', 'olmo' ),
				'placeholder' => esc_html__( 'Type your title here', 'olmo' ),
			]
        );

        $repeater->add_control(
			'slider_description',
			[
				'label' => esc_html__( 'Slider Description', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( 'Quisque suscipit ipsum est, eu venenatis leo ornare eget. Ut porta facilisis elementum. Sed condimentum sed massa quis ullamcorper. Donec at scelerisque.', 'olmo' ),
				'placeholder' => esc_html__( 'Type slider description', 'olmo' ),
			]
		);

		$repeater->add_control(
			'read_more_text',
			[
				'label' => esc_html__( 'Button Text', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Request Quote', 'olmo' ),
				'placeholder' => esc_html__( 'Type button text here', 'olmo' ),
			]
        );
		
		$repeater->add_control(
			'read_more_link',
			[
				'label' => esc_html__( 'Button Link', 'olmo' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://', 'olmo' ),
				'show_external' => false,
				'default' => [
					'url' => '',
					'is_external' => false,
					'nofollow' => true,
				],
			]
		);

		$repeater->add_control(
			'slider_video_link',
			[
				'label' => esc_html__( 'Video Link', 'olmo' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://', 'olmo' ),
				'show_external' => false,
			]
		);

		$repeater->add_control(
			'select_column',
			[
				'label' => esc_html__( 'Box Align', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '7',
				'options' => [
					'left'  => esc_html__( 'Left', 'olmo' ),
					'center'  => esc_html__( 'Center', 'olmo' ),
					'right' => esc_html__( 'Right', 'olmo' ),
				],
			]
		);

		$repeater->add_control(
			'slide_text_align',
			[
				'label' => esc_html__( 'Text Align', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'center',
				'options' => [
					'center'  => esc_html__( 'Center', 'olmo' ),
					'left' => esc_html__( 'Left', 'olmo' ),
					'right' => esc_html__( 'Right', 'olmo' ),
				],
			]
		);
		
		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'Slider List', 'olmo' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'sliders_image' => esc_html__( 'Slider Image', 'olmo' ),
						'slider_title' => esc_html__( 'OLMO IS CERTIFIED
						CLEANING COMPANY', 'olmo' ),
						'slider_description' => esc_html__( 'Quisque suscipit ipsum est, eu venenatis leo ornare eget. Ut porta facilisis elementum. Sed condimentum sed massa quis ullamcorper. Donec at scelerisque.', 'olmo' ),
						'read_more_text' => esc_html__( 'Request Quote', 'olmo' ),
						'read_more_link' => esc_html__( 'https://', 'olmo' ),
						'slider_video_link' => esc_html__( '#', 'olmo' ),
						'select_column' => esc_html__( 'left', 'olmo' ),
						'slide_text_align' => esc_html__( 'left', 'olmo' ),
					],
				],
				'title_field' => '{{{ slider_title }}}',
			]
		);
 

        $this->add_responsive_control(
			'padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .testimonials-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
      $this->end_controls_section();
	  
	  // Style Section //
		
		$this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Title', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->start_controls_tabs(
			'title_tabs'
		);
		
		$this->start_controls_tab(
			'title_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'olmo' ),
			]
		);
		
		$this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .slider .slides h2' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testi-name h5 .svg-inline--fa' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'icon_bg_color',
			[
				'label' => esc_html__( 'Icon BG Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testi-name h5 .svg-inline--fa' => 'background-color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->start_controls_tab(
			'title_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'olmo' ),
			]
		);
		
		$this->add_control(
			'title_color_hover',
			[
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testi-item:hover .testi-name h5' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'icon_hover_color',
			[
				'label' => esc_html__( 'Icon Hover Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testi-item:hover .testi-name h5 .svg-inline--fa' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'icon_hover_bg_color',
			[
				'label' => esc_html__( 'Icon Hover BG Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testi-item:hover .testi-name h5 .svg-inline--fa' => 'background-color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => esc_html__( 'Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .testi-name h5',
			]
		);
		
		$this->add_control(
			'title_background',
			[
				'label' => esc_html__( 'Background Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testi-name' => 'background-color: {{VALUE}}',
				],
			]
		);		

        $this->add_responsive_control(
			'title_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .testi-name h5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
      $this->end_controls_section();
	  
	  $this->start_controls_section(
			'style_bg_section',
			[
				'label' => esc_html__( 'Description', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->start_controls_tabs(
			'bgtitle_tabs'
		);
		
		$this->start_controls_tab(
			'bgtitle_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'olmo' ),
			]
		);
		
		$this->add_control(
			'bgtitle_color',
			[
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testi-des p' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->start_controls_tab(
			'bgtitle_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'olmo' ),
			]
		);
		
		$this->add_control(
			'bgtitle_color_hover',
			[
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testi-item:hover .testi-des p' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bg_title_typography',
				'label' => esc_html__( 'Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .testi-des p',
			]
		);
		
		$this->add_control(
			'bg_border_color',
			[
				'label' => esc_html__( 'Border Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testi-des' => 'border-color: {{VALUE}}',
				],
			]
		);

        $this->add_responsive_control(
			'bg_title_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .testi-des' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
	  $this->end_controls_section();
	  
	  $this->start_controls_section(
			'style_control_section',
			[
				'label' => esc_html__( 'Controls', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->start_controls_tabs(
			'bgcontrol_tabs'
		);
		
		$this->start_controls_tab(
			'bgcontrol_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'olmo' ),
			]
		);
		
		$this->add_control(
			'bgcontrol_color',
			[
				'label' => esc_html__( 'Dots Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonials-content.owl-carousel button.owl-dot' => 'background-color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->start_controls_tab(
			'bgcontrol_hover_tab',
			[
				'label' => esc_html__( 'Active', 'olmo' ),
			]
		);
		
		$this->add_control(
			'bgcontrol_color_hover',
			[
				'label' => esc_html__( 'Dots Active Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonials-content.owl-carousel button.owl-dot.active' => 'background-color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();
       
	  $this->end_controls_section();
	  
	  // End Style Section //
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
		
        if ( $settings['list'] ):		
		?>
		<div class="main-slider-content">
			<div class="slider">
			    <ul class="slides">
					<?php
					$i = 1;
					foreach (  $settings['list'] as $item ): ?>
						<li id="slide-<?php echo esc_attr($i); ?>">
							<!-- Background Image -->
							<?php if($item['sliders_image']['url'] != ''): ?>
							<img src="<?php echo esc_url($item['sliders_image']['url']); ?>" alt="<?php echo esc_attr($item['slider_title']); ?>" />
							<?php endif; ?>

							<?php if($item['select_column'] == 'right'){
								$class_col = 'col-md-7 offset-md-5';
							}elseif($item['slide_text_align'] == 'center'){
								$class_col = 'col-md-8 offset-md-2';
							} else{
								$class_col = 'col-md-7';	
							}
							?>

							<!-- Image Caption -->
							<div class="caption d-flex align-items-center text-<?php echo esc_attr($item['slide_text_align']); ?>">
								<div class="container">
									<div class="row">
										<div class="<?php echo esc_attr($class_col); ?>">    
											<div class="caption-txt">
												<!-- Title -->
												<?php if($item['slider_title'] != ''): ?>
													<div class="title"><h2><?php echo esc_html($item['slider_title']); ?></h2></div>
												<?php endif; ?>

												<!-- Text -->
												<?php if($item['slider_description'] != ''): ?>
													<p><?php echo wp_kses($item['slider_description'], array('span'=>array('class'=>array()))); ?></p>
												<?php endif; ?>

												<?php
												$target = $item['read_more_link']['is_external'] ? ' target="_blank"' : '';
												$nofollow = $item['read_more_link']['nofollow'] ? ' rel="nofollow"' : '';
												if($item['read_more_text'] != ''): ?>
													<a class="btn btn-primary" href="<?php echo esc_url($item['read_more_link']['url']); ?>" <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?>><?php echo esc_html($item['read_more_text']); ?> <i class="fas fa-angle-double-right"></i></a>
												<?php endif; ?>
												<?php
												$video_url = $item['slider_video_link']['url'];
												$target = $item['slider_video_link']['is_external'] ? ' target="_blank"' : '';
												$nofollow = $item['slider_video_link']['nofollow'] ? ' rel="nofollow"' : '';			
												if( $video_url != '' ):
													?>
													<a href="<?php echo esc_url($video_url); ?>" data-url="<?php echo esc_url($video_url); ?>" class="video-popup"<?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?>>
													<i class="fas fa-play"></i></a>
													<?php											
												endif;
												?>
											</div>
										</div>
									</div>  <!-- End row -->
								</div>  <!-- End container -->
							</div>	<!-- End Image Caption -->
						</li>	<!-- END SLIDE #1 -->
						<?php $i++; ?>	
					<?php endforeach; ?>
				</ul> 
			</div>
		</div>
		<?php endif; ?>
        <?php
	}

    protected function content_template() {}
}