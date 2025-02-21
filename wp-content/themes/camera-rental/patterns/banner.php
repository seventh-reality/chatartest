<?php
/**
 * Title: Banner
 * Slug: camera-rental/banner
 * Categories: camera-rental, banner
 */
?>

<!-- wp:cover {"url":"<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>","id":65,"dimRatio":0,"isUserOverlayColor":true,"focalPoint":{"x":0.54,"y":0.54},"minHeight":700,"align":"full","className":"banner-image-cover","style":{"spacing":{"padding":{"right":"0px","left":"0px"}}},"layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-cover alignfull banner-image-cover" style="padding-right:0px;padding-left:0px;min-height:700px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span><img class="wp-block-cover__image-background wp-image-65" alt="" src="<?php echo esc_url( get_template_directory_uri() . '/images/banner.png'); ?>" style="object-position:54% 54%" data-object-fit="cover" data-object-position="54% 54%"/><div class="wp-block-cover__inner-container"><!-- wp:spacer {"height":"84px","className":"banner-spacer"} -->
<div style="height:84px" aria-hidden="true" class="wp-block-spacer banner-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns {"className":"banner-cols-wrap"} -->
<div class="wp-block-columns banner-cols-wrap"><!-- wp:column {"className":"banner-content wow slideInDown"} -->
<div class="wp-block-column banner-content wow slideInDown"><!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600","textDecoration":"underline"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"bottom":"var:preset|spacing|20"}}},"textColor":"primary"} -->
<h3 class="wp-block-heading has-primary-color has-text-color has-link-color" style="margin-bottom:var(--wp--preset--spacing--20);font-size:18px;font-style:normal;font-weight:600;text-decoration:underline"><?php esc_html_e('Unforgettable Aquatic Activities','camera-rental'); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"45px"},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"white"} -->
<h2 class="wp-block-heading has-white-color has-text-color has-link-color" style="margin-top:0;margin-bottom:0;font-size:45px;font-style:normal;font-weight:600"><?php esc_html_e('Discover Your Perfect','camera-rental'); ?><br><?php esc_html_e('Camera And Lence','camera-rental'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"banner-excrpt","style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="banner-excrpt" style="margin-top:0;margin-bottom:0;font-size:14px"><?php esc_html_e('It is a long established fact that a reader will be by the readable content of a page when looking at its layout.','camera-rental'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"var:preset|spacing|40"}}},"layout":{"type":"flex","justifyContent":"left"}} -->
<div class="wp-block-buttons" style="margin-top:var(--wp--preset--spacing--40);padding-top:0;padding-bottom:0"><!-- wp:button {"style":{"typography":{"fontSize":"14px","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50","top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}}} -->
<div class="wp-block-button has-custom-font-size" style="font-size:14px;font-style:normal;font-weight:500"><a class="wp-block-button__link wp-element-button" style="padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50)"><?php esc_html_e('Read More','camera-rental'); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->