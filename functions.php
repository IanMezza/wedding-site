<?php
/**
 * Jack & Rose Child theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Jack_Rose
 */

/**
 * Load Child Theme styles.
 */
function jackrose_child_scripts() {
	$theme_data = wp_get_theme();
	wp_enqueue_style( 'jackrose-child', get_stylesheet_uri(), array( 'jackrose' ), $theme_data->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'jackrose_child_scripts', 20 );

/**
 * Load Child Theme languages.
 */
function jackrose_child_after_setup_theme() {
	load_child_theme_textdomain( 'jackrose', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'jackrose_child_after_setup_theme' );

/**
 * Add new Social Icons.
 * All social media icons available here: http://fontawesome.io/icons/#brand.
 * Copy paste the icon slug without "fa-", e.g. "fa-skype" -> "skype".
 * Uncomment lines below and edit the $links array.
 */
// function jackrose_child_social_media( $links ) {
// 	$links['skype'] = __( 'Skype', 'jackrose' );
// 	$links['vk'] = __( 'VKontakte', 'jackrose' );
// 	return $links;
// }
// add_filter( 'jackrose_user_links', 'jackrose_child_social_media' );
// add_filter( 'jackrose_social_media', 'jackrose_child_social_media' );
// add_filter( 'singlestroke_social_media', 'jackrose_child_social_media' );

/**
 * WHITE LABEL: Custom theme dashboard page.
 * Uncomment lines below and edit the $html variable to your liking.
 */
// define( 'SINGLESTROKE_WHITE_LABEL', true );