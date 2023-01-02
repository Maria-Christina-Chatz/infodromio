<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Olmo_Partner extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-partner';
    }

    public function get_title() {

        return esc_html__( 'Partner', 'olmo'  );

    }

    public function get_icon() { 
        return 'eicon-image';
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
		
		$repeater = new \Elementor\Repeater();
	
		$repeater->add_control(
			'title',
			[
				'label' => esc_html__( 'Title', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Partner 1', 'olmo' ),
				'placeholder' => esc_html__( 'Type your partner title here', 'olmo' ),
				'label_block' => true,
			]
        );

        $repeater->add_control(
			'partner_image',
			[
				'label' => esc_html__( 'Choose Image', 'olmo' ),
				'type' => \Elementor\Controls_Manager::MEDIA,
				'default' => [
					'url' => \Elementor\Utils::get_placeholder_image_src(),
				],
				'label_block' => true,
			]
		);
		
		$repeater->add_control(
			'partner_link',
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
				'label' => esc_html__( 'Partner List', 'olmo' ),
				'type' => \Elementor\Controls_Manager::REPEATER,
				'fields' => $repeater->get_controls(),
				'default' => [
					[
						'title' => esc_html__( 'Title #1', 'olmo' ),
						'partner_image' => esc_html__( 'Item Image', 'olmo' ),
						'partner_link' => esc_html__( 'Item Link', 'olmo' ),
					],
				],
				'title_field' => '{{{ title }}}',
			]
		);

		$this->add_control(
			'list_color',
			[
				'label' => esc_html__( 'Border Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .partner-content a' => 'color: {{VALUE}}'
				],
			]
		);
		
		$this->add_responsive_control(
			'partner_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .partner-content a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
       
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
		
		if ( $settings['list'] ): ?>
		<div class="owl-carousel-main owl-carousel" data-items-tablet="3" data-items="5" data-nav="false" data-dots="false" data-margin="30" data-autoplay="true">				           
			<?php
			foreach (  $settings['list'] as $item ):
				$target = $item['partner_link']['is_external'] ? ' target="_blank"' : '';
				$nofollow = $item['partner_link']['nofollow'] ? ' rel="nofollow"' : '';
				?>
				<div class="brand-logo">
					<a class="text-center" href="<?php echo esc_url($item['partner_link']['url']); ?>" <?php echo esc_attr($target); ?> <?php echo esc_attr($nofollow); ?>>
						<img src="<?php echo esc_url($item['partner_image']['url']); ?>" alt="<?php echo esc_attr($item['title']); ?>" />
					</a>
				</div>
			<?php endforeach; ?>  
		</div>
        <?php endif; 
	}

    protected function content_template() {}
}