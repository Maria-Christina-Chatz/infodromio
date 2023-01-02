<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Olmo_Teams extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-teams';
    }

    public function get_title() {

        return esc_html__( 'Teams', 'olmo'  );

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
			'number_of_posts',
			[
				'label' => esc_html__( 'Number of Teams', 'olmo' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 48,
				'step' => 1,
				'default' => 4,
			]
		); 

		$this->add_control(
			'column_number',
			[
				'label' => esc_html__( 'Number of Column', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '4',
				'options' => [
					'1'  => esc_html__( 'Column 1', 'olmo' ),
					'2' => esc_html__( 'Column 2', 'olmo' ),
					'3' => esc_html__( 'Column 3', 'olmo' ),
					'4' => esc_html__( 'Column 4', 'olmo' ),
					'6' => esc_html__( 'Column 6', 'olmo' ),
				],
			]
		);
		
		$this->add_control(
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
		
		$this->add_control(
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
					'menu_order' => esc_html__( 'Menu Order', 'olmo' ),					
					'author' => esc_html__( 'Author', 'olmo' ),
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
               'default'         => 'center',
               'selectors' => [
                   '{{WRAPPER}} .team-content' => 'text-align: {{VALUE}};'
               ],
            ]
        );
		
		$this->end_controls_section();

		// posts Style Section //
		
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
					'{{WRAPPER}} .cbp-l-caption-title a' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => esc_html__( 'Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .cbp-l-caption-title a',
			]
		);
		
		$this->add_control(
			'title_color_hover',
			[
				'label' => esc_html__( 'Title Color Hover', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cbp-l-caption-title:hover a' => 'color: {{VALUE}}',
				],
			]
		);
       
	  $this->end_controls_section();
		
    }

    protected function render( ) { 
        $settings = $this->get_settings_for_display();
		
		if ( class_exists( 'Ts_Shortcodes' ) ){
		$args = array(
		'post_type' => 'team',
		'posts_per_page' => $settings['number_of_posts'],
		'order'          => $settings['order'],
		'orderby'        => $settings['orderby'],
		);

		$column = round(12/$settings['column_number']);		
		$query = get_posts( $args );
		?>
		<?php if ($query): ?>
			<?php if($settings['posts_style'] == 'style2'){ ?>
				<div class="team-archive-content text-center">
					<div class="row">
					<?php foreach ( $query as $post ): ?>
						<div class="col-md-6 col-lg-<?php echo esc_attr($column); ?>">
							<div class="team-content teams-style1">
								<?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
								<div class="team-name">
									<h5><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php echo get_the_title($post->ID); ?></a></h5>
												
									<?php
									$team_designation = get_post_meta( $post->ID, 'team_designation', true );
									if($team_designation != ''): ?>
										<p><?php echo esc_html($team_designation); ?></p>
									<?php endif; ?>

									<?php
									$social_array = get_post_meta( $post->ID, 'team_social_icons', true );
									if( !empty($social_array) ): ?>
									<ul class="team-social-icons">           
										<?php			
										foreach ($social_array as $key => $value):
											?>
											<li><a title="<?php echo esc_attr($value['title']); ?>" class="text-center" href="<?php echo esc_url($value['link']); ?>" target="_blank"><i class="fab <?php echo esc_attr($value['social_class']); ?>"></i></a></li>                                
										<?php endforeach; ?>
									</ul>
									<?php endif; ?>				
								</div> 
							</div>
						</div>
						<?php endforeach; ?>
					</div>
				</div>
			<?php }else{ ?>
				<div class="row team-main-content">
					<?php foreach ( $query as $post ): ?>
						<div class="col-md-6 col-lg-<?php echo esc_attr($column); ?>">
							<div class="team-content teams-style2">
								<?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
								<div class="team-name">
									<h5><a href="<?php echo esc_url(get_permalink($post->ID)); ?>"><?php echo get_the_title($post->ID); ?></a></h5>
												
									<?php
									$team_designation = get_post_meta( $post->ID, 'team_designation', true );
									if($team_designation != ''): ?>
										<p><?php echo esc_html($team_designation); ?></p>
									<?php endif; ?>

									<?php
									$social_array = get_post_meta( $post->ID, 'team_social_icons', true );
									if( !empty($social_array) ): ?>
									<ul class="team-social-icons">           
										<?php			
										foreach ($social_array as $key => $value):
											?>
											<li><a title="<?php echo esc_attr($value['title']); ?>" class="text-center" href="<?php echo esc_url($value['link']); ?>" target="_blank"><i class="fab <?php echo esc_attr($value['social_class']); ?>"></i></a></li>                                
										<?php endforeach; ?>
									</ul>
									<?php endif; ?>				
								</div> 
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			<?php } ?>
		<?php endif; ?>
    	<?php
		}
    }
    protected function content_template() {}
}