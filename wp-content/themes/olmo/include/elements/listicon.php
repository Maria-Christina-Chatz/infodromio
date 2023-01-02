<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Olmo_Listicons extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-listicon';
    }

    public function get_title() {

        return esc_html__( 'Listicon', 'olmo'  );

    }

    public function get_icon() { 
        return 'eicon-bullet-list';
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
			'listicon',
			[
				'label' => esc_html__( 'Icon', 'olmo' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-check',
					'library' => 'solid',
				],
			]
		);
		
		$this->add_control(
			'icon_shape',
			[
				'label' => esc_html__( 'Shape', 'olmo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
        );

		$this->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Raise funds with a crowdfunding campaign', 'olmo' ),
				'placeholder' => esc_html__( 'Type your title here', 'olmo' ),
			]
        );
		
		$this->add_control(
			'description',
			[
				'label' => esc_html__( 'Description', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Vestibulum commodo sapien non elit  porttitor, vitae volutpat nibh mollis. Nulla porta risus.', 'olmo' ),
				'placeholder' => esc_html__( 'Type your description here', 'olmo' ),
			]
        );
        
        $this->add_responsive_control(
            'text_align', [
                'label'          => esc_html__( 'Alignment', 'olmo'  ),
                'type'           => Controls_Manager::CHOOSE,
                'options'        => [
    
                    'left'         => [
                        'title'    => esc_html__( 'Left', 'olmo'  ),
                        'icon'     => 'fas fa-align-left',
                    ],
                    'center'     => [
                        'title'    => esc_html__( 'Center', 'olmo'  ),
                        'icon'     => 'fas fa-align-center',
                    ],
                    'right'         => [
                        'title'     => esc_html__( 'Right', 'olmo'  ),
                        'icon'     => 'fas fa-align-right',
                    ],
                ],
               'default'         => 'left',
               'selectors' => [
                   '{{WRAPPER}} .listicon-content' => 'text-align: {{VALUE}};'
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
					'{{WRAPPER}} .listicon-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'{{WRAPPER}} .listicon-content .cbox-ico span' => 'width: {{SIZE}}{{UNIT}};',
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
					'{{WRAPPER}} .listicon-content .cbox-ico span' => 'height: {{SIZE}}{{UNIT}};',
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
					'{{WRAPPER}} .cbox-ico span' => 'line-height: {{SIZE}}{{UNIT}};',
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
					'{{WRAPPER}} .cbox-ico span i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$this->add_control(
			'icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cbox-ico span i' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'icon_bg_color',
			[
				'label' => esc_html__( 'Icon Background Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cbox-ico span' => 'background-color: {{VALUE}}',
				],
			]
		);
		
		$this->add_responsive_control(
			'border_radius',
			[
				'label' =>esc_html__( 'Border Radius', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .listicon-content .cbox-ico span' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );

	  $this->add_responsive_control(
		'shape_width',
		[
			'label' => esc_html__( 'Shape Width', 'olmo' ),
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
				'{{WRAPPER}} .listicon-content .ico-65 .ico-bkg' => 'width: {{SIZE}}{{UNIT}};',
			],
		]
	);

	$this->add_responsive_control(
		'shape_height',
		[
			'label' => esc_html__( 'Shape Height', 'olmo' ),
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
				'{{WRAPPER}} .listicon-content .ico-65 .ico-bkg' => 'height: {{SIZE}}{{UNIT}};',
			],
		]
	);

	$this->add_responsive_control(
		'icon_padding',
		[
			'label' =>esc_html__( 'Padding', 'olmo'  ),
			'type' => \Elementor\Controls_Manager::DIMENSIONS,
			'size_units' => [ 'px', 'em', '%' ],
			'selectors' => [
				'{{WRAPPER}} .listicon-content .cbox-ico span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'{{WRAPPER}} .cbox .h5-md' => 'color: {{VALUE}}',
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
					'{{WRAPPER}} .cbox .h5-md:hover' => 'color: {{VALUE}}',
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
				'selector' => '{{WRAPPER}} .cbox .h5-md',
			]
		);
		
		$this->add_responsive_control(
			'title_margin',
			[
				'label' =>esc_html__( 'Margin', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .cbox .h5-md' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'{{WRAPPER}} .cbox .h5-md' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'{{WRAPPER}} .cbox .p-lg' => 'color: {{VALUE}}',
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
					'{{WRAPPER}} .cbox .p-lg:hover' => 'color: {{VALUE}}',
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
				'selector' => '{{WRAPPER}} .cbox .p-lg',
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
				'selector' => '{{WRAPPER}} .cbox',
			]
		);
		
		$this->add_responsive_control(
			'box_style_section_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .cbox' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'{{WRAPPER}} .cbox' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'{{WRAPPER}} .cbox' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'box_shadow_section',
				'label' => esc_html__( 'Box Shadow', 'olmo' ),
				'selector' => '{{WRAPPER}} .cbox',
			]
		);

		$this->end_controls_section();

    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="listicon-content">
			
			<div class="cbox mb-40">

				<!-- Icon -->
				<div class="cbox-ico">
					<div class="orange-red-color ico-65">
						<span><?php \Elementor\Icons_Manager::render_icon( $settings['listicon']); ?></span>
						<?php if($settings['icon_shape']['url'] != ''): ?>
						<img class="ico-bkg" src="<?php echo esc_url($settings['icon_shape']['url']); ?>" alt="<?php echo esc_attr($settings['title']); ?>" />
						<?php endif; ?>
					</div>
				</div>

				<!-- Text -->
				<div class="cbox-txt">
					<?php if($settings['title'] != ''): ?>
						<h5 class="h5-md"><?php echo esc_html($settings['title']); ?></h5>
					<?php endif; ?>
					<?php if($settings['description'] != ''): ?>
						<p class="p-lg"><?php echo esc_html($settings['description']); ?></p>
					<?php endif; ?>
				</div>																									
			</div>
		</div>

        <?php
	}

    protected function content_template() {}
}