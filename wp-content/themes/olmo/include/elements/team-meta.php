<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

class Olmo_Team_Meta extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-team-meta';
    }

    public function get_title() {

        return esc_html__( 'Team Meta', 'olmo'  );

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
			'team_title',
			[
				'label' => esc_html__( 'Title', 'olmo' ),
				'type' => \Elementor\Controls_Manager::TEXT,
				'default' => esc_html__( 'Professional Cleaner', 'olmo' ),
				'placeholder' => esc_html__( 'Type your title here', 'olmo' ),
			]
        );
		
		$this->add_control(
			'show_designation',
			[
				'label' => esc_html__( 'Show Designation', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'olmo' ),
				'label_off' => esc_html__( 'Hide', 'olmo' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);

		$this->add_control(
			'show_description',
			[
				'label' => esc_html__( 'Show Description', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'olmo' ),
				'label_off' => esc_html__( 'Hide', 'olmo' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'show_social',
			[
				'label' => esc_html__( 'Show Social Icons', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'olmo' ),
				'label_off' => esc_html__( 'Hide', 'olmo' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'show_phone',
			[
				'label' => esc_html__( 'Show Phone', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'olmo' ),
				'label_off' => esc_html__( 'Hide', 'olmo' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'show_address',
			[
				'label' => esc_html__( 'Show Address', 'olmo' ),
				'type' => \Elementor\Controls_Manager::SWITCHER,
				'label_on' => esc_html__( 'Show', 'olmo' ),
				'label_off' => esc_html__( 'Hide', 'olmo' ),
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'show_email',
			[
				'label' => esc_html__( 'Show Email', 'olmo' ),
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
        $settings = $this->get_settings_for_display();
		?>
        
		<div class="team-meta-content">
			<?php if($settings['team_title'] != ''){ ?>
				<h2><?php echo esc_html($settings['team_title']); ?></h2>
			<?php } ?>
			<?php if($settings['show_designation'] == 'yes' && get_post_meta(get_the_ID(), 'team_designation', true)){ ?>
				<h5><?php echo get_post_meta(get_the_ID(), 'team_designation', true); ?></h5>
			<?php } ?>

			<?php if($settings['show_description'] == 'yes'){ ?>
				<p><?php the_excerpt(); ?></p>
			<?php } ?>

			<?php
			$social_array = get_post_meta(get_the_ID(), 'team_social_icons', true);
			if($settings['show_social'] == 'yes' && !empty($social_array)){ ?>
			<div class="team-social">
				<?php foreach ($social_array as $key => $value) { ?>
					<a href="<?php echo esc_url($value['link']); ?>" title="<?php echo esc_attr($value['title']); ?>" data-toggle="tooltip" data-placement="bottom" data-animation="false">
						<i class="fab <?php echo esc_attr($value['social_class']); ?>"></i>
					</a>
				<?php } ?>			
			</div>
			<?php } ?>

			<ul class="address-phone-list">
				<?php if($settings['show_phone'] == 'yes' && get_post_meta(get_the_ID(), 'team_phone', true)){ ?>
					<li><span><?php echo esc_html__('Phone: ', 'olmo'); ?></span><a href="tel:<?php echo esc_attr(get_post_meta(get_the_ID(), 'team_phone', true)); ?>"><?php echo get_post_meta(get_the_ID(), 'team_phone', true); ?></a></li>
				<?php } ?>
				<?php if($settings['show_address'] == 'yes' && get_post_meta(get_the_ID(), 'team_address', true)){ ?>
					<li><span><?php echo esc_html__('Address: ', 'olmo'); ?></span><?php echo get_post_meta(get_the_ID(), 'team_address', true); ?></li>
				<?php } ?>
				<?php if($settings['show_email'] == 'yes' && get_post_meta(get_the_ID(), 'team_email', true)){ ?>
					<li><span><?php echo esc_html__('Email: ', 'olmo'); ?></span><a href="mailto:<?php echo esc_attr(get_post_meta(get_the_ID(), 'team_email', true)); ?>"><?php echo get_post_meta(get_the_ID(), 'team_email', true); ?></a></li>
				<?php } ?>
			</ul>
        </div>
    	<?php
    }
    protected function content_template() {}
}