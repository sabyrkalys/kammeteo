<?php
/**
 * Redux Framework date config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Date', 'kammeteo' ),
		'id'         => 'additional-date',
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'kammeteo' ) . '<a href="//docs.redux.io/core/fields/date/" target="_blank">docs.redux.io/core/fields/date/</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-datepicker',
				'type'     => 'date',
				'title'    => esc_html__( 'Date Option', 'kammeteo' ),
				'subtitle' => esc_html__( 'No validation can be done on this field type', 'kammeteo' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'kammeteo' ),
			),
		),
	)
);
