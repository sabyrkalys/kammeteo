<?php
/**
 * Redux Pro User Meta config.
 * For full documentation, please visit: http://docs.reduxframework.com/
 *
 * @package Redux Pro
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Redux_Users' ) ) {
	return;
}

// Change the priority the Redux_Users boxes appear.
Redux_Users::set_Args(
	$opt_name,
	array(
		'user_priority' => 50,
	)
);

Redux_Users::set_profile(
	$opt_name,
	array(
		'id'       => 'demo-users',
		'title'    => esc_html__( 'Cool Options', 'kammeteo' ),
		'style'    => 'wp',
		'sections' => array(
			array(
				'title'  => esc_html__( 'Home Settings', 'kammeteo' ),
				'icon'   => 'el-icon-home',
				'fields' => array(
					array(
						'id'    => 'user-text',
						'type'  => 'text',
						'title' => esc_html__( 'Input 1', 'kammeteo' ),
					),
					array(
						'id'       => 'user-text-2',
						'type'     => 'text',
						'required' => array( 'user-text', '=', 'two' ),
						'title'    => esc_html__( 'Input 2', 'kammeteo' ),
					),
					array(
						'id'    => 'user-text-3',
						'type'  => 'text',
						'title' => esc_html__( 'Input 3', 'kammeteo' ),
					),
					array(
						'id'       => 'webFonts',
						'type'     => 'media',
						'title'    => esc_html__( 'Web Fonts', 'kammeteo' ),
						'compiler' => 'true',
						'mode'     => false,
						// Can be set to false to allow any media type, or can also be set to any mime type.
						'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'kammeteo' ),
						'subtitle' => esc_html__( 'Upload any media using the WordPress native uploader', 'kammeteo' ),
					),
					array(
						'id'       => 'section-media-start',
						'type'     => 'section',
						'title'    => esc_html__( 'Media Options', 'kammeteo' ),
						'subtitle' => esc_html__( 'With the "section" field you can create indent option sections.', 'kammeteo' ),
						'indent'   => true,
					),
					array(
						'id'       => 'mediaurl',
						'type'     => 'media',
						'url'      => true,
						'title'    => esc_html__( 'Media w/ URL', 'kammeteo' ),
						'compiler' => 'true',
						'desc'     => esc_html__( 'Basic media uploader with disabled URL input field.', 'kammeteo' ),
						'subtitle' => esc_html__( 'Upload any media using the WordPress native uploader', 'kammeteo' ),
						'default'  => array( 'url' => 'http://s.wordpress.org/style/images/codeispoetry.png' ),
					),
					array(
						'id'     => 'section-media-end',
						'type'   => 'section',
						'indent' => false,
					),
					array(
						'id'       => 'media-nourl',
						'type'     => 'media',
						'title'    => esc_html__( 'Media w/o URL', 'kammeteo' ),
						'desc'     => esc_html__( 'This represents the minimalistic view. It does not have the preview box or the display URL in an input box. ', 'kammeteo' ),
						'subtitle' => esc_html__( 'Upload any media using the WordPress native uploader', 'kammeteo' ),
					),
					array(
						'id'       => 'media-nopreview',
						'type'     => 'media',
						'preview'  => false,
						'title'    => esc_html__( 'Media No Preview', 'kammeteo' ),
						'desc'     => esc_html__( 'This represents the minimalistic view. It does not have the preview box or the display URL in an input box. ', 'kammeteo' ),
						'subtitle' => esc_html__( 'Upload any media using the WordPress native uploader', 'kammeteo' ),
					),
					array(
						'id'       => 'gallery',
						'type'     => 'gallery',
						'title'    => esc_html__( 'Add/Edit Gallery', 'kammeteo' ),
						'subtitle' => esc_html__( 'Create a new Gallery by selecting existing or uploading new images using the WordPress native uploader', 'kammeteo' ),
						'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'kammeteo' ),
					),
					array(
						'id'      => 'slider1bDOVY23',
						'type'    => 'slider',
						'title'   => esc_html__( 'JQuery UI Slider Example 1', 'kammeteo' ),
						'desc'    => esc_html__( 'JQuery UI slider description. Min: 1, max: 500, step: 3, default value: 45', 'kammeteo' ),
						'default' => '46',
						'min'     => '1',
						'step'    => '3',
						'max'     => '500',
					),
					array(
						'id'      => 'slider2bc',
						'type'    => 'slider',
						'title'   => esc_html__( 'JQuery UI Slider Example 2 w/ Steps (5)', 'kammeteo' ),
						'desc'    => esc_html__( 'JQuery UI slider description. Min: 0, max: 300, step: 5, default value: 75', 'kammeteo' ),
						'default' => '0',
						'min'     => '0',
						'step'    => '5',
						'max'     => '300',
					),
					array(
						'id'      => 'spinner1bcd',
						'type'    => 'spinner',
						'title'   => esc_html__( 'JQuery UI Spinner Example 1', 'kammeteo' ),
						'desc'    => esc_html__( 'JQuery UI spinner description. Min:20, max: 100, step:20, default value: 40', 'kammeteo' ),
						'default' => '40',
						'min'     => '20',
						'step'    => '20',
						'max'     => '100',
					),
					array(
						'id'       => 'switch-parent',
						'type'     => 'switch',
						'title'    => esc_html__( 'Switch - Nested Children, Enable to show', 'kammeteo' ),
						'subtitle' => esc_html__( 'Look, it\'s on! Also hidden child elements!', 'kammeteo' ),
						'default'  => 0,
						'on'       => 'Enabled',
						'off'      => 'Disabled',
					),
					array(
						'id'       => 'switch-child1',
						'type'     => 'switch',
						'required' => array( 'switch-parent', '=', '1' ),
						'title'    => esc_html__( 'Switch - This and the next switch required for patterns to show', 'kammeteo' ),
						'subtitle' => esc_html__( 'Also called a "fold" parent.', 'kammeteo' ),
						'desc'     => esc_html__( 'Items set with a fold to this ID will hide unless this is set to the appropriate value.', 'kammeteo' ),
						'default'  => false,
					),
				),
			),
			array(
				'title'  => esc_html__( 'Home Layout', 'kammeteo' ),
				'icon'   => 'el-icon-home',
				'fields' => array(
					array(
						'id'       => 'homepage_blocks',
						'type'     => 'sorter',
						'title'    => 'Homepage Layout Manager',
						'desc'     => 'Organize how you want the layout to appear on the homepage',
						'compiler' => 'true',
						'required' => array( 'layout', '=', '1' ),
						'options'  => array(
							'enabled'  => array(
								'highlights' => 'Highlights',
								'slider'     => 'Slider',
								'staticpage' => 'Static Page',
								'services'   => 'Services',
							),
							'disabled' => array(),
						),
					),

					array(
						'id'       => 'presets',
						'type'     => 'image_select',
						'presets'  => true,
						'title'    => esc_html__( 'Preset', 'kammeteo' ),
						'subtitle' => esc_html__( 'This allows you to set a json string or array to override multiple preferences in your theme.', 'kammeteo' ),
						'default'  => 0,
						'desc'     => esc_html__( 'This allows you to set a json string or array to override multiple preferences in your theme.', 'kammeteo' ),
						'options'  => array(
							'1' => array(
								'alt'     => 'Preset 1',
								'img'     => Redux_Core::$url . '../sample/presets/preset1.png',
								'presets' => array(
									'switch-on'     => 1,
									'switch-off'    => 1,
									'switch-custom' => 1,
								),
							),
							'2' => array(
								'alt'     => 'Preset 2',
								'img'     => Redux_Core::$url . '../sample/presets/preset2.png',
								'presets' => "{'slider1':'1', 'slider2':'0', 'switch-on':'0'}",
							),
						),
					),
				),
			),
		),
	)
);

// Recovering user data.
$data = Redux_Users::get_user_meta(
	array(
		'key'      => 'user-text',   /* If you're only looking for a key within the meta, otherwise all values will be returned. */
		'opt_name' => $opt_name, // Optional, but needed to recover default values for unset values.
		'user'     => '',         // User id, else current user ID is returned.
	)
);
