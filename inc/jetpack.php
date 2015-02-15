<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Casey\'s Berries
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function caseys_berries_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'caseys_berries_jetpack_setup' );
