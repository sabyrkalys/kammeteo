<?php
/**
 * Redux Pro Multi-Media Sample config.
 *
 * For full documentation, please visit: http://docs.reduxframework.com/
 *
 * @package Redux Pro
 */

defined( 'ABSPATH' ) || exit;

Redux::setSection(
	$opt_name,
	array(
		'title'      => esc_html__( 'Multi Media Selector', 'kammeteo' ),
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'kammeteo' ) . '<a href="//docs.reduxframework.com/extensions/multi-media" target="_blank">docs.reduxframework.com/extensions/multi-media</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'              => 'opt-multi-media',
				'type'            => 'multi_media',
				'title'           => esc_html__( 'Multi Media Selector', 'kammeteo' ),
				'subtitle'        => esc_html__( 'Alternative media field which allows for multi selections', 'kammeteo' ),
				'desc'            => esc_html__( 'max_file_limit has been set to 5.', 'kammeteo' ),
				'max_file_upload' => 5,
			),
		),
	)
);
