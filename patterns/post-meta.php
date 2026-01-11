<?php
/**
 * Title: Post meta
 * Slug: ikreate-fse/post-meta
 * Inserter: no
 */
?>

<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
	<!-- wp:group {"style":{"spacing":{"blockGap":"0.5em"}},"layout":{"type":"flex","justifyContent":"left"}} -->
	<div class="wp-block-group">
		
        <!-- wp:post-author {"avatarSize":24,"showBio":false,"isLink":true} /-->

		<!-- wp:paragraph {"fontSize":"small","textColor":"contrast-2"} -->
		<p class="has-small-font-size has-contrast-2-color has-text-color"><?php echo esc_html_x( 'on', 'Prefix for the post date block: On date', 'ikreate-fse' ); ?></p>
		<!-- /wp:paragraph -->

		<!-- wp:post-date {"format":"M j, Y","isLink":true} /-->

		<!-- wp:post-terms {"term":"category","prefix":"<?php echo esc_html_x( 'in ', 'Prefix for the post category block: in category name', 'ikreate-fse' ); ?>"} /-->

	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:group -->
