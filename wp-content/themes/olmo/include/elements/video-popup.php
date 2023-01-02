<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Olmo_Video_Popup extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-videopopup';
    }

    public function get_title() {

        return esc_html__( 'Video Popup', 'olmo'  );

    }

    public function get_icon() { 
        return 'eicon-youtube';
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
			'style',
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
			'icon_title',
			[
				'label' => esc_html__( 'Title', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'See OLMO in Action', 'olmo' ),
				'placeholder' => esc_html__( 'Type your title here', 'olmo' ),
			]
        );
		
		$this->add_control(
			'video_link',
			[
				'label' => esc_html__( 'Link', 'olmo' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://', 'olmo' ),
				'show_external' => false,
			]
		);
		
		$this->add_control(
			'video_image',
			[
				'label' => esc_html__( 'Video Image', 'olmo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'condition' => ['style' => ['style2']],
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
                   '{{WRAPPER}} .popup-video-content' => 'text-align: {{VALUE}};'
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
					'{{WRAPPER}} .popup-video-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );

	  $this->add_responsive_control(
		'margin',
		[
			'label' =>esc_html__( 'Margin', 'olmo'  ),
			'type' => \Elementor\Controls_Manager::DIMENSIONS,
			'size_units' => [ 'px', 'em', '%' ],
			'selectors' => [
				'{{WRAPPER}} .popup-video-content .content-9-img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'{{WRAPPER}} .popup-video-content .video-btn, {{WRAPPER}} .popup-video-content a' => 'width: {{SIZE}}{{UNIT}};',
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
					'{{WRAPPER}} .popup-video-content .video-btn, {{WRAPPER}} .popup-video-content a' => 'height: {{SIZE}}{{UNIT}};',
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
					'{{WRAPPER}} .popup-video-content .video-btn, {{WRAPPER}} .popup-video-content a, {{WRAPPER}} .content-9-img.video-preview .video-popup2 i' => 'line-height: {{SIZE}}{{UNIT}} !important;',
				],
			]
		);

		$this->add_responsive_control(
			'icon_size',
			[
				'label' => esc_html__( 'Icon Size', 'olmo' ),
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
					'{{WRAPPER}} .content-9-img.video-preview .video-popup2 i, {{WRAPPER}} .popup-video-content a' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
		
		$this->add_control(
			'icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .popup-video-content a i, {{WRAPPER}} .popup-video-content .video-btn i' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'icon_bg_color',
			[
				'label' => esc_html__( 'Icon BG Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .popup-video-content a, {{WRAPPER}} .popup-video-content .video-btn' => 'background-color: {{VALUE}}',
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
					'{{WRAPPER}} .popup-video-content a, {{WRAPPER}} .popup-video-content .video-btn' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
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
					'{{WRAPPER}} .popup-video-content .video-btn, {{WRAPPER}} .popup-video-content a' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
	  $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="popup-video-content"> 
        	<?php
			$video_url = $settings['video_link']['url'];
			$target = $settings['video_link']['is_external'] ? ' target="_blank"' : '';
			$nofollow = $settings['video_link']['nofollow'] ? ' rel="nofollow"' : '';			
			if( $video_url != '' ):
				if($settings['style'] == 'style2'):
				?>
				<div class="content-9-img video-preview">
					<!-- Play Icon --> 
					<a class="video-popup2" href="<?php echo esc_url($video_url); ?>" data-url="<?php echo esc_url($video_url); ?>">				
						<div class="video-btn video-btn-xl bg-orange-red ico-90">	
							<div class="video-block-wrapper"><i class="cs-icon cs-play-button"></i></div>
						</div>
					</a>
					<!-- Preview Image -->
					<?php if($settings['video_image']['url'] != ''): ?>
						<img class="img-fluid" src="<?php echo esc_url($settings['video_image']['url']); ?>" alt="<?php echo esc_attr__('video-preview', 'olmo'); ?>" />
					<?php endif; ?>
				</div>
				<?php else: ?>

                <a href="<?php echo esc_url($video_url); ?>" data-url="<?php echo esc_url($video_url); ?>" class="video-popup2 btn btn-md btn-transparent ico-20 ico-left"<?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?>>
                <i class="cs-icon cs-play"></i>
					<?php if($settings['icon_title'] != ''): ?>
						<?php echo esc_html($settings['icon_title']); ?>
					<?php endif; ?>
				</a>
                <?php
				endif;											
			endif;
			?>    
        </div>

        <?php
	}

    protected function content_template() {}
}