<?php
/**
 * Redux Pro Social Profiles Sample config.
 * For full documentation, please visit: http://docs.reduxframework.com/
 *
 * @package Redux Pro
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Social Profiles', 'kammeteo' ),
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'kammeteo' ) . '<a href="//docs.reduxframework.com/extensions/social-profiles" target="_blank">docs.reduxframework.com/extensions/social-profiles</a>',
		'subtitle'   => esc_html__( 'Click an icon to activate it, drag and drop to change the icon order.', 'kammeteo' ),
		'subsection' => true,
		'fields'     => array(
			array(
				'id'              => 'opt-social-profiles',
				'type'            => 'social_profiles',
				'title'           => esc_html__( 'Social Profiles', 'kammeteo' ),
				'subtitle'        => esc_html__( 'Click an icon to activate it, drag and drop to change the icon order.', 'kammeteo' ),
				'hide_widget_msg' => true,
			),
		),
	)
);
