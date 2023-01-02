<?php
function olmo_before_widgets_import( $selected_import ) {
    if ( function_exists( 'ot_settings_id' ) ){
        $my_options  = get_option('option_tree');
        $my_options['footer_widget_logo'] = 'on';
        $my_options['footer_widget_box_column_serial'] = '2,2,2,3';
        update_option('option_tree', $my_options);
    }
}
add_action( 'ocdi/before_widgets_import', 'olmo_before_widgets_import' );

function olmo_import_files() {
    return array(
        array(
            'import_file_name'           => esc_html__('Home 1 to 23', 'olmo'),
            'categories'                 => array('Home'),
            'import_file_url'            => 'https://jthemes.net/themes/wp/olmo/landing/demo-content/demo-content.xml',
            'import_widget_file_url'     => 'https://jthemes.net/themes/wp/olmo/landing/demo-content/widgets.wie',
            'import_preview_image_url'   => 'https://jthemes.net/themes/wp/olmo/landing/demo-content/demo_01.png',
            'import_notice'              => esc_html__( 'Please wait when importing the demo, it may take 5-10 minutes depending on your server configuration and internet speed.', 'olmo' ),
            'preview_url'                => 'https://jthemes.net/themes/wp/olmo/',
        ),
    );
}
add_filter( 'pt-ocdi/import_files', 'olmo_import_files' );

function olmo_after_import_setup() {
    // Assign menus to their locations.
    $main_menu = get_term_by( 'name', 'Main Menu', 'nav_menu' );
	$footer_menu = get_term_by( 'name', 'Footer Menu', 'nav_menu' );	

    set_theme_mod( 'nav_menu_locations', array(
            'main-menu' => $main_menu->term_id,
			'footer-menu' => $footer_menu->term_id,
        )
    );

    // Assign front page and posts page (blog page).
    $front_page_id = get_page_by_title( 'App Landing' );
    $blog_page_id  = get_page_by_title( 'Our Blog' );

    update_option( 'show_on_front', 'page' );
    update_option( 'page_on_front', $front_page_id->ID );
    update_option( 'page_for_posts', $blog_page_id->ID );

}
add_action( 'pt-ocdi/after_import', 'olmo_after_import_setup' );