<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Olmo_Counter extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-counter';
    }

    public function get_title() {

        return esc_html__( 'Counter', 'olmo'  );

    }

    public function get_icon() { 
        return 'eicon-counter';
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
			'posts_style',
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
			'show_circle',
			[
				'label' => esc_html__( 'Show Icon', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'olmo' ),
				'label_off' => esc_html__( 'Hide', 'olmo' ),
				'return_value' => 'yes',
				'default' => 'no',
			]
		);

        $this->add_control(
			'counter_icon',
			[
				'label' => esc_html__( 'Icon', 'olmo' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-star',
					'library' => 'solid',
				],
				'condition' => ['show_circle' => ['yes']],
			]
		);
        
        $this->add_control(
			'number',
			[
				'label' => esc_html__( 'Number', 'olmo' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 10000,
				'step' => 1,
				'default' => 84,
			]
		);
	
		$this->add_control(
			'number_text',
			[
				'label' => esc_html__( 'Number Text', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'K', 'olmo' ),
				'placeholder' => esc_html__( 'Ex: K,M etc', 'olmo' ),
			]
        );

        $this->add_control(
			'counter_title',
			[
				'label' => esc_html__( 'Title', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Projects are completed', 'olmo' ),
				'placeholder' => esc_html__( 'Type your title here', 'olmo' ),
			]
        );

		$this->add_control(
			'show_rating',
			[
				'label' => esc_html__( 'Show Rating', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'olmo' ),
				'label_off' => esc_html__( 'Hide', 'olmo' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'counter_rating',
			[
				'label' => esc_html__( 'Rating', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '5',
				'condition' => ['posts_style' => ['style1'], 'show_rating' => ['yes']],
				'options' => [
					'5'  => esc_html__( '5', 'olmo' ),
					'4' => esc_html__( '4', 'olmo' ),
					'3' => esc_html__( '3', 'olmo' ),
					'2' => esc_html__( '2', 'olmo' ),
					'1' => esc_html__( '1', 'olmo' ),
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
                   '{{WRAPPER}} .counter-content' => 'text-align: {{VALUE}};'
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
					'{{WRAPPER}} .counter-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
				'{{WRAPPER}} .counter-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			],
		]
  );
       
		$this->end_controls_section();
		
		// Icon Style Section //
		
		$this->start_controls_section(
			'icon_style_section',
			[
				'label' => esc_html__( 'Icon', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
				'condition' => ['show_circle' => ['yes']],
			]
		);
		
		$this->start_controls_tabs(
			'icon_tabs'
		);
		
		$this->start_controls_tab(
			'icon_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'olmo' ),
			]
		);
		
		$this->add_control(
			'icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .statistic-ico.ico-65 i' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->start_controls_tab(
			'icon_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'olmo' ),
			]
		);
		
		$this->add_control(
			'icon_color_hover',
			[
				'label' => esc_html__( 'Icon Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .statistic-ico.ico-65:hover i' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();

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
					'{{WRAPPER}} .statistic-ico.ico-65 i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

        $this->add_responsive_control(
			'icon_padding',
			[
				'label' =>esc_html__( 'Margin', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .statistic-ico.ico-65' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
        );

	  
       
	  $this->end_controls_section();
	  
	  // Number Style Section //
		
		$this->start_controls_section(
			'Number_style_section',
			[
				'label' => esc_html__( 'Number', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->start_controls_tabs(
			'number_tabs'
		);
		
		$this->start_controls_tab(
			'number_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'olmo' ),
			]
		);
		
		$this->add_control(
			'number_color',
			[
				'label' => esc_html__( 'Number Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .count-number' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'main_bg_color',
			[
				'label' => esc_html__( 'Main Background', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .counter-content' => 'background: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->start_controls_tab(
			'number_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'olmo' ),
			]
		);
		
		$this->add_control(
			'number_color_hover',
			[
				'label' => esc_html__( 'Number Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .counter-content:hover .count-number' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'main_bg_color_hover',
			[
				'label' => esc_html__( 'Main Background', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .counter-content:hover' => 'background: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'number_typography',
				'label' => esc_html__( 'Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .count-number',
			]
		);

        $this->add_responsive_control(
			'number_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .count-number' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
        );
       
	  $this->end_controls_section();

	  // Title Style Section //
		
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
					'{{WRAPPER}} .counter-content .p-lg' => 'color: {{VALUE}}',
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
					'{{WRAPPER}} .counter-content:hover .p-lg' => 'color: {{VALUE}}',
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
				'selector' => '{{WRAPPER}} .counter-content .p-lg',
			]
		);

        $this->add_responsive_control(
			'title_padding',
			[
				'label' =>esc_html__( 'Margin', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .counter-content .p-lg' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
	  $this->end_controls_section();
	  
	  // End Style Section //
    }

    protected function render() {
        $settings = $this->get_settings_for_display();		
        ?>
        <div class="counter-content statistic-block wow fadeInUp counter-<?php echo esc_attr($settings['posts_style']); ?>">
		<?php if($settings['posts_style'] == 'style2'): ?>
			<div class="statistic-ico ico-65">
				<?php if($settings['show_circle'] == 'yes'): ?>
					<?php \Elementor\Icons_Manager::render_icon( $settings['counter_icon'], [ 'aria-hidden' => 'true' ] ); ?>
				<?php endif; ?>
			</div> 

			<!-- Text -->
			<h3 class="h3-md statistic-number">
				<span class="number count-number" data-count="<?php echo esc_attr($settings['number'] ); ?>">
					<span class="counter"><?php echo esc_html($settings['number'] ); ?></span>
					<?php echo esc_html($settings['number_text']); ?>					
				</span>
			</h3>	
			<p class="p-lg txt-400"><?php echo wp_kses($settings['counter_title'], array('br'=>array())); ?></p>

		<?php else: ?>
		
			<div class="statistic-block wow fadeInUp">
				<!-- Text -->
				<h2 class="h2-title-xs statistic-number">
					<span class="number count-number count-element" data-count="<?php echo esc_attr($settings['number'] ); ?>">
						<span class="counter"><?php echo esc_html($settings['number'] ); ?></span>
						<?php echo esc_html($settings['number_text']); ?>
					</span>
				</h2>

				<!-- Rating -->
				<?php if($settings['show_rating'] == 'yes'): ?>
					<?php if($settings['counter_rating'] != ''): ?>
						<div class="txt-block-rating ico-15 yellow-color">
							<?php if($settings['counter_rating'] == '5'){
								?>
								<i class="cs-icon cs-star-1"></i>
								<i class="cs-icon cs-star-1"></i>
								<i class="cs-icon cs-star-1"></i>
								<i class="cs-icon cs-star-1"></i>
								<i class="cs-icon cs-star-1"></i>
								<?php
							} elseif($settings['counter_rating'] == '4'){ ?>
								<i class="cs-icon cs-star-1"></i>
								<i class="cs-icon cs-star-1"></i>
								<i class="cs-icon cs-star-1"></i>
								<i class="cs-icon cs-star-1"></i>
								<i class="cs-icon cs-star"></i>
							<?php } elseif($settings['counter_rating'] == '3'){ ?>	
								<i class="cs-icon cs-star-1"></i>
								<i class="cs-icon cs-star-1"></i>
								<i class="cs-icon cs-star-1"></i>
								<i class="cs-icon cs-star"></i>
								<i class="cs-icon cs-star"></i>
							<?php }elseif($settings['counter_rating'] == '2'){ ?>
								<i class="cs-icon cs-star-1"></i>
								<i class="cs-icon cs-star-1"></i>
								<i class="cs-icon cs-star"></i>
								<i class="cs-icon cs-star"></i>
								<i class="cs-icon cs-star"></i>
							<?php }elseif($settings['counter_rating'] == '1'){ ?>
								<i class="cs-icon cs-star-1"></i>
								<i class="cs-icon cs-star"></i>
								<i class="cs-icon cs-star"></i>
								<i class="cs-icon cs-star"></i>
								<i class="cs-icon cs-star"></i>
							<?php }else{ ?>
								<i class="cs-icon cs-star"></i>
								<i class="cs-icon cs-star"></i>
								<i class="cs-icon cs-star"></i>
								<i class="cs-icon cs-star"></i>
								<i class="cs-icon cs-star"></i>
							<?php } ?>
						</div>
					<?php endif; ?>
				<?php endif; ?>

				<p class="p-lg txt-400"><?php echo wp_kses($settings['counter_title'], array('br'=>array())); ?></p>																									
			</div>
					
		<?php endif; ?>   
        </div>
        <?php
	}

    protected function content_template() {}
}