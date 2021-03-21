<?php
/**
 * Redux Framework background config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Background', 'kammeteo' ),
		'id'         => 'design-background',
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'kammeteo' ) . '<a href="//docs.redux.io/core/fields/background/" target="_blank">docs.redux.io/core/fields/background/</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-background',
				'type'     => 'background',
				'output'   => array( 'body' ),
				'title'    => __( 'Body Background', 'kammeteo' ),
				'subtitle' => __( 'Body background with image, color, etc.', 'kammeteo' ),
			),
		),
	)
);
