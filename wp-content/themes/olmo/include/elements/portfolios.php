<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Olmo_Portfolios extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-portfolios';
    }

    public function get_title() {

        return esc_html__( 'Portfolios', 'olmo'  );

    }

    public function get_icon() { 
        return 'eicon-gallery-grid';
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
			'number_of_posts',
			[
				'label' => esc_html__( 'Number of Portfolios', 'olmo' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 48,
				'step' => 1,
				'default' => 6,
			]
		);
		
		$this->add_control(
			'cateogries',
			[
				'label' => esc_html__( 'Select Categories', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SELECT2,
				'multiple' => true,
				'options' => $this->get_portfolios_categories(),
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
					'comment_count'  => esc_html__( 'Comment Count', 'olmo' ),
					'menu_order' => esc_html__( 'Menu Order', 'olmo' ),					
					'author' => esc_html__( 'Author', 'olmo' ),
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
					'{{WRAPPER}} .masonry-image .h5-lg a' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => esc_html__( 'Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .masonry-image .h5-lg a',
			]
		);
		
		$this->add_control(
			'title_color_hover',
			[
				'label' => esc_html__( 'Title Color Hover', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .masonry-image:hover .h5-lg a' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'cat_color',
			[
				'label' => esc_html__( 'Category Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .masonry-image .p-md.grey-color' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'cat_typography',
				'label' => esc_html__( 'Category Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .masonry-image .p-md.grey-color',
			]
		);
       
	  $this->end_controls_section();
		
    }

    protected function render( ) { 
        $settings = $this->get_settings_for_display();
		
		if ( class_exists( 'Ts_Shortcodes' ) ){
			$args = array(
			'post_type' => 'portfolio',
			'posts_per_page' => $settings['number_of_posts'],
			'order'          => $settings['order'],
			'orderby'        => $settings['orderby'],
			);
			
			if(!empty($settings['cateogries'])){
				
				$args['tax_query'] = array(
				array(
					'taxonomy' => 'portfolio_category',
					'terms'    => $settings['cateogries'],
					'field' => 'id',
					),
				);		
			}
			
			$query = get_posts( $args ); ?>
			
			<div class="portfolios-content row">			
				<?php if ($query): ?>
					<div class="col gallery-items-list">
						<div class="masonry-wrap grid-loaded">
							<?php foreach ( $query as $post ): ?>
								<?php
								$categories2 = '';
								$portfolio_category = get_the_terms( $post->ID, 'portfolio_category' );
								if ( $portfolio_category && ! is_wp_error( $portfolio_category ) ) : 
									$category_class2 = array();
									foreach ( $portfolio_category as $term1 ) {
									$category_class2[] = $term1->name;
									}							
								$categories2 = join( ", ", $category_class2 );	
								endif; ?>
								<div class="project-details masonry-image">

									<!-- Image -->
									<div class="project-preview rel">
										<div class="hover-overlay">
											<?php echo get_the_post_thumbnail( $post->ID, 'olmo-medium' ); ?> 
											<div class="item-overlay"></div>
										</div>
									</div>

									<!-- Text -->		
									<div class="project-txt">
										<!-- Link -->	
										<h5 class="h5-lg">
											<a href="<?php esc_url(the_permalink($post->ID)); ?>"><?php echo get_the_title($post->ID); ?></a>
										</h5>
										<!-- Text -->	
										<p class="p-md grey-color"><?php echo esc_html($categories2); ?></p>
									</div>
								</div>	<!-- END PROJECT #1 -->
							<?php endforeach; ?>
						</div>
					</div>
				<?php endif; ?>     
			</div>
			<?php
		}
    }
    protected function content_template() {}
	
	public function get_portfolios_categories(){
		$category = [];
		if ( class_exists( 'Ts_Shortcodes' ) ){
		$args = array( 'hide_empty=0' );
		$terms = get_terms( 'portfolio_category', $args );		
		if(!empty($terms)){
			foreach ( $terms as $term ) {
				$category[$term->term_id] = [$term->name];
			}
		}
		}
		return $category;
	}
}