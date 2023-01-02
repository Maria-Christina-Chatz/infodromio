<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Olmo_Pricing_Tab extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-pricing-tab';
    }

    public function get_title() {

        return esc_html__( 'Pricing Tab', 'olmo'  );

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

		$repeater = new \Elementor\Repeater();

		$repeater->add_control(
			'tab_title',
			[
				'label' => esc_html__( 'Tab Title', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Monthly', 'olmo' ),
				'placeholder' => esc_html__( 'Type your title here', 'olmo' ),
			]
		);

		$repeater->add_control(
			'number_of_posts',
			[
				'label' => esc_html__( 'Number of Pricing', 'olmo' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 48,
				'step' => 1,
				'default' => 3,
			]
		);
		
		$repeater->add_control(
			'cateogries',
			[
				'label' => esc_html__( 'Select Categories', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'options' => $this->get_pricing_categories(),
				'label_block' => true,
				'multiple'		=> true,
			]			
		);
		
		$repeater->add_control(
			'order',
			[
				'label' => esc_html__( 'Order', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => [
					'DESC'  => esc_html__( 'DESC', 'olmo' ),
					'ASC' => esc_html__( 'ASC', 'olmo' ),
				],
			]
		);
		
		$repeater->add_control(
			'orderby',
			[
				'label' => esc_html__( 'Order By', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'date',
				'options' => [
					'title'  => esc_html__( 'Title', 'olmo' ),
					'date' => esc_html__( 'Date', 'olmo' ),
					'ID'  => esc_html__( 'ID', 'olmo' ),
					'name'  => esc_html__( 'Name', 'olmo' ),
					'rand' => esc_html__( 'Rand', 'olmo' ),
					'comment_count'  => esc_html__( 'Comment Count', 'olmo' ),
					'menu_order' => esc_html__( 'Menu Order', 'olmo' ),					
					'author' => esc_html__( 'Author', 'olmo' ),
				],
			]
		);

		$repeater->add_control(
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

		$this->add_control(
			'tab_list',
			[
				'label' => esc_html__( 'Tab List', 'olmo' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'tab_title' => esc_html__( 'Monthly', 'olmo' ),
						'number_of_posts' => 3,
						'cateogries' => '',
						'order' => 'DESC',
						'orderby' => 'date',
					],
				],
				'title_field' => '{{{ tab_title }}}',
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

		// Nav Section //
		
		$this->start_controls_section(
			'nav_section',
			[
				'label' => esc_html__( 'Nav Tabs', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'nav_color',
			[
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pricing-tab .nav-tabs .nav-link' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'nav_active_color',
			[
				'label' => esc_html__( 'Active Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pricing-tab .nav-tabs .nav-link.active' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'nav_circle_color',
			[
				'label' => esc_html__( 'Circle Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pricing-tab .nav-tabs .nav-link:before' => 'border-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'nav_circle_active_color',
			[
				'label' => esc_html__( 'Circle Active Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .pricing-tab .nav-tabs .nav-link.active:before' => 'background-color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'nav_typography',
				'label' => esc_html__( 'Nav Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .pricing-tab .nav-tabs .nav-link',
			]
		);	

        $this->add_responsive_control(
			'nav_margin',
			[
				'label' =>esc_html__( 'Nav Margin', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .pricing-tab .nav-tabs .nav-link' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );

	  $this->add_responsive_control(
		'nav_border_radius',
		[
			'label' =>esc_html__( 'Border Radius', 'olmo'  ),
			'type' => \Elementor\Controls_Manager::DIMENSIONS,
			'size_units' => [ 'px', 'em', '%' ],
			'selectors' => [
				'{{WRAPPER}} .pricing-tab .nav-tabs .nav-link:before' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			],
		]
  );
       
      $this->end_controls_section();
	  
	  // End Style Section //
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
		
		if ( class_exists( 'Ts_Shortcodes' ) ){
		?>
		<?php if ( $settings['tab_list'] ): ?>
			<div class="pricing-content">
				<nav class="pricing-tab">
					<div class="nav nav-tabs justify-content-center" id="nav-tab" role="tablist">
						<?php
						foreach($settings['tab_list'] as $key => $item): 
							$class = ($key == 0) ? ' active' : '';
							$aria = ($key == 0) ? ' true' : '';
							?>
							<button class="nav-link<?php echo esc_attr($class); ?>" id="nav-<?php echo esc_attr($key); ?>-tab" data-bs-toggle="tab" data-bs-target="#nav-<?php echo esc_attr($key); ?>" type="button" role="tab" aria-controls="nav-<?php echo esc_attr($key); ?>" aria-selected="<?php echo esc_attr($aria); ?>"><?php echo esc_html($item['tab_title']); ?></button>
						<?php endforeach; ?>
					</div>
				</nav>
				<div class="pricing-2-row">		
					<div class="tab-content" id="nav-tabContent">
					<!-- Plan Price -->
					<?php 
					foreach($settings['tab_list'] as $key => $item):
						$active_class = ($key == 0) ? ' active show' : '';
						$args = array(
							'post_type' => 'pricing',
							'posts_per_page' => $item['number_of_posts'],
							'order'          => $item['order'],
							'orderby'        => $item['orderby'],
							);
							
							if(!empty($item['cateogries'])){
								
								$args['tax_query'] = array(
								array(
									'taxonomy' => 'pricing_category',
									'terms'    => $item['cateogries'],
									'field' => 'id',
									),
								);		
							}
							
							$query = get_posts( $args );
						?>
						<div class="tab-pane fade <?php echo esc_attr($active_class); ?>" id="nav-<?php echo esc_attr($key); ?>" role="tabpanel" aria-labelledby="nav-<?php echo esc_attr($key); ?>-tab">
							<div class="row row-cols-1 row-cols-md-3">
								<?php foreach ( $query as $post ): ?>
									<div class="col">
										<div class="pricing-2-table mb-40">
											<?php if(has_post_thumbnail($post->ID)): ?>
											<div class="pricing-thumb">
												<?php echo get_the_post_thumbnail( $post->ID, 'olmo-medium' ); ?>
											</div>
											<?php endif; ?>
											<div class="pricing-plan">
												<!-- Hightlight Badge -->
													<?php 
													$pricing_featured = get_post_meta( $post->ID, 'pricing_featured', true );
													$featured_title = get_post_meta( $post->ID, 'featured_title', true );
													if($pricing_featured == 'yes'): ?>
														<?php if($featured_title != ''): ?>
															<div class="badge-wrapper">
																<div class="highlight-badge bg-skyblue white-color">
																	<h6 class="h6-md"><?php echo esc_html($featured_title); ?></h6>
																</div>
															</div>
														<?php endif; ?>
													<?php endif; ?>

												<!-- Plan Title -->
												<div class="pricing-plan-title">
													<?php 
													$discount = get_post_meta( $post->ID, 'discount', true );
													?>
													<h5 class="h5-xs"><?php echo get_the_title($post->ID); ?></h5>
													<?php if($discount != ''): ?>
													<h6 class="h6-sm bg-lightgrey"><?php echo esc_html($discount); ?></h6>
													<?php endif; ?>
												</div>	

												<!-- Price -->
												<?php 
												$currency = get_post_meta( $post->ID, 'currency', true );
												$pricing_price = get_post_meta( $post->ID, 'pricing_price', true );
												if($currency != ''): ?>
													<sup class="dark-color currency"><?php echo esc_html($currency); ?></sup>
												<?php endif; ?>
												
												<?php if($pricing_price != ''): ?>
													<span class="dark-color price"><?php echo esc_html($pricing_price); ?></span>
												<?php endif; ?>
												
												<sup class="validity dark-color">
													<?php 
													$fraction = get_post_meta( $post->ID, 'fraction', true );
													$period = get_post_meta( $post->ID, 'period', true );
													if($fraction != ''): ?>
														<span><?php echo esc_html($fraction); ?></span>
													<?php endif; ?>
													<?php if($period != ''): ?>
														<?php echo esc_html($period); ?>
													<?php endif; ?>
												</sup>

												<p class="p-md"><?php echo get_the_content('', '', $post->ID); ?></p>

											</div>	

											<!-- Plan Features  -->
											<?php
											$feature_info = get_post_meta( $post->ID, 'feature_info', true );
											if ( !empty($feature_info) ): ?>
												<ul class="features">
													<?php foreach ( $feature_info as $info ): ?>
														<li>
															<?php if($info['select_icon'] != ''): ?>
																<i class="<?php echo esc_attr($info['select_icon']); ?>"></i>
															<?php endif; ?>
															<?php if($info['number'] != ''): ?>
															<span><?php echo esc_html($info['number']); ?></span>
															<?php endif; ?>
															<?php if($info['pricing_list_text'] != ''): ?>
																<?php echo esc_html($info['pricing_list_text']); ?>
															<?php endif; ?>
														</li>
													<?php endforeach; ?>
												</ul>
											<?php endif; ?>

											<!-- Pricing Plan Button -->
						
											<?php
											$button_link = get_post_meta( $post->ID, 'button_link', true );
											$button_text = get_post_meta( $post->ID, 'button_text', true );
											if($item['read_more_style'] == 'fullwidth'):
												$button_class = ' btn-fullwidth';
											else:
												$button_class = '';
											endif;

											if($button_text != ''): ?>
												<a class="btn btn-sm btn-tra-grey tra-skyblue-hover<?php echo esc_attr($button_class); ?>" href="<?php echo esc_url($button_link); ?>">
													<?php echo esc_html($button_text); ?>
												</a>
											<?php endif; ?>
										</div>
									</div>
								<?php endforeach; ?>
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>						  
			</div> <!-- end .pricing-content -->
			<?php endif; ?>
    	<?php
		}
	}

    protected function content_template() {}

	public function get_pricing_categories(){
		$category = [];
		if ( class_exists( 'Ts_Shortcodes' ) ){
		$args = array( 'hide_empty=0' );
		$terms = get_terms( 'pricing_category', $args );		
		if(!empty($terms)){
			foreach ( $terms as $term ) {
				$category[$term->term_id] = [$term->name];
			}
		}
		}
		return $category;
	}
}