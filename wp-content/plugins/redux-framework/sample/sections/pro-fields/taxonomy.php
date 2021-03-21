<?php
/**
 * Redux Pro Taxonomy Meta config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Pro
 */

defined( 'ABSPATH' ) || exit;

if ( ! class_exists( 'Redux_Taxonomny' ) ) {
	return;
}

// Change the priority the Redux_Taxonomy boxes appear.
Redux_Taxonomy::set_args(
	$opt_name,
	array(
		'taxonomy_priority' => 50,
	)
);

Redux_Taxonomy::set_term(
	$opt_name,
	array(
		'id'             => 'demo-taxonomy',
		'title'          => __( 'Cool Options', 'kammeteo' ),

		// Slug for every taxonomy you want.
		'taxonomy_types' => array( 'category', 'post_tag' ),

		'add_visibility' => true,

		// Can bet set on term, section, or field level. Denotes what fields to be displayed on the add {TERM} pages.
		'sections'       => array(
			array(
				'title'  => __( 'Home Settings', 'kammeteo' ),
				'icon'   => 'el-icon-home',
				'fields' => array(
					array(
						'id'             => 'tax-text',
						'type'           => 'text',
						'add_visibility' => true,
						'title'          => __( 'Input 1', 'kammeteo' ),
					),

					array(
						'id'             => 'tax-text-2',
						'type'           => 'text',
						'add_visibility' => true,
						'required'       => array( 'dovy1', '=', '222' ),
						'title'          => __( 'Input 2', 'kammeteo' ),
					),
					array(
						'id'             => 'opt-button-set',
						'type'           => 'button_set',
						'title'          => __( 'Button Set Option', 'kammeteo' ),
						'subtitle'       => __( 'No validation can be done on this field type', 'kammeteo' ),
						'desc'           => __( 'This is the description field, again good for additional info.', 'kammeteo' ),
						'add_visibility' => true,
						'options'        => array(
							'1' => 'Opt 1',
							'2' => 'Opt 2',
							'3' => 'Opt 3',
						),
						'default'        => '2',
					),
					array(
						'id'             => 'dovy3',
						'type'           => 'text',
						'add_visibility' => true,
						'title'          => __( 'Dovy Input3', 'kammeteo' ),
					),
					array(
						'id'       => 'webFonts',
						'type'     => 'media',
						'title'    => __( 'Web Fonts', 'kammeteo' ),
						'compiler' => 'true',
						'mode'     => false,
						// Can be set to false to allow any media type, or can also be set to any mime type.
						'desc'     => __( 'Basic media uploader with disabled URL input field.', 'kammeteo' ),
						'subtitle' => __( 'Upload any media using the WordPress native uploader', 'kammeteo' ),
					),
					array(
						'id'       => 'section-media-start',
						'type'     => 'section',
						'title'    => __( 'Media Options', 'kammeteo' ),
						'subtitle' => __( 'With the "section" field you can create indent option sections.', 'kammeteo' ),
						'indent'   => true,
					),
					array(
						'id'       => 'mediaurl',
						'type'     => 'media',
						'url'      => true,
						'title'    => __( 'Media w/ URL', 'kammeteo' ),
						'compiler' => 'true',
						'desc'     => __( 'Basic media uploader with disabled URL input field.', 'kammeteo' ),
						'subtitle' => __( 'Upload any media using the WordPress native uploader', 'kammeteo' ),
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
						'title'    => __( 'Media w/o URL', 'kammeteo' ),
						'desc'     => __( 'This represents the minimalistic view. It does not have the preview box or the display URL in an input box. ', 'kammeteo' ),
						'subtitle' => __( 'Upload any media using the WordPress native uploader', 'kammeteo' ),
					),
					array(
						'id'       => 'media-nopreview',
						'type'     => 'media',
						'preview'  => false,
						'title'    => __( 'Media No Preview', 'kammeteo' ),
						'desc'     => __( 'This represents the minimalistic view. It does not have the preview box or the display URL in an input box. ', 'kammeteo' ),
						'subtitle' => __( 'Upload any media using the WordPress native uploader', 'kammeteo' ),
					),
					array(
						'id'       => 'gallery',
						'type'     => 'gallery',
						'title'    => __( 'Add/Edit Gallery', 'kammeteo' ),
						'subtitle' => __( 'Create a new Gallery by selecting existing or uploading new images using the WordPress native uploader', 'kammeteo' ),
						'desc'     => __( 'This is the description field, again good for additional info.', 'kammeteo' ),
					),
					array(
						'id'      => 'slider1bDOVY23',
						'type'    => 'slider',
						'title'   => __( 'JQuery UI Slider Example 1', 'kammeteo' ),
						'desc'    => __( 'JQuery UI slider description. Min: 1, max: 500, step: 3, default value: 45', 'kammeteo' ),
						'default' => '46',
						'min'     => '1',
						'step'    => '3',
						'max'     => '500',
					),
					array(
						'id'      => 'slider2bc',
						'type'    => 'slider',
						'title'   => __( 'JQuery UI Slider Example 2 w/ Steps (5)', 'kammeteo' ),
						'desc'    => __( 'JQuery UI slider description. Min: 0, max: 300, step: 5, default value: 75', 'kammeteo' ),
						'default' => '0',
						'min'     => '0',
						'step'    => '5',
						'max'     => '300',
					),
					array(
						'id'      => 'spinner1bcd',
						'type'    => 'spinner',
						'title'   => __( 'JQuery UI Spinner Example 1', 'kammeteo' ),
						'desc'    => __( 'JQuery UI spinner description. Min:20, max: 100, step:20, default value: 40', 'kammeteo' ),
						'default' => '40',
						'min'     => '20',
						'step'    => '20',
						'max'     => '100',
					),
					array(
						'id'       => 'switch-parent',
						'type'     => 'switch',
						'title'    => __( 'Switch - Nested Children, Enable to show', 'kammeteo' ),
						'subtitle' => __( 'Look, it\'s on! Also hidden child elements!', 'kammeteo' ),
						'default'  => 0,
						'on'       => 'Enabled',
						'off'      => 'Disabled',
					),
					array(
						'id'       => 'switch-child1',
						'type'     => 'switch',
						'required' => array( 'switch-parent', '=', '1' ),
						'title'    => __( 'Switch - This and the next switch required for patterns to show', 'kammeteo' ),
						'subtitle' => __( 'Also called a "fold" parent.', 'kammeteo' ),
						'desc'     => __( 'Items set with a fold to this ID will hide unless this is set to the appropriate value.', 'kammeteo' ),
						'default'  => false,
					),
				),
			),

			array(
				'title'  => __( 'Home Layout', 'kammeteo' ),
				'desc'   => __( 'Redux Framework was created with the developer in mind. It allows for any theme developer to have an advanced theme panel with most of the features a developer would need. For more information check out the Github repo at: <a href="https://github.com/ReduxFramework/Redux-Framework">https://github.com/ReduxFramework/Redux-Framework</a>', 'kammeteo' ),
				'icon'   => 'el-icon-home',
				'fields' => array(
					array(
						'id'             => 'homepage_blocks',
						'type'           => 'sorter',
						'title'          => 'Homepage Layout Manager',
						'desc'           => 'Organize how you want the layout to appear on the homepage',
						'compiler'       => 'true',
						'add_visibility' => true,

						'options'        => array(
							'enabled'  => array(
								'placebo'    => 'placebo', // REQUIRED!
								'highlights' => 'Highlights',
								'slider'     => 'Slider',
								'staticpage' => 'Static Page',
								'services'   => 'Services',
							),
							'disabled' => array(
								'placebo' => 'placebo', // REQUIRED!
							),
						),
					),

					array(
						'id'       => 'presets',
						'type'     => 'image_select',
						'presets'  => true,
						'title'    => __( 'Preset', 'kammeteo' ),
						'subtitle' => __( 'This allows you to set a json string or array to override multiple preferences in your theme.', 'kammeteo' ),
						'default'  => 0,
						'desc'     => __( 'This allows you to set a json string or array to override multiple preferences in your theme.', 'kammeteo' ),
						'options'  => array(
							'1' => array(
								'alt'     => 'Preset 1',
								'img'     => ReduxFramework::$_url . '../sample/presets/preset1.png',
								'presets' => array(
									'switch-on'     => 1,
									'switch-off'    => 1,
									'switch-custom' => 1,
								),
							),
							'2' => array(
								'alt'     => 'Preset 2',
								'img'     => ReduxFramework::$_url . '../sample/presets/preset2.png',
								'presets' => '{"slider1":"1", "slider2":"0", "switch-on":"0"}',
							),
						),
					),
				),
			),
		),
	)
);
