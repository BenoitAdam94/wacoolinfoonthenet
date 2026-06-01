<?php
/**
 * Wacool - Info on the net functions and definitions
 *
 * @package wacool-info-on-the-net
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // No direct access
}

define( 'WACOOL_ION_VERSION', '1.0.0' );
define( 'WACOOL_ION_DIR', get_template_directory() );
define( 'WACOOL_ION_URI', get_template_directory_uri() );

/**
 * Theme Setup
 */
function wacool_info_on_the_net_setup() {

	// Make theme available for translation
	load_theme_textdomain( 'wacool-info-on-the-net', WACOOL_ION_DIR . '/languages' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails
	add_theme_support( 'post-thumbnails' );

	// Add custom logo support
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 400,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	// Register navigation menus
	register_nav_menus(
		array(
			'primary'     => esc_html__( 'Primary Menu', 'wacool-info-on-the-net' ),
			'socialmenu'  => esc_html__( 'Social Menu', 'wacool-info-on-the-net' ),
		)
	);

	// Switch default core markup to output valid HTML5
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

	// Add custom background support
	add_theme_support( 'custom-background' );

	// Add custom header support
	add_theme_support(
		'custom-header',
		array(
			'default-image'  => '',
			'width'          => 1080,
			'height'         => 200,
			'flex-width'     => true,
			'flex-height'    => true,
		)
	);

	// Add editor color palette
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => esc_html__( 'Black', 'wacool-info-on-the-net' ),
				'slug'  => 'black',
				'color' => '#000000',
			),
			array(
				'name'  => esc_html__( 'Red', 'wacool-info-on-the-net' ),
				'slug'  => 'wacool-red',
				'color' => '#a62829',
			),
			array(
				'name'  => esc_html__( 'Blue', 'wacool-info-on-the-net' ),
				'slug'  => 'wacool-blue',
				'color' => '#3399CC',
			),
			array(
				'name'  => esc_html__( 'Yellow', 'wacool-info-on-the-net' ),
				'slug'  => 'wacool-yellow',
				'color' => '#ffff00',
			),
			array(
				'name'  => esc_html__( 'White', 'wacool-info-on-the-net' ),
				'slug'  => 'white',
				'color' => '#ffffff',
			),
		)
	);

	// Set the default content width
	$GLOBALS['content_width'] = 800;
}
add_action( 'after_setup_theme', 'wacool_info_on_the_net_setup' );

/**
 * Set content width
 */
function wacool_info_on_the_net_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wacool_info_on_the_net_content_width', 800 );
}
add_action( 'template_redirect', 'wacool_info_on_the_net_content_width' );

/**
 * Enqueue Styles
 */
function wacool_info_on_the_net_enqueue_styles() {

	$version = WACOOL_ION_VERSION;

	// Google Fonts
	wp_enqueue_style(
		'wacool-ion-google-fonts',
		'https://fonts.googleapis.com/css2?family=Alegreya:wght@900&display=swap',
		array(),
		null
	);

	// Bootstrap CSS
	wp_enqueue_style(
		'wacool-ion-bootstrap',
		WACOOL_ION_URI . '/assets/css/bootstrap.min.css',
		array(),
		'4.6.0'
	);

	// Font Awesome
	wp_enqueue_style(
		'wacool-ion-fontawesome',
		WACOOL_ION_URI . '/assets/font-awesome/all.css',
		array(),
		'5.15.3'
	);

	// Theme stylesheet
	wp_enqueue_style(
		'wacool-ion-style',
		get_stylesheet_uri(),
		array( 'wacool-ion-bootstrap' ),
		$version
	);
}
add_action( 'wp_enqueue_scripts', 'wacool_info_on_the_net_enqueue_styles' );

/**
 * Enqueue Scripts
 */
function wacool_info_on_the_net_enqueue_scripts() {

	// jQuery is bundled with WordPress - just make sure we depend on it
	wp_enqueue_script(
		'wacool-ion-popper',
		WACOOL_ION_URI . '/assets/js/popper.js',
		array(),
		'1.16.1',
		true
	);

	wp_enqueue_script(
		'wacool-ion-bootstrap',
		WACOOL_ION_URI . '/assets/js/bootstrap.min.js',
		array( 'jquery', 'wacool-ion-popper' ),
		'4.6.0',
		true
	);

	// Navigation script for mobile menu
	wp_enqueue_script(
		'wacool-ion-navigation',
		WACOOL_ION_URI . '/assets/js/navigation.js',
		array(),
		WACOOL_ION_VERSION,
		true
	);

	// Comment reply script (WordPress built-in, only load when needed)
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'wacool_info_on_the_net_enqueue_scripts' );

/**
 * Editor Styles
 */
function wacool_info_on_the_net_editor_styles() {
	add_editor_style( 'custom-editor-style.css' );
}
add_action( 'admin_init', 'wacool_info_on_the_net_editor_styles' );

/**
 * Register Widget Areas
 */
function wacool_info_on_the_net_widgets_init() {

	$shared_args = array(
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		'before_widget' => '<div class="widget %2$s"><div class="widget-content">',
		'after_widget'  => '</div></div>',
	);

	// Sidebar #1
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => esc_html__( 'Sidebar #1', 'wacool-info-on-the-net' ),
				'id'          => 'sidebar-1',
				'description' => esc_html__( 'Add widgets here to appear in the sidebar.', 'wacool-info-on-the-net' ),
			)
		)
	);

	// Footer #1
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => esc_html__( 'Footer #1', 'wacool-info-on-the-net' ),
				'id'          => 'footer-1',
				'description' => esc_html__( 'Add widgets here to appear in the first footer column.', 'wacool-info-on-the-net' ),
			)
		)
	);

	// Footer #2
	register_sidebar(
		array_merge(
			$shared_args,
			array(
				'name'        => esc_html__( 'Footer #2', 'wacool-info-on-the-net' ),
				'id'          => 'footer-2',
				'description' => esc_html__( 'Add widgets here to appear in the second footer column.', 'wacool-info-on-the-net' ),
			)
		)
	);
}
add_action( 'widgets_init', 'wacool_info_on_the_net_widgets_init' );

/**
 * Breadcrumb function (no hardcoded URLs)
 *
 * @return void
 */
function wacool_info_on_the_net_breadcrumb() {

	if ( is_front_page() ) {
		echo '<ul class="list-inline mb-0">';
		echo '<li class="d-inline"><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'wacool-info-on-the-net' ) . '</a></li>';
		echo '</ul>';
		return;
	}

	if ( is_page() || is_single() || is_category() ) {
		echo '<ul class="list-inline mb-0">';
		echo '<li class="d-inline"><a href="' . esc_url( home_url( '/' ) ) . '">' . esc_html__( 'Home', 'wacool-info-on-the-net' ) . '</a> &gt; </li>';

		if ( is_page() ) {
			$ancestors = get_post_ancestors( get_the_ID() );
			if ( $ancestors ) {
				$ancestors = array_reverse( $ancestors );
				foreach ( $ancestors as $crumb ) {
					echo '<li class="d-inline"><a href="' . esc_url( get_permalink( $crumb ) ) . '">' . esc_html( get_the_title( $crumb ) ) . '</a> &gt; </li>';
				}
			}
		}

		if ( is_single() ) {
			$category = get_the_category();
			if ( $category ) {
				echo '<li class="d-inline"><a href="' . esc_url( get_category_link( $category[0]->cat_ID ) ) . '">' . esc_html( $category[0]->cat_name ) . '</a> &gt; </li>';
			}
		}

		if ( is_category() ) {
			$category = get_the_category();
			if ( $category ) {
				echo '<li class="d-inline">' . esc_html( $category[0]->cat_name ) . '</li>';
			}
		}

		if ( is_page() || is_single() ) {
			echo '<li class="d-inline">' . esc_html( get_the_title() ) . '</li>';
		}

		echo '</ul>';
	}
}

/**
 * Custom excerpt length
 *
 * @param int $length Excerpt length.
 * @return int
 */
function wacool_info_on_the_net_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'wacool_info_on_the_net_excerpt_length', 999 );

/**
 * Custom excerpt more string
 *
 * @param string $more More string.
 * @return string
 */
function wacool_info_on_the_net_excerpt_more( $more ) {
	return '&hellip;';
}
add_filter( 'excerpt_more', 'wacool_info_on_the_net_excerpt_more' );
