<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Olmo_Contact_Box extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-contactbox';
    }

    public function get_title() {

        return esc_html__( 'Contact Box', 'olmo'  );

    }

    public function get_icon() { 
        return 'eicon-favorite';
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
			'show_icon',
			[
				'label' => esc_html__( 'Show Icon', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'olmo' ),
				'label_off' => esc_html__( 'Hide', 'olmo' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

        $this->add_control(
			'contact_icon',
			[
				'label' => esc_html__( 'Icon', 'olmo' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'condition' => ['show_icon' => ['yes']],
				'default' => [
					'value' => 'fas fa-phone',
					'library' => 'solid',
				],
			]
		);
		
		$this->add_control(
			'contact_title',
			[
				'label' => esc_html__( 'Title', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Call Us', 'olmo' ),
				'placeholder' => esc_html__( 'Type your title here', 'olmo' ),
			]
        );
	
		$this->add_control(
			'contact_text',
			[
				'label' => esc_html__( 'Description', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'default' => esc_html__( '936-303-959', 'olmo' ),
				'placeholder' => esc_html__( 'Enter your description', 'olmo' ),
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
                   '{{WRAPPER}} .contact-box-content' => 'text-align: {{VALUE}};'
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
					'{{WRAPPER}} .contact-box-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
				'condition' => ['show_icon' => ['yes']],
			]
		);
		
		$this->add_control(
			'icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .contact-icon' => 'color: {{VALUE}}',
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
					'{{WRAPPER}} .contact-icon' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );

	  $this->add_control(
		'icon_bg_color',
		[
			'label' => esc_html__( 'Icon BG Color', 'olmo' ),
			'type' => \Elementor\Controls_Manager::COLOR,
			'selectors' => [
				'{{WRAPPER}} .contact-icon' => 'background: {{VALUE}}',
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
				'{{WRAPPER}} .contact-icon' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			],
		]
  );
       
	  $this->end_controls_section();
	  
	  // Number Style Section //
		
		$this->start_controls_section(
			'text_style_section',
			[
				'label' => esc_html__( 'Text', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'text_color',
			[
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .contact-box-content h5' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'text_typography',
				'label' => esc_html__( 'Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .contact-box-content h5',
			]
		);

        $this->add_responsive_control(
			'text_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .contact-box-content h5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
	  $this->end_controls_section();

	  // Title Style Section //
		
		$this->start_controls_section(
			'des_style_section',
			[
				'label' => esc_html__( 'Description', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'des_color',
			[
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .contact-box-content p' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'des_typography',
				'label' => esc_html__( 'Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .contact-box-content p',
			]
		);

        $this->add_responsive_control(
			'des_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .contact-box-content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
	  $this->end_controls_section();
	  
	  // End Style Section //
	  
	  // Title Style Section //
		
		$this->start_controls_section(
			'hover_style_section',
			[
				'label' => esc_html__( 'Box', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'bg_color',
			[
				'label' => esc_html__( 'BG Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .contact-box-content' => 'background: {{VALUE}}',
				],
			]
		);

		$this->add_responsive_control(
			'box_border_radius',
			[
				'label' =>esc_html__( 'Border Radius', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .contact-box-content' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
	  );
       
	  $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display(); ?>
        <div class="contact-box-content">
			<?php if($settings['show_icon'] == 'yes'): ?>
            <div class="contact-icon">
				<?php \Elementor\Icons_Manager::render_icon( $settings['contact_icon'], [ 'aria-hidden' => 'true' ] ); ?>
            </div>
			<?php endif; ?>            
            <p class="contact-des"><?php echo esc_html($settings['contact_title']); ?></p>
            <h5><?php echo wp_kses($settings['contact_text'],  array('br'=>array())); ?></h5>     
        </div>
        <?php
	}

    protected function content_template() {}
}