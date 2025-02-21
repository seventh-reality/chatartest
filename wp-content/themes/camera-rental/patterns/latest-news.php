<?php
/**
 * Title: Latest News
 * Slug: camera-rental/latest-news
 * Categories: camera-rental, latest-news
 */
?>

<!-- wp:group {"className":"latest-news","layout":{"type":"constrained","contentSize":"80%"}} -->
<div class="wp-block-group latest-news"><!-- wp:group {"className":"head-box","layout":{"type":"default"}} -->
<div class="wp-block-group head-box"><!-- wp:heading {"textAlign":"center","level":3,"className":"sec-sub-heading","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|50","right":"var:preset|spacing|50"}},"border":{"radius":"30px"},"typography":{"fontSize":"18px","fontStyle":"normal","fontWeight":"600"}},"backgroundColor":"primary","textColor":"white"} -->
<h3 class="wp-block-heading has-text-align-center sec-sub-heading has-white-color has-primary-background-color has-text-color has-background has-link-color" style="border-radius:30px;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--50);font-size:18px;font-style:normal;font-weight:600"><?php esc_html_e('Our Blogs','camera-rental'); ?></h3>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"30px"},"spacing":{"margin":{"top":"var:preset|spacing|20","bottom":"0"}}}} -->
<h2 class="wp-block-heading has-text-align-center" style="margin-top:var(--wp--preset--spacing--20);margin-bottom:0;font-size:30px;font-style:normal;font-weight:600"><?php esc_html_e('Our Recent Blog &amp; News','camera-rental'); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":10,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"format":[]}} -->
<div class="wp-block-query"><!-- wp:post-template {"className":"wow slideInUp","layout":{"type":"grid","columnCount":4}} -->
<!-- wp:post-featured-image {"style":{"border":{"radius":"20px"}}} /-->

<!-- wp:post-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"600","fontSize":"20px"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"bottom":"var:preset|spacing|20"}}}} /-->

<!-- wp:post-excerpt {"excerptLength":25,"style":{"typography":{"fontSize":"14px"},"spacing":{"margin":{"top":"0","bottom":"var:preset|spacing|20"}}}} /-->

<!-- wp:read-more {"content":"Read More","style":{"typography":{"fontSize":"15px","fontStyle":"normal","fontWeight":"600","textDecoration":"underline"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}},"spacing":{"margin":{"top":"0","bottom":"0"}}},"textColor":"primary"} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:spacer {"height":"41px"} -->
<div style="height:41px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->