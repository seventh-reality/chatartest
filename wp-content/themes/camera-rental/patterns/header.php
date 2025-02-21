<?php
/**
 * Title: Header
 * Slug: camera-rental/header
 * Categories: camera-rental, header
 */
?>

<!-- wp:group {"className":"header-wrap","style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group header-wrap" style="padding-top:var(--wp--preset--spacing--40)"><!-- wp:group {"className":"top-bar-wrap","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":{"topLeft":"15px","topRight":"15px"}}},"backgroundColor":"primary","layout":{"type":"default"}} -->
<div class="wp-block-group top-bar-wrap has-primary-background-color has-background" style="border-top-left-radius:15px;border-top-right-radius:15px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","className":"top-bar-cols"} -->
<div class="wp-block-columns are-vertically-aligned-center top-bar-cols"><!-- wp:column {"verticalAlignment":"center","width":"25%","className":"top-text"} -->
<div class="wp-block-column is-vertically-aligned-center top-text" style="flex-basis:25%"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"13px","fontStyle":"normal","fontWeight":"500"}},"textColor":"white"} -->
<p class="has-white-color has-text-color has-link-color" style="font-size:13px;font-style:normal;font-weight:500"><?php esc_html_e('Free shipping for all orders of $150+','camera-rental'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"75%","className":"top-info-cols"} -->
<div class="wp-block-column is-vertically-aligned-center top-info-cols" style="flex-basis:75%"><!-- wp:group {"className":"top-info-row","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
<div class="wp-block-group top-info-row"><!-- wp:group {"className":"time-box","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group time-box"><!-- wp:image {"id":1904,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/clock.png'); ?>" alt="" class="wp-image-1904"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"13px"}},"textColor":"white","fontFamily":"roboto"} -->
<p class="has-white-color has-text-color has-link-color has-roboto-font-family" style="font-size:13px"><?php esc_html_e('Mon - Fri 8:00 - 18:00 / Sunday 8:00 - 14:00','camera-rental'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"call-box","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group call-box"><!-- wp:image {"id":1907,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/call.png'); ?>" alt="" class="wp-image-1907"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"13px"}},"textColor":"white","fontFamily":"roboto"} -->
<p class="has-white-color has-text-color has-link-color has-roboto-font-family" style="font-size:13px"><?php esc_html_e('1- 800-458-85968','camera-rental'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"loc-box","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group loc-box"><!-- wp:image {"id":1909,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_template_directory_uri() . '/images/location.png'); ?>" alt="" class="wp-image-1909"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"13px"}},"textColor":"white","fontFamily":"roboto"} -->
<p class="has-white-color has-text-color has-link-color has-roboto-font-family" style="font-size:13px"><?php esc_html_e('47 Bakery Street, London UK','camera-rental'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"className":"menu-header-wrap","style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":{"bottomLeft":"15px","bottomRight":"15px"}}},"backgroundColor":"base","layout":{"type":"default"}} -->
<div class="wp-block-group menu-header-wrap has-base-background-color has-background" style="border-bottom-left-radius:15px;border-bottom-right-radius:15px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--50)"><!-- wp:columns {"verticalAlignment":"center","className":"menu-header"} -->
<div class="wp-block-columns are-vertically-aligned-center menu-header"><!-- wp:column {"verticalAlignment":"center","width":"25%","className":"logo-block"} -->
<div class="wp-block-column is-vertically-aligned-center logo-block" style="flex-basis:25%"><!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:site-logo /-->

<!-- wp:site-title {"style":{"typography":{"fontSize":"25px","fontStyle":"normal","fontWeight":"800"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontFamily":"inter"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"55%","className":"nav-block"} -->
<div class="wp-block-column is-vertically-aligned-center nav-block" style="flex-basis:55%"><!-- wp:navigation {"textColor":"heading-second","metadata":{"ignoredHookedBlocks":["woocommerce/customer-account","woocommerce/mini-cart"]},"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"400","letterSpacing":"1px"},"spacing":{"blockGap":"var:preset|spacing|20"}},"fontFamily":"inter","layout":{"type":"flex","justifyContent":"space-between"}} -->
<!-- wp:navigation-link {"label":"Home","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-submenu {"label":"Pages","type":"","url":"#","kind":"custom"} -->
	<!-- wp:navigation-link {"label":"Page 1","type":"","url":"#","kind":"custom","className":""} /-->

	<!-- wp:navigation-link {"label":"Page 2","type":"","url":"#","kind":"custom","className":""} /-->
<!-- /wp:navigation-submenu -->

<!-- wp:navigation-link {"label":"Events","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Lessons","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Shop","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"Blogs","type":"","url":"#","kind":"custom","isTopLevelLink":true} /-->

<!-- wp:navigation-link {"label":"BUY NOW","type":"link","opensInNewTab":true,"url":"https://www.ovationthemes.com/products/camera-rental-wordpress-theme","kind":"custom","className":"buynow"} /-->
<!-- /wp:navigation --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"center","width":"20%","className":"btn-block"} -->
<div class="wp-block-column is-vertically-aligned-center btn-block" style="flex-basis:20%"><!-- wp:buttons {"style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"flex","justifyContent":"right"}} -->
<div class="wp-block-buttons" style="padding-top:0;padding-bottom:0"><!-- wp:button {"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}},"border":{"radius":"5px"}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:14px;font-style:normal;font-weight:500"><a class="wp-block-button__link wp-element-button" style="border-radius:5px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Book Now','camera-rental'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->