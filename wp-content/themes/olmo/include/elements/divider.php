<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Olmo_Divider extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-divider';
    }

    public function get_title() {

        return esc_html__( 'Olmo Divider', 'olmo'  );

    }

    public function get_icon() { 
        return 'eicon-divider';
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
		
		$this->add_responsive_control(
			'height',
			[
				'label' => esc_html__( 'Height', 'olmo' ),
				'type' => Controls_Manager::SLIDER,
				'default' => [
					'unit' => 'px',
                    'size' => 1
				],
				'tablet_default' => [
					'unit' => 'px',
				],
				'mobile_default' => [
					'unit' => 'px',
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
					'{{WRAPPER}} .divider' => 'padding-bottom: {{SIZE}}{{UNIT}};',
				],
			]
		);

        $this->add_responsive_control(
			'divider_margin',
			[
				'label' =>esc_html__( 'Margin', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .divider' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
       
        $this->end_controls_section();
    }

    protected function render() {
        $settings = $this->get_settings_for_display(); ?>
        <hr class="divider">
		<?php
	}
    protected function content_template() {}
}