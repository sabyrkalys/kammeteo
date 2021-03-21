<?php
/**
 * Redux Framework WPML integration config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'WPML Integration', 'kammeteo' ),
		'desc'       => esc_html__( 'These fields can be fully translated by WPML (WordPress Multi-Language). This serves as an example for you to implement. For extra details look at our <a href="//docs.redux.io/core/advanced/wpml-integration/" target="_blank">WPML Implementation</a> documentation.', 'kammeteo' ),
		'subsection' => true,
		'fields'     => array(
			array(
				'id'    => 'wpml-text',
				'type'  => 'textarea',
				'title' => esc_html__( 'WPML Text', 'kammeteo' ),
				'desc'  => esc_html__( 'This string can be translated via WPML.', 'kammeteo' ),
			),
			array(
				'id'      => 'wpml-multicheck',
				'type'    => 'checkbox',
				'title'   => esc_html__( 'WPML Multi Checkbox', 'kammeteo' ),
				'desc'    => esc_html__( 'You can literally translate the values via key.', 'kammeteo' ),
				'options' => array(
					'1' => esc_html__( 'Option 1', 'kammeteo' ),
					'2' => esc_html__( 'Option 2', 'kammeteo' ),
					'3' => esc_html__( 'Option 3', 'kammeteo' ),
				),
			),
		),
	)
);
