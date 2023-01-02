<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Olmo_Gallery extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-gallery';
    }

    public function get_title() {

        return esc_html__( 'Gallery', 'olmo'  );

    }

    public function get_icon() { 
        return 'eicon-gallery-justified';
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
			'gallery_style',
			[
				'label' => esc_html__( 'Style', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'gallery',
				'options' => [
					'gallery'  => esc_html__( 'Gallery', 'olmo' ),
					'slider' => esc_html__( 'Slider', 'olmo' ),
				],
			]
		);
		
		$this->add_control(
			'gallery',
			[
				'label' => esc_html__( 'Add Images', 'olmo' ),
				'type' => \Elementor\Controls_Manager::GALLERY,
				'default' => [],
			]
		);
		
		$this->add_control(
			'number_of_cloumn',
			[
				'label' => esc_html__( 'Number of Column', 'olmo' ),
				'type' => \Elementor\Controls_Manager::NUMBER,
				'min' => 1,
				'max' => 6,
				'step' => 1,
				'default' => 3,
			]
		);
		
		$this->add_control(
			'gutter_style',
			[
				'label' => esc_html__( 'Gutter', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SELECT,
				'default' => 'gutter',
				'condition' => ['gallery_style' => ['gallery']],
				'options' => [
					'gutter'  => esc_html__( 'Gutter', 'olmo' ),
					'no-gutters' => esc_html__( 'No Gutter', 'olmo' ),
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
					'{{WRAPPER}} .gallery-content' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
		$this->end_controls_section();
		
		// Style Section //		
		$this->start_controls_section(
			'gal_style_section',
			[
				'label' => esc_html__( 'Style', 'olmo' ),
				'tab' => \Elementor\Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'bg_color',
			[
				'label' => esc_html__( 'Background Color', 'olmo' ),
				'type' => \Elementor\Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .image-link' => 'background-color: {{VALUE}}',
				],
			]
		);
       
	  $this->end_controls_section();
	  // End Style Section //
    }

    protected function render() {
        $settings = $this->get_settings_for_display();
		$column = round(12/$settings['number_of_cloumn']);
        ?>
        <div class="gallery-content">
        	<?php if($settings['gallery_style'] == 'slider'): ?>
            	<div class="slider slider-nav slick-slider" data-column="<?php echo esc_attr($settings['number_of_cloumn']); ?>">
            	<?php
					foreach ( $settings['gallery'] as $image ) {
						$img_src = olmo_image_resize($image['url'] , 520, 440);
						?>
						<div class="slick-slide-div"><img src="<?php echo esc_url($img_src); ?>" alt="<?php echo esc_attr__('gallery image', 'olmo'); ?>"></div>
						<?php
					}
				?>
                </div>
            <?php else: ?>
            <div class="row <?php echo esc_attr($settings['gutter_style']); ?>">
            <?php
                foreach ( $settings['gallery'] as $image ) {
					$img_src = olmo_image_resize($image['url'] , 370, 260);
                    ?>
                    <div class="col-md-<?php echo esc_attr($column); ?>">
                        <div class="single-img-gal">
                        <img src="<?php echo esc_url($img_src); ?>" alt="<?php echo esc_attr__('gallery image', 'olmo'); ?>">
                        <a href="<?php echo esc_url($image['url']); ?>" class="image-link"><i class="fal fa-expand"></i></a>
                        </div>
                    </div>
                    <?php
                }
            ?>
            </div>
            <?php endif; ?>     
        </div>

        <?php
	}

    protected function content_template() {}
}