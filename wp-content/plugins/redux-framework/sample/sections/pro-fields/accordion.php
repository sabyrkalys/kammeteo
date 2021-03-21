<?php
/**
 * Redux Pro Box Accordion config.
 *
 * For full documentation, please visit: http://docs.reduxframework.com/
 *
 * @package Redux Pro
 */

defined( 'ABSPATH' ) || exit;

Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__( 'Accordion Field', 'kammeteo' ),
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'kammeteo' ) . '<a href="//docs.reduxframework.com/premium-extensions/accordion" target="_blank">docs.reduxframework.com/premium-extensions/accordion</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'accordion-section-1',
				'type'     => 'accordion',
				'title'    => esc_html__( 'Accordion Section One', 'kammeteo' ),
				'subtitle' => esc_html__( 'Section one with subtitle', 'kammeteo' ),
				'position' => 'start',
			),
			array(
				'id'       => 'opt-blank-text-1',
				'type'     => 'text',
				'title'    => esc_html__( 'Textbox for some noble purpose.', 'kammeteo' ),
				'subtitle' => esc_html__( 'Frailty, thy name is woman!', 'kammeteo' ),
			),
			array(
				'id'       => 'opt-blank-text-2',
				'type'     => 'switch',
				'title'    => esc_html__( 'Switch, for some other important task!', 'kammeteo' ),
				'subtitle' => esc_html__( 'Physician, heal thyself!', 'kammeteo' ),
			),
			array(
				'id'       => 'accordion-section-end-1',
				'type'     => 'accordion',
				'position' => 'end',
			),
			array(
				'id'       => 'accordion-section-2',
				'type'     => 'accordion',
				'title'    => esc_html__( 'Accordion Section Two (no subtitle)', 'kammeteo' ),
				'position' => 'start',
				'open'     => true,
			),
			array(
				'id'       => 'opt-blank-text-3',
				'type'     => 'text',
				'title'    => esc_html__( 'Look, another sample textbox.', 'kammeteo' ),
				'subtitle' => esc_html__( 'The tartness of his face sours ripe grapes.', 'kammeteo' ),
			),
			array(
				'id'       => 'opt-blank-text-4',
				'type'     => 'switch',
				'title'    => esc_html__( 'Yes, another switch, but you\'re free to use any field you like.', 'kammeteo' ),
				'subtitle' => esc_html__( 'I scorn you, scurvy companion!', 'kammeteo' ),
			),
			array(
				'id'       => 'accordion-section-end-2',
				'type'     => 'accordion',
				'position' => 'end',
			),
		),
	)
);
