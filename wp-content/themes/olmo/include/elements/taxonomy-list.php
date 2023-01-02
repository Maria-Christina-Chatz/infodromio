<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Olmo_Taxonomy_List extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-taxonomy-list';
    }

    public function get_title() {

        return esc_html__( 'Category List', 'olmo'  );

    }

    public function get_icon() { 
        return 'fas fa-list';
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
			'category_title',
			[
				'label' => esc_html__( 'Title', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Our Services', 'olmo' ),
				'placeholder' => esc_html__( 'Type your title here', 'olmo' ),
			]
		);
		
		$this->add_control(
			'cat_style',
			[
				'label' => esc_html__( 'Category', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'service_category',
				'options' => [
					'service_category'  => esc_html__( 'Service Category', 'olmo' ),
					'portfolio_category' => esc_html__( 'Portfolio Category', 'olmo' ),
					'category' => esc_html__( 'Blog Category', 'olmo' ),
				],
			]
		);
	
		$this->add_control(
			'number_of_category',
			[
				'label' => esc_html__( 'Number of Categories', 'olmo' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 100,
				'step' => 1,
				'default' => 6,
			]
		);
		
		$this->end_controls_section();

		// Category Style Section //
		
		$this->start_controls_section(
			'category_style_section',
			[
				'label' => esc_html__( 'Category', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'category_color',
			[
				'label' => esc_html__( 'Category Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cat-list-column h5' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'category_typography',
				'label' => esc_html__( 'Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .cat-list-column h5',
			]
		);
		
		$this->add_control(
			'category_color_hover',
			[
				'label' => esc_html__( 'Category Color Hover', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cat-list-column h5:hover' => 'color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'border_color',
			[
				'label' => esc_html__( 'Border Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cat-list-column' => 'border-color: {{VALUE}}',
				],
			]
		);

		$this->add_control(
			'border_color_hover',
			[
				'label' => esc_html__( 'Border Color Hover', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .cat-list-column:hover' => 'border-color: {{VALUE}}',
				],
			]
		);
       
	  $this->end_controls_section();
		
    }

    protected function render( ) { 
		$settings = $this->get_settings_for_display();		
		$args = array(
			'taxonomy' 		=> $settings['cat_style'],
			'hide_empty' 	=> true,
			'number'		=> $settings['number_of_category'],			
		);
 
		$terms = get_terms( $args );
		?>
        
		<div class="cat-lists">
			<?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ): ?>
				<?php if($settings['category_title'] != ''): ?>
				<h3 class="widget-title"><span><?php echo esc_html($settings['category_title']); ?></span></h3>
				<?php endif; ?>
				<ul class="category-list">
					<?php foreach ( $terms as $term ): ?>
						<li>
							<a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html($term->name); ?><i class="fas fa-arrow-right"></i></a>
						</li>
					<?php endforeach; ?>
				</ul>
			<?php endif; ?>     
		</div>
    	<?php  
    }
    protected function content_template() {}	
}