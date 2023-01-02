<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Olmo_Services extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-services';
    }

    public function get_title() {

        return esc_html__( 'Services', 'olmo'  );

    }

    public function get_icon() { 
        return 'fas fa-th-large';
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
				'label' => esc_html__( 'Number of Services', 'olmo' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 48,
				'step' => 1,
				'default' => 3,
			]
		); 

		$this->add_control(
			'column_number',
			[
				'label' => esc_html__( 'Number of Column', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => '3',
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
			'cateogries',
			[
				'label' => esc_html__( 'Select Categories', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'options' => $this->get_services_categories(),
				'label_block' => true,
				'multiple'		=> true,
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
               'default'         => '',
               'selectors' => [
                   '{{WRAPPER}} .service-single-content' => 'text-align: {{VALUE}};'
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
		'post_type' => 'service',
		'posts_per_page' => $settings['number_of_posts'],
		'order'          => $settings['order'],
		'orderby'        => $settings['orderby'],
		);

		if(!empty($settings['cateogries'])){
			
			$args['tax_query'] = array(
            array(
				'taxonomy' => 'service_category',
				'terms'    => $settings['cateogries'],
				'field' => 'id',
				),
		    );		
		}

		$column = round(12/$settings['column_number']);
		
		$query = get_posts( $args );
		?>
		<?php if ($query): ?>
			<?php if($settings['posts_style'] == 'style1'):?>
			<div class="services-main-content service-<?php echo esc_attr($settings['posts_style']); ?>">
				<div class="row d-flex justify-content-center">
					<?php foreach ( $query as $post ): ?>
						<div class="col-md-6 col-lg-<?php echo esc_attr($column); ?>">
							<div class="service-single-content">
								<div class="service-des">
									<div class="service-img-style1">
										<?php echo get_the_post_thumbnail($post->ID, 'full'); ?>
										<?php $service_meta_image = get_post_meta( $post->ID, 'service_meta_image', true ); ?>
										<?php if($service_meta_image != ''): ?>
											<div class="icon-container-bg">
												<span><img src="<?php echo esc_url($service_meta_image); ?>" alt="<?php echo esc_attr('Icon Image', 'olmo'); ?>" /></span>
											</div>
										<?php endif; ?>
									</div>
									<div class="service-des-box">
										<h5><a href="<?php esc_url(the_permalink($post->ID)); ?>"><?php echo get_the_title($post->ID); ?></a></h5>

										<p><?php echo wp_trim_words(get_the_excerpt($post->ID), 13, ''); ?></p>

										<?php
										$feature_info = get_post_meta( $post->ID, 'feature_info', true );
										if( !empty($feature_info) ): ?>
											<ul class="services-lists">           
												<?php foreach ($feature_info as $key => $value):?>
													<li><i class="<?php echo esc_attr($value['select_icon']); ?>"></i><?php echo esc_html($value['title']); ?></li>                                
												<?php endforeach; ?>
											</ul>
										<?php endif; ?>
										<a class="learnmore-service" href="<?php esc_url(the_permalink($post->ID)); ?>"><?php echo esc_html__('Learn More', 'olmo'); ?></a>

										<span class="service-icon"></span>
										<span class="service-icon-right"></span>
										
									</div>			
								</div>
								 
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
			<?php else: ?>
				<a class="all-items-link" href="<?php echo esc_url(get_post_type_archive_link('service')); ?>"><?php echo esc_html__('View All Services', 'olmo'); ?></a>
				<div class="owl-carousel-main owl-carousel services-main-content service-<?php echo esc_attr($settings['posts_style']); ?>" data-items-tablet="2" data-items="<?php echo esc_attr($settings['column_number']); ?>" data-nav="true" data-dots="false" data-margin="30" data-autoplay="true">					
					<?php foreach ( $query as $post ): ?>
						<div class="item">
							<div class="service-single-content">
								<div class="service-single-img">
									<?php echo get_the_post_thumbnail($post->ID, 'full'); ?>					
								</div>
								
								<div class="service-des-style2">							
									<h5><a href="<?php esc_url(the_permalink($post->ID)); ?>"><?php echo get_the_title($post->ID); ?></a></h5>
									<p><?php echo wp_trim_words( get_the_excerpt($post->ID), 11, '' ); ?></p>	
									<a class="read-more-service" href="<?php esc_url(the_permalink($post->ID)); ?>"><i class="fal fa-long-arrow-right"></i></a>
									<span class="service-icon"></span>
									<span class="service-icon-right"></span>
								</div>
							</div>
						</div>
					<?php endforeach; ?>

				</div>
			<?php endif; ?>
		<?php endif; ?>
    	<?php
		}
    }
    protected function content_template() {}
	
	public function get_services_categories(){
		$category = [];
		if ( class_exists( 'Ts_Shortcodes' ) ){
		$args = array( 'hide_empty=0' );
		$terms = get_terms( 'service_category', $args );		
		if(!empty($terms)){
			foreach ( $terms as $term ) {
				$category[$term->term_id] = [$term->name];
			}
		}
		}
		return $category;
	}
}