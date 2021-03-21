<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Название организации', 'kammeteo' ),
		//'desc'             => esc_html__( 'For full documentation on this field, visit: ', 'kammeteo' ) . '<a href="//docs.redux.io/core/fields/text/" target="_blank">docs.redux.io/core/fields/text/</a>',
		'id'               => 'basic-text',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
				'id'       => 'main-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Назавание организации', 'kammeteo' ),
				//'subtitle' => esc_html__( 'Subtitle', 'kammeteo' ),
				'desc'     => esc_html__( 'Укажите название организации тут', 'kammeteo' ),
				'default'  => 'КАМЧАТСКОЕ УПРАВЛЕНИЕ ПО ГИДРОМЕТЕОРОЛОГИИ И МОНИТОРИНГУ ОКРУЖАЮЩЕЙ СРЕДЫ',
			),
   array(
				'id'       => 'main-desc',
				'type'     => 'text',
				'title'    => esc_html__( 'Описание организации', 'kammeteo' ),
				//'subtitle' => esc_html__( 'Subtitle', 'kammeteo' ),
				'desc'     => esc_html__( 'Опиишите организацию тут', 'kammeteo' ),
				'default'  => 'Федеральное государственное буджетное учереждение',
			),
			//array(
			//	'id'        => 'text-example-hint',
			//	'type'      => 'text',
			//	'title'     => esc_html__( 'Text Field w/ Hint', 'kammeteo' ),
			//	'subtitle'  => esc_html__( 'Subtitle', 'kammeteo' ),
			//	'desc'      => esc_html__( 'Field Description', 'kammeteo' ),
			//	'default'   => 'Default Text',
			//	'text_hint' => array(
			//		'title'   => 'Hint Title',
			//		'content' => 'Hint content about this field!',
			//	),
			//),
			//array(
			//	'id'          => 'text-placeholder',
			//	'type'        => 'text',
			//	'title'       => esc_html__( 'Text Field w/ placeholder using custom data object.', 'kammeteo' ),
			//	'subtitle'    => esc_html__( 'Subtitle', 'kammeteo' ),
			//	'desc'        => esc_html__( 'Field Description', 'kammeteo' ),
			//	'placeholder' => 'Placeholder Text',
			//	'data'        => array( 'box1', 'box2' ),
			//),
		),
	)
);
