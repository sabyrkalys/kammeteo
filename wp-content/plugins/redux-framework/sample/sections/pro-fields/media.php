<?php
/**
 * Redux Pro Media Sample config.
 *
 * For full documentation, please visit: http://docs.reduxframework.com/
 *
 * @package Redux Pro
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Media', 'kammeteo' ),
		'id'         => 'pro-media-media',
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'kammeteo' ) . '<a href="//docs.reduxframework.com/core/fields/media/" target="_blank">docs.reduxframework.com/core/fields/media/</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'           => 'pro-opt-media',
				'type'         => 'pro-media',
				'url'          => true,
				'title'        => esc_html__( 'Media w/ URL', 'kammeteo' ),
				'compiler'     => 'true',
				'desc'         => esc_html__( 'Basic media uploader with disabled URL input field.', 'kammeteo' ),
				'subtitle'     => esc_html__( 'Upload any media using the WordPress native uploader', 'kammeteo' ),
				'default'      => array(
					'url'    => 'http://s.wordpress.org/style/images/codeispoetry.png',
					'filter' => array(
						'grayscale' => array(
							'checked' => true,
							'value'   => 50,
						),
					),
				),
				'preview_size' => 'full',
				'filter'       => array(
					'grayscale'  => true,
					'blur'       => true,
					'sepia'      => true,
					'saturate'   => true,
					'opacity'    => true,
					'brightness' => true,
					'contrast'   => true,
					'hue-rotate' => true,
					'invert'     => true,
				),
				'output'       => array( '.header-image img' ),
			),
			array(
				'id'       => 'pro-media-no-url',
				'type'     => 'media',
				'title'    => esc_html__( 'Media w/o URL', 'kammeteo' ),
				'desc'     => esc_html__( 'This represents the minimalistic view. It does not have the preview box or the display URL in an input box. ', 'kammeteo' ),
				'subtitle' => esc_html__( 'Upload any media using the WordPress native uploader', 'kammeteo' ),
				'url'      => false,
				'filter'   => array(
					'grayscale' => true,
					'blur'      => true,
				),
				'preview'  => true,
			),
			array(
				'id'       => 'pro-media-no-preview',
				'type'     => 'media',
				'preview'  => false,
				'title'    => esc_html__( 'Media No Preview', 'kammeteo' ),
				'desc'     => esc_html__( 'This represents the minimalistic view. It does not have the preview box or the display URL in an input box. ', 'kammeteo' ),
				'subtitle' => esc_html__( 'Upload any media using the WordPress native uploader', 'kammeteo' ),
				'hint'     => array(
					'title'   => esc_html__( 'Test', 'kammeteo' ),
					'content' => 'This is a <b>hint</b> tool-tip for the webFonts field.<br/><br/>Add any HTML based text you like here.',
				),
			),
			array(
				'id'         => 'pro-opt-random-upload',
				'type'       => 'media',
				'title'      => esc_html__( 'Upload Anything - Disabled Mode', 'kammeteo' ),
				'full_width' => true,
				'mode'       => false,
				// Can be set to false to allow any media type, or can also be set to any mime type.
				'desc'       => esc_html__( 'Basic media uploader with disabled URL input field.', 'kammeteo' ),
				'subtitle'   => esc_html__( 'Upload any media using the WordPress native uploader', 'kammeteo' ),
			),
		),
	)
);
