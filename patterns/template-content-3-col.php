<?php
/**
 * Title: Content 3 Columns
 * Slug: twentytwentyfour/template-content-3-col
 * Template Types: single, page
 * Viewport width: 1400
 * Inserter: no
 */
?>

<!-- wp:template-part {"slug":"header","theme":"twentytwentyfour-child","tagName":"header","area":"header"} /-->

<!-- wp:group {"layout":{"type":"constrained","wideSize":"100%","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:post-title {"textAlign":"center","level":1,"style":{"spacing":{"margin":{"right":"0","left":"0"}}},"fontSize":"xx-large"} /-->

<!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","verticalAlignment":"top","justifyContent":"center"}} -->
<div class="wp-block-group alignwide"><!-- wp:tag-cloud {"numberOfTags":4,"smallestFontSize":"10pt","largestFontSize":"10pt","className":"is-style-outline","style":{"typography":{"fontStyle":"normal","fontWeight":"400","lineHeight":"0.5","textTransform":"lowercase"},"layout":{"selfStretch":"fit","flexSize":null},"spacing":{"padding":{"right":"0","left":"0"},"margin":{"right":"0","left":"0"}}},"fontFamily":"body"} /--></div>
<!-- /wp:group -->
        
        <!-- wp:post-featured-image {"aspectRatio":"auto","width":"80%","height":"200px","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|20"},"padding":{"right":"0","left":"0"}}}} /-->
        
        <!-- wp:group {"layout":{"type":"constrained","wideSize":"100%"}} -->
        <div class="wp-block-group">
        <!-- wp:columns {"verticalAlignment":null,"style":{"spacing":{"blockGap":{"top":"0","left":"var:preset|spacing|30"}}}} -->
        <div class="wp-block-columns"><!-- wp:column {"width":"22%","style":{"spacing":{"padding":{"top":"10px","bottom":"10px","left":"10px","right":"10px"}}},"className":"article-toc"} -->
        <div class="wp-block-column article-toc" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;flex-basis:22%"><!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
        <!-- wp:simpletoc/toc {"title_level":4,"title_text":"Article Contents","add_smooth":true} /--></div>
        <!-- /wp:group --></div>
        <!-- /wp:column -->
        
        <!-- wp:column {"verticalAlignment":"top","width":"55%","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","bottom":"var:preset|spacing|20"}}},"layout":{"type":"constrained","wideSize":"100%","justifyContent":"center"}} -->
        <div class="wp-block-column is-vertically-aligned-top" style="padding-top:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);flex-basis:55%">
        <!-- wp:post-content {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"fontSize":"medium","fontFamily":"body"} /--></div>
        <!-- /wp:column -->
        
        <!-- wp:column {"width":"30%","style":{"spacing":{"blockGap":"0"}}} -->
        <div class="wp-block-column" style="flex-basis:30%"><!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"},"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}},"dimensions":{"minHeight":""}},"layout":{"type":"flex","orientation":"vertical","flexWrap":"wrap","justifyContent":"stretch"}} -->
        <div class="wp-block-group" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30);padding-right:0;padding-left:0"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|accent-3"}}}},"textColor":"accent-3"} -->
        <p class="has-accent-3-color has-text-color has-link-color"><strong><em>Categories</em></strong></p>
        <!-- /wp:paragraph -->
        
        <!-- wp:group {"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"},":hover":{"color":{"text":"#ffcd04"}}}},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10","left":"var:preset|spacing|10","right":"var:preset|spacing|10"},"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"backgroundColor":"accent-3","textColor":"base-2","layout":{"type":"constrained","wideSize":"100%","justifyContent":"center"}} -->
        <div class="wp-block-group has-base-2-color has-accent-3-background-color has-text-color has-background has-link-color" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:categories /--></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->
        
        <!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
        <div class="wp-block-group"><!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#ca07a0"}}},"color":{"text":"#ca07a0"}}} -->
        <p class="has-text-color has-link-color" style="color:#ca07a0"><em><strong>Latest Posts</strong></em></p>
        <!-- /wp:paragraph -->
        
        <!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"blockGap":"0","padding":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10","top":"0","bottom":"0"}},"color":{"background":"#ca07a0"},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"dimensions":{"minHeight":""},"layout":{"selfStretch":"fit","flexSize":null}},"textColor":"base-2","layout":{"type":"constrained","wideSize":"100%"}} -->
        <div class="wp-block-group has-base-2-color has-text-color has-background has-link-color" style="background-color:#ca07a0;margin-top:0;margin-bottom:0;padding-top:0;padding-right:var(--wp--preset--spacing--10);padding-bottom:0;padding-left:var(--wp--preset--spacing--10)"><!-- wp:latest-posts {"featuredImageSizeWidth":50,"featuredImageSizeHeight":50,"addLinkToFeaturedImage":true,"align":"wide","style":{"elements":{"link":{":hover":{"color":{"text":"#ffe65b"}}}},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"margin":{"top":"0","bottom":"0"}}},"textColor":"base-2","fontSize":"medium"} /--></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:column --></div>
        <!-- /wp:columns --></div>
        <!-- /wp:group -->
        
        <!-- wp:spacer {"height":"13px"} -->
        <div style="height:13px" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        
        <!-- wp:group {"style":{"color":{"gradient":"linear-gradient(135deg,rgb(106,50,237) 0%,rgb(120,60,175) 100%)"},"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"padding":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"}}},"textColor":"base-2","layout":{"type":"constrained"}} -->
        <div class="wp-block-group has-base-2-color has-text-color has-background has-link-color" style="background:linear-gradient(135deg,rgb(106,50,237) 0%,rgb(120,60,175) 100%);margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--10)"><!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|base-2"}}},"spacing":{"padding":{"top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}},"textColor":"base-2","className":"is-style-default","fontSize":"large"} -->
        <h4 class="wp-block-heading has-text-align-center is-style-default has-base-2-color has-text-color has-link-color has-large-font-size" style="padding-top:var(--wp--preset--spacing--10);padding-bottom:var(--wp--preset--spacing--10)">
                    <strong>Membership await </strong></h4>
        <!-- /wp:heading -->
        
        <!-- wp:paragraph {"style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"}}}} -->
        <p style="padding-top:var(--wp--preset--spacing--10);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--10);padding-left:var(--wp--preset--spacing--30)">
                    Exponent is the fastest-growing tech interview prep platform. Get free interview guides, insider tips, and
                    courses</p>
        <!-- /wp:paragraph -->
        
        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
        <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0"><!-- wp:button {"textAlign":"center","backgroundColor":"base","textColor":"contrast","style":{"spacing":{"padding":{"top":"10px","bottom":"10px"}},"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}}} -->
        <div class="wp-block-button"><a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color has-text-align-center wp-element-button" style="padding-top:10px;padding-bottom:10px">Create your account</a></div>
        <!-- /wp:button --></div>
        <!-- /wp:buttons --></div>
        <!-- /wp:group -->
        
        <!-- wp:group {"layout":{"type":"constrained"}} -->
        <div class="wp-block-group"><!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"fontFamily":"body"} -->
        <h3 class="wp-block-heading has-body-font-family" style="font-style:normal;font-weight:700">Related Blog Post
                </h3>
        <!-- /wp:heading -->
        
        <!-- wp:group {"style":{"dimensions":{"minHeight":"0px"},"border":{"width":"0px","style":"none"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left"}} -->
        <div class="wp-block-group" style="border-style:none;border-width:0px;min-height:0px"><!-- wp:latest-posts {"postsToShow":3,"excerptLength":20,"postLayout":"grid","displayFeaturedImage":true,"featuredImageSizeSlug":"medium","style":{"spacing":{"padding":{"right":"var:preset|spacing|10","left":"var:preset|spacing|10","top":"var:preset|spacing|10","bottom":"var:preset|spacing|10"},"margin":{"right":"0","left":"0"}},"layout":{"selfStretch":"fit","flexSize":null}}} /--></div>
        <!-- /wp:group --></div>
        <!-- /wp:group --></div>
        <!-- /wp:group -->

        <!-- wp:template-part {"slug":"footer","theme":"twentytwentyfour-child","tagName":"footer","area":"footer"} /-->