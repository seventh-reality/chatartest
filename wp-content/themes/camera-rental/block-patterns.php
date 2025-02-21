<?php
/**
 * Camera Rental: Block Patterns
 *
 * @since Camera Rental 1.0
 */

/**
 * Registers block patterns and categories.
 *
 * @since Camera Rental 1.0
 *
 * @return void
 */
function camera_rental_register_block_patterns() {
	$camera_rental_block_pattern_categories = array(
		'camera-rental'    => array( 'label' => __( 'Camera Rental', 'camera-rental' ) ),
	);

	$camera_rental_block_pattern_categories = apply_filters( 'camera_rental_block_pattern_categories', $camera_rental_block_pattern_categories );

	foreach ( $camera_rental_block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}
}
add_action( 'init', 'camera_rental_register_block_patterns', 9 );
