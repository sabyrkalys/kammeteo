<?php
/**
 * Redux Framework slides config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Slides', 'kammeteo' ),
		'id'         => 'additional-slides',
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'kammeteo' ) . '<a href="//docs.redux.io/core/fields/slides/" target="_blank">docs.redux.io/core/fields/slides/</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'          => 'opt-slides',
				'type'        => 'slides',
				'title'       => esc_html__( 'Slides Options', 'kammeteo' ),
				'subtitle'    => esc_html__( 'Unlimited slides with drag and drop sortings.', 'kammeteo' ),
				'desc'        => esc_html__( 'This field will store all slides values into a multidimensional array to use into a foreach loop.', 'kammeteo' ),
				'placeholder' => array(
					'title'       => esc_html__( 'This is a title', 'kammeteo' ),
					'description' => esc_html__( 'Description Here', 'kammeteo' ),
					'url'         => esc_html__( 'Give us a link!', 'kammeteo' ),
				),
			),
		),
	)
);
