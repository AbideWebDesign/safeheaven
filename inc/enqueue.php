<?php
/**
 * safehaven enqueue scripts
 *
 * @package safehaven
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'safehaven_scripts' ) ) {
	/**
	 * Load theme's JavaScript and CSS sources.
	 */
	function safehaven_scripts() {
		// Get the theme data.
		$the_theme     = wp_get_theme();
		$theme_version = $the_theme->get( 'Version' );

		$css_version = $theme_version . '.' . filemtime( get_template_directory() . '/css/theme.min.css' );
		wp_enqueue_style( 'safehaven-styles', get_template_directory_uri() . '/css/theme.min.css', array(), $css_version );
		wp_enqueue_style( 'safehaven-fonts', 'https://fonts.googleapis.com/css2?family=Oswald:wght@700&family=PT+Sans:wght@400;700&display=swap', array() );
		

		wp_enqueue_script( 'jquery' );

		$js_version = $theme_version . '.' . filemtime( get_template_directory() . '/js/theme.min.js' );
		wp_enqueue_script( 'safehaven-scripts', get_template_directory_uri() . '/js/theme.min.js', array(), $js_version, true );
		wp_enqueue_script( 'safehaven-scripts-core', get_template_directory_uri() . '/js/core-min.js', array(), $js_version, true );
	}
} // endif function_exists( 'safehaven_scripts' ).

add_action( 'wp_enqueue_scripts', 'safehaven_scripts' );
