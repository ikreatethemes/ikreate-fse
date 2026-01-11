<?php
/**
 * Title: Comments
 * Slug: ikreate-fse/hidden-comments
 * Inserter: no
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:comments {"className":"wp-block-comments-query-loop"} -->
		<div class="wp-block-comments wp-block-comments-query-loop">
			<!-- wp:comments-title {"level":4} /-->

			<!-- wp:comment-template -->

			<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"className":"comment-body","layout":{"type":"constrained"}} -->
				<div class="wp-block-group comment-body">
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
</div>
<!-- /wp:group -->
