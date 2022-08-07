<?php
/**
 * WP Customizer panel section to handle "Extras->Gif Control" section
 *
 * @package BoomBox_Theme
 * @since   2.0.0
 * @version 2.0.0
 */

// Prevent direct script access.
if ( ! defined( 'ABSPATH' ) ) {
	die( 'No direct script access allowed' );
}

/**
 * Get "Extras->Gif Control" section id
 *
 * @return string
 *
 * @since   2.0.0
 * @version 2.0.0
 */
function boombox_customizer_get_extras_gif_control_section_id() {
	return 'boombox_extras_gif_control';
}

/**
 * Register "Extras->Gif Control" section
 *
 * @param array $sections Current sections
 *
 * @return array
 *
 * @since   2.0.0
 * @version 2.0.0
 */
function boombox_customizer_register_extras_gif_control_section( $sections ) {

	$sections[] = [
		'id'   => boombox_customizer_get_extras_gif_control_section_id(),
		'args' => [
			'title'      => __( 'Gif Control', 'boombox' ),
			'panel'      => 'boombox_extras',
			'priority'   => 50,
			'capability' => 'edit_theme_options',
		],
	];

	return $sections;
}

add_filter( 'boombox/customizer/register/sections', 'boombox_customizer_register_extras_gif_control_section', 10, 1 );

/**
 * Register fields for "Extras->Gif Control" section
 *
 * @param array $fields   Current fields configuration
 * @param array $defaults Array containing default values
 *
 * @return array
 *
 * @since   2.0.0
 * @version 2.0.0
 */
function boombox_customizer_register_extras_gif_control_fields( $fields, $defaults ) {

	$section       = boombox_customizer_get_extras_gif_control_section_id();
	$custom_fields = [
		/***** Direct Gif Sharing */
		[
			'settings' => 'extras_gif_control_enable_sharing',
			'label'    => __( 'Direct Gif Sharing', 'boombox' ),
			'section'  => $section,
			'type'     => 'switch',
			'priority' => 20,
			'default'  => $defaults['extras_gif_control_enable_sharing'],
			'choices'  => [
				'on'  => esc_attr__( 'On', 'boombox' ),
				'off' => esc_attr__( 'Off', 'boombox' ),
			],
		],
		/***** Gif Animation Event */
		[
			'settings' => 'extras_gif_control_animation_event',
			'label'    => __( 'Animation Event', 'boombox' ),
			'section'  => $section,
			'type'     => 'select',
			'priority' => 30,
			'default'  => $defaults['extras_gif_control_animation_event'],
			'multiple' => 1,
			'choices'  => [
				'click'  => __( 'Click', 'boombox' ),
				'hover'  => __( 'Hover', 'boombox' ),
				'scroll' => __( 'Scroll', 'boombox' ),
			],
		],
		/***** CloudConvert Heading */
		[
			'settings' => 'extras_gif_control_cloudconvert_heading',
			'section'  => $section,
			'type'     => 'custom',
			'priority' => 40,
			'default'  => sprintf( '<h2>%s</h2><hr/>', __( 'CloudConvert', 'boombox' ) ),
		],
		/***** CloudConvert App Key */
		[
			'settings' => 'extras_gif_control_cloudconvert_app_key',
			'label'    => __( 'CloudConvert App Key', 'boombox' ),
			'section'  => $section,
			'type'     => 'text',
			'priority' => 40,
			'default'  => $defaults['extras_gif_control_cloudconvert_app_key'],
		],

		/***** Other fields need to go here */
	];

	/***** Let others to add fields to this section */
	$custom_fields = apply_filters( 'boombox/customizer/fields/extras_gif_control', $custom_fields, $section, $defaults );

	return array_merge( $fields, $custom_fields );
}

add_filter( 'boombox/customizer/register/fields', 'boombox_customizer_register_extras_gif_control_fields', 10, 2 );