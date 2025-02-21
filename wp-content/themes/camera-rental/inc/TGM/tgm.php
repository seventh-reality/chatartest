<?php
	
load_template( get_template_directory() . '/inc/TGM/class-tgm-plugin-activation.php' );

/**
 * Recommended plugins.
 */
function camera_rental_register_recommended_plugins() {
	$plugins = array(
		array(
			'name'             => __( 'Ovation Elements', 'camera-rental' ),
			'slug'             => 'ovation-elements',
			'required'         => false,
			'force_activation' => false,
		)
	);
	$config = array();
	camera_rental_tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'camera_rental_register_recommended_plugins' );