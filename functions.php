<?php
/**
 *
 * @package DerekMoran
 */

/**
 * Enqueue scripts and styles
 */
function derekmoran_enqueue_scripts_styles() {

	// Register and Enqueue Stylesheet.
	wp_enqueue_style( 'derekmoran-stylesheet', get_stylesheet_uri(), array(), wp_get_theme()->get( 'Version' ) );

}
add_action( 'wp_enqueue_scripts', 'derekmoran_enqueue_scripts_styles' );

/**
 * Register custom block styles
 *
 * @return void
 */
function derekmoran_register_block_styles() {

	register_block_style( 'core/navigation', array(
		'name'         => 'main-navigation',
		'label'        => esc_html__( 'Main Navigation', 'derekmoran' ),
		'style_handle' => 'derekmoran-stylesheet',
	) );

	register_block_style( 'core/heading', array(
		'name'         => 'sidebar-title',
		'label'        => esc_html__( 'Sidebar Title', 'derekmoran' ),
		'style_handle' => 'derekmoran-stylesheet',
	) );

	register_block_style( 'core/separator', array(
		'name'         => 'thick-line',
		'label'        => esc_html__( 'Thick Line', 'derekmoran' ),
		'style_handle' => 'derekmoran-stylesheet',
	) );

	register_block_style( 'core/post-excerpt', array(
		'name'         => 'read-more-button',
		'label'        => esc_html__( 'Read More Button', 'derekmoran' ),
		'style_handle' => 'derekmoran-stylesheet',
	) );

	register_block_style( 'core/search', array(
		'name'         => 'small-search',
		'label'        => esc_html__( 'Small', 'derekmoran' ),
		'style_handle' => 'derekmoran-stylesheet',
	) );

}
add_action( 'init', 'derekmoran_register_block_styles', 5 );