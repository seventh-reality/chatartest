<?php

add_action( 'admin_menu', 'camera_rental_gettingstarted' );
function camera_rental_gettingstarted() {
	add_theme_page( esc_html__('Begin Installation', 'camera-rental'), esc_html__('Begin Installation', 'camera-rental'), 'edit_theme_options', 'camera-rental-guide-page', 'camera_rental_guide');
}

function camera_rental_admin_theme_style() {
   wp_enqueue_style('camera-rental-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/dashboard/dashboard.css');
}
add_action('admin_enqueue_scripts', 'camera_rental_admin_theme_style');

if ( ! defined( 'CAMERA_RENTAL_SUPPORT' ) ) {
define('CAMERA_RENTAL_SUPPORT',__('https://wordpress.org/support/theme/camera-rental/','camera-rental'));
}
if ( ! defined( 'CAMERA_RENTAL_REVIEW' ) ) {
define('CAMERA_RENTAL_REVIEW',__('https://wordpress.org/support/theme/camera-rental/reviews/','camera-rental'));
}
if ( ! defined( 'CAMERA_RENTAL_LIVE_DEMO' ) ) {
define('CAMERA_RENTAL_LIVE_DEMO',__('https://trial.ovationthemes.com/camera-rental/','camera-rental'));
}
if ( ! defined( 'CAMERA_RENTAL_BUY_PRO' ) ) {
define('CAMERA_RENTAL_BUY_PRO',__('https://www.ovationthemes.com/products/camera-rental-wordpress-theme','camera-rental'));
}
if ( ! defined( 'CAMERA_RENTAL_PRO_DOC' ) ) {
define('CAMERA_RENTAL_PRO_DOC',__('https://trial.ovationthemes.com/docs/camera-rental-doc/','camera-rental'));
}
if ( ! defined( 'CAMERA_RENTAL_FREE_DOC' ) ) {
define('CAMERA_RENTAL_FREE_DOC',__('https://trial.ovationthemes.com/docs/camera-rental-free-doc/','camera-rental'));
}
if ( ! defined( 'CAMERA_RENTAL_THEME_NAME' ) ) {
define('CAMERA_RENTAL_THEME_NAME',__('Premium Camera Rental Theme','camera-rental'));
}
if ( ! defined( 'CAMERA_RENTAL_BUNDLE_LINK' ) ) {
define('CAMERA_RENTAL_BUNDLE_LINK',__('https://www.ovationthemes.com/products/wordpress-bundle','camera-rental'));
}
/**
 * Theme Info Page
 */
function camera_rental_guide() {

	// Theme info
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( '' ); ?>

	<div class="getting-started__header">
		<div class="header-box-left">
			<h2><?php echo esc_html( $theme ); ?></h2>
			<p><?php esc_html_e('Version: ', 'camera-rental'); ?><?php echo esc_html($theme['Version']);?></p>
		</div>
		<div class="header-box-right">
			<div class="btn_box">
				<a class="button-primary" href="<?php echo esc_url( CAMERA_RENTAL_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support', 'camera-rental'); ?></a>
				<a class="button-primary" href="<?php echo esc_url( CAMERA_RENTAL_REVIEW ); ?>" target="_blank"><?php esc_html_e('Review', 'camera-rental'); ?></a>
			</div>
		</div>
	</div>

	<div class="wrap getting-started">
		<div class="box-container">
			<div class="box-left-main">
				<div class="leftbox">
					<h3><?php esc_html_e('Documentation','camera-rental'); ?></h3>
					<p><?php $theme = wp_get_theme(); 
						echo wp_kses_post( apply_filters( 'description', esc_html( $theme->get( 'Description' ) ) ) );
					?></p>

					<h4><?php esc_html_e('Edit Your Site','camera-rental'); ?></h4>
					<p><?php esc_html_e('Now create your website with easy drag and drop powered by gutenburg.','camera-rental'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( admin_url() . 'site-editor.php' ); ?>" target="_blank"><?php esc_html_e('Edit Your Site','camera-rental'); ?></a>

					<h4><?php esc_html_e('Visit Your Site','camera-rental'); ?></h4>
					<p><?php esc_html_e('To check your website click here','camera-rental'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( home_url() ); ?>" target="_blank"><?php esc_html_e('Visit Your Site','camera-rental'); ?></a>

					<h4><?php esc_html_e('Theme Documentation','camera-rental'); ?></h4>
					<p><?php esc_html_e('Check the theme documentation to easily set up your website.','camera-rental'); ?></p>
					<a class="button-primary" href="<?php echo esc_url( CAMERA_RENTAL_FREE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','camera-rental'); ?></a>
				</div>
       	</div>
			<div class="box-right-main">
				<h3><?php echo esc_html(CAMERA_RENTAL_THEME_NAME); ?></h3>
				<img class="camera_rental_img_responsive" style="width: 100%;" src="<?php echo esc_url( $theme->get_screenshot() ); ?>" />
				<div class="pro-links">
					<div class="pro-links-inner">
						<a class="button-primary livedemo" href="<?php echo esc_url( CAMERA_RENTAL_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'camera-rental'); ?></a>
						<a class="button-primary buynow" href="<?php echo esc_url( CAMERA_RENTAL_BUY_PRO ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'camera-rental'); ?></a>
						<a class="button-primary docs" href="<?php echo esc_url( CAMERA_RENTAL_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'camera-rental'); ?></a>
					</div>
						<a class="button-primary bundle-btn" href="<?php echo esc_url( CAMERA_RENTAL_BUNDLE_LINK ); ?>" target="_blank"><?php esc_html_e('Wordpress Theme Bundle (100+ Themes at Just $89)', 'camera-rental'); ?></a>
				</div>
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
		</div>
	</div>

<?php }?>