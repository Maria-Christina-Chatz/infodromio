<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Olmo_Feature_Lists extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-feature-lists';
    }

    public function get_title() {

        return esc_html__( 'Feature Lists', 'olmo'  );

    }

    public function get_icon() { 
        return 'eicon-post-list';
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
			'title',
			[
				'label' => esc_html__( 'Title', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Feature 1', 'olmo' ),
				'placeholder' => esc_html__( 'Type your feature title here', 'olmo' ),
				'label_block' => true,
			]
        );
		
		$repeater->add_control(
			'feature_icon',
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
			'list',
			[
				'label' => esc_html__( 'Feature List', 'olmo' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'title' => esc_html__( 'Title #1', 'olmo' ),
						'feature_icon' => esc_html__( 'Icon', 'olmo' ),
					],
				],
				'title_field' => '{{{ title }}}',
			]
		);
		
		$this->add_responsive_control(
			'feature_margin',
			[
				'label' =>esc_html__( 'Margin', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .advantages' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
                   '{{WRAPPER}} .advantages' => 'text-align: {{VALUE}};'
               ],
            ]
        );
       
        $this->end_controls_section();
		
		// Icon Style Section //
		
		$this->start_controls_section(
			'icon_style_section',
			[
				'label' => esc_html__( 'Style', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);

		$this->add_control(
			'icon_text_color',
			[
				'label' => esc_html__( 'Icon Text Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .advantages li p' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'text_typography',
				'label' => esc_html__( 'Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .advantages li p',
			]
		);
		
		$this->add_control(
			'icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .advantages li p i' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'icon_bg_color',
			[
				'label' => esc_html__( 'BG Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .advantages li p i' => 'background-color: {{VALUE}}',
				],
			]
		);

		$this->add_responsive_control(
			'icon_font_size',
			[
				'label' => esc_html__( 'Icon Font Size', 'olmo' ),
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
					'{{WRAPPER}} .advantages li p i' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);

		$this->add_responsive_control(
			'icon_padding',
			[
				'label' =>esc_html__( 'Icon Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .advantages li p i' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);

		$this->add_control(
			'icon_bg_border_color',
			[
				'label' => esc_html__( 'Border Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .advantages li:after' => 'color: {{VALUE}}',
				],
			]
		);
       
	  $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
		if ( $settings['list'] ):
		?>
        <ul class="advantages clearfix">          
			<?php foreach (  $settings['list'] as $item ): ?>
				<li>
					<p>
						<?php \Elementor\Icons_Manager::render_icon( $item['feature_icon']); ?> <?php echo esc_html($item['title']); ?>
					</p>
				</li>				
			<?php endforeach; ?> 
		</ul> 
        <?php endif; ?>

        <?php
	}

    protected function content_template() {}
}