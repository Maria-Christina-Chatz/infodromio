<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Olmo_Team extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-team';
    }

    public function get_title() {

        return esc_html__( 'Team', 'olmo'  );

    }

    public function get_icon() { 
        return 'eicon-image-rollover';
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
			'team_image',
			[
				'label' => esc_html__( 'Image', 'olmo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
			]
        );
        
        $this->add_control(
			'author_name',
			[
				'label' => esc_html__( 'Name', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Mary Ann Ford', 'olmo' ),
				'placeholder' => esc_html__( 'Type your title here', 'olmo' ),
			]
        );
		
		$this->add_control(
			'team_designation',
			[
				'label' => esc_html__( 'Designation', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Founder', 'olmo' ),
				'placeholder' => esc_html__( 'Type your designation', 'olmo' ),
			]
        );
		
		$this->add_control(
			'team_email',
			[
				'label' => esc_html__( 'Email', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Founder', 'olmo' ),
				'placeholder' => esc_html__( 'Type your designation', 'olmo' ),
			]
        );
		
		$repeater = new \Elementor\Repeater();
        
        $repeater->add_control(
			'social_name',
			[
				'label' => esc_html__( 'Social Name', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Facebook', 'olmo' ),
				'placeholder' => esc_html__( 'Type your title here', 'olmo' ),
			]
        );

        $repeater->add_control(
			'social_icon',
			[
				'label' => esc_html__( 'Social Icon', 'olmo' ),
				'type' => \Elementor\Controls_Manager::ICONS,
				'default' => [
					'value' => 'fab fa-facebook',
					'library' => 'solid',
				],
			]
		);
		
		$repeater->add_control(
			'social_link',
			[
				'label' => esc_html__( 'Link', 'olmo' ),
				'type' => \Elementor\Controls_Manager::URL,
				'placeholder' => esc_html__( 'https://', 'olmo' ),
				'show_external' => true,
				'default' => [
					'url' => '',
					'is_external' => true,
					'nofollow' => true,
				],
			]
		);
		
		$this->add_control(
			'list',
			[
				'label' => esc_html__( 'Social List', 'olmo' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'social_name' => esc_html__( 'Facebook', 'olmo' ),
						'social_link' => esc_html__( '#', 'olmo' ),
						'social_icon' => esc_html__( 'Social Icon', 'olmo' ),
					],
				],
				'title_field' => '{{{ social_name }}}',
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
                   '{{WRAPPER}} .team-content' => 'text-align: {{VALUE}};'
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
					'{{WRAPPER}} .team-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
        $this->end_controls_section();
		
		
		// posts Style Section //
		
		$this->start_controls_section(
			'team_image_section',
			[
				'label' => esc_html__( 'Image', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_responsive_control(
			'team_image_sectio_Boder_radius',
			[
				'label' =>esc_html__( 'Border Radius', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .team-content img' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
		$this->end_controls_section();
		
		$this->start_controls_section(
			'posts_style_section',
			[
				'label' => esc_html__( 'Title', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'posts_color',
			[
				'label' => esc_html__( 'Title Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .team-content .h5-sm' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => esc_html__( 'Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .team-content .h5-sm',
			]
		);
		
		$this->add_control(
			'title_color_hover',
			[
				'label' => esc_html__( 'Title Color Hover', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .team-content .h5-sm' => 'color: {{VALUE}}',
				],
			]
		);
       
	  $this->end_controls_section();
	  
	  $this->start_controls_section(
			'team_designation_style_section',
			[
				'label' => esc_html__( 'Designation', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'team_designation_color',
			[
				'label' => esc_html__( 'Designation Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .team-content .p-lg' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'designation_typography',
				'label' => esc_html__( 'Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .team-content .p-lg',
			]
		);
       
	  $this->end_controls_section();
	  
	  $this->start_controls_section(
			'team_email_style_section',
			[
				'label' => esc_html__( 'Email', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'team_email_color',
			[
				'label' => esc_html__( 'Email Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .team-content .p-lg a' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'email_typography',
				'label' => esc_html__( 'Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .team-content .p-lg a',
			]
		);
       
	  $this->end_controls_section();
	  
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
		?>
        <div class="team-content">
		
			<!-- TEAM MEMBER #1 -->
				<div class="team-member">
											
					<!-- Team Member Photo -->
					<div class="team-member-photo">
						<?php if($settings['team_image']['url'] != ''): ?>
							<img src="<?php echo esc_url($settings['team_image']['url']); ?>" alt="<?php echo esc_attr($settings['author_name']); ?>" />
						<?php endif; ?>

						<?php if ( $settings['list'] ): ?>
							<div class="team-member-photo-overlay">
								<ul class="team-social-icons">           
									<?php			
									foreach (  $settings['list'] as $item ):
										$target = $item['social_link']['is_external'] ? ' target="_blank"' : '';
										$nofollow = $item['social_link']['nofollow'] ? ' rel="nofollow"' : ''; ?>
										<?php if($item['social_name'] != ''): ?>
										<li><a title="<?php echo esc_attr($item['social_name']); ?>" class="text-center" href="<?php echo esc_url($item['social_link']['url']); ?>" <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?>><?php \Elementor\Icons_Manager::render_icon( $item['social_icon'], [ 'aria-hidden' => 'true' ] ); ?></a></li>                
										<?php endif; ?>                
									<?php endforeach; ?>
								</ul>
							</div>
						<?php endif; ?>

					</div>
																																	
					<!-- Team Member Data -->		
					<div class="team-member-data">	
							<?php if($settings['author_name'] != ''): ?>
								<h5 class="h5-sm"><?php echo esc_html($settings['author_name']); ?></h5>
							<?php endif; ?>
							
							<?php if($settings['team_designation'] != ''): ?>
								<p class="p-lg"><?php echo esc_html($settings['team_designation']); ?></p>
							<?php endif; ?>
							
							<?php if($settings['team_email'] != ''): ?>
								<p class="p-lg tm-social">
									<a href="mailto:<?php echo esc_attr($settings['team_email']); ?>">
										<?php echo esc_html($settings['team_email']); ?>								
									</a>
								</p>
							<?php endif; ?>
					</div>	
				
				</div><!-- END TEAM MEMBER #1 -->
        </div>
		<?php
	}

    protected function content_template() {}
}