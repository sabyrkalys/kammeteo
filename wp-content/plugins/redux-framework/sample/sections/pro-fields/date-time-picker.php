<?php
/**
 * Redux Pro Date/Time Picker Sample config.
 *
 * For full documentation, please visit: http://docs.reduxframework.com/
 *
 * @package Redux Pro
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Date / Time Picker', 'kammeteo' ),
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'kammeteo' ) . '<a href="//docs.reduxframework.com/extension/date-time" target="_blank">docs.reduxframework.com/extension/date-time/</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'           => 'opt-date-time-single',
				'type'         => 'datetime',
				'title'        => esc_html__( 'Single Date / Time input', 'kammeteo' ),
				'subtitle'     => esc_html__( 'Display when the split argument is set to false', 'kammeteo' ),
				'desc'         => 'The separator argument is set to the @ symbol.  Control-type is set to \'slider\'',
				'split'        => false,
				'control-type' => 'slider',
				'separator'    => ' @ ',
			),
			array(
				'id'            => 'opt-date-time-split',
				'type'          => 'datetime',
				'title'         => esc_html__( 'Split Date / Time input', 'kammeteo' ),
				'subtitle'      => esc_html__( 'Display when the split argument is set to true.', 'kammeteo' ),
				'desc'          => 'The \'timezone-list\' argument is set to display labels instead of time offsets.',
				'split'         => true,
				'control-type'  => 'slider',
				'timezone-list' => array(
					array(
						'value' => 'EST',
						'label' => 'Eastern',
					),
					array(
						'value' => 'CST',
						'label' => 'Central',
					),
					array(
						'value' => 'GMT',
						'label' => 'Moutain',
					),
					array(
						'value' => 'PST',
						'label' => 'Pacific',
					),
				),
			),
			array(
				'id'          => 'opt-date-time-date-only',
				'type'        => 'datetime',
				'title'       => esc_html__( 'Date only input', 'kammeteo' ),
				'subtitle'    => esc_html__( 'Popup shows only the date picker.', 'kammeteo' ),
				'desc'        => 'The \'time-picker\' argument is set to false.',
				'time-picker' => false,
				'placeholder' => 'Date only',
			),
			array(
				'id'          => 'opt-date-time-time-only',
				'type'        => 'datetime',
				'title'       => esc_html__( 'Time only input', 'kammeteo' ),
				'subtitle'    => esc_html__( 'Popup shows only the time picker.', 'kammeteo' ),
				'desc'        => 'The \'date-picker\' argument is set to false.',
				'date-picker' => false,
				'placeholder' => 'Time only',
			),
			array(
				'id'            => 'opt-date-time-minmax',
				'type'          => 'datetime',
				'title'         => esc_html__( 'Min Max demo', 'kammeteo' ),
				'subtitle'      => esc_html__( 'Both time and date have min and max values.', 'kammeteo' ),
				'desc'          => 'The selectable date range is 30 days from the current day.  The selectable time range is between 8:20 AM and 4:40 PM',
				'split'         => true,
				'time-format'   => 'hh:mm TT',
				'hour-min'      => 8,
				'hour-max'      => 16,
				'minute-min'    => 20,
				'minute-max'    => 40,
				'num-of-months' => 2,
				'date-min'      => 0,
				'date-max'      => 30,
			),
		),
	)
);
