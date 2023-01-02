<?php
// Register Style
function olmo_admin_styles() {

	wp_register_style( 'olmo-adminstyle', OLMOTHEMEURI. 'admin/assets/css/admin-style.css', false, '1.0.0', 'all' );
	wp_enqueue_style( 'olmo-adminstyle' );

}

// Hook into the 'admin_enqueue_scripts' action
add_action( 'admin_enqueue_scripts', 'olmo_admin_styles' );