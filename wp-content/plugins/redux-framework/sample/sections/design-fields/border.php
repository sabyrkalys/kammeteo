<?php
/**
 * Redux Framework border config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Border', 'kammeteo' ),
		'id'         => 'design-border',
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'kammeteo' ) . '<a href="//docs.redux.io/core/fields/border/" target="_blank">docs.redux.io/core/fields/border/</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-header-border',
				'type'     => 'border',
				'title'    => esc_html__( 'Header Border Option', 'kammeteo' ),
				'subtitle' => esc_html__( 'Only color validation can be done on this field type', 'kammeteo' ),
				'output'   => array( '.site-header' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'kammeteo' ),
				'default'  => array(
					'border-color'  => '#1e73be',
					'border-style'  => 'solid',
					'border-top'    => '3px',
					'border-right'  => '3px',
					'border-bottom' => '3px',
					'border-left'   => '3px',
				),
			),
			array(
				'id'       => 'opt-header-border-expanded',
				'type'     => 'border',
				'title'    => esc_html__( 'Header Border Option', 'kammeteo' ),
				'subtitle' => esc_html__( 'Only color validation can be done on this field type', 'kammeteo' ),
				'output'   => array( '.site-header' ),
				'all'      => false,
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'kammeteo' ),
				'default'  => array(
					'border-color'  => '#1e73be',
					'border-style'  => 'solid',
					'border-top'    => '3px',
					'border-right'  => '3px',
					'border-bottom' => '3px',
					'border-left'   => '3px',
				),
			),
		),
	)
);
