<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Olmo_ServicesBox extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-servicesbox';
    }

    public function get_title() {

        return esc_html__( 'Service Box', 'olmo'  );

    }

    public function get_icon() { 
        return 'eicon-nav-menu';
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

		$this->add_control(
			'service_style',
			[
				'label' => esc_html__( 'Style', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'style1',
				'options' => [
					'style1'  => esc_html__( 'Style 1', 'olmo' ),
					'style2' => esc_html__( 'Style 2', 'olmo' ),
				],
			]
		);
	
		$this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Deep Cleaning', 'olmo' ),
				'placeholder' => esc_html__( 'Type your title here', 'olmo' ),
			]
        );
		
		$this->add_control(
			'read_more_text',
			[
				'label' => esc_html__( 'Read More Text', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Learn More', 'olmo' ),
				'placeholder' => esc_html__( 'Type read more text here', 'olmo' ),
			]
        );
		
		$this->add_control(
			'read_more_link',
			[
				'label' => esc_html__( 'Read More Link', 'olmo' ),
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
        
        $this->add_control(
			'services_description',
			[
				'label' => esc_html__( 'Description', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Vestibulum commodo sapien non elit  porttitor, vitae volutpat nibh mollis. Nulla porta risus.', 'olmo' ),
				'placeholder' => esc_html__( 'Type your description here', 'olmo' ),
			]
        );
		
		$this->add_control(
			'icon_image',
			[
				'label' => esc_html__( 'Icon/Image', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'icon',
				'options' => [
					'image'  => esc_html__( 'Image', 'olmo' ),
					'icon' => esc_html__( 'Icon', 'olmo' ),
				],
			]
		);
		
		$this->add_control(
			'serviceicon',
			[
				'label' => esc_html__( 'Icon', 'olmo' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'condition' => ['icon_image' => ['icon']],
				'default' => [
					'value' => 'fas fa-check',
					'library' => 'solid',
				],
			]
		);
		
		$this->add_control(
			'service_image',
			[
				'label' => esc_html__( 'Service Image', 'olmo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'condition' => ['icon_image' => ['image']],
			]
        );
		
		$this->add_control(
			'service_shape',
			[
				'label' => esc_html__( 'Shape', 'olmo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'condition' => ['icon_image' => ['icon']],
			]
        );
        
        $this->add_responsive_control(
            'text_align', [
                'label'          => esc_html__( 'Alignment', 'olmo'  ),
                'type'           => Controls_Manager::CHOOSE,
                'options'        => [
    
                    'left'         => [
                        'title'    => esc_html__( 'Left', 'olmo'  ),
                        'icon'     => 'fa fa-align-left',
                    ],
                    'center'     => [
                        'title'    => esc_html__( 'Center', 'olmo'  ),
                        'icon'     => 'fa fa-align-center',
                    ],
                    'right'         => [
                        'title'     => esc_html__( 'Right', 'olmo'  ),
                        'icon'     => 'fa fa-align-right',
                    ],
                ],
               'default'         => 'center',
               'selectors' => [
                   '{{WRAPPER}} .services-content' => 'text-align: {{VALUE}};'
               ],
            ]
        ); 

        $this->add_responsive_control(
			'padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .services-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
		
		$this->add_responsive_control(
			'border_width',
			[
				'label' =>esc_html__( 'Boeder Width', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .services-content' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
        );
       
        $this->end_controls_section();
		
		
		// Image style tab //	
		$this->start_controls_section(
			'image_style_section',
			[
				'label' => esc_html__( 'Image', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => ['icon_image' => ['image']],
			]
		);
		
		$this->add_responsive_control(
			'image_width',
			[
				'label' => esc_html__( 'Width', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 600,
						'step' => 5,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 65,
				],
				'selectors' => [
					'{{WRAPPER}} .services-content .ico-65 img' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'image_height',
			[
				'label' => esc_html__( 'Height', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SLIDER,
				'size_units' => [ 'px', 'em', 'rem' ],
				'range' => [
					'px' => [
						'min' => 1,
						'max' => 600,
						'step' => 5,
					],
				],
				'default' => [
					'unit' => 'px',
					'size' => 65,
				],
				'selectors' => [
					'{{WRAPPER}} .services-content .ico-65 img' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);
       
		$this->end_controls_section();

		// Number style tab //
		
		$this->start_controls_section(
			'style_number_section',
			[
				'label' => esc_html__( 'Icon', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => ['icon_image' => ['icon']],
			]
		);

		$this->add_responsive_control(
			'width',
			[
				'label' => esc_html__( 'Width', 'olmo' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'unit' => '%',
				],
				'tablet_default' => [
					'unit' => '%',
				],
				'mobile_default' => [
					'unit' => '%',
				],
				'size_units' => [ '%', 'px', 'vw' ],
				'range' => [
					'%' => [
						'min' => 1,
						'max' => 100,
					],
					'px' => [
						'min' => 1,
						'max' => 1000,
					],
					'vw' => [
						'min' => 1,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .fbox-ico-center span i, {{WRAPPER}} .fbox-ico-center' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'height',
			[
				'label' => esc_html__( 'Height', 'olmo' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'unit' => '%',
				],
				'tablet_default' => [
					'unit' => '%',
				],
				'mobile_default' => [
					'unit' => '%',
				],
				'size_units' => [ '%', 'px', 'vw' ],
				'range' => [
					'%' => [
						'min' => 1,
						'max' => 100,
					],
					'px' => [
						'min' => 1,
						'max' => 1000,
					],
					'vw' => [
						'min' => 1,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .fbox-ico-center span i, {{WRAPPER}} .fbox-ico-center' => 'height: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'line_height',
			[
				'label' => esc_html__( 'Line Height', 'olmo' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'unit' => '%',
				],
				'tablet_default' => [
					'unit' => '%',
				],
				'mobile_default' => [
					'unit' => '%',
				],
				'size_units' => [ '%', 'px', 'vw' ],
				'range' => [
					'%' => [
						'min' => 1,
						'max' => 100,
					],
					'px' => [
						'min' => 1,
						'max' => 1000,
					],
					'vw' => [
						'min' => 1,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .fbox-ico-center span i, {{WRAPPER}} .fbox-ico-center' => 'line-height: {{SIZE}}{{UNIT}}!important;',
				],
			]
		);

		$this->add_responsive_control(
			'font_size',
			[
				'label' => esc_html__( 'Font Size', 'olmo' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'unit' => '%',
				],
				'tablet_default' => [
					'unit' => '%',
				],
				'mobile_default' => [
					'unit' => '%',
				],
				'size_units' => [ '%', 'px', 'vw' ],
				'range' => [
					'%' => [
						'min' => 1,
						'max' => 100,
					],
					'px' => [
						'min' => 1,
						'max' => 1000,
					],
					'vw' => [
						'min' => 1,
						'max' => 100,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .fbox-ico-center span i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$this->add_control(
			'icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .fbox-ico-center span i' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'icon_bg_color',
			[
				'label' => esc_html__( 'Icon Background Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .fbox-ico-center' => 'background-color: {{VALUE}}',
				],
			]
		);
		
		$this->add_responsive_control(
			'icon_box_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .fbox-ico-center' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
		
		$this->add_responsive_control(
			'icon_border_radius',
			[
				'label' =>esc_html__( 'Border Radius', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .fbox-ico-center' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );

		$this->end_controls_section();
	  
	  
      	// Title style tab //	
		$this->start_controls_section(
			'title_style_section',
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
				'label' => esc_html__( 'Title Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .fbox-2 .h5-md ' => 'color: {{VALUE}}',
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
				'label' => esc_html__( 'Title Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .fbox-2 .h5-md:hover' => 'color: {{VALUE}}',
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
				'selector' => '{{WRAPPER}} .fbox-2 .h5-md',
			]
		);

        $this->add_responsive_control(
			'title_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .fbox-2 .h5-md' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
       
	  $this->end_controls_section();
	  
	  // Description Style //
		$this->start_controls_section(
			'description_style_section',
			[
				'label' => esc_html__( 'Description', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->start_controls_tabs(
			'description_tabs'
		);
		
		$this->start_controls_tab(
			'description_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'olmo' ),
			]
		);
		
		$this->add_control(
			'description_color',
			[
				'label' => esc_html__( 'Description Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .fbox-2 .p-lg' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->start_controls_tab(
			'description_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'olmo' ),
			]
		);
		
		$this->add_control(
			'description_color_hover',
			[
				'label' => esc_html__( 'Description Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .fbox-2 .p-lg' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'description_typography',
				'label' => esc_html__( 'Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .fbox-2 .p-lg',
			]
		);

		$this->add_responsive_control(
            'des_text_align', [
                'label'          => esc_html__( 'Description Alignment', 'olmo'  ),
                'type'           => Controls_Manager::CHOOSE,
                'options'        => [
    
                    'left'         => [
                        'title'    => esc_html__( 'Left', 'olmo'  ),
                        'icon'     => 'fa fa-align-left',
                    ],
                    'center'     => [
                        'title'    => esc_html__( 'Center', 'olmo'  ),
                        'icon'     => 'fa fa-align-center',
                    ],
                    'right'         => [
                        'title'     => esc_html__( 'Right', 'olmo'  ),
                        'icon'     => 'fa fa-align-right',
                    ],
                ],
               'default'         => '',
               'selectors' => [
                   '{{WRAPPER}} .services-content .fbox-txt-center' => 'text-align: {{VALUE}};'
               ],
            ]
        );

		$this->add_responsive_control(
			'des_style_section_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .services-content .fbox-txt-center' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		

		$this->end_controls_section();
		
		// Box Style Section //
		$this->start_controls_section(
			'box_style_section',
			[
				'label' => esc_html__( 'box', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(),
			[
				'name' => 'background',
				'label' => esc_html__( 'Background', 'olmo' ),
				'types' => [ 'classic', 'gradient' ],
				'selector' => '{{WRAPPER}} .fbox-2',
			]
		);
		
		$this->add_responsive_control(
			'box_style_section_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .fbox-2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'box_style_section_margin',
			[
				'label' =>esc_html__( 'Margin', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .fbox-2' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'box_style_section_border_radius',
			[
				'label' =>esc_html__( 'Border Radius', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .fbox-2' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'box_shadow_section',
				'label' => esc_html__( 'Box Shadow', 'olmo' ),
				'selector' => '{{WRAPPER}} .fbox-2',
			]
		);

		$this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display(); ?>
        <div class="services-content">
				
			<div class="fbox-2 mb-40">
				<?php
				if($settings['service_style'] == 'style2'){
					$target = $settings['read_more_link']['is_external'] ? ' target="_blank"' : '';
					$nofollow = $settings['read_more_link']['nofollow'] ? ' rel="nofollow"' : ''; ?>
					<a href="<?php echo esc_url($settings['read_more_link']['url']); ?>" class="os-btn bg-white d-flex align-items-center" <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?>>
											
						<!-- Icon -->
						<div class="os-btn-ico">
							<div class="ico-50">
								<?php
								if($settings['icon_image'] == 'image'):
								
									if($settings['service_image']['url'] != ''): ?>
										<img class="img-fluid" src="<?php echo esc_url($settings['service_image']['url']); ?>" alt="<?php echo esc_attr($settings['title']); ?>" />
									<?php endif;
									
								else: ?>
									
									<?php if($settings['service_shape']['url'] != ''): ?>
										<img class="ico-bkg" src="<?php echo esc_url($settings['service_shape']['url']); ?>" alt="<?php echo esc_attr($settings['title']); ?>" />
									<?php endif; ?>
									<span><?php \Elementor\Icons_Manager::render_icon( $settings['serviceicon']); ?></span>
								
								<?php endif; ?>
							</div>
						</div>

						<!-- Text -->
						<div class="os-btn-txt">
							<?php if($settings['title'] != ''): ?>
								<h5 class="h6-lg"><?php echo esc_html($settings['title']); ?></h5>
							<?php endif; ?>
							<?php if($settings['services_description'] != ''): ?>
								<p><?php echo esc_html($settings['services_description']); ?></p>
							<?php endif; ?>
						</div>

					</a>
				<?php } else { ?>

				<!-- Icon -->
				<div class="fbox-ico-center ico-65 shape-ico orange-red-color">

					<?php
					if($settings['icon_image'] == 'image'):
					
						if($settings['service_image']['url'] != ''): ?>
							<img class="img-fluid" src="<?php echo esc_url($settings['service_image']['url']); ?>" alt="<?php echo esc_attr($settings['title']); ?>" />
						<?php endif;
						
					else: ?>
						
						<?php if($settings['service_shape']['url'] != ''): ?>
							<img class="ico-bkg" src="<?php echo esc_url($settings['service_shape']['url']); ?>" alt="<?php echo esc_attr($settings['title']); ?>" />
						<?php endif; ?>
						<span><?php \Elementor\Icons_Manager::render_icon( $settings['serviceicon']); ?></span>
					
					<?php endif; ?>
				</div>

				<!-- Text -->
				<div class="fbox-txt-center">

					<!-- Title -->
					<?php if($settings['title'] != ''): ?>
						<h5 class="h5-md"><?php echo esc_html($settings['title']); ?></h5>
					<?php endif; ?>
						
					<!-- Text -->
					<?php if($settings['services_description'] != ''): ?>
						<p class="p-lg"><?php echo esc_html($settings['services_description']); ?></p>
					<?php endif;

					$target = $settings['read_more_link']['is_external'] ? ' target="_blank"' : '';
					$nofollow = $settings['read_more_link']['nofollow'] ? ' rel="nofollow"' : ''; ?>
					<?php if($settings['read_more_text'] != '' && $settings['read_more_link']['url'] != ''): ?>
						<p class="p-lg fbox-6-link ico-15"><a href="<?php echo esc_url($settings['read_more_link']['url']); ?>" class="align-items-center" <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?>><?php echo esc_html($settings['read_more_text']); ?><i class="cs-icon cs-right-arrow-1"></i></a></p>
					<?php endif; ?>

				</div>
				<?php } ?>
			</div>
        </div>
        <?php
	}

    protected function content_template() {}
}