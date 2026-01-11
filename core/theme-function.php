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

		$ikreate_fse_pattern_categories = array(
			'ikreate-fse' => array( 'label' => esc_html__( 'Ikreate FSE', 'ikreate-fse' ) )
		);

		/**
		 * Filters the theme block pattern categories.
		 *
		 * @since Ikreate FSE 1.0.0
		 *
		 * @param array[] $ikreate_fse_pattern_categories {
		 *     An associative array of block pattern categories, keyed by category name.
		 *
		 *     @type array[] $properties {
		 *         An array of block category properties.
		 *
		 *         @type string $label A human-readable label for the pattern category.
		 *     }
		 * }
		 */
		$ikreate_fse_pattern_categories = apply_filters( 'ikreate_fse_block_pattern_categories', $ikreate_fse_pattern_categories );

		foreach ( $ikreate_fse_pattern_categories as $name => $properties ) {

			if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {

				register_block_pattern_category( $name, $properties );
			}
		}

		/** Navigation List */
		register_block_style(
			'core/navigation',
			array(
				'name'         => 'checkmark-widget-navigation',
				'label'        => esc_html__( 'Checkmark Navigation', 'ikreate-fse' ),
				/*
				 * Styles for the custom Sidebar Widget list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				.is-style-checkmark-widget-navigation .wp-block-navigation .wp-block-navigation-item{
					margin-bottom: 10px;
					width: 100%;
				}
				.is-style-checkmark-widget-navigation .wp-block-navigation .wp-block-navigation-item a{
					display: flex;
					font-weight: normal;
					color: var(--wp--preset--color--primary);
				}
				.is-style-checkmark-widget-navigation .wp-block-navigation .wp-block-navigation-item a:before {
					content: "\f12a";
					font-family: "dashicons";
					color: var(--wp--preset--color--primary);
					margin-right: 6px;
				}
				.is-style-checkmark-widget-navigation .wp-block-navigation .wp-block-navigation-item:hover a,
				.is-style-checkmark-widget-navigation .wp-block-navigation .wp-block-navigation-item:hover :before{
					color: var(--wp--preset--color--secondary);
				}',
			)
		);

		register_block_style(
			'core/navigation',
			array(
				'name'         => 'sidebar-widget-navigation',
				'label'        => esc_html__( 'Sidebar Navigation', 'ikreate-fse' ),
				/*
				 * Styles for the custom Sidebar Widget list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				.is-style-sidebar-widget-navigation .wp-block-navigation .wp-block-navigation-item{
					padding: 10px;
					background-color: var(--wp--preset--color--white);
					color: var(--wp--preset--color--primary);
					border-radius: 5px;
					line-height: 1.5;
					margin-bottom: 10px;
					list-style-type: none;
					width: 100%;
					font-weight: normal;
				}
				.is-style-sidebar-widget-navigation .wp-block-navigation .wp-block-navigation-item:hover{
					background-color: var(--wp--preset--color--primary);
    				color: var(--wp--preset--color--white);
				}',
			)
		);

		/** Category List */
		register_block_style(
			'core/categories',
			array(
				'name'         => 'sidebar-widget-categories',
				'label'        => esc_html__( 'Sidebar Widget', 'ikreate-fse' ),
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
					background-color: var(--wp--preset--color--white);
					border-radius: 5px;
					line-height: 1.5;
					margin-bottom: 10px;
					list-style-type: none;
				}
				.is-style-sidebar-widget-categories.wp-block-categories-list li:hover{
					background-color: var(--wp--preset--color--primary);
					color:var(--wp--preset--color--white);
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
				'label'        => esc_html__( 'Sidebar Widget', 'ikreate-fse' ),
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
					background-color: var(--wp--preset--color--white);
					border-radius: 5px;
					line-height: 1.5;
					margin-bottom: 10px;
					list-style-type: none;
				}
				.is-style-sidebar-widget-archives .wp-block-archives-list li:hover,
				.is-style-sidebar-widget-archives.wp-block-archives-list li:hover{
					background-color: var(--wp--preset--color--primary);
					color:var(--wp--preset--color--white);
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
				'label'        => esc_html__( 'Sidebar Widget', 'ikreate-fse' ),
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
					background-color: var(--wp--preset--color--white);
					border-radius: 5px;
					line-height: 1.5;
					margin-bottom: 10px;
					list-style-type: none;
				}
				.is-style-sidebar-widget-page.wp-block-page-list li:hover{
					background-color: var(--wp--preset--color--primary);
					color:var(--wp--preset--color--white);
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
				'label'        => esc_html__( 'Sidebar Widget', 'ikreate-fse' ),
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
					background-color: var(--wp--preset--color--white);
					border-radius: 5px;
					line-height: 1.5;
					margin-bottom: 10px;
					list-style-type: none;
				}
				.is-style-sidebar-widget-latest-posts.wp-block-latest-posts li:hover{
					background-color: var(--wp--preset--color--primary);
					color:var(--wp--preset--color--white);
				}
				.is-style-sidebar-widget-latest-posts.wp-block-latest-posts li:hover a{
					color:var(--wp--preset--color--white);
				}',
			)
		);

		/** RSS Post List */
		register_block_style(
			'core/rss',
			array(
				'name'         => 'sidebar-widget-rss',
				'label'        => esc_html__( 'Sidebar Widget', 'ikreate-fse' ),
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
					background-color: var(--wp--preset--color--white);
					border-radius: 5px;
					line-height: 1.5;
					margin-bottom: 10px;
					list-style-type: none;
				}
				.is-style-sidebar-widget-rss.wp-block-rss li:hover{
					background-color: var(--wp--preset--color--primary);
					color:var(--wp--preset--color--white);
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
					margin-bottom: 6px;
					list-style: none;
					display: flex;
				}
				.is-style-checkmark-list li:before {
					content: "\f12a";
					font-family: "dashicons";
					color: var(--wp--preset--color--primary);
					margin-right: 6px;
				}',
			)
		);

		register_block_style(
			'core/list',
			array(
				'name'         => 'circle-list',
				'label'        => esc_html__( 'Circle List', 'ikreate-fse' ),
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
					margin-bottom: 6px;
					list-style: none;
					display: flex;
				}
				.is-style-circle-list li:before {
					content: "\f159";
					font-family: "dashicons";
					color: var(--wp--preset--color--primary);
					margin-right: 6px;
				}',
			)
		);

		register_block_style(
			'core/list',
			array(
				'name'         => 'sidebar-widget',
				'label'        => esc_html__( 'Sidebar Widget', 'ikreate-fse' ),
				/*
				 * Styles for the custom Sidebar Widget list block style
				 * https://github.com/WordPress/gutenberg/issues/51480
				 */
				'inline_style' => '
				.editor-styles-wrapper ol.is-style-sidebar-widget, 
				.editor-styles-wrapper ul.is-style-sidebar-widget{
					padding: 0;
					list-style-type: none;
				}
				.is-style-sidebar-widget li{
					padding: 10px;
					background-color: var(--wp--preset--color--white);
					border-radius: 5px;
					line-height: 1.5;
					margin-bottom: 10px;
					list-style-type: none;
				}
				.is-style-sidebar-widget li:hover{
					background-color: var(--wp--preset--color--primary);
					color:var(--wp--preset--color--white);
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
					padding: 18px 35px;
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
					padding: 20px 55px 20px 30px;
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
					height: 70px;
					font-size: 25px;
					color: var(--wp--preset--color--white);
					text-align: center;
					background: var(--wp--preset--color--primary);
					border-radius: 50%;
					font-size:0;
					display: inline-flex;
					align-items: center;
					justify-content: center;
					box-shadow: 0 0 16px rgba(var(--wp--preset--color--primary), 0.9);
				}
				.is-style-video .wp-block-button__link::before {
					position: absolute;
					content: "";
					top: -2px;
					bottom: -2px;
					left: -2px;
					right: -2px;
					border-radius: 50%;
					box-shadow: 0 0 rgba(var(--wp--preset--color--primary), 0.2), 0 0 0 16px rgba(var(--wp--preset--color--primary), 0.2), 0 0 0 32px rgba(var(--wp--preset--color--primary), 0.2), 0 0 0 48px rgba(var(--wp--preset--color--primary), 0.2);
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
					font-size: 20px;
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
					padding: 18px 55px 18px 30px;
					border-radius: 5px;
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
					padding: 18px 55px 18px 30px;
					border-radius: 5px;
					cursor: pointer;
					background-color: var(--wp--preset--color--white);
					color: var(--wp--preset--color--primary);
					border: 2px solid var(--wp--preset--color--primary);
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
					border: 2px solid var(--wp--preset--color--secondary);
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
					padding-right: 30px;
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

add_action( 'enqueue_block_assets', 'ikreate_fse_editor_assets' );

if ( ! function_exists( 'ikreate_fse_editor_assets' ) ){
	function ikreate_fse_editor_assets() {
		wp_enqueue_style( 
			'ikreatefse-block-variations', 
			get_parent_theme_file_uri('assets/css/ikreatefse-variations.css'),
			wp_get_theme()->get( 'Version' ),
			true
		);
	} 
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


/**
 * Plugin Install Class
 * @version 1.1.1
 */
if (!function_exists('get_plugins')) {
	require_once ABSPATH . 'wp-admin/includes/plugin.php';
}

if ( ! class_exists( 'ikreatefse_Plugin' ) ) {
	
	class ikreatefse_Plugin {
		/**
		 * @var array
		 */
		private static $update_plugins = null;

		/**
		 * @var string
		 */
		private $slug = '';

		/**
		 * @var string
		 */
		private $plugin = '';

		/**
		 * @var null
		 */
		private $info = null;

		/**
		 * @var null
		 *
		 * @since 1.0.0
		 */
		private $data = null;

		/**
		 * @var array
		 */
		private $args = array();

		/**
		 * @var bool
		 */
		public $is_wporg = false;

		/**
		 * @var array
		 */
		private $messages = array();

		/**
		 * ikreatefse_Plugin constructor.
		 *
		 * @param string $slug
		 * @param        $is_wporg
		 *
		 * @since 1.1.1
		 *
		 */
		public function __construct( $slug = '', $is_wporg = false ) {
			$this->slug     = strtolower( $slug );
			$this->messages = array( esc_attr__( 'Something went wrong!', 'ikreate-fse' ) );

			if ( ! empty( $this->slug ) ) {
				$this->set_plugin_file();
			}

			$this->is_wporg = $is_wporg;
		}

		/**
		 * Get plugin updates.
		 *
		 * @return array|null
		 * @since 1.0.0
		 *
		 */
		private static function get_plugin_updates() {
			if ( self::$update_plugins == null ) {
				include_once ABSPATH . 'wp-admin/includes/update.php';
				self::$update_plugins = get_plugin_updates();
			}

			return self::$update_plugins;
		}

		/**
		 * Set plugin file.
		 *
		 * @return bool
		 * @since 0.4.0
		 *
		 */
		public function set_plugin_file() {
			$plugins_installed = get_plugins();

			if ( ! count( $plugins_installed ) ) {
				return false;
			}

			foreach ( $plugins_installed as $key => $value ) {
				if ( strpos( $key, $this->slug . '/' ) === 0 ) {

					$this->plugin = $key;

					return true;
				}
			}

			return false;
		}

		/**
		 * Set args.
		 *
		 * @param array $args
		 *
		 * @since 0.4.0
		 *
		 */
		public function set_args( array $args ) {
			$default    = array(
				'name' => '',
				'slug' => '',
			);
			$this->args = wp_parse_args( $args, $default );

			$source = isset( $args['source'] ) ? $args['source'] : false;

			if ( ! $source || $source === 'repo' ) {
				$this->is_wporg = true;
			}

			$this->slug = $this->args['slug'];
			$this->set_plugin_file();
		}

		/**
		 * Install plugin.
		 *
		 * @return bool
		 * @since 0.4.0
		 *
		 */
		public function install() {
			$status = $this->get_status();

			if ( $status !== 'not_installed' ) {
				return false;
			}

			if ( $this->is_wporg ) {
				return $this->install_form_wporg();
			}

			$source = $this->args['source'];

			return $this->install_by_local_file( $source );
		}

		/**
		 * Check can update?
		 *
		 * @return bool
		 * @since 1.0.0
		 *
		 */
		public function can_update() {
			$plugin_updates = self::get_plugin_updates();

			foreach ( $plugin_updates as $key => $plugin_update ) {
				$plugin_file = $this->get_plugin_file();

				if ( $key == $plugin_file ) {
					return true;
				}
			}

			return false;
		}

		/**
		 * Get messages.
		 *
		 * @return array
		 * @since 0.8.4
		 *
		 */
		public function get_messages() {
			return $this->messages;
		}

		/**
		 * Get plugin file. Ex: thim-core/thim-core.php
		 *
		 * @return string
		 * @since 0.4.0
		 *
		 */
		public function get_plugin_file() {
			return $this->plugin;
		}

		/**
		 * Get is active.
		 *
		 * @return bool
		 * @since 0.4.0
		 *
		 */
		public function is_active() {
			return in_array( $this->plugin, (array) get_option( 'active_plugins', array() ) ) || is_plugin_active_for_network( $this->plugin );
		}

		/**
		 * Get is active network.
		 *
		 * @return bool
		 * @since 0.8.0
		 *
		 */
		public function is_active_network() {
			return is_plugin_active_for_network( $this->plugin );
		}

		/**
		 * Get slug plugin.
		 *
		 * @return string
		 * @since 0.4.0
		 *
		 */
		public function get_slug() {
			return $this->slug;
		}

		/**
		 * Get name plugin.
		 *
		 * @return bool|mixed
		 * @since 0.5.0
		 *
		 */
		public function get_name() {
			$args = $this->args;
			$name = ! empty( $args['name'] ) ? $args['name'] : false;

			return $name;
		}

		/**
		 * Get url plugin.
		 *
		 * @return bool|string
		 * @since 1.0.0
		 *
		 */
		public function get_url() {
			$args = $this->args;
			$url  = ! empty( $args['url'] ) ? $args['url'] : false;

			if ( $url ) {
				return $url;
			}

			$info = $this->get_info();

			return ! empty( $info['PluginURI'] ) ? $info['PluginURI'] : false;
		}

		/**
		 * Get source plugin (path zip file).
		 *
		 * @return bool|string
		 * @since 1.0.0
		 *
		 */
		public function get_source() {
			$args = $this->args;

			return ! empty( $args['source'] ) ? $args['source'] : false;
		}

		/**
		 * Get description plugin.
		 *
		 * @return bool|mixed
		 * @since 1.0.0
		 *
		 */
		public function get_description() {
			$info = $this->get_info();

			$description = ! empty( $info['Description'] ) ? $info['Description'] : false;
			if ( $description ) {
				return $description;
			}

			$arg         = $this->args;
			$description = ! empty( $arg['description'] ) ? $arg['description'] : false;
			if ( $description ) {
				return $description;
			}

			return false;
		}

		/**
		 * Get require version.
		 *
		 * @return bool|string
		 * @since 1.0.0
		 *
		 */
		public function get_require_version() {
			$args = $this->args;

			return ! empty( $args['version'] ) ? $args['version'] : false;
		}

		/**
		 * Get current version.
		 *
		 * @return bool|string
		 * @since 1.0.0
		 *
		 */
		public function get_current_version() {
			$info = $this->get_info();

			return ! empty( $info['Version'] ) ? $info['Version'] : false;
		}

		/**
		 * Is require plugin.
		 *
		 * @return bool
		 * @since 0.8.7
		 *
		 */
		public function is_required() {
			$args        = $this->args;
			$is_required = ! empty( $args['required'] ) ? $args['required'] : false;

			return $is_required;
		}

		/**
		 * Get plugin status
		 *
		 * @return string
		 * @since 0.4.0
		 *
		 */
		public function get_status() {
			if ( empty( $this->plugin ) ) {
				return 'not_installed';
			}

			$file_plugin = WP_PLUGIN_DIR . '/' . $this->plugin;

			if ( ! file_exists( $file_plugin ) ) {
				return 'not_installed';
			}

			$is_active = $this->is_active();
			if ( ! $is_active ) {
				return 'inactive';
			}

			return 'active';
		}

		/**
		 * Get text status.
		 *
		 * @return mixed|string
		 * @since 0.8.5
		 *
		 */
		public function get_text_status() {
			$arrText = array(
				'active'        => esc_attr__( 'Active', 'ikreate-fse' ),
				'inactive'      => esc_attr__( 'Inactive', 'ikreate-fse' ),
				'not_installed' => esc_attr__( 'Not Installed', 'ikreate-fse' )
			);

			$status = $this->get_status();

			if ( isset( $arrText[$status] ) ) {
				return $arrText[$status];
			}

			return '';
		}

		/**
		 * Get url icon plugin.
		 *
		 * @return bool|string
		 * @since 0.5.0
		 *
		 */
		public function get_icon() {
			$args = $this->args;
			$icon = ! empty( $args['icon'] ) ? $args['icon'] : false;

			return $icon;
		}

		/**
		 * Get array args.
		 *
		 * @return array
		 * @since 0.5.0
		 *
		 */
		public function toArray() {
			return array(
				'slug'   => $this->get_slug(),
				'name'   => $this->get_name(),
				'status' => $this->get_status()
			);
		}

		/**
		 * Activate plugin.
		 *
		 * @param bool $silent
		 * @param bool $network_wide
		 *
		 * @return bool
		 * @since 0.4.0
		 *
		 */
		public function activate( $silent = null, $network_wide = false ) {
			$status = $this->get_status();

			if ( $status == 'not_installed' ) {
				return false;
			}

			$is_active_network = $this->is_active_network();
			if ( $is_active_network ) {
				return false;
			}

			if ( ! $network_wide && $status == 'active' ) {
				return false;
			}

			if ( $silent === null || isset( $this->args['silent'] ) ) {
				$args   = $this->args;
				$silent = $args['silent'];
			}

			$plugin = $this->plugin;

			$result = activate_plugin( $plugin, $redirect = '', $network_wide, $silent );

			$recent = (array) get_option( 'recently_activated' );
			unset( $recent[$plugin] );
			update_option( 'recently_activated', $recent );

			if ( is_wp_error( $result ) ) {
				return false;
			}

			return true;
		}

		/**
		 * Deactivate plugin.
		 *
		 * @return bool
		 * @since 0.4.0
		 *
		 */
		public function deactivate() {
			$plugin = $this->plugin;
			deactivate_plugins( $plugin );

			update_option( 'recently_activated', array( $plugin => time() ) + (array) get_option( 'recently_activated' ) );

			return true;
		}

		/**
		 * Get plugin is form wporg.
		 *
		 * @return bool
		 * @since 0.4.0
		 *
		 */
		public function is_wporg() {
			return $this->is_wporg;
		}

		/**
		 * Is add-on plugin.
		 *
		 * @since 0.8.6
		 */
		public function is_add_on() {
			$args      = $this->args;
			$is_add_on = ! empty( $args['add-on'] ) ? $args['add-on'] : false;

			return $is_add_on;
		}

		/**
		 * Get info plugin.
		 *
		 * @return array|bool
		 * @since 0.4.0
		 *
		 */
		public function get_info() {
			if ( $this->data !== null ) {
				return $this->data;
			}

			if ( empty( $this->plugin ) ) {
				return false;
			}

			$plugin_file = WP_PLUGIN_DIR . DIRECTORY_SEPARATOR . $this->plugin;

			if ( ! file_exists( $plugin_file ) ) {
				return false;
			}

			$this->data = get_plugin_data( $plugin_file );

			return $this->data;
		}

		/**
		 * Install plugin from wp.org
		 *
		 * @return bool
		 * @since 0.4.0
		 *
		 */
		public function install_form_wporg() {
			$info = $this->get_info_wporg();

			if ( ! $info ) {
				return false;
			}

			$download_link = $info['download_link'];

			$install = $this->wp_install( $download_link );

			return $install;
		}

		/**
		 * Install plugin by zip file.
		 *
		 * @param $file_path
		 *
		 * @return bool
		 * @since 0.4.0
		 *
		 */
		public function install_by_local_file( $file_path ) {
			return $this->wp_install( $file_path );
		}

		/**
		 * Get info plugin from wporg.
		 *
		 * @return array|bool
		 * @since 0.4.0
		 *
		 */
		public function get_info_wporg() {
			if ( ! $this->is_wporg() ) {
				return false;
			}

			if ( $this->info ) {
				return $this->info;
			}

			include_once( ABSPATH . 'wp-admin/includes/plugin-install.php' );

			$api = plugins_api(
				'plugin_information', array(
				'slug' => $this->slug,
			)
			);

			if ( is_wp_error( $api ) ) {
				return false;
			}

			$this->info = (array) $api;

			return $this->get_info_wporg();
		}

		/**
		 * Install plugin by uri or local path.
		 *
		 * @param $package
		 *
		 * @return bool
		 * @since 0.8.4
		 *
		 */
		public function wp_install( $package ) {
			include_once( ABSPATH . 'wp-admin/includes/class-wp-upgrader.php' );
			include_once( ABSPATH . 'wp-admin/includes/plugin-install.php' );

			$skin            = new WP_Ajax_Upgrader_Skin();
			$plugin_upgrader = new Plugin_Upgrader( $skin );
			$result          = $plugin_upgrader->install( $package );
			$messages        = $skin->get_upgrade_messages();

			$this->messages = $messages;

			if ( is_wp_error( $result ) ) {
				return false;
			}

			return (bool) $result;
		}

		/**
		 * Update plugin.
		 *
		 * @return bool
		 * @since 0.8.4
		 *
		 */
		public function update() {
			do_action( 'ikreatefse_core_pre_upgrade_plugin', $this );

			include_once ABSPATH . 'wp-admin/includes/class-wp-upgrader.php';
			$skin     = new WP_Ajax_Upgrader_Skin();
			$upgrader = new Plugin_Upgrader( $skin );
			$plugin   = $this->get_plugin_file();
			$result   = $upgrader->bulk_upgrade( array( $plugin ) );

			$this->messages = $skin->get_upgrade_messages();

			if ( is_wp_error( $result ) ) {
				return false;
			}

			return (bool) $result;
		}
	}
}