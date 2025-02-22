<?php 

function camera_rental_add_admin_menu() {
    add_menu_page(
        'Theme Settings', // Page title
        'Theme Settings', // Menu title
        'manage_options', // Capability
        'camera-rental-theme-settings', // Menu slug
        'camera_rental_settings_page' // Function to display the page
    );
}
add_action( 'admin_menu', 'camera_rental_add_admin_menu' );

function camera_rental_settings_page() {
    ?>
    <div class="wrap">
        <h1><?php esc_html_e( 'Theme Settings', 'camera-rental' ); ?></h1>
        <form action="options.php" method="post">
            <?php
            settings_fields( 'camera_rental_settings_group' );
            do_settings_sections( 'camera-rental-theme-settings' );
            submit_button();
            ?>
        </form>
    </div>
    <?php
}

function camera_rental_register_settings() {
    register_setting( 'camera_rental_settings_group', 'camera_rental_enable_animations' );

    add_settings_section(
        'camera_rental_settings_section',
        __( 'Animation Settings', 'camera-rental' ),
        null,
        'camera-rental-theme-settings'
    );

    add_settings_field(
        'camera_rental_enable_animations',
        __( 'Enable Animations', 'camera-rental' ),
        'camera_rental_enable_animations_callback',
        'camera-rental-theme-settings',
        'camera_rental_settings_section'
    );
}
add_action( 'admin_init', 'camera_rental_register_settings' );

function camera_rental_enable_animations_callback() {
    $checked = get_option( 'camera_rental_enable_animations', true );
    ?>
    <input type="checkbox" name="camera_rental_enable_animations" value="1" <?php checked( 1, $checked ); ?> />
    <?php
}

