<?php

namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}


class Olmo_Main_Logo_Widget extends Widget_Base {


  public $base;

    public function get_name() {
        return 'olmo-logo';
    }

    public function get_title() {

        return esc_html__( 'Main Logo', 'olmo'  );

    }

    public function get_icon() { 
        return 'eicon-site-logo';
    }

    public function get_categories() {
        return [ 'olmo-all-elements' ];
    }

    protected function register_controls() {

      $this->start_controls_section(
         'section_tab',
         [
               'label' => esc_html__('Logo settings', 'olmo' ),
         ]
      );

	    $this->add_control(
            'site_logo',
            [
                'label' => esc_html__('Logo', 'olmo' ),
                'type' => Controls_Manager::MEDIA,
              
            ]
        );
    
        $this->add_responsive_control(
            'logo_size_width',
            [
                'label' => esc_html__('Logo Width', 'olmo' ),
                'type' => Controls_Manager::NUMBER,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .olmo-widget-logo img' => 'max-width: {{VALUE}}px;',
                ],
            ]
        );
        $this->add_responsive_control(
            'logo_size_height',
            [
                'label' => esc_html__('Logo Height', 'olmo' ),
                'type' => Controls_Manager::NUMBER,
                'default' => '',
                'selectors' => [
                    '{{WRAPPER}} .olmo-widget-logo img' => 'max-height: {{VALUE}}px;',
                    '{{WRAPPER}} .olmo-widget-logo a' => 'line-height: {{VALUE}}px;',
                ],
            ]
        );
        $this->add_responsive_control(
            'date_text_align', [
                'label'          => esc_html__( 'Alignment', 'olmo'  ),
                'type'           => Controls_Manager::CHOOSE,
                'options'        => [
    
                    'left'         => [
                        'title'    => esc_html__( 'Left', 'olmo'  ),
                        'icon'     => 'fa fa-align-left',
                    ],
                    'center'     => [
                        'title'    => esc_html__( 'Center', 'olmo'  ),
                        'icon'     => 'fa fa-align-center',
                    ],
                    'right'         => [
                        'title'     => esc_html__( 'Right', 'olmo'  ),
                        'icon'     => 'fa fa-align-right',
                    ],
                ],
               'default'         => '',
               'selectors' => [
                   '{{WRAPPER}} .olmo-widget-logo' => 'text-align: {{VALUE}};'
               ],
            ]
        );
 

        $this->add_responsive_control(
			'logo_padding',
			[
				'label' =>esc_html__( 'Padding', 'olmo'  ),
				'type' => \Elementor\Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .olmo-widget-logo' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
      );
       
        $this->end_controls_section();
    }

    protected function render( ) { 
        $settings = $this->get_settings();

        $site_logo = $settings['site_logo'];

        
      
    ?>
    <div class="olmo-widget-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            <img src="<?php if(isset($site_logo['url']) && $site_logo['url'] !=''){
				echo esc_url( $site_logo['url']);
            }else{
               echo esc_url(OLMOTHEMEURI . '/images/logo.png');
            }
            ?>" alt="<?php bloginfo('name'); ?>">
        </a>
    </div>

    <?php  
    }
    protected function content_template() { }
}