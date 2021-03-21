<?php
/**
 * Redux Framework switch config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Switch', 'kammeteo' ),
		'id'         => 'switch_buttonset-switch',
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'kammeteo' ) . '<a href="//docs.redux.io/core/fields/switch/" target="_blank">docs.redux.io/core/fields/switch/</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'switch-on',
				'type'     => 'switch',
				'title'    => esc_html__( 'Switch On', 'kammeteo' ),
				'subtitle' => esc_html__( 'Look, it\'s on!', 'kammeteo' ),
				'default'  => true,
			),
			array(
				'id'       => 'switch-off',
				'type'     => 'switch',
				'title'    => esc_html__( 'Switch Off', 'kammeteo' ),
				'subtitle' => esc_html__( 'Look, it\'s on!', 'kammeteo' ),
				'default'  => false,
			),
			array(
				'id'       => 'switch-parent',
				'type'     => 'switch',
				'title'    => esc_html__( 'Switch - Nested Children, Enable to show', 'kammeteo' ),
				'subtitle' => esc_html__( 'Look, it\'s on! Also hidden child elements!', 'kammeteo' ),
				'default'  => false,
				'on'       => 'Enabled',
				'off'      => 'Disabled',
			),
			array(
				'id'       => 'switch-child1',
				'type'     => 'switch',
				'required' => array( 'switch-parent', '=', true ),
				'title'    => esc_html__( 'Switch - This and the next switch required for patterns to show', 'kammeteo' ),
				'subtitle' => esc_html__( 'Also called a "fold" parent.', 'kammeteo' ),
				'desc'     => esc_html__( 'Items set with a fold to this ID will hide unless this is set to the appropriate value.', 'kammeteo' ),
				'default'  => false,
			),
			array(
				'id'       => 'switch-child2',
				'type'     => 'switch',
				'required' => array( 'switch-parent', '=', true ),
				'title'    => esc_html__( 'Switch2 - Enable the above switch and this one for patterns to show', 'kammeteo' ),
				'subtitle' => esc_html__( 'Also called a "fold" parent.', 'kammeteo' ),
				'desc'     => esc_html__( 'Items set with a fold to this ID will hide unless this is set to the appropriate value.', 'kammeteo' ),
				'default'  => false,
			),
		),
	)
);
