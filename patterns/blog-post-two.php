<?php
 /**
  * Title: Blog Post Two
  * Slug: ikreate-fse/blog-post-two
  * Categories: ikreate-fse
  * Keywords: blog post, artical, blog post section, post area, blog post two
  */
?>
<!-- wp:group {"tagName":"section","metadata":{"name":"Blog Layout Two"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)"><!-- wp:group {"metadata":{"name":"Section Title"},"align":"wide","style":{"spacing":{"blockGap":"15px","padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained","justifyContent":"left"}} -->
<div class="wp-block-group alignwide" style="padding-bottom:var(--wp--preset--spacing--40)"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"className":"section-title-wrapper","layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group alignwide section-title-wrapper"><!-- wp:paragraph {"align":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"600"}},"className":"super-title"} -->
<p class="has-text-align-left super-title" style="font-style:normal;font-weight:600"><?php esc_html_e('Our Latest Posts','ikreate-fse'); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"center","align":"full"} -->
<h2 class="wp-block-heading alignfull has-text-align-center"><?php esc_html_e('Business News & Articles','ikreate-fse'); ?></h2>
<!-- /wp:heading -->

<!-- wp:group {"layout":{"type":"constrained","wideSize":"1020px"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center"><?php esc_html_e('Welcome and thank you for installing the free WordPress theme. Ikreate FSE is a clean, beautiful, and fully customizable responsive modern free WordPress business theme, especially for App-related landing pages.','ikreate-fse'); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"name":"Post Area"},"align":"wide","layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:query {"queryId":30,"query":{"perPage":6,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"align":"wide"} -->
<div class="wp-block-query alignwide"><!-- wp:post-template {"layout":{"type":"grid","columnCount":2}} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"className":"box-shadow","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group box-shadow" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/4"} /--></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"0","right":"var:preset|spacing|50"},"margin":{"top":"0","bottom":"0"},"blockGap":"var:preset|spacing|40"},"dimensions":{"minHeight":"400px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
<div class="wp-block-group" style="min-height:400px;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50);padding-left:0"><!-- wp:post-title {"textAlign":"center","level":4,"isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"500","lineHeight":"1.4"}}} /-->

<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center","orientation":"horizontal"}} -->
<div class="wp-block-group"><!-- wp:post-author {"avatarSize":24,"showBio":false,"isLink":true} /-->

<!-- wp:post-date {"format":"M j, Y","className":"blog-date"} /--></div>
<!-- /wp:group -->

<!-- wp:post-excerpt {"textAlign":"center","moreText":"","excerptLength":20} /-->

<!-- wp:read-more {"content":"Read \u003cstrong\u003eMore\u003c/strong\u003e","linkTarget":"_blank","style":{"layout":{"selfStretch":"fit","flexSize":null}},"className":"is-style-primary-button"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group --></section>
<!-- /wp:group -->