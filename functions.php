<?php
/**
 * gsk functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package gsk
 */

if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

define( 'JS', get_template_directory_uri() . '/js' );
define( 'IMG', get_template_directory_uri() . '/images' );

if ( ! function_exists( 'hpa_setup' ) ) :
	function hpa_setup() {
		load_theme_textdomain( 'gsk', get_template_directory() . '/languages' );

		add_theme_support( 'automatic-feed-links' );

		add_theme_support( 'title-tag' );

		add_theme_support( 'post-thumbnails' );

		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'hpa' ),
			)
		);

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
				'hpa_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		add_theme_support(
			'custom-logo',
			[
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			]
		);

		add_image_size( 'thumb-500', 500, 500, true );
		add_image_size( 'thumb-385', 385, 385, true );
		add_image_size( 'thumb-315', 315, 170, true );
	}
endif;
add_action( 'after_setup_theme', 'hpa_setup' );

function hpa_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Side Filter', 'hpa' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'hpa' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'hpa_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function hpa_scripts() {
	wp_enqueue_style( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css', [], _S_VERSION );
	wp_enqueue_style( 'hpa-style', get_stylesheet_uri(), [], _S_VERSION );


	wp_enqueue_script( 'gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js', [], _S_VERSION, true );
	wp_enqueue_script( 'barba', 'https://cdn.jsdelivr.net/npm/@barba/core', [], _S_VERSION, true );
	// wp_enqueue_script( 'ionicon', 'https://unpkg.com/ionicons@5.0.0/dist/ionicons.js', [], _S_VERSION, true ); // move to header
	wp_enqueue_script( 'hpa-navigation', JS. '/navigation.js', [], _S_VERSION, true );
	wp_enqueue_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', ['jquery'], _S_VERSION, true );
	wp_enqueue_script( 'hpa-skip-link-focus-fix', JS . '/skip-link-focus-fix.js', ['jquery'], _S_VERSION, true );
	wp_enqueue_script( 'hpa-script', JS . '/script.js', ['jquery'], _S_VERSION, true );



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

	$data = [
		'home_url'  => home_url(),
		'ajax_url'  => admin_url( 'admin-ajax.php' ),
		'nonce'     => wp_create_nonce( 'ajax_nonce' ),
		'js_dir'    => JS,
		'img_dir'	=> IMG
	];

	wp_localize_script( 'hpa-script', 'php_data', $data );
}
add_action( 'wp_enqueue_scripts', 'hpa_scripts' );


require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/template-tags.php';
require get_template_directory() . '/inc/template-functions.php';


if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}