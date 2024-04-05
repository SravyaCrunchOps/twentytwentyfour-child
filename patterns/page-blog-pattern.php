<?php
/**
 * Title: Blog Pattern
 * Slug: twentytwentyfour-child/blog-pattern
 * Categories: Blog
 * Block Types: core/post-content
 * Post Types: page, wp_template
 * Viewport width: 1400
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:group {"tagName":"main","align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained","wideSize":"100%"}} -->
    <main class="wp-block-group alignwide">
        <!-- wp:post-title {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"3.5rem","fontStyle":"normal","fontWeight":"700"}},"fontFamily":"body"} /-->

        <!-- wp:paragraph {"align":"center","fontSize":"medium"} -->
        <p class="has-text-align-center has-medium-font-size">
            Read our latest blog posts on product management, software engineering, and other tech roles.
        </p>
        <!-- /wp:paragraph -->
    </main>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"constrained","wideSize":"100%","justifyContent":"center"}} -->
<div class="wp-block-group">
    <!-- wp:query {"queryId":15,"query":{"perPage":10,"pages":0,"offset":"0","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true},"align":"full","layout":{"type":"constrained","wideSize":"80%"}} -->
    <div class="wp-block-query alignfull">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|20","right":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained","wideSize":"100%"}} -->
        <div class="wp-block-group alignwide"
            style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--20)">
            <!-- wp:post-template {"align":"full","style":{"spacing":{"blockGap":"var:preset|spacing|40"}},"layout":{"type":"grid","columnCount":3}} -->
            <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"auto","width":"100%","height":"150px","style":{"spacing":{"margin":{"bottom":"0"},"padding":{"bottom":"0"}}}} /-->

            <!-- wp:group {"style":{"spacing":{"blockGap":"10px","margin":{"top":"var:preset|spacing|20"},"padding":{"top":"0"}}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"nowrap"}} -->
            <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--20);padding-top:0">
                <!-- wp:post-title {"textAlign":"left","level":5,"isLink":true,"style":{"layout":{"flexSize":null,"selfStretch":"fit"},"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"capitalize","textDecoration":"none","letterSpacing":"1px"},"elements":{"link":{":hover":{"color":{"text":"#131e9c"}}}}},"fontFamily":"body"} /-->

                <!-- wp:template-part {"slug":"post-meta","theme":"twentytwentyfour-child"} /-->
            </div>
            <!-- /wp:group -->

            <!-- wp:post-excerpt {"excerptLength":28,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast-2"}}}},"textColor":"contrast-2","fontSize":"small"} /-->
            <!-- /wp:post-template -->

            <!-- wp:spacer {"height":"18px","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
            <div style="margin-top:0;margin-bottom:0;height:18px" aria-hidden="true" class="wp-block-spacer"></div>
            <!-- /wp:spacer -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->