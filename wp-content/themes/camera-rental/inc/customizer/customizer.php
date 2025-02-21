<?php
/**
 * Camera Rental: Customizer
 *
 * @subpackage Camera Rental
 * @since 1.0
 */

function camera_rental_customize_register( $wp_customize ) {

	wp_enqueue_style('customizercustom_css', esc_url( get_template_directory_uri() ). '/inc/customizer/customizer.css');

	// Pro Section
 	$wp_customize->add_section('camera_rental_pro', array(
        'title'    => __('CAMERA RENTAL PREMIUM', 'camera-rental'),
        'priority' => 1,
    ));
    $wp_customize->add_setting('camera_rental_pro', array(
        'default'           => null,
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new Camera_Rental_Pro_Control($wp_customize, 'camera_rental_pro', array(
        'label'    => __('CAMERA RENTAL PREMIUM', 'camera-rental'),
        'section'  => 'camera_rental_pro',
        'settings' => 'camera_rental_pro',
        'priority' => 1,
    )));
}
add_action( 'customize_register', 'camera_rental_customize_register' );


define('CAMERA_RENTAL_PRO_LINK',__('https://www.ovationthemes.com/products/camera-rental-wordpress-theme','camera-rental'));

define('CAMERA_RENTAL_BUNDLE_BTN',__('https://www.ovationthemes.com/products/wordpress-bundle','camera-rental'));

/* Pro control */
if (class_exists('WP_Customize_Control') && !class_exists('Camera_Rental_Pro_Control')):
    class Camera_Rental_Pro_Control extends WP_Customize_Control{

    public function render_content(){?>
        <label style="overflow: hidden; zoom: 1;">
	        <div class="col-md upsell-btn">
                <a href="<?php echo esc_url( CAMERA_RENTAL_PRO_LINK ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('UPGRADE CAMERA RENTAL PREMIUM','camera-rental');?> </a>
	        </div>
            <div class="col-md">
                <img class="camera_rental_img_responsive " src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png">
            </div>
	        <div class="col-md">
                <ul style="padding-top:10px">
                    <li class="upsell-camera_rental"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Responsive Design', 'camera-rental');?> </li>                 
                    <li class="upsell-camera_rental"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Demo Importer', 'camera-rental');?> </li>
                    <li class="upsell-camera_rental"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Section Reordering', 'camera-rental');?> </li>
                    <li class="upsell-camera_rental"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Contact Page Template', 'camera-rental');?> </li>
                    <li class="upsell-camera_rental"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Multiple Blog Layouts', 'camera-rental');?> </li>
                    <li class="upsell-camera_rental"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Unlimited Color Options', 'camera-rental');?> </li>
                    <li class="upsell-camera_rental"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Cross Browser Support', 'camera-rental');?> </li>
                    <li class="upsell-camera_rental"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Detailed Documentation Included', 'camera-rental');?> </li>
                    <li class="upsell-camera_rental"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('WPML Compatible (Translation Ready)', 'camera-rental');?> </li>
                    <li class="upsell-camera_rental"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Woo-commerce Compatible', 'camera-rental');?> </li>
                    <li class="upsell-camera_rental"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Full Support', 'camera-rental');?> </li>
                    <li class="upsell-camera_rental"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('10+ Sections', 'camera-rental');?> </li>
                    <li class="upsell-camera_rental"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('SEO Friendly', 'camera-rental');?> </li>
                    <li class="upsell-camera_rental"> <div class="dashicons dashicons-yes"></div> <?php esc_html_e('Supper Fast', 'camera-rental');?> </li>
                </ul>
        	</div>
            <div class="col-md upsell-btn upsell-btn-bottom">
                <a href="<?php echo esc_url( CAMERA_RENTAL_BUNDLE_BTN ); ?>" target="blank" class="btn btn-success btn"><?php esc_html_e('Wordpress Theme Bundle (100+ Themes at Just $89)','camera-rental');?> </a>
            </div>
        </label>
    <?php } }
endif;