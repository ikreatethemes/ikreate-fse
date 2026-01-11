<?php
/**
 * Title: Comments
 * Slug: ikreate-fse/hidden-comments
 * Inserter: no
 */
?>
<!-- wp:comments {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|sm","bottom":"var:preset|spacing|sm","left":"var:preset|spacing|sm","right":"var:preset|spacing|sm"}},"color":{"background":"#fafafa"},"border":{"radius":{"topLeft":"0px","topRight":"0px","bottomLeft":"8px","bottomRight":"8px"}}}} -->
<div class="wp-block-comments alignwide has-background" style="border-top-left-radius:0px;border-top-right-radius:0px;border-bottom-left-radius:8px;border-bottom-right-radius:8px;background-color:#fafafa;padding-top:var(--wp--preset--spacing--sm);padding-right:var(--wp--preset--spacing--sm);padding-bottom:var(--wp--preset--spacing--sm);padding-left:var(--wp--preset--spacing--sm)">
	<!-- wp:comments-title {"level":4,"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}}} /-->

	<!-- wp:comment-template -->
		<!-- wp:group {"className":"comment-body","style":{"spacing":{"margin":{"top":"var:preset|spacing|sm","bottom":"var:preset|spacing|sm"},"padding":{"top":"var:preset|spacing|sm","bottom":"var:preset|spacing|sm","left":"var:preset|spacing|sm","right":"var:preset|spacing|sm"},"blockGap":"0"},"border":{"radius":"8px"},"color":{"background":"#fefefe"}},"layout":{"type":"default"}} -->
		<div class="wp-block-group comment-body has-background" style="border-radius:8px;background-color:#fefefe;margin-top:var(--wp--preset--spacing--sm);margin-bottom:var(--wp--preset--spacing--sm);padding-top:var(--wp--preset--spacing--sm);padding-right:var(--wp--preset--spacing--sm);padding-bottom:var(--wp--preset--spacing--sm);padding-left:var(--wp--preset--spacing--sm)">
			<!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
			<div class="wp-block-group">
				<!-- wp:avatar {"size":24} /-->
				<!-- wp:comment-author-name /-->
				<!-- wp:comment-date {"fontSize":"small"} /-->
				<!-- wp:comment-edit-link {"fontSize":"small"} /-->
			</div>
			<!-- /wp:group -->

			<!-- wp:comment-content /-->

			<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
			<div class="wp-block-group">
				<!-- wp:comment-reply-link /-->
				</div>
			<!-- /wp:group -->
		</div>
		<!-- /wp:group -->
	<!-- /wp:comment-template -->

	<!-- wp:post-comments-form /-->

</div>
<!-- /wp:comments -->