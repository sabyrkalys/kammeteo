<?php
/**
 * Redux Pro Google Maps Sample config.
 * For full documentation, please visit: http://docs.reduxframework.com/
 *
 * @package Redux Pro
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Google Maps', 'kammeteo' ),
		'desc'       => esc_html__( 'For full documentation on this field, visit: ', 'kammeteo' ) . '<a href="//docs.reduxframework.com/extensions/google-maps" target="_blank">docs.reduxframework.com/extensions/google-maps</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'           => 'location_geocode',
				'type'         => 'google_maps',
				'title'        => esc_html__( 'Google Maps', 'kammeteo' ),
				'subtitle'     => esc_html__( 'This map is set using only address information with a zoom factor of 3.  Lat/Long is returned automatically.', 'kammeteo' ),
				'show_api_key' => true,
				'default'      => array(
					'zoom'                        => '17', // Zoom far: 3 zoom close 17.
					'street_number'               => '1600', // Address.
					'route'                       => 'Pennsylvania Avenue', // STREET.
					'locality'                    => 'Washington', // CITY.
					'administrative_area_level_1' => 'DC', // STATE.
					'postal_code'                 => '20500',
					'country'                     => 'United States',
				),
			),
			array(
				'id'           => 'location_geocode2',
				'type'         => 'google_maps',
				'title'        => esc_html__( 'Google Maps', 'kammeteo' ),
				'subtitle'     => esc_html__( 'This map is set using only latitude and longitude with a zoom factor of 7.  When setting a Google map using lat/long, address information will not be returned.', 'kammeteo' ),
				'show_api_key' => false,
				'full_width'   => true,
				'default'      => array(
					'latitude'  => 38.8976758,
					'longitude' => - 77.03648229999999,
					'zoom'      => 7,
				),
			),
		),
	)
);
