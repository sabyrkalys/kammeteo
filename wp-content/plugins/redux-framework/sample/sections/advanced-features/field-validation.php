<?php
/**
 * Redux Framework field validation config.
 * For full documentation, please visit: http://docs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'      => esc_html__( 'Field Validation', 'kammeteo' ),
		'id'         => 'validation',
		'desc'       => esc_html__( 'For full documentation on validation, visit: ', 'kammeteo' ) . '<a href="//docs.redux.io/core/the-basics/validation/" target="_blank">docs.redux.io/core/the-basics/validation/</a>',
		'subsection' => true,
		'fields'     => array(
			array(
				'id'       => 'opt-text-email',
				'type'     => 'text',
				'title'    => esc_html__( 'Text Option - Email Validated', 'kammeteo' ),
				'subtitle' => esc_html__( 'This is a little space under the Field Title in the Options table, additional info is good in here.', 'kammeteo' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'kammeteo' ),
				'validate' => 'email',
				'msg'      => 'An error message you could customize via your option array!',
				'default'  => 'test@test.com',
			),
			array(
				'id'       => 'opt-text-post-type',
				'type'     => 'text',
				'title'    => esc_html__( 'Text Option with Data Attributes', 'kammeteo' ),
				'subtitle' => esc_html__( 'You can also pass an options array if you want. Set the default to whatever you like.', 'kammeteo' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'kammeteo' ),
				'data'     => 'post_type',
			),
			array(
				'id'       => 'opt-multi-text',
				'type'     => 'multi_text',
				'title'    => esc_html__( 'Multi Text Option - Color Validated', 'kammeteo' ),
				'validate' => 'color',
				'subtitle' => esc_html__( 'If you enter an invalid color it will be removed. Try using the text "blue" as a color.  ;)', 'kammeteo' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'kammeteo' ),
			),
			array(
				'id'       => 'opt-text-url',
				'type'     => 'text',
				'title'    => esc_html__( 'Text Option - URL Validated', 'kammeteo' ),
				'subtitle' => esc_html__( 'This must be a URL.', 'kammeteo' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'kammeteo' ),
				'validate' => 'url',
				'default'  => 'https://redux.io',
			),
			array(
				'id'       => 'opt-text-numeric',
				'type'     => 'text',
				'title'    => esc_html__( 'Text Option - Numeric Validated', 'kammeteo' ),
				'subtitle' => esc_html__( 'This must be numeric.', 'kammeteo' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'kammeteo' ),
				'validate' => array( 'numeric', 'not_empty' ),
				'default'  => '0',
			),
			array(
				'id'       => 'opt-text-comma-numeric',
				'type'     => 'text',
				'title'    => esc_html__( 'Text Option - Comma Numeric Validated', 'kammeteo' ),
				'subtitle' => esc_html__( 'This must be a comma separated string of numerical values.', 'kammeteo' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'kammeteo' ),
				'validate' => 'comma_numeric',
				'default'  => '0',
			),
			array(
				'id'       => 'opt-text-no-special-chars',
				'type'     => 'text',
				'title'    => __( 'Text Option - No Special Chars Validated', 'kammeteo' ),
				'subtitle' => __( 'This must be a alpha numeric only.', 'kammeteo' ),
				'desc'     => __( 'This is the description field, again good for additional info.', 'kammeteo' ),
				'validate' => 'no_special_chars',
				'default'  => '0',
			),
			array(
				'id'       => 'opt-text-str_replace',
				'type'     => 'text',
				'title'    => esc_html__( 'Text Option - Str Replace Validated', 'kammeteo' ),
				'subtitle' => esc_html__( 'You decide.', 'kammeteo' ),
				'desc'     => esc_html__( 'This field\'s default value was changed by a filter hook!', 'kammeteo' ),
				'validate' => 'str_replace',
				'str'      => array(
					'search'      => ' ',
					'replacement' => '-thisisaspace-',
				),
				'default'  => 'This is the default.',
			),
			array(
				'id'       => 'opt-text-preg_replace',
				'type'     => 'text',
				'title'    => esc_html__( 'Text Option - Preg Replace Validated', 'kammeteo' ),
				'subtitle' => esc_html__( 'You decide.', 'kammeteo' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'kammeteo' ),
				'validate' => 'preg_replace',
				'preg'     => array(
					'pattern'     => '/.*?\\d.*?\\d(\\d)/is',
					'replacement' => 'no numbers',
				),
				'default'  => '0',
			),
			array(
				'id'                => 'opt-text-custom_validate',
				'type'              => 'text',
				'title'             => esc_html__( 'Text Option - Custom Callback Validated', 'kammeteo' ),
				'subtitle'          => esc_html__( 'You decide.', 'kammeteo' ),
				'desc'              => wp_kses( __( 'Enter <code>1</code> and click <strong>Save Changes</strong> for an error message, or enter <code>2</code> and click <strong>Save Changes</strong> for a warning message.', 'kammeteo' ), $kses_exceptions ),
				'validate_callback' => 'redux_validate_callback_function',
				'default'           => '0',
			),
			array(
				'id'       => 'opt-textarea-no-html',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Textarea Option - No HTML Validated', 'kammeteo' ),
				'subtitle' => esc_html__( 'All HTML will be stripped', 'kammeteo' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'kammeteo' ),
				'validate' => 'no_html',
				'default'  => 'No HTML is allowed in here.',
			),
			array(
				'id'       => 'opt-textarea-html',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Textarea Option - HTML Validated', 'kammeteo' ),
				'subtitle' => esc_html__( 'HTML Allowed (wp_kses)', 'kammeteo' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'kammeteo' ),
				'validate' => 'html', // See http://codex.wordpress.org/Function_Reference/wp_kses_post.
				'default'  => 'HTML is allowed in here.',
			),
			array(
				'id'           => 'opt-textarea-some-html',
				'type'         => 'textarea',
				'title'        => esc_html__( 'Textarea Option - HTML Validated Custom', 'kammeteo' ),
				'subtitle'     => esc_html__( 'Custom HTML Allowed (wp_kses)', 'kammeteo' ),
				'desc'         => esc_html__( 'This is the description field, again good for additional info.', 'kammeteo' ),
				'validate'     => 'html_custom',
				'default'      => '<p>Some HTML is allowed in here.</p>',

				// See http://codex.wordpress.org/Function_Reference/wp_kses.
				'allowed_html' => array(
					'a'      => array(
						'href'  => array(),
						'title' => array(),
					),
					'br'     => array(),
					'em'     => array(),
					'strong' => array(),
				),
			),
			array(
				'id'       => 'opt-textarea-js',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Textarea Option - JS Validated', 'kammeteo' ),
				'subtitle' => esc_html__( 'JS will be escaped', 'kammeteo' ),
				'desc'     => esc_html__( 'This is the description field, again good for additional info.', 'kammeteo' ),
				'validate' => 'js',
			),
		),
	)
);
