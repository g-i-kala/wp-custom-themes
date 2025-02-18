<?php

/**
 * MyFirstTheme's functions and definitions
 *
 * @package MyFirstTheme
 * @since MyFirstTheme 1.0
 */

/**
 * First, let's set the maximum content width based on the theme's
 * design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 900; /* pixels */
}


if ( ! function_exists( 'myfirsttheme_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various
	 * WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme
	 * hook, which runs before the init hook. The init hook is too late
	 * for some features, such as indicating support post thumbnails.
	 */
	function myfirsttheme_setup() {

		/**
		 * Make theme available for translation.
		 * Translations can be placed in the /languages/ directory.
		 */
		load_theme_textdomain( 'myfirsttheme', get_template_directory() . '/languages' );

		/**
		 * Add default posts and comments RSS feed links to <head>.
		 */
		add_theme_support( 'automatic-feed-links' );

		/**
		 * Enable support for post thumbnails and featured images.
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * Add support for two custom navigation menus.
		 */
		register_nav_menus( array(
			'header-menu'   => __( 'Header Menu', 'myfirsttheme' ),
			'extra-menu' => __( 'Extra Menu', 'myfirsttheme' ),
		) );

		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );

		add_theme_support( 'custom-background' );
		
		add_theme_support( 'custom-logo', array(
			'height'               => 0,
			'width'                => 0,
			'flex-height'          => true,
			'flex-width'           => true,
			'header-text'          => array( 'site-title', 'site-description' ),
			'unlink-homepage-logo' => true,
			) );

		add_theme_support( 'automatic-feed-links' );

	}
endif; // myfirsttheme_setup
add_action( 'after_setup_theme', 'myfirsttheme_setup' );

//Header customization 

function kalissima_custom_header_setup() {
    $defaults = array(
        'default-image'          => '',
		'random-default'         => false,
		'width'                  => 0,
		'height'                 => 0,
		'flex-height'            => false,
		'flex-width'             => false,
		'default-text-color'     => '',
		'header-text'            => true,
		'uploads'                => true,
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
		'video'                  => false,
		'video-active-callback'  => 'is_front_page',
		);
    add_theme_support( 'custom-header', $defaults );
}
add_action( 'after_setup_theme', 'kalissima_custom_header_setup' );

//Links all Post Thumbnails on your website to the Post Permalink

add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );
function my_post_image_html( $html, $post_id, $post_image_id ) {
  	$html = '<a href="' . get_permalink( $post_id ) . '">' . $html . '</a>';
  return $html;
}

function my_theme_load_textdomain() {
    load_theme_textdomain('kalissima', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'my_theme_load_textdomain');

//generate all sub sizes using webp

function wporg_image_editor_output_format( $formats ) {
    $formats['image/jpg'] = 'image/webp';
 
    return $formats;
}
add_filter( 'image_editor_output_format', 'wporg_image_editor_output_format' );

//supported post formats when custom post types => add here

function themename_post_formats_setup() {
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image' ) );
}
add_action( 'after_setup_theme', 'themename_post_formats_setup' );

//sidebar registartion

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'primary',
			'name'          => __( 'Footer Sidebar' ),
			'description'   => __( 'Footer Sidebar area.' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
	/* Repeat register_sidebar() code for additional sidebars. */
}