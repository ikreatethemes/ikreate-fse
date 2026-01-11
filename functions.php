<?php
/**
 * Ikreate FSE functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Ikreate FSE
 */

 if ( ! defined( 'IKREATE_FSE_VERSION' ) ) {

	// Replace the version number of the theme on each release.
	define( 'IKREATE_FSE_VERSION', wp_get_theme()->get( 'Version' ) );
}

add_action( 'after_setup_theme', 'ikreate_fse_theme_support' );

if ( ! function_exists( 'ikreate_fse_theme_support' ) ) {
	/**
	 * General Theme Settings.
	 *
	 * @since v1.0.0
	 *
	 * @return void
	*/
	function ikreate_fse_theme_support() {

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Ikreate FSE, use a find and replace
		 * to change 'ikreate-fse' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ikreate-fse', get_template_directory() . '/languages' );

		// Add support for Post thumbnails.
		add_theme_support( 'post-thumbnails' );

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'align-wide' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for Editor Styles.
		add_theme_support( 'editor-styles' );

		// Experimental support for adding blocks inside nav menus
		add_theme_support( 'block-nav-menus' );

		// Add support for experimental link color control.
		add_theme_support( 'experimental-link-color' );

		//Register the block patterns and block patterns categories
		add_theme_support( 'core-block-patterns' );

	}

}


if ( ! function_exists( 'ikreate_fse_ikreatethemes_fonts_url' ) ) :
	/**
	 * Register Google fonts for Ikreate FSE
	 *
	 * Create your own ikreate_fse_ikreatethemes_fonts_url() function to override in a child theme.
	 *
	 * @since 1.0
	 *
	 * @return string Google fonts URL for the theme.
	 */
	function ikreate_fse_ikreatethemes_fonts_url() {

		$fonts_url = '';

		/* Translators: If there are characters in your language that are not
		* supported by Poppins, translate this to 'off'. Do not translate
		* into your own language.
		*/
		$font_families = array( 
			'Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap', 
			'Oswald:wght@200;300;400;500;600;700&display=swap', 
			'Lato:wght@100;300;400;700;900&display=swap',
			'Open+Sans:wght@300;400;500;600;700;800&display=swap',
			'Roboto+Condensed:wght@100;200;300;400;500;600;700;800;900&display=swap',
			'Arizonia&display=swap',
			'Exo:wght@100;200;300;400;500;600;700;800;900&display=swap'
		);

		if ( ! empty( $font_families ) ) {

			$query_args = array(
				'family' => implode( '&family=', $font_families ), 
				'display' => 'swap',
			);

			$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css2' );
		}

		if ( ! class_exists( 'WPTT_WebFont_Loader' ) ) {
			// Load Google fonts from Local.
			require_once get_theme_file_path( 'core/wptt-webfont-loader.php' );
		}

		return esc_url( wptt_get_webfont_url( $fonts_url ) );
	}
endif;


add_action( 'wp_enqueue_scripts', 'ikreate_fse_ikreatethemes_load_scripts' );

if ( ! function_exists( 'ikreate_fse_ikreatethemes_load_scripts' ) ) {
	/**
	 * Enqueue CSS Stylesheets and Javascript files.
	 *
	 * @return void
	 */
	function ikreate_fse_ikreatethemes_load_scripts() {

		// Default Icon Fonts 
		wp_enqueue_style( 'dashicons' );

		// Google Api Fonts Family
		wp_enqueue_style( 'ikreatefse-fonts', ikreate_fse_ikreatethemes_fonts_url(), array(), null );

		//Styles.
		wp_enqueue_style( 'ikreatefse-style', get_stylesheet_uri(), date( 'Ymd-Gis', filemtime( get_theme_file_path( 'style.css' ) ) ), IKREATE_FSE_VERSION );

		// Scripts.
		wp_enqueue_script( 'ikreatefse-js', get_template_directory_uri(). '/assets/js/ikreatefse.js', array(), IKREATE_FSE_VERSION, true );
	}
}


// add_action( 'ikreate-fse-pro-link', function() {
// 	return "https://ikreatethemes.com/wordpress-themes/ikreate-fse/";
// } );


add_action( 'admin_init', 'ikreate_fse_ikreatethemes_editor_styles' );

if ( ! function_exists( 'ikreate_fse_ikreatethemes_editor_styles' ) ) :

	function ikreate_fse_ikreatethemes_editor_styles() {
		/**
		 * Enqueue editorCSS Stylesheets and Javascript files.
		 *
		 * @return void
		*/
		add_editor_style(
			array(
				ikreate_fse_ikreatethemes_fonts_url(),
			)
		);
	}
endif;



add_filter( 'body_class', 'ikreate_fse_ikreatethemes_add_default_mode_body_class' );

if ( ! function_exists( 'ikreate_fse_ikreatethemes_add_default_mode_body_class' ) ) :

	function ikreate_fse_ikreatethemes_add_default_mode_body_class( array $classes ): array {
		/**
		 * Adds default mode body class.
		 *
		 * @param array $classes Array of body classes.
		 *
		 * @since 1.0.0
		 *
		 * @return array
		 */
		$global_settings = wp_get_global_settings();
		
		// print_r($global_settings) ; exit;
		$dark_mode       = $global_settings['custom']['darkMode'] ?? [];

		$light_mode      = $global_settings['custom']['lightMode'] ?? [];
		
		$classes[]       = $light_mode && ! $dark_mode ? 'default-mode-light' : 'default-mode-dark';

		return $classes;
	}
endif;


/**
 * Load core file.
*/
require_once get_template_directory() . '/core/init.php';