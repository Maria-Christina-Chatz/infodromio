<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

if(defined('ELEMENTOR_VERSION')):

class Olmo_Elementor_Widgets_Init{
	
    public static $instance;

	/**
     * Load Construct
     * 
     * @since 1.0
     */
	/** Olmo Class Constructor **/
	public function __construct(){
		add_action('elementor/init', array($this, 'olmo_elementor_category'));
		add_action('elementor/controls/controls_registered', array( $this, 'olmo_custom_icons' ), 11 );
        add_action('elementor/controls/controls_registered', array($this, 'olmo_elementor_category'), 11);
        add_action('elementor/widgets/widgets_registered', array($this, 'olmo_all_elements'));
		add_action('elementor/frontend/after_enqueue_scripts', array( $this, 'olmo_enqueue_scripts' ) ); 
		
        $this -> olmo_custom_icons_load();
	}
	
	public static function get_instance(){
		if (null === self::$instance) {
			self::$instance = new self();
		}
		return self::$instance;
	}

    /** Enqueue Scripts and Stylesheets **/ 
    
     public function olmo_enqueue_scripts() {
		 wp_enqueue_script( 'olmo-elementor', OLMOTHEMEURI . 'js/lib/scripts-elementor.js', [ 'jquery' ], false, true );
    }
	
	/** Elementor add category **/

    public function olmo_elementor_category(){    
		\Elementor\Plugin::$instance->elements_manager->add_category(
			'olmo-all-elements',
			[
				'title' =>esc_html__( 'Olmo', 'olmo' ),
				'icon' => 'fas fa-hand-holding-usd',
			],
			1
		);
    }

	public function olmo_custom_icons( $custom_control ) {

        require_once OLMOTHEMEDIR . 'include/elements/icon-control/custom-icon.php';

        $all_controls = array(
            $custom_control::ICON => 'Olmo_Custom_Icon_Pack',
        );

        foreach ( $all_controls as $control => $class_name ) {
            $custom_control->unregister_control( $control );
            $custom_control->register_control( $control, new $class_name() );
        }

    }

    // custom icons loading
    public function olmo_custom_icons_load(  ) {

		$this->__generate_font();
		
        add_filter( 'elementor/icons_manager/additional_tabs', [ $this, '__add_font']);
		
    }
    
    public function __add_font( $all_fonts){
        $custom_fonts['eicon-filter'] = [
            'name' => 'olmo-cs-icons',
            'label' => esc_html__( 'Olmo Icons', 'olmo' ), 
            'url' => OLMOTHEMEURI . '/css/custom-icon.css',
            'enqueue' => [ OLMOTHEMEURI . '/css/custom-icon.css' ],
            'prefix' => 'cs-',
            'displayPrefix' => 'cs-icon',
			'labelIcon' => 'cs-icon cs-menu',
            'ver' => '1.0.0',
            'fetchJson' => OLMOTHEMEURI . '/js/lib/custom-icon.js',
            'native' => true,
        ];
        return  array_merge($all_fonts, $custom_fonts);
    }


    public function __generate_font(){
        global $wp_filesystem;

        require_once ( ABSPATH . '/wp-admin/includes/file.php' );
        WP_Filesystem();
        $css_file =  OLMOTHEMEDIR . '/css/custom-icon.css';
    
        if ( $wp_filesystem->exists( $css_file ) ) {
            $css_source = $wp_filesystem->get_contents( $css_file );
        } // End If Statement
        
        preg_match_all( "/\.(cs-.*?):\w*?\s*?{/", $css_source, $matches, PREG_SET_ORDER, 0 );
        $iconList = []; 
        
        foreach ( $matches as $match ) {
            $new_icons[$match[1] ] = str_replace('cs-', '', $match[1]);
            $iconList[] = str_replace('cs-', '', $match[1]);
        }

        $icons = new \stdClass();
        $icons->icons = $iconList;
        $icon_data = wp_json_encode($icons);
        
        $file = OLMOTHEMEDIR . '/js/lib/custom-icon.js';
        
		global $wp_filesystem;
		require_once ( ABSPATH . '/wp-admin/includes/file.php' );
		WP_Filesystem();
		if ( $wp_filesystem->exists( $file ) ) {
			$content =  $wp_filesystem->put_contents( $file, $icon_data);
		} 
        
    }

	public function olmo_all_elements($elements){

		require_once OLMOTHEMEDIR .'include/elements/title.php';
		$elements->register_widget_type(new Elementor\Olmo_Title());

		require_once OLMOTHEMEDIR .'include/elements/services-box.php';
		$elements->register_widget_type(new Elementor\Olmo_ServicesBox());

		require_once OLMOTHEMEDIR .'include/elements/slider.php';
		$elements->register_widget_type(new Elementor\Olmo_Slider());

		require_once OLMOTHEMEDIR .'include/elements/pricing.php';
		$elements->register_widget_type(new Elementor\Olmo_Pricing());

		require_once OLMOTHEMEDIR .'include/elements/pricing-tab.php';
		$elements->register_widget_type(new Elementor\Olmo_Pricing_Tab());

		require_once OLMOTHEMEDIR .'include/elements/portfolios.php';
		$elements->register_widget_type(new Elementor\Olmo_Portfolios());

		require_once OLMOTHEMEDIR .'include/elements/listicon.php';
		$elements->register_widget_type(new Elementor\Olmo_Listicons());

		require_once OLMOTHEMEDIR .'include/elements/testmonials.php';
		$elements->register_widget_type(new Elementor\Olmo_Testmonials());

		require_once OLMOTHEMEDIR .'include/elements/partner.php';
		$elements->register_widget_type(new Elementor\Olmo_Partner());

		require_once OLMOTHEMEDIR .'include/elements/posts.php';
		$elements->register_widget_type(new Elementor\Olmo_Posts());		

		require_once OLMOTHEMEDIR .'include/elements/gallery.php';
		$elements->register_widget_type(new Elementor\Olmo_Gallery());

		require_once OLMOTHEMEDIR .'include/elements/contact-box.php';
		$elements->register_widget_type(new Elementor\Olmo_Contact_Box());

		require_once OLMOTHEMEDIR .'include/elements/portfolio-meta.php';
		$elements->register_widget_type(new Elementor\Olmo_Portfolio_Meta());

		require_once OLMOTHEMEDIR .'include/elements/percent-box.php';
		$elements->register_widget_type(new Elementor\Olmo_Percent_Box());

		require_once OLMOTHEMEDIR .'include/elements/video-popup.php';
		$elements->register_widget_type(new Elementor\Olmo_Video_Popup());

		require_once OLMOTHEMEDIR .'include/elements/feature-lists.php';
		$elements->register_widget_type(new Elementor\Olmo_Feature_Lists());

		require_once OLMOTHEMEDIR .'include/elements/main-logo.php';
		$elements->register_widget_type(new Elementor\Olmo_Main_Logo_Widget());

		require_once OLMOTHEMEDIR .'include/elements/team.php';
		$elements->register_widget_type(new Elementor\Olmo_Team());

		require_once OLMOTHEMEDIR .'include/elements/counter.php';
		$elements->register_widget_type(new Elementor\Olmo_Counter());

		require_once OLMOTHEMEDIR .'include/elements/divider.php';
		$elements->register_widget_type(new Elementor\Olmo_Divider());

	}

}

if (class_exists('Olmo_Elementor_Widgets_Init')){
	Olmo_Elementor_Widgets_Init::get_instance();
}

endif;