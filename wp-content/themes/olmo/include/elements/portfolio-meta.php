<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Olmo_Portfolio_Meta extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-portfolio-meta';
    }

    public function get_title() {

        return esc_html__( 'Portfolio Meta', 'olmo'  );

    }

    public function get_icon() { 
        return 'fas fa-user-tie';
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
			'meta_title',
			[
				'label' => esc_html__( 'Title', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Project Info', 'olmo' ),
				'placeholder' => esc_html__( 'Type your title here', 'olmo' ),
			]
		);
		
		$this->add_control(
			'show_name',
			[
				'label' => esc_html__( 'Show Name', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'olmo' ),
				'label_off' => esc_html__( 'Hide', 'olmo' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'show_date',
			[
				'label' => esc_html__( 'Show Date', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'olmo' ),
				'label_off' => esc_html__( 'Hide', 'olmo' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'show_category',
			[
				'label' => esc_html__( 'Show Category', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'olmo' ),
				'label_off' => esc_html__( 'Hide', 'olmo' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'show_location',
			[
				'label' => esc_html__( 'Show Location', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'olmo' ),
				'label_off' => esc_html__( 'Hide', 'olmo' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'show_website',
			[
				'label' => esc_html__( 'Show Website', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'olmo' ),
				'label_off' => esc_html__( 'Hide', 'olmo' ),
				'return_value' => 'yes',
				'default' => 'yes',
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
					'{{WRAPPER}} .cat-list-column h5' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name' => 'title_typography',
				'label' => esc_html__( 'Typography', 'olmo' ),
				'selector' => '{{WRAPPER}} .cat-list-column h5',
			]
		);
		
		$this->add_control(
			'title_color_hover',
			[
				'label' => esc_html__( 'Title Color Hover', 'olmo' ),
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
        $settings = $this->get_settings_for_display(); ?>
        
		<div class="project-title">
			
			<?php if($settings['meta_title'] != ''): ?>
				<h2 class="h2-xl"><?php echo esc_html($settings['meta_title']); ?></h2>
			<?php endif; ?>

			<p class="p-xl project-data">

				<?php if($settings['show_name'] == 'yes' && get_post_meta(get_the_ID(), 'port_author', true)){ ?>
					<span><?php echo get_post_meta(get_the_ID(), 'port_author', true); ?></span>
				<?php } ?>

				<?php if($settings['show_date'] == 'yes' && get_post_meta(get_the_ID(), 'port_date', true)){ ?>
					<span><?php echo get_post_meta(get_the_ID(), 'port_date', true); ?></span>
				<?php } ?>

				<?php $terms = get_the_terms( get_the_ID(), 'portfolio_category' );
				if ( ! empty( $terms ) && ! is_wp_error( $terms ) ): ?>
					<span>
						<?php foreach ( $terms as $term ): ?>
							<a href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo esc_html($term->name); ?></a>
						<?php endforeach; ?>
					</span>
				<?php endif; ?>

				<?php if($settings['show_location'] == 'yes' && get_post_meta(get_the_ID(), 'port_location', true)){ ?>
					<span><?php echo get_post_meta(get_the_ID(), 'port_location', true); ?></span>
				<?php } ?>

				<?php if($settings['show_website'] == 'yes' && get_post_meta(get_the_ID(), 'port_link', true)){ ?>
					<span><a href="<?php echo esc_url(get_post_meta(get_the_ID(), 'port_link', true)); ?>" class="pink-color"><?php echo get_post_meta(get_the_ID(), 'port_link', true); ?></a></span>
				<?php } ?>
			</p>
        </div>
    	<?php
    }
    protected function content_template() {}
}