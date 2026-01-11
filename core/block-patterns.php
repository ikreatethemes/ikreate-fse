<?php
/**
 * Ikreate FSE: Block Patterns
 *
 * @since Ikreate FSE 1.0.0
 */

add_action( 'init', 'ikreate_fse_register_block_patterns', 9 );

if ( ! function_exists( 'ikreate_fse_register_block_patterns' ) ){

	function ikreate_fse_register_block_patterns() {

		/**
		 * Registers block patterns and categories.
		 *
		 * @since Ikreate FSE 1.0.0
		 *
		 * @return void
		*/

		$patterns = array();

		$block_pattern_categories = array(
			'ikreate-fse' => array( 'label' => esc_html__( 'Ikreate FSE', 'ikreate-fse' ) )
		);

		/**
		 * Filters the theme block pattern categories.
		 *
		 * @since Ikreate FSE 1.0.0
		 *
		 * @param array[] $block_pattern_categories {
		 *     An associative array of block pattern categories, keyed by category name.
		 *
		 *     @type array[] $properties {
		 *         An array of block category properties.
		 *
		 *         @type string $label A human-readable label for the pattern category.
		 *     }
		 * }
		 */
		$block_pattern_categories = apply_filters( 'ikreate_fse_block_pattern_categories', $block_pattern_categories );

		foreach ( $block_pattern_categories as $name => $properties ) {

			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {

				register_block_pattern_category( $name, $properties );
			}
		}

		/** Category List */
		register_block_style(
			'core/categories',
			array(
				'name'         => 'sidebar-widget-categories',
				'label'        => __( 'Sidebar Widget', 'ikreate-fse' ),
				/*
				 * Styles for the custom Sidebar Widget list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				.is-style-sidebar-widget-categories.wp-block-categories-list{
					padding: 0;
					list-style-type: none;
				}
				.is-style-sidebar-widget-categories.wp-block-categories-list li{
					padding: 10px;
					background-color: var(--wp--preset--color--wwhite);
					border-radius: 5px;
					line-height: 1.5;
					margin-bottom: 10px;
					list-style-type: none;
				}
				.is-style-sidebar-widget-categories.wp-block-categories-list li:hover{
					background-color: var(--wp--preset--color--primary);
					color:var(--wp--preset--color--wwhite);
				}
				.is-style-sidebar-widget-categories.wp-block-categories-list li:hover a{
					color:var(--wp--preset--color--white);
				}',
			)
		);

		/** Archives List */
		register_block_style(
			'core/archives',
			array(
				'name'         => 'sidebar-widget-archives',
				'label'        => __( 'Sidebar Widget', 'ikreate-fse' ),
				/*
				 * Styles for the custom Sidebar Widget list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				.is-style-sidebar-widget-archives .wp-block-archives-list,
				.is-style-sidebar-widget-archives.wp-block-archives-list{
					padding: 0;
					list-style-type: none;
				}
				.is-style-sidebar-widget-archives .wp-block-archives-list li,
				.is-style-sidebar-widget-archives.wp-block-archives-list li{
					padding: 10px;
					background-color: var(--wp--preset--color--wwhite);
					border-radius: 5px;
					line-height: 1.5;
					margin-bottom: 10px;
					list-style-type: none;
				}
				.is-style-sidebar-widget-archives .wp-block-archives-list li:hover,
				.is-style-sidebar-widget-archives.wp-block-archives-list li:hover{
					background-color: var(--wp--preset--color--primary);
					color:var(--wp--preset--color--wwhite);
				}
				.is-style-sidebar-widget-archives .wp-block-archives-list li:hover a,
				.is-style-sidebar-widget-archives.wp-block-archives-list li:hover a{
					color:var(--wp--preset--color--white);
				}',
			)
		);

		/** Page List */
		register_block_style(
			'core/page-list',
			array(
				'name'         => 'sidebar-widget-page',
				'label'        => __( 'Sidebar Widget', 'ikreate-fse' ),
				/*
				 * Styles for the custom Sidebar Widget list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				.is-style-sidebar-widget-page.wp-block-page-list{
					padding: 0;
					list-style-type: none;
				}
				.is-style-sidebar-widget-page.wp-block-page-list li{
					padding: 10px;
					background-color: var(--wp--preset--color--wwhite);
					border-radius: 5px;
					line-height: 1.5;
					margin-bottom: 10px;
					list-style-type: none;
				}
				.is-style-sidebar-widget-page.wp-block-page-list li:hover{
					background-color: var(--wp--preset--color--primary);
					color:var(--wp--preset--color--wwhite);
				}
				.is-style-sidebar-widget-page.wp-block-page-list li:hover a{
					color:var(--wp--preset--color--white);
				}',
			)
		);

		/** Blog Post List */
		register_block_style(
			'core/latest-posts',
			array(
				'name'         => 'sidebar-widget-latest-posts',
				'label'        => __( 'Sidebar Widget', 'ikreate-fse' ),
				/*
				 * Styles for the custom Sidebar Widget list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				.is-style-sidebar-widget-latest-posts.wp-block-latest-posts{
					padding: 0;
					list-style-type: none;
				}
				.is-style-sidebar-widget-latest-posts.wp-block-latest-posts li{
					padding: 10px;
					background-color: var(--wp--preset--color--wwhite);
					border-radius: 5px;
					line-height: 1.5;
					margin-bottom: 10px;
					list-style-type: none;
				}
				.is-style-sidebar-widget-latest-posts.wp-block-latest-posts li:hover{
					background-color: var(--wp--preset--color--primary);
					color:var(--wp--preset--color--wwhite);
				}
				.is-style-sidebar-widget-latest-posts.wp-block-latest-posts li:hover a{
					color:var(--wp--preset--color--white);
				}',
			)
		);

		/** Blog Post List */
		register_block_style(
			'core/rss',
			array(
				'name'         => 'sidebar-widget-rss',
				'label'        => __( 'Sidebar Widget', 'ikreate-fse' ),
				/*
				 * Styles for the custom Sidebar Widget list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				.is-style-sidebar-widget-rss.wp-block-rss{
					padding: 0;
					list-style-type: none;
				}
				.is-style-sidebar-widget-rss.wp-block-rss li{
					padding: 10px;
					background-color: var(--wp--preset--color--wwhite);
					border-radius: 5px;
					line-height: 1.5;
					margin-bottom: 10px;
					list-style-type: none;
				}
				.is-style-sidebar-widget-rss.wp-block-rss li:hover{
					background-color: var(--wp--preset--color--primary);
					color:var(--wp--preset--color--wwhite);
				}
				.is-style-sidebar-widget-rss.wp-block-rss li:hover a{
					color:var(--wp--preset--color--white);
				}',
			)
		);

		/** List **/
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => esc_html__( 'Check Mark', 'ikreate-fse' ),
				/*
				 * Styles for the custom checkmark list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				.is-style-checkmark-list .block-editor-block-list__block{
					display: flex;
				}
				.is-style-checkmark-list .block-editor-block-list__block:before{
					color: var(--wp--preset--color--primary);
				}
				.editor-styles-wrapper ol.is-style-checkmark-list, 
				.editor-styles-wrapper ul.is-style-checkmark-list,
				ol.is-style-checkmark-list,
				ul.is-style-checkmark-list{
					padding: 0;
				}
				.is-style-checkmark-list li{
					margin-bottom: 5px;
					list-style: none;
					display: flex;
				}
				.is-style-checkmark-list li a{
					margin-left: 3px;
				}
				.is-style-checkmark-list li:before {
					content: "\f12a";
					font-family: "dashicons";
					color: var(--wp--preset--color--primary);
					margin-right: 5px;
				}',
			)
		);

		register_block_style(
			'core/list',
			array(
				'name'         => 'circle-list',
				'label'        => __( 'Circle List', 'ikreate-fse' ),
				/*
				 * Styles for the custom circle list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				.is-style-circle-list .block-editor-block-list__block{
					display: flex;
				}
				.is-style-circle-list .block-editor-block-list__block:before{
					color: var(--wp--preset--color--primary);
				}
				.editor-styles-wrapper ol.is-style-circle-list, 
				.editor-styles-wrapper ul.is-style-circle-list,
				ol.is-style-circle-list,
				ul.is-style-circle-list{
					padding: 0;
				}
				.is-style-circle-list li{
					margin-bottom: 5px;
					list-style: none;
					display: flex;
				}
				.is-style-circle-list li a{
					margin-left: 3px;
				}
				.is-style-circle-list li:before {
					content: "\f159";
					font-family: "dashicons";
					color: var(--wp--preset--color--primary);
					margin-right: 5px;
				}',
			)
		);

		register_block_style(
			'core/list',
			array(
				'name'         => 'sidebar-widget',
				'label'        => __( 'Sidebar Widget', 'ikreate-fse' ),
				/*
				 * Styles for the custom Sidebar Widget list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				.editor-styles-wrapper ol.is-style-sidebar-widget, 
				.editor-styles-wrapper ul.is-style-sidebar-widget{
					padding: 0;
					margin: 0;
					list-style-type: none;
				}
				.is-style-sidebar-widget li{
					padding: 10px;
					background-color: var(--wp--preset--color--wwhite);
					border-radius: 5px;
					line-height: 1.5;
					margin-bottom: 10px;
					list-style-type: none;
				}
				.is-style-sidebar-widget li:hover{
					background-color: var(--wp--preset--color--primary);
					color:var(--wp--preset--color--wwhite);
				}',
			)
		);

		/** Button */
		register_block_style(
			'core/button',
			array(
				'name'         => 'primary-button',
				'label'        => esc_html__( 'Primary Button', 'ikreate-fse' ),
				'inline_style' => '
				.wp-block-button .wp-block-button__link.is-style-outline, 
				.wp-block-button.is-style-outline>.wp-block-button__link {
					padding: 20px 32px;
					cursor: pointer;
				}
				.wp-block-button .wp-block-button__link.is-style-outline:not(.has-text-color), 
				.wp-block-button.is-style-outline>.wp-block-button__link:not(.has-text-color){
					color: var(--wp--preset--color--primary);
				}

				.wp-block-button.is-style-primary-button .wp-block-button__link,
				.editor-styles-wrapper .is-style-primary-button.wp-block-button .wp-block-button__link {
					overflow: hidden;
					position: relative;
					z-index: 1;
					vertical-align: middle;
					padding-right:55px;
					cursor: pointer;
				}
				
				.is-style-primary-button .wp-block-button__link::after {
					content: "\f344";
					position: absolute;
					margin-left: 5px;
					font-family: "dashicons";
				}

				.wp-block-button.is-style-primary-button .wp-block-button__link:before,
				.editor-styles-wrapper .is-style-primary-button.wp-block-button .wp-block-button__link:before {
					content: "";
					position: absolute;
					z-index: -1;
					background-color: var(--wp--preset--color--secondary);
					left: auto;
					right: 0;
					top: 0;
					height: 100%;
					width: 0;
					-webkit-transition: all ease 0.4s;
					-o-transition: all ease 0.4s;
					transition: all ease 0.4s;
				}
				
				.wp-block-button.is-style-primary-button .wp-block-button__link:hover,
				.editor-styles-wrapper .is-style-primary-button.wp-block-button .wp-block-button__link:hover {
					color: var(--wp--preset--color--white);
				}
				
				.wp-block-button.is-style-primary-button .wp-block-button__link:hover:before,
				.editor-styles-wrapper .is-style-primary-button.wp-block-button .wp-block-button__link:hover:before {
					width: 101%;
					right: auto;
					left: 0;
				}',
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'         => 'secondary-button',
				'label'        => esc_html__( 'Secondary Button', 'ikreate-fse' ),
				'inline_style' => '
				.wp-block-button.is-style-secondary-button .wp-block-button__link,
				.editor-styles-wrapper .is-style-secondary-button.wp-block-button .wp-block-button__link {
					overflow: hidden;
					position: relative;
					z-index: 1;
					vertical-align: middle;
					padding-right:55px;
					cursor: pointer;
					background-color: var(--wp--preset--color--white);
					color: var(--wp--preset--color--primary);
					border: 2px solid var(--wp--preset--color--primary);
					padding: 18px 55px 18px 30px;
				}
				
				.is-style-secondary-button .wp-block-button__link::after {
					content: "\f344";
					position: absolute;
					margin-left: 5px;
					font-family: "dashicons";
				}

				.wp-block-button.is-style-secondary-button .wp-block-button__link:before,
				.editor-styles-wrapper .is-style-secondary-button.wp-block-button .wp-block-button__link:before {
					content: "";
					position: absolute;
					z-index: -1;
					background-color: var(--wp--preset--color--secondary);
					left: auto;
					right: 0;
					top: 0;
					height: 100%;
					width: 0;
					-webkit-transition: all ease 0.4s;
					-o-transition: all ease 0.4s;
					transition: all ease 0.4s;
				}
				
				.wp-block-button.is-style-secondary-button .wp-block-button__link:hover,
				.editor-styles-wrapper .is-style-secondary-button.wp-block-button .wp-block-button__link:hover {
					color: var(--wp--preset--color--white);
				}
				
				.wp-block-button.is-style-secondary-button .wp-block-button__link:hover:before,
				.editor-styles-wrapper .is-style-secondary-button.wp-block-button .wp-block-button__link:hover:before {
					width: 101%;
					right: auto;
					left: 0;
				}',
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'         => 'no-border',
				'label'        => esc_html__( 'No Border', 'ikreate-fse' ),
				'inline_style' => '
				.wp-block-button.is-style-no-border .wp-block-button__link,
				.editor-styles-wrapper .is-style-no-border.wp-block-button .wp-block-button__link {
					overflow: hidden;
					position: relative;
					z-index: 1;
					vertical-align: middle;
					cursor: pointer;
					background-color: transparent;
					color: var(--wp--preset--color--black);
					padding: 0 25px 0 0;
				}
				
				.is-style-no-border .wp-block-button__link::after {
					content: "\f344";
					position: absolute;
					margin-left: 5px;
					font-family: "dashicons";
				}

				.wp-block-button.is-style-no-border .wp-block-button__link:hover,
				.editor-styles-wrapper .is-style-no-border.wp-block-button .wp-block-button__link:hover {
					color: var(--wp--preset--color--secondary);
				}',
			)
		);

		register_block_style(
			'core/button',
			array(
				'name'         => 'video',
				'label'        => esc_html__( 'Video Icon', 'ikreate-fse' ),
				'inline_style' => '
				.wp-block-button.is-style-video .wp-block-button__link,
				.editor-styles-wrapper .is-style-video.wp-block-button .wp-block-button__link {
					position: relative;
					z-index: 99;
					width: 65px;
					height: 65px;
					font-size: 25px;
					color: var(--wp--preset--color--white);
					text-align: center;
					background: var(--wp--preset--color--primary);
					border-radius: 50%;
					font-size:0;
					display: inline-flex;
					align-items: center;
					justify-content: center;
					box-shadow: 0 0 16px rgba(19, 143, 129, 0.9);
				}
				.is-style-video .wp-block-button__link::before {
					position: absolute;
					content: "";
					top: -2px;
					bottom: -2px;
					left: -2px;
					right: -2px;
					border-radius: 50%;
					box-shadow: 0 0 rgba(2, 188, 135, 0.2), 0 0 0 16px rgba(2, 188, 135, 0.2), 0 0 0 32px rgba(2, 188, 135, 0.2), 0 0 0 48px rgba(2, 188, 135, 0.2);
					animation: ripples 1s linear infinite;
					animation-play-state: running;
					opacity: 1;
					visibility: visible;
					transform: scale(0.6);
					z-index: 0;
				}
				
				.is-style-video .wp-block-button__link::after {
					content: "\f235";
					position: absolute;
					font-family: "dashicons";
					font-size: 25px;
				}

				.wp-block-button.is-style-video .wp-block-button__link:hover,
				.editor-styles-wrapper .is-style-video.wp-block-button .wp-block-button__link:hover {
					box-shadow: 0px 4px 10px var(--wp--preset--color--secondary);
					background-color: var(--wp--preset--color--secondary);
				}
				.wp-block-button.is-style-video .wp-block-button__link:hover:before,
				.editor-styles-wrapper .is-style-video.wp-block-button .wp-block-button__link:hover:before {
					animation-play-state: paused;
					opacity: 0;
					visibility: hidden;
					transition: 0.3s;
				}',
			)
		);

		/** Read More */
		register_block_style(
			'core/read-more',
			array(
				'name'         => 'primary-button',
				'label'        => esc_html__( 'Primary Button', 'ikreate-fse' ),
				'inline_style' => '
				.is-style-primary-button.wp-block-read-more{
					overflow: hidden;
					position: relative;
					z-index: 1;
					vertical-align: middle;
					padding-right:55px;
					cursor: pointer;
					background: var(--wp--preset--color--primary);
					color: var(--wp--preset--color--white);
				}
				.is-style-primary-button.wp-block-read-more::after {
					content: "\f344";
					position: absolute;
					margin-left: 5px;
					font-family: "dashicons";
				}
				.is-style-primary-button.wp-block-read-more:before{
					content: "";
					position: absolute;
					z-index: -1;
					background-color: var(--wp--preset--color--secondary);
					left: auto;
					right: 0;
					top: 0;
					height: 100%;
					width: 0;
					-webkit-transition: all ease 0.4s;
					-o-transition: all ease 0.4s;
					transition: all ease 0.4s;
				}
				.is-style-primary-button.wp-block-read-more:hover{
					color: var(--wp--preset--color--white);
				}
				.is-style-primary-button.wp-block-read-more:hover:before{
					width: 101%;
					right: auto;
					left: 0;
				}',
			)
		);

		register_block_style(
			'core/read-more',
			array(
				'name'         => 'secondary-button',
				'label'        => esc_html__( 'Secondary Button', 'ikreate-fse' ),
				'inline_style' => '

				.is-style-secondary-button.wp-block-read-more{
					overflow: hidden;
					position: relative;
					z-index: 1;
					padding-right:55px;
					cursor: pointer;
					background-color: var(--wp--preset--color--white);
					color: var(--wp--preset--color--primary);
					border: 1px solid var(--wp--preset--color--primary);
				}
				
				.is-style-secondary-button.wp-block-read-more::after {
					content: "\f344";
					position: absolute;
					margin-left: 5px;
					font-family: "dashicons";
				}

				.is-style-secondary-button.wp-block-read-more:before {
					content: "";
					position: absolute;
					z-index: -1;
					background-color: var(--wp--preset--color--secondary);
					left: auto;
					right: 0;
					top: 0;
					height: 100%;
					width: 0;
					-webkit-transition: all ease 0.4s;
					-o-transition: all ease 0.4s;
					transition: all ease 0.4s;
				}
				
				.is-style-secondary-button.wp-block-read-more:hover {
					color: var(--wp--preset--color--white);
				}
				
				.is-style-secondary-button.wp-block-read-more:hover:before {
					width: 101%;
					right: auto;
					left: 0;
				}',
			)
		);

		register_block_style(
			'core/read-more',
			array(
				'name'         => 'no-border',
				'label'        => esc_html__( 'No Border', 'ikreate-fse' ),
				'inline_style' => '

				.is-style-no-border.wp-block-read-more{
					overflow: hidden;
					position: relative;
					z-index: 1;
					vertical-align: middle;
					cursor: pointer;
					background-color: transparent;
					color: var(--wp--preset--color--black);
					border: 0;
				}
				
				.is-style-no-border.wp-block-read-more::after {
					content: "\f344";
					position: absolute;
					margin-left: 5px;
					font-family: "dashicons";
				}

				.is-style-no-border.wp-block-read-more:hover {
					color: var(--wp--preset--color--secondary);
					box-shadow: none;
				}',
			)
		);
	}
}

add_action( 'enqueue_block_editor_assets', 'ikreate_fse_editor_assets' );

function ikreate_fse_editor_assets() {
	wp_enqueue_script(
		'ikreatefse-block-variations',
		get_parent_theme_file_uri( 'assets/js/block-variations.js' ),
		array( 
			'wp-blocks', 
			'wp-dom-ready',
			'wp-i18n'
		),
		wp_get_theme()->get( 'Version' ),
		true
	);
	
	wp_enqueue_style( 
		'ikreatefse-block-variations', 
		get_parent_theme_file_uri('assets/css/block-variations.css'),
		wp_get_theme()->get( 'Version' ),
		true
	);
} 


if ( ! function_exists( 'ikreate_fse_footer_copyright' ) ){

    /**
     * Footer Copyright Information
     *
     * @since 1.0.0
     */
    function ikreate_fse_footer_copyright() {

        echo esc_html( apply_filters( 'ikreate_fse_copyright_text', $content = esc_html__('Copyright  &copy; ','ikreate-fse') . date( 'Y' ) . ' ' . get_bloginfo( 'name' ) .' - ' ) );

         printf( ' WordPress Theme Developed by %1$s', '<a href=" ' . esc_url('https://ikreatethemes.com/') . ' " rel="designer" target="_blank">'.esc_html__('Ikreate Themes','ikreate-fse').'</a>' );
    }
}
add_action( 'ikreate_fse_footer_copyright', 'ikreate_fse_footer_copyright', 55 );