<?php
/**
 * Redux Pro JS Button Sample config.
 *
 * For full documentation, please visit: http://docs.reduxframework.com/
 *
 * @package Redux Pro
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'JS Button', 'kammeteo' ),
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'kammeteo' ) . '<a href="//docs.reduxframework.com/extensions/js-button" target="_blank">docs.reduxframework.com/extensions/js-button</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-js-button',
				'type'     => 'js_button',
				'title'    => esc_html__( 'JS Button', 'kammeteo' ),
				'subtitle' => esc_html__( 'Run javascript in the options panel from button clicks.', 'kammeteo' ),
				'desc'     => esc_html__( 'Click the Add Date button to add the current date into the text field below.', 'kammeteo' ),
				'script'   => array(
					'url'       => plugins_url( 'sample/sections/pro-fields/js-button.js', REDUX_PLUGIN_FILE ),
					'dir'       => dirname( __FILE__ ) . '/js-button.js',
					'dep'       => array( 'jquery' ),
					'ver'       => time(),
					'in_footer' => true,
				),
				'buttons'  => array(
					array(
						'text'     => esc_html__( 'Add Date', 'kammeteo' ),
						'class'    => 'button-primary',
						'function' => 'redux_add_date',
					),
					array(
						'text'     => esc_html__( 'Alert', 'kammeteo' ),
						'class'    => 'button-secondary',
						'function' => 'redux_show_alert',
					),

				),
			),
			array(
				'id'       => 'opt-blank-text',
				'type'     => 'text',
				'title'    => esc_html__( 'Date', 'kammeteo' ),
				'subtitle' => esc_html__( 'Click the Add Date button above to fill out this field.', 'kammeteo' ),
			),
		),
	)
);
