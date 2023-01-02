<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Olmo_Title extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-title';
    }

    public function get_title() {

        return esc_html__( 'Title', 'olmo'  );

    }

    public function get_icon() { 
        return 'eicon-t-letter';
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
			'title_style',
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
				'default' => esc_html__( 'Discover powerful features to boost your productivity', 'olmo' ),
				'placeholder' => esc_html__( 'Type your title here', 'olmo' ),
			]
		);
		
		$this->add_control(
			'sub_title',
			[
				'label' => esc_html__( 'Sub Title', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => '',
				'placeholder' => esc_html__( 'Type your sub-title here', 'olmo' ),
			]
		);

		$this->add_control(
			'listicon',
			[
				'label' => esc_html__( 'Icon', 'olmo' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => '',
					'library' => 'solid',
				],
			]
		);
		
		$this->add_control(
			'description',
			[
				'label' => esc_html__( 'Description', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => 'Aliquam a augue suscipit luctus neque purus ipsum neque dolor primis a libero tempus blandit and cursus varius and magnis sapien',
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
               'default'         => 'center',
               'selectors' => [
                   '{{WRAPPER}} .heading-content' => 'text-align: {{VALUE}};'
               ],
            ] 
		);
		
		$this->add_responsive_control(
			'main_margin',
			[
				'label' =>esc_html__( 'Margin', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .heading-content' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
				'label' => esc_html__( 'Title Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .heading-content h2' => 'color: {{VALUE}}',
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
					'{{WRAPPER}} .heading-content:hover h2' => 'color: {{VALUE}}',
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
				'selector' => '{{WRAPPER}} .heading-content h2',
			]
		);

        $this->add_responsive_control(
			'title_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .heading-content h2' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
      $this->end_controls_section();
	  
	  $this->start_controls_section(
			'style_sub_section',
			[
				'label' => esc_html__( 'Sub Title', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->start_controls_tabs(
			'subtitle_tabs'
		);
		
		$this->start_controls_tab(
			'subtitle_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'olmo' ),
			]
		);
		
		$this->add_control(
			'subtitle_color',
			[
				'label' => esc_html__( 'Sub Title Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .heading-content .sub-title' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'subtitle_bg_color',
			[
				'label' => esc_html__( 'Sub Title BG Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .heading-content .sub-title' => 'background-color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->start_controls_tab(
			'subtitle_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'olmo' ),
			]
		);
		
		$this->add_control(
			'subtitle_color_hover',
			[
				'label' => esc_html__( 'Sub Title Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .heading-content:hover .sub-title' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'subtitle_bg_color_hover',
			[
				'label' => esc_html__( 'Sub Title BG Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .heading-content:hover .sub-title' => 'background-color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'sub_title_typography',
				'label' => esc_html__( 'Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .heading-content .sub-title',
			]
		);

        $this->add_responsive_control(
			'sub_title_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .heading-content .sub-title' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );

	  $this->add_responsive_control(
		'sub_title_border_radius',
		[
			'label' =>esc_html__( 'Border Radius', 'olmo'  ),
			'type' => \Elementor\Controls_Manager::DIMENSIONS,
			'size_units' => [ 'px', 'em', '%' ],
			'selectors' => [
				'{{WRAPPER}} .heading-content .sub-title' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
			],
		]
  );
       
	  $this->end_controls_section();
	  
	  // Description Section //
		
		$this->start_controls_section(
			'description_section',
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
					'{{WRAPPER}} .heading-content p' => 'color: {{VALUE}}',
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
				'label' => esc_html__( 'description Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .heading-content:hover p' => 'color: {{VALUE}}',
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
				'selector' => '{{WRAPPER}} .heading-content p',
			]
		);

        $this->add_responsive_control(
			'description_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .heading-content p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
      $this->end_controls_section();

	  
	  // End Style Section //
    }

    protected function render( ) { 
        $settings = $this->get_settings_for_display();
		?>
        
		<div class="heading-content <?php echo esc_attr($settings['text_align']); ?>">
			<?php if($settings['title_style'] == 'style2'): ?>
            	<?php if($settings['text_align'] == 'left'): ?>
					<div class="align-bottom">
						<?php if($settings['sub_title'] != ''): ?>
                        <span class="sub-title"><?php echo esc_html($settings['sub_title']); ?></span>
                        <?php endif; ?>
                        <?php if($settings['title'] != ''): ?>
                        <h2><?php echo esc_html($settings['title']); ?></h2>
                        <?php endif; ?>
                        <p><?php echo esc_html($settings['description']); ?></p>
                    </div>
                <?php elseif($settings['text_align'] == 'center'): ?>
            	<div class="row">
                    <div class="col-md-6">
						<?php if($settings['sub_title'] != ''): ?>
                        <span class="sub-title"><?php echo esc_html($settings['sub_title']); ?></span>
                        <?php endif; ?>
                        <?php if($settings['title'] != ''): ?>
                        <h2><?php echo esc_html($settings['title']); ?></h2>
                        <?php endif; ?>
                    </div>
                    <div class="col-md-6">
                    	<p><?php echo esc_html($settings['description']); ?></p>
                    </div>
                </div>
                <?php else: ?>
                	<div class="align-bottom">
						<?php if($settings['sub_title'] != ''): ?>
                        <span class="sub-title"><?php echo esc_html($settings['sub_title']); ?></span>
                        <?php endif; ?>
                        <?php if($settings['title'] != ''): ?>
                        <h2><?php echo esc_html($settings['title']); ?></h2>
                        <?php endif; ?>
                        <p><?php echo wp_kses($settings['description'], array('p'=>array())); ?></p>
                    </div>
                <?php endif; ?>
            <?php else: ?>
				<?php if($settings['listicon'] != ''): ?>
					<div class="heading-icon"><?php \Elementor\Icons_Manager::render_icon( $settings['listicon']); ?></div>
				<?php endif; ?>
                <?php if($settings['sub_title'] != ''): ?>
					<span class="sub-title section-id rounded-id bg-tra-purple purple-color txt-upcase">
						<?php echo esc_html($settings['sub_title']); ?>
					</span>
                <?php endif; ?>
                <?php if($settings['title'] != ''): ?>
                	<h2 class="h2-md"><?php echo esc_html($settings['title']); ?></h2>
                <?php endif; ?>
				<?php if($settings['description'] != ''): ?>
					<p class="p-xl"><?php echo wp_kses($settings['description'], array('p'=>array())); ?></p>
				<?php endif; ?>
            <?php endif; ?>       
		</div>
    	<?php  
    }
    protected function content_template() {}
}