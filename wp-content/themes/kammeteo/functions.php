<?php
/**
 * kammeteo functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package kammeteo
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'kammeteo_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function kammeteo_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on kammeteo, use a find and replace
		 * to change 'kammeteo' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'kammeteo', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'kammeteo' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'kammeteo_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'kammeteo_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function kammeteo_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'kammeteo_content_width', 640 );
}
add_action( 'after_setup_theme', 'kammeteo_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kammeteo_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'kammeteo' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kammeteo' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'kammeteo_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function kammeteo_scripts() {
	wp_enqueue_style( 'kammeteo-normaliz', get_stylesheet_directory_uri() . '/css/normaliz.css', array(), _S_VERSION );
 wp_register_style( 'google-fonts', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');
	wp_enqueue_style( 'google-fonts' );
 wp_enqueue_style( 'kammeteo-icon', get_stylesheet_directory_uri() . '/css/fontawesome/css/all.min.css', array(), _S_VERSION );
 wp_enqueue_style( 'kammeteo-style', get_stylesheet_directory_uri() . '/css/style.css', array(), _S_VERSION );

	//wp_style_add_data( 'kammeteo-style', 'rtl', 'replace' );
 wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'kammeteo-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
 wp_enqueue_script( 'kammeteo-metaboxes', get_template_directory_uri() . '/js/metaboxes.js', array('jquery'), _S_VERSION, true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kammeteo_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * init tgm-list
 */
require get_template_directory() . '/inc/tgm-list.php';

/**
 * init metaboxes.
 */
require get_template_directory() . '/inc/metaboxes.php';

/**
 * init redux-options
 */
require get_template_directory() . '/inc/redux-options.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


/**
 * Add Metaboxes
 * @param array $meta_boxes
 * @return array
 */
function aletheme_metaboxes($meta_boxes) {

	$meta_boxes = array();

    /* Restore original Post Data */
    wp_reset_postdata();

    $prefix = "kammeteo_";

    $meta_boxes[] = array(
        'id'         => 'page_metabox',
        'title'      => 'Exampl Options',
        'pages'      => array( 'page', ), // Post type
        'context'    => 'normal',
        'priority'   => 'high',
        'show_names' => true, // Show field names on the left
        //'show_on'    => array( 'key' => 'page-template', 'value' => array('template-new-property.php'), ), // Specific post templates to display this metabox
        'fields' => array(
            array(
                'name' => __('No Logged User alert','aletheme'),
                'desc' => __('Insert the alert text','aletheme'),
                'id'   => $prefix . 'no_logged_user',
                'std'  => '<p>You should be Logged to publish your property. <a class="registration" href="#"><span>Login / Register</span></a></p><p>Use this credential for demo account:<br /><strong>Login:</strong> best-theme<br /><strong>Password:</strong> real-estate<br /></p>',
                'type' => 'textarea_code',
            ),
            array(
                'name' => __('Success Message','aletheme'),
                'desc' => __('Type here your success message for added properties.','aletheme'),
                'id'   => $prefix . 'property_success_message',
                'std'  => 'Your property has been uploaded successfully. You can see it in your properties page.',
                'type' => 'wysiwyg',
            ),
            array(
                'name' => __('Success Message','aletheme'),
                'desc' => __('Type here your success message for updated properties.','aletheme'),
                'id'   => $prefix . 'property_success_updated',
                'std'  => 'Your property has been updated successfully.',
                'type' => 'wysiwyg',
            ),
        )
    );

	return $meta_boxes;
}
//регистрация сайт бара -левого
function true_register_left_sidebar(){
	register_sidebars( 1, 
 array(
  'id'=>'sidebar-left',
  'name'=>'Левый сайтбар'
  )
 );
}
 
add_action('widgets_init', 'true_register_left_sidebar');

function true_register_right_sidebar(){
	register_sidebars( 1, 
 array(
  'id'=>'sidebar-right',
  'name'=>'Правый сайтбар'
  )
 );
}
 
add_action('widgets_init', 'true_register_right_sidebar');


add_filter( 'nav_menu_submenu_css_class', 'filter_function_name_8769', 10, 3 );
function filter_function_name_8769( $classes, $args, $depth ){
	// Изменяем...
 $classes[2] = 'sub_mm';
	return $classes;
}
