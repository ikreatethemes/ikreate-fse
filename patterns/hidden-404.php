<?php
/**
 * Title: 404
 * Slug: ikreate-fse/hidden-404
 * Inserter: no
 */
?>

 <!-- wp:group {"layout":{"type":"constrained"}} -->
 <div class="wp-block-group">
    <!-- wp:heading {"textAlign":"center","level":1,"style":{"typography":{"fontSize":"250px","lineHeight":"1"}},"textColor":"primary"} -->
        <h1 class="wp-block-heading has-text-align-center has-primary-color has-text-color" style="font-size:250px;line-height:1"><?php esc_html_e('404','ikreate-fse'); ?></h1>
    <!-- /wp:heading -->

    <!-- wp:heading {"textAlign":"center"} -->
        <h2 class="wp-block-heading has-text-align-center"><?php esc_html_e('Oops! That page can’t be found.','ikreate-fse'); ?></h2>
    <!-- /wp:heading -->

    <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center"><?php esc_html_e('It looks like nothing was found at this location. Maybe try one of the links below or a search?','ikreate-fse'); ?></p>
    <!-- /wp:paragraph -->
    
    <!-- wp:search {"label":"Search...","showLabel":false,"width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"button-inside","buttonUseIcon":true,"backgroundColor":"primary"} /-->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
        <!-- wp:button {"className":"is-style-primary-button"} -->
            <div class="wp-block-button is-style-primary-button">
                <a class="wp-block-button__link wp-element-button" href="http://fse.local"><?php esc_html_e('Back To Home','ikreate-fse'); ?></a>
            </div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->