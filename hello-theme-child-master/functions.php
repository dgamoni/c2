<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts' );


/**
 * Add Font Group
 */
add_filter( 'elementor/fonts/groups', function( $font_groups ) {
	$font_groups['theme_fonts'] = __( 'Theme Fonts' );
	return $font_groups;
} );

/**
 * Add Group Fonts
 */
add_filter( 'elementor/fonts/additional_fonts', function( $additional_fonts ) {
	// Key/value
	//Font name/font group
	$additional_fonts['DM Sans'] = 'theme_fonts';
	return $additional_fonts;
} );

// Now if they are included by your theme, you are done.
// if not you can hook in to the elementor/fonts/print_font_links/{$font_type} action hook to enqueque your theme fonts, ex:
add_action( 'elementor/fonts/print_font_links/theme_fonts', function( $font_name ) {
  wp_enqueue_style( 'my-theme-google-fonts', '//fonts.googleapis.com/css?family=DM+Sans' );
} );

// load core functions
require_once get_stylesheet_directory() . '/core/load.php';