<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Olmo_Percent_Box extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-percentbox';
    }

    public function get_title() {

        return esc_html__( 'Percent Box', 'olmo'  );

    }

    public function get_icon() { 
        return 'fas fa-flag';
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
			'percent_title',
			[
				'label' => esc_html__( 'Title', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '0.0', 'olmo' ),
				'placeholder' => esc_html__( 'Type your title here', 'olmo' ),
			]
        );
	
		$this->add_control(
			'percent_sign',
			[
				'label' => esc_html__( 'Sign', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( '%', 'olmo' ),
				'placeholder' => esc_html__( 'Type your sign here', 'olmo' ),
			]
        );
		
		$this->add_control(
			'percent_text1',
			[
				'label' => esc_html__( 'Text 1', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Olmo', 'olmo' ),
				'placeholder' => esc_html__( 'Type your text here', 'olmo' ),
			]
        );
		
		$this->add_control(
			'percent_text2',
			[
				'label' => esc_html__( 'Text 2', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Offers Free Fundraising', 'olmo' ),
				'placeholder' => esc_html__( 'Type your text here', 'olmo' ),
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
               'default'         => 'center',
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
					'{{WRAPPER}} .percent-box-content h5' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'text_sign_color',
			[
				'label' => esc_html__( 'Sign Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .percent-box-content h5 span' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'background_color',
			[
				'label' => esc_html__( 'BG Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .percent-box-content' => 'background-color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'text_typography',
				'label' => esc_html__( 'Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .percent-box-content h5',
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'sign_typography',
				'label' => esc_html__( 'Sign Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .percent-box-content h5 span',
			]
		);

        $this->add_responsive_control(
			'text_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .percent-box-content h5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
	  $this->end_controls_section();

	  // Title Style Section //
		
		$this->start_controls_section(
			'des_style_section',
			[
				'label' => esc_html__( 'Right Text', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'des_color',
			[
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .percent-box-content span' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'des_typography',
				'label' => esc_html__( 'Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .percent-box-content span',
			]
		);

        $this->add_responsive_control(
			'des_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .percent-box-content span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
	  $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="percent-box-content">
            <div class="row align-items-center">
                <div class="col-5">
                    <h5><?php echo esc_html($settings['percent_title']); ?><span><?php echo esc_html($settings['percent_sign']); ?></span></h5>
                </div>
                <div class="col-7 right-con-per">
                    <span><?php echo esc_html($settings['percent_text1']); ?></span>
                    <span><?php echo esc_html($settings['percent_text2']); ?></span>
                </div>
            </div>
            
        </div>

        <?php
	}

    protected function content_template() {}
}