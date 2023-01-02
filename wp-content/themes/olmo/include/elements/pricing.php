<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Olmo_Pricing extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-pricing';
    }

    public function get_title() {

        return esc_html__( 'Pricing', 'olmo'  );

    }

    public function get_icon() { 
        return 'eicon-price-table';
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
			'pricing_featured',
			[
				'label' => esc_html__( 'Featured', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'olmo' ),
				'label_off' => esc_html__( 'Hide', 'olmo' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);
		
		$this->add_control(
			'featured_title',
			[
				'label' => esc_html__( 'Title', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Residential', 'olmo' ),
				'placeholder' => esc_html__( 'Type your title here', 'olmo' ),
				'condition' => ['pricing_featured' => ['yes']],
			]
		);

		$this->add_control(
			'pricing_title',
			[
				'label' => esc_html__( 'Title', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Residential', 'olmo' ),
				'placeholder' => esc_html__( 'Type your title here', 'olmo' ),
			]
		);
		
		$this->add_control(
			'discount',
			[
				'label' => esc_html__( 'Discount', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Residential', 'olmo' ),
				'placeholder' => esc_html__( 'Type your title here', 'olmo' ),
			]
		);
		
		$this->add_control(
			'currency',
			[
				'label' => esc_html__( 'Currency', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '$', 'olmo' ),
				'placeholder' => esc_html__( 'Type your price here', 'olmo' ),
			]
        );
		
		$this->add_control(
			'pricing_price',
			[
				'label' => esc_html__( 'Price', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '220', 'olmo' ),
				'placeholder' => esc_html__( 'Type your price here', 'olmo' ),
			]
        );
		
		$this->add_control(
			'fraction',
			[
				'label' => esc_html__( 'fraction', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '.99', 'olmo' ),
				'placeholder' => esc_html__( 'Type your price here', 'olmo' ),
			]
        );
		
		$this->add_control(
			'period',
			[
				'label' => esc_html__( 'period', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '/month', 'olmo' ),
				'placeholder' => esc_html__( 'Type your price here', 'olmo' ),
			]
        );
		
		$this->add_control(
			'description',
			[
				'label' => esc_html__( 'Description', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Billed as $96 per year', 'olmo' ),
				'placeholder' => esc_html__( 'Type your price here', 'olmo' ),
			]
        );
		
		
		
		$repeater = new \Elementor\Repeater();
		
		$repeater->add_control(
			'number',
			[
				'label' => esc_html__( 'Number', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '25', 'olmo' ),
				'placeholder' => esc_html__( 'Type your price here', 'olmo' ),
			]
        );
		
		$repeater->add_control(
			'pricing_list_text',
			[
				'label' => esc_html__( 'List', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '2 Bedrooms Cleaning', 'olmo' ),
				'placeholder' => esc_html__( 'Type your list here', 'olmo' ),
			]
        );
		
		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'Pricing List', 'olmo' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'description_icon' => esc_html__( 'fas fa-check-circle', 'olmo' ),
						'pricing_list_text' => esc_html__( '2 Bedrooms Cleaning', 'olmo' ),
						'number'	=>esc_html__('25', 'olmo'),
					],
				],
				'title_field' => '{{{ pricing_list_text }}}',
			]
		);

		$this->add_control(
			'read_more_text',
			[
				'label' => esc_html__( 'Read More Text', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Submit Request', 'olmo' ),
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
			'read_more_style',
			[
				'label' => esc_html__( 'Read More Style', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'default',
				'options' => [
					'default'  => esc_html__( 'Default', 'olmo' ),
					'fullwidth' => esc_html__( 'Fullwidth', 'olmo' ),
				],
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
               'default'         => '',
               'selectors' => [
                   '{{WRAPPER}} .pricing-content' => 'text-align: {{VALUE}};'
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
					'{{WRAPPER}} .pricing-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
		
		$this->add_control(
			'title_color',
			[
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pricing-plan-title .h5-xs' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'discount_color',
			[
				'label' => esc_html__( 'Discount Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pricing-plan-title .h6-sm' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'discount_bg_color',
			[
				'label' => esc_html__( 'Discount BG Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pricing-plan-title .h6-sm' => 'background-color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => esc_html__( 'Title Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .pricing-plan-title .h5-xs',
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'discount_typography',
				'label' => esc_html__( 'Discount Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .pricing-plan-title .h6-sm',
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
			'pricing_price_section',
			[
				'label' => esc_html__( 'Pricing Price', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'pricing_price_color',
			[
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dark-color.price' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'pricing_price_typography',
				'label' => esc_html__( 'Pricing Price Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .dark-color.price',
			]
		);
		
		 $this->add_responsive_control(
			'pricing_price_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .dark-color.price' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
      $this->end_controls_section();
	  
	  
	  
	  $this->start_controls_section(
			'currency_section',
			[
				'label' => esc_html__( 'Currency', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'currency_color',
			[
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .dark-color.currency' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'currency_typography',
				'label' => esc_html__( 'Pricing Price Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .dark-color.currency',
			]
		);
		
		 $this->add_responsive_control(
			'currency_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .dark-color.currency' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
      $this->end_controls_section();
	  
	  $this->start_controls_section(
			'fraction_section',
			[
				'label' => esc_html__( 'Fraction', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'fraction_color',
			[
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .validity.dark-color span' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'fraction_typography',
				'label' => esc_html__( 'Fraction Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .validity.dark-color span',
			]
		);
		
		 $this->add_responsive_control(
			'fraction_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .validity.dark-color span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
      $this->end_controls_section();
	  
	  $this->start_controls_section(
			'period_section',
			[
				'label' => esc_html__( 'Period', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'period_color',
			[
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .validity.dark-color' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'period_typography',
				'label' => esc_html__( 'Period Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .validity.dark-color',
			]
		);
		
		 $this->add_responsive_control(
			'period_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .validity.dark-color' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
      $this->end_controls_section();
	  
	  $this->start_controls_section(
			'description_section',
			[
				'label' => esc_html__( 'Description', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'description_color',
			[
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .p-md' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'description_typography',
				'label' => esc_html__( 'Description Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .p-md',
			]
		);
		
		 $this->add_responsive_control(
			'description_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .p-md' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
      $this->end_controls_section();
	  
	  $this->start_controls_section(
			'number_section',
			[
				'label' => esc_html__( 'Number', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'number_color',
			[
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .features li span' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'number_typography',
				'label' => esc_html__( 'Description Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .features li span',
			]
		);
		
		 $this->add_responsive_control(
			'number_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .features li span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
      $this->end_controls_section();
	  
	  $this->start_controls_section(
			'pricing_list_text_section',
			[
				'label' => esc_html__( 'Pricing List', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'pricing_list_text_color',
			[
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .features li' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'pricing_list_text_typography',
				'label' => esc_html__( 'Pricing List Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .features li',
			]
		);
		
		 $this->add_responsive_control(
			'pricing_list_text_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .features li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
      $this->end_controls_section();
	  
	  $this->start_controls_section(
			'read_more_text_section',
			[
				'label' => esc_html__( 'Read More', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->start_controls_tabs(
			'read_more_text_tabs'
		);
		
		$this->start_controls_tab(
			'read_more_text_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'olmo' ),
			]
		);
		
		$this->add_control(
			'read_more_text_color',
			[
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .btn' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'read_more_text_bg_color',
			[
				'label' => esc_html__( 'BG Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .btn' => 'background-color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'read_more_text_typography',
				'label' => esc_html__( 'Read More Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .btn',
			]
		);
		
		 $this->add_responsive_control(
			'read_more_text_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->start_controls_tab(
			'read_more_text_bg_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'olmo' ),
			]
		);
		
		$this->add_control(
			'read_more_text_color_hover',
			[
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .btn:hover' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'read_more_text_bg_color_hover',
			[
				'label' => esc_html__( 'Bg Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .btn:hover' => 'background-color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();
		
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
				'selector' => '{{WRAPPER}} .pricing-content .pricing-2-table',
			]
		);
		
		$this->add_responsive_control(
			'box_style_section_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .pricing-content .pricing-2-table' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'{{WRAPPER}} .pricing-content .pricing-2-table' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'{{WRAPPER}} .pricing-content .pricing-2-table' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'box_shadow_section',
				'label' => esc_html__( 'Box Shadow', 'olmo' ),
				'selector' => '{{WRAPPER}} .pricing-content .pricing-2-table',
			]
		);
		
		$this->add_responsive_control(
			'border_width',
			[
				'label' =>esc_html__( 'Boeder Width', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .pricing-content .pricing-2-table' => 'border-width: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
        );
		$this->add_control(
			'box_border_color',
			[
				'label' => esc_html__( 'Border Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pricing-content .pricing-2-table' => 'border-color: {{VALUE}}',
				],
			]
		);

		$this->end_controls_section();
	  
	  // End Style Section //
    }

    protected function render() {
        $settings = $this->get_settings_for_display(); ?>
		<div class="pricing-content">


			<div class="pricing-2-table mb-40">	
													
				<!-- Plan Price -->
				<div class="pricing-plan">
					<!-- Hightlight Badge -->
						<?php if($settings['pricing_featured'] == 'yes'): ?>
							<?php if($settings['featured_title'] != ''): ?>
								<div class="badge-wrapper">
									<div class="highlight-badge bg-skyblue white-color">
										<h6 class="h6-md"><?php echo esc_html($settings['featured_title']); ?></h6>
									</div>
								</div>
							<?php endif; ?>
						<?php endif; ?>

					<!-- Plan Title -->
					<div class="pricing-plan-title">
						<?php if($settings['pricing_title'] != ''): ?>
						<h5 class="h5-xs"><?php echo esc_html($settings['pricing_title']); ?></h5>
						<?php endif; ?>
						<?php if($settings['discount'] != ''): ?>
						<h6 class="h6-sm bg-lightgrey"><?php echo esc_html($settings['discount']); ?></h6>
						<?php endif; ?>
					</div>	

					<!-- Price -->
					<?php if($settings['currency'] != ''): ?>
						<sup class="dark-color currency"><?php echo esc_html($settings['currency']); ?></sup>
					<?php endif; ?>
					
					<?php if($settings['pricing_price'] != ''): ?>
						<span class="dark-color price"><?php echo esc_html($settings['pricing_price']); ?></span>
					<?php endif; ?>
					
					<sup class="validity dark-color">
						<?php if($settings['fraction'] != ''): ?>
							<span><?php echo esc_html($settings['fraction']); ?></span>
						<?php endif; ?>
						<?php if($settings['period'] != ''): ?>
							<?php echo esc_html($settings['period']); ?>
						<?php endif; ?>
					</sup>
					
					<?php if($settings['description'] != ''): ?>
						<p class="p-md"><?php echo esc_html($settings['description']); ?></p>
					<?php endif; ?>

				</div>	

				<!-- Plan Features  -->
					<?php if ( $settings['list'] ): ?>
						<ul class="features">
							<?php foreach (  $settings['list'] as $item ): ?>
								<li>
									<?php if($item['number'] != ''): ?>
									<span><?php echo esc_html($item['number']); ?></span>
									<?php endif; ?>
									<?php echo esc_html($item['pricing_list_text']); ?>
								</li>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>

				<!-- Pricing Plan Button -->
			
					<?php
					if($settings['read_more_style'] == 'fullwidth'):
						$button_class = ' btn-fullwidth';
					else:
						$button_class = '';
					endif;
						$target = $settings['read_more_link']['is_external'] ? ' target="_blank"' : '';
						$nofollow = $settings['read_more_link']['nofollow'] ? ' rel="nofollow"' : '';
					if($settings['read_more_text'] != ''): ?>
						<a class="btn btn-sm btn-tra-grey tra-green-hover<?php echo esc_attr($button_class); ?>" href="<?php echo esc_url($settings['read_more_link']['url']); ?>" <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?>>
							<?php echo esc_html($settings['read_more_text']); ?>
						</a>
					<?php endif; ?>
			</div>
						  
		</div> <!-- end .pricing-content -->
    <?php
	}

    protected function content_template() {}
}