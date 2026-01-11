<?php
 /**
  * Title: Sidebar
  * Slug: ikreate-fse/sidebar
  * Categories: ikreate-fse
  */
?>
<!-- wp:group {"tagName":"aside","className":"widget-area","layout":{"type":"constrained"},"metadata":{"name":"Widget Sidebar"}} -->
<aside class="wp-block-group widget-area">
    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group"><!-- wp:search {"label":"","showLabel":false,"buttonText":"Search","buttonPosition":"button-inside"} /--></div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"level":3} -->
          <h3 class="wp-block-heading"><?php esc_html_e('Category','ikreate-fse'); ?></h3>
        <!-- /wp:heading -->
        <!-- wp:categories {"className":"is-style-sidebar-widget-categories"} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"level":3} -->
          <h3 class="wp-block-heading"><?php esc_html_e('Archieves','ikreate-fse'); ?></h3>
        <!-- /wp:heading -->
        <!-- wp:archives {"className":"is-style-sidebar-widget-archives"} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"level":3} -->
          <h3 class="wp-block-heading"><?php esc_html_e('Recent Post','ikreate-fse'); ?></h3>
        <!-- /wp:heading -->
        <!-- wp:latest-posts {"className":"is-style-sidebar-widget-latest-posts"} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"level":3} -->
        <h3 class="wp-block-heading"><?php esc_html_e('Social Links','ikreate-fse'); ?></h3>
        <!-- /wp:heading -->
        <!-- wp:social-links -->
            <ul class="wp-block-social-links">
                <!-- wp:social-link {"url":"#","service":"facebook"} /-->

                <!-- wp:social-link {"url":"#","service":"x"} /-->

                <!-- wp:social-link {"url":"#","service":"wordpress"} /-->

                <!-- wp:social-link {"url":"#","service":"instagram"} /-->

                <!-- wp:social-link {"url":"#","service":"pinterest"} /-->

                <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
            </ul>
        <!-- /wp:social-links -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"level":3} -->
          <h3 class="wp-block-heading"><?php esc_html_e('Tag Cloud','ikreate-fse'); ?></h3>
        <!-- /wp:heading -->
        <!-- wp:tag-cloud /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:heading {"level":3} -->
          <h3 class="wp-block-heading"><?php esc_html_e('Our Calendar','ikreate-fse'); ?></h3>
        <!-- /wp:heading -->
        <!-- wp:calendar /-->
    </div>
    <!-- /wp:group -->
</aside>
<!-- /wp:group -->