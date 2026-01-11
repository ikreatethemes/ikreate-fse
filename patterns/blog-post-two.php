<?php
 /**
  * Title: Blog Post Two
  * Slug: ikreate-fse/blog-post-two
  * Categories: ikreate-fse
  * Keywords: blog post, artical, two artical, columns
  */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Blog Layout Two","categories":["ikreate-fse"],"patternName":"ikreate-fse/blog-post-two"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|lg","bottom":"var:preset|spacing|lg"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--lg);padding-bottom:var(--wp--preset--spacing--lg)"><!-- wp:group {"metadata":{"name":"Section Title"},"align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|xl"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="margin-bottom:var(--wp--preset--spacing--xl)"><!-- wp:group {"align":"full","className":"section-title-wrapper","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group alignfull section-title-wrapper"><!-- wp:paragraph {"align":"center","className":"super-title","style":{"typography":{"fontStyle":"normal","fontWeight":"500"}}} -->
<p class="has-text-align-center super-title" style="font-style:normal;font-weight:500"><?php esc_html_e('Our Latest Posts','ikreate-fse'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:heading {"textAlign":"center","align":"full","style":{"spacing":{"margin":{"top":"var:preset|spacing|xs","bottom":"var:preset|spacing|xs"}}}} -->
<h2 class="wp-block-heading alignfull has-text-align-center" style="margin-top:var(--wp--preset--spacing--xs);margin-bottom:var(--wp--preset--spacing--xs)"><?php esc_html_e('Business News & Articles','ikreate-fse'); ?></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center","style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} -->
<p class="has-text-align-center" style="margin-top:0;margin-bottom:0"><?php esc_html_e('Welcome and thank you for installing the free WordPress theme. Ikreate FSE is a clean, beautiful, and fully customizable responsive modern free WordPress business theme, especially for App-related landing pages.','ikreate-fse'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Post Area"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":30,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:columns {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","bottom":"0","left":"0","right":"0"}},"shadow":"var:preset|shadow|soft"}} -->
<div class="wp-block-columns" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;box-shadow:var(--wp--preset--shadow--soft)"><!-- wp:column {"width":"45%"} -->
<div class="wp-block-column" style="flex-basis:45%"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4","height":""} /--></div>
<!-- /wp:column -->

<!-- wp:column {"layout":{"type":"default"}} -->
<div class="wp-block-column"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|md","bottom":"var:preset|spacing|md","left":"var:preset|spacing|md","right":"var:preset|spacing|md"},"blockGap":"var:preset|spacing|sm"},"dimensions":{"minHeight":""}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--md);padding-right:var(--wp--preset--spacing--md);padding-bottom:var(--wp--preset--spacing--md);padding-left:var(--wp--preset--spacing--md)"><!-- wp:post-title {"textAlign":"left","level":3,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.4"},"elements":{"link":{":hover":{"color":{"text":"var:preset|color|secondary"}},"color":{"text":"var:preset|color|primary"}}}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|xs"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"left","orientation":"horizontal"}} -->
<div class="wp-block-group"><!-- wp:post-author {"avatarSize":24,"showBio":false,"isLink":true} /-->

<!-- wp:paragraph -->
<p>-</p>
<!-- /wp:paragraph -->

<!-- wp:post-date {"format":"M j, Y","isLink":true,"className":"blog-date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"textAlign":"left","moreText":"","excerptLength":20} /-->

<!-- wp:read-more {"content":"Read More","className":"is-style-no-border","style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"xsmall"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->