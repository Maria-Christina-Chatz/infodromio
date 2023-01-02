<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Olmo_Testmonials extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-testmonials';
    }

    public function get_title() {

        return esc_html__( 'Testmonials', 'olmo'  );

    }

    public function get_icon() { 
        return 'eicon-testimonial-carousel';
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
			'testi_style',
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
		
		$repeater = new \Elementor\Repeater();
        
        $repeater->add_control(
			'testmonials_description',
			[
				'label' => esc_html__( 'Description', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 10,
				'default' => esc_html__( 'Nunc scelerisque tincidunt elit. Vestibulum non mi ipsum. Cras pretium suscipit tellus sit amet aliquet. Vestibulum maximus lacinia massa non porttitor. Pellentesque vehicula est a lorem gravida bibendum.', 'olmo' ),
				'placeholder' => esc_html__( 'Type your description here', 'olmo' ),
			]
        );

        $repeater->add_control(
			'description_icon',
			[
				'label' => esc_html__( 'Description Icon', 'olmo' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fas fa-quote-left',
					'library' => 'solid',
				],
			]
		);

        $repeater->add_control(
			'testmonials_image',
			[
				'label' => esc_html__( 'Author Image', 'olmo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
		);
		
		$repeater->add_control(
			'testi_title',
			[
				'label' => esc_html__( 'Title', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Perfect Cleaning Service', 'olmo' ),
				'placeholder' => esc_html__( 'Type your title here', 'olmo' ),
			]
        );
        
        $repeater->add_control(
			'author_name',
			[
				'label' => esc_html__( 'Author Name', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Chad S. Jones', 'olmo' ),
				'placeholder' => esc_html__( 'Type your name here', 'olmo' ),
			]
        );

        $repeater->add_control(
			'author_designation',
			[
				'label' => esc_html__( 'Author Designation', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'House Owner', 'olmo' ),
				'placeholder' => esc_html__( 'Type your designation', 'olmo' ),
			]
		);
		
		$repeater->add_control(
			'testi_rating',
			[
				'label' => esc_html__( 'Rating', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '5',
				'options' => [
					'5'  => esc_html__( '5', 'olmo' ),
					'4' => esc_html__( '4', 'olmo' ),
					'3' => esc_html__( '3', 'olmo' ),
					'2' => esc_html__( '2', 'olmo' ),
					'1' => esc_html__( '1', 'olmo' ),
				],
			]
		);
		
		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'Testominials List', 'olmo' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'testmonials_description' => esc_html__( 'Nunc scelerisque tincidunt elit. Vestibulum non mi ipsum. Cras pretium suscipit tellus sit amet aliquet. Vestibulum maximus lacinia massa non porttitor. Pellentesque vehicula est a lorem gravida bibendum.', 'olmo' ),
						'description_icon' => esc_html__( 'Description Icon', 'olmo' ),
						'testmonials_image' => esc_html__( 'Author Image', 'olmo' ),
						'author_name' => esc_html__( 'Chad S. Jones', 'olmo' ),
						'author_designation' => esc_html__( 'House Owner', 'olmo' ),
						'testi_title' => esc_html__( 'Title', 'olmo' ),
						'testi_rating' => esc_html__( '5', 'olmo' ),
					],
				],
				'title_field' => '{{{ author_name }}}',
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
                   '{{WRAPPER}} .testimonials-content' => 'text-align: {{VALUE}};'
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
					'{{WRAPPER}} .testimonials-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
      $this->end_controls_section();

	  $this->start_controls_section(
		'control_carousel_section',
		[
			'label' => esc_html__( 'Slide Controls', 'olmo' ),
			'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
		]
	);

	$this->add_control(
		'number_of_items',
		[
			'label' => esc_html__( 'Number of Items', 'olmo' ),
			'type' => \Elementor\Controls_Manager::NUMBER,
			'min' => 1,
			'max' => 6,
			'step' => 1,
			'default' => 3,
		]
	);
	
	$this->add_control(
		'show_dots',
		[
			'label' => esc_html__( 'Show Dots', 'olmo' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'label_on' => esc_html__( 'Show', 'olmo' ),
			'label_off' => esc_html__( 'Hide', 'olmo' ),
			'return_value' => 'yes',
			'default' => 'yes',
		]
	);
	
	$this->add_control(
		'rtl_option',
		[
			'label' => esc_html__( 'RTL', 'olmo' ),
			'type' => \Elementor\Controls_Manager::SWITCHER,
			'label_on' => esc_html__( 'Yes', 'olmo' ),
			'label_off' => esc_html__( 'No', 'olmo' ),
			'default' => 'no',
		]
	);

	$this->end_controls_section();
	  
	  // Style Section //
		
		$this->start_controls_section(
			'style_section',
			[
				'label' => esc_html__( 'Name', 'olmo' ),
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
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testi-name h5' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testi-name h5 .svg-inline--fa' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'icon_bg_color',
			[
				'label' => esc_html__( 'Icon BG Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testi-name h5 .svg-inline--fa' => 'background-color: {{VALUE}}',
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
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testi-item:hover .testi-name h5' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'icon_hover_color',
			[
				'label' => esc_html__( 'Icon Hover Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testi-item:hover .testi-name h5 .svg-inline--fa' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'icon_hover_bg_color',
			[
				'label' => esc_html__( 'Icon Hover BG Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testi-item:hover .testi-name h5 .svg-inline--fa' => 'background-color: {{VALUE}}',
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
				'selector' => '{{WRAPPER}} .testi-name h5',
			]
		);
		
		$this->add_control(
			'title_background',
			[
				'label' => esc_html__( 'Background Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testi-name' => 'background-color: {{VALUE}}',
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
					'{{WRAPPER}} .testi-name h5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
      $this->end_controls_section();
	  
	  $this->start_controls_section(
			'style_sub_section',
			[
				'label' => esc_html__( 'Designation', 'olmo' ),
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
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testi-name p' => 'color: {{VALUE}}',
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
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testi-item:hover .testi-name p' => 'color: {{VALUE}}',
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
				'selector' => '{{WRAPPER}} .testi-name p',
			]
		);

        $this->add_responsive_control(
			'sub_title_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .testi-item:hover .testi-name p' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
      $this->end_controls_section();
	  
	  $this->start_controls_section(
			'style_bg_section',
			[
				'label' => esc_html__( 'Description', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->start_controls_tabs(
			'bgtitle_tabs'
		);
		
		$this->start_controls_tab(
			'bgtitle_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'olmo' ),
			]
		);
		
		$this->add_control(
			'bgtitle_color',
			[
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testi-des p' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->start_controls_tab(
			'bgtitle_hover_tab',
			[
				'label' => esc_html__( 'Hover', 'olmo' ),
			]
		);
		
		$this->add_control(
			'bgtitle_color_hover',
			[
				'label' => esc_html__( 'Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testi-item:hover .testi-des p' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'bg_title_typography',
				'label' => esc_html__( 'Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .testi-des p',
			]
		);
		
		$this->add_control(
			'bg_border_color',
			[
				'label' => esc_html__( 'Border Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testi-des' => 'border-color: {{VALUE}}',
				],
			]
		);

        $this->add_responsive_control(
			'bg_title_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .testi-des' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
	  $this->end_controls_section();
	  
	  $this->start_controls_section(
			'style_control_section',
			[
				'label' => esc_html__( 'Controls', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->start_controls_tabs(
			'bgcontrol_tabs'
		);
		
		$this->start_controls_tab(
			'bgcontrol_normal_tab',
			[
				'label' => esc_html__( 'Normal', 'olmo' ),
			]
		);
		
		$this->add_control(
			'bgcontrol_color',
			[
				'label' => esc_html__( 'Dots Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonials-content.owl-carousel button.owl-dot' => 'background-color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->start_controls_tab(
			'bgcontrol_hover_tab',
			[
				'label' => esc_html__( 'Active', 'olmo' ),
			]
		);
		
		$this->add_control(
			'bgcontrol_color_hover',
			[
				'label' => esc_html__( 'Dots Active Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .testimonials-content.owl-carousel button.owl-dot.active' => 'background-color: {{VALUE}}',
				],
			]
		);
		
		$this->end_controls_tab();
		
		$this->end_controls_tabs();
       
	  $this->end_controls_section();
	  
	  // End Style Section //
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
		
        if ( $settings['list'] ):
			$show_dots = $settings['show_dots'];
			if($show_dots == 'yes'){
				$show_dots = 'true';
			} else {
				$show_dots = 'false';
			}
			
			$rtl_option = $settings['rtl_option'];
			if($rtl_option == 'yes'){
				$rtl_option = 'true';
			} else {
				$rtl_option = 'false';
			}		
		?>
			<?php
			if ( $settings['testi_style'] == 'style2'):
			foreach (  $settings['list'] as $item ): ?>
			<div class="review-3 wow fadeInUp">
				<!-- Testimonial Avatar -->
				
				<div class="review-3-avatar">
				<?php if($item['testmonials_image']['url'] != ''): ?>
					<img src="<?php echo esc_url($item['testmonials_image']['url']); ?>" alt="<?php echo esc_attr($item['author_name']); ?>" />
				<?php endif; ?>
				</div>
				<!-- Testimonial Text -->
				<div class="review-3-txt">
					<!-- Testimonial Author -->
					<div class="review-author">
						<?php if($item['testi_title'] != ''): ?>
							<h6 class="h6-lg"><?php echo esc_html($item['testi_title']); ?>
							<?php if($item['author_designation'] != ''): ?>
								<span class="text-secondary"><?php echo esc_html($item['author_designation']); ?></span>
							<?php endif; ?>
						</h6>
						<?php endif; ?>
					</div>
					<!-- Text -->
					<?php if($item['testmonials_description'] != ''): ?>						
						<p class="p-lg"><?php echo esc_html($item['testmonials_description']); ?></p>				
					<?php endif; ?>
				</div>
			</div>	<!-- END TESTIMONIAL #1 -->
			<?php endforeach; 
			else:
			?>
			<div class="reviews-section owl-theme testi-style2 owl-carousel-main owl-carousel" data-items-tablet="2" data-items="<?php echo esc_attr($settings['number_of_items']); ?>" data-nav="false" data-dots="<?php echo esc_attr($show_dots); ?>" data-margin="0" data-autoplay="true" data-animateout="fadeOut" data-rtl="<?php echo esc_attr($rtl_option); ?>">
				<?php foreach (  $settings['list'] as $item ): ?>				
					<!-- TESTIMONIAL #1 -->
					<div class="review-1">
						<!-- Quote Icon -->
						<div class="review-1-ico ico-25">
							<span><?php \Elementor\Icons_Manager::render_icon( $item['description_icon'], [ 'aria-hidden' => 'true' ] ); ?></span>
						</div>

						<!-- Text -->
						<div class="review-1-txt">
							<!-- Text -->
							<?php if($item['testmonials_description'] != ''): ?>						
								<p class="p-lg"><?php echo esc_html($item['testmonials_description']); ?></p>				
							<?php endif; ?>

							<!-- Testimonial Author -->
							<div class="author-data clearfix">

								<!-- Testimonial Avatar -->
								<div class="review-avatar">
									<?php if($item['testmonials_image']['url'] != ''): ?>
									<img src="<?php echo esc_url($item['testmonials_image']['url']); ?>" alt="<?php echo esc_attr($item['author_name']); ?>" />
									<?php endif; ?>
								</div>
											
								<!-- Testimonial Author -->
								<div class="review-author">
									<?php if($item['testi_title'] != ''): ?>
										<h6 class="h6-xl"><?php echo esc_html($item['testi_title']); ?></h6>
									<?php endif; ?>
									
									<?php if($item['author_designation'] != ''): ?>
											<p class="p-md"><?php echo esc_html($item['author_designation']); ?></p>
									<?php endif; ?>
									
									<!-- Rating -->
									
									<?php if($item['testi_rating'] != ''): ?>
										<div class="review-rating ico-15 yellow-color">
											<?php if($item['testi_rating'] != ''): ?>
												<span class="rating-testi">
													<?php if($item['testi_rating'] == '5'){
														?>
														<i class="cs-icon cs-star-1"></i>
														<i class="cs-icon cs-star-1"></i>
														<i class="cs-icon cs-star-1"></i>
														<i class="cs-icon cs-star-1"></i>
														<i class="cs-icon cs-star-1"></i>
														<?php
													} elseif($item['testi_rating'] == '4'){ ?>
														<i class="cs-icon cs-star-1"></i>
														<i class="cs-icon cs-star-1"></i>
														<i class="cs-icon cs-star-1"></i>
														<i class="cs-icon cs-star-1"></i>
														<i class="cs-icon cs-star"></i>
													<?php } elseif($item['testi_rating'] == '3'){ ?>	
														<i class="cs-icon cs-star-1"></i>
														<i class="cs-icon cs-star-1"></i>
														<i class="cs-icon cs-star-1"></i>
														<i class="cs-icon cs-star"></i>
														<i class="cs-icon cs-star"></i>
													<?php }elseif($item['testi_rating'] == '2'){ ?>
														<i class="cs-icon cs-star-1"></i>
														<i class="cs-icon cs-star-1"></i>
														<i class="cs-icon cs-star"></i>
														<i class="cs-icon cs-star"></i>
														<i class="cs-icon cs-star"></i>
													<?php }elseif($item['testi_rating'] == '1'){ ?>
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
												</span>
											<?php endif; ?>
										</div>
									<?php endif; ?>

								</div>	

							</div>	<!-- End Testimonial Author -->

						</div>	<!-- End Text -->

					</div>	<!-- END TESTIMONIAL #1 -->				
					
				<?php endforeach; ?> 
			</div>
			<?php endif; ?>
		<?php endif; ?>
        <?php
	}

    protected function content_template() {}
}