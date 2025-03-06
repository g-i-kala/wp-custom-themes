<?php

/**
 * fitness_pleasure's functions and definitions
 *
 * @package fitness_pleasure
 * @since fitness_pleasure 1.0
 */

/**
 * First, let's set the maximum content width based on the theme's
 * design and stylesheet.
 * This will limit the width of all uploaded images and embeds.
 */
if ( ! isset( $content_width ) ) {
	$content_width = 900; /* pixels */
}


if ( ! function_exists( 'fitness_pleasure_setup' ) ) :

	/**
	 * Sets up theme defaults and registers support for various
	 * WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme
	 * hook, which runs before the init hook. The init hook is too late
	 * for some features, such as indicating support post thumbnails.
	 */
	function fitness_pleasure_setup() {

		/**
		 * Make theme available for translation.
		 * Translations can be placed in the /languages/ directory.
		 */
		load_theme_textdomain( 'fitness_pleasure', get_template_directory() . '/languages' );

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
			'site-menu'   => __( 'Site Menu', 'fitness_pleasure' ),
		) );

		/**
		 * Enable support for the following post formats:
		 * aside, gallery, quote, image, and video
		 */
		add_theme_support( 'post-formats', array( 'aside', 'gallery', 'quote', 'image', 'video' ) );
		
        add_theme_support(
			'html5',
			array(
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
				'navigation-widgets',
			)
		);

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
endif; // fitness_pleasure_setup
add_action( 'after_setup_theme', 'fitness_pleasure_setup' );

// Enqueues scripts and styles.

function fitness_pleasure_scripts() {
    // Add Tailwind
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/assets/css/output.css', array() ); 
    
    // Enqueue Style.css
    wp_enqueue_style( 'fitness_pleasure', get_template_directory_uri() . '/style.css');
   
    
    // Main navigation scripts.

    //jQuery enqueue

    //wp_enqueue_script('jquery');
	//wp_enqueue_script('hamburger-js', get_template_directory_uri() . '/assets/js/hamburger.js', array('jquery'), null, true);

    // Aria read more sqript enque

    wp_enqueue_script(
        'aria-enhancements', 
        get_template_directory_uri() . '/assets/js/aria-enhancements.js', 
        array(), 
        null, 
        true // Load in the footer
    );
   
}
add_action( 'wp_enqueue_scripts', 'fitness_pleasure_scripts' );


// After Setup 
// Load the textdomain

function fitness_pleasure_load_textdomain() {
    load_theme_textdomain('fitness_pleasure', get_template_directory() . '/languages');
}
add_action('after_setup_theme', 'fitness_pleasure_load_textdomain');

// Supported post formats when custom post types => add here

function themename_post_formats_setup() {
	add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image' ) );
}
add_action( 'after_setup_theme', 'themename_post_formats_setup' );


// Links all Post Thumbnails on your website to the Post Permalink

add_filter( 'post_thumbnail_html', 'my_post_image_html', 10, 3 );
function my_post_image_html( $html, $post_id, $post_image_id ) {
  	$html = '<a href="' . get_permalink( $post_id ) . '">' . $html . '</a>';
  return $html;
}


// Generate all sub sizes using webp

function wporg_image_editor_output_format( $formats ) {
    $formats['image/jpg'] = 'image/webp';
 
    return $formats;
}
add_filter( 'image_editor_output_format', 'wporg_image_editor_output_format' );


// Sidebar registartion

function my_register_sidebars() {
	/* Register the 'primary' sidebar. */
	register_sidebar(
		array(
			'id'            => 'primary',
			'name'          => __( 'Social Icons Area' ),
			'description'   => __( 'Social Icons Area.'),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'my_register_sidebars' );

// Limit search results to 9

function pd_search_posts_per_page($query) {
    if ( $query->is_search ) {
        $query->set( 'posts_per_page', '6' );
    }
    return $query;
}
add_filter( 'pre_get_posts','pd_search_posts_per_page' );

// Customizer Customization Section

// Add custom hero image on front page
function fitness_pleasure_customize_register($wp_customize) {
    // Add a section for the hero image
    $wp_customize->add_section('hero_image_section', array(
        'title' => __('Hero Image', 'fitness_pleasure'),
        'priority' => 30,
    ));

    // Add a setting for the hero image
    $wp_customize->add_setting('hero_image', array(
        'default' => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    // Add the image control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'hero_image', array(
        'label' => __('Upload Hero Image', 'fitness_pleasure'),
        'section' => 'hero_image_section',
        'settings' => 'hero_image',
    )));
}
add_action('customize_register', 'fitness_pleasure_customize_register');

//Page menu set suggestion for bettwer UX 

function my_customizer_menu_alert($wp_customize) {
    // Check if a menu is set
    if (!has_nav_menu('header-menu') || !has_nav_menu('footer-menu')) {
        $wp_customize->add_section('menu_alert_section', array(
            'title'    => __('⚠️ Navigation Notice', 'fitness_pleasure'),
            'priority' => 1,
        ));

        $wp_customize->add_setting('menu_alert', array(
            'sanitize_callback' => 'wp_kses_post',
        ));

        $wp_customize->add_control(new WP_Customize_Control(
            $wp_customize,
            'menu_alert',
            array(
                'label'       => __('No Menu Assigned', 'fitness_pleasure'),
                'section'     => 'menu_alert_section',
                'type'        => 'hidden', // Doesn't show a control, only a message
                'description' => __('<strong>⚠️Set a navigation menu</strong> in <a href="' . admin_url('nav-menus.php') . '" target="_blank">Appearance → Menus</a> for a better experience.', 'kalissimia'),
            )
        ));
    }
}
add_action('customize_register', 'my_customizer_menu_alert');

// WSform integration

function fitness_pleasure_customize_wsforms( $wp_customize ) {
    $wp_customize->add_section( 'wsform_section', array(
        'title'    => __( 'WSform Integration', 'fitness_pleasure' ),
        'priority' => 120,
    ) );

    $wp_customize->add_setting( 'show_newsletter', array(
        'default'   => true,
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'show_newsletter_control', array(
        'label'    => __( 'Show Newsletter Form', 'fitness_pleasure' ),
        'section'  => 'wsform_section',
        'settings' => 'show_newsletter',
        'type'     => 'checkbox',
    ) );

	$wp_customize->add_setting('newsletter_wsform_id', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('newsletter_wsform_id', array(
        'label' => __('Newsletter WSform ID', 'fitness_pleasure'),
        'section' => 'wsform_section',
        'type' => 'text',
		'description' => __('Enter the WS Form ID for your newsletter form.', 'fitness_pleasure'),
    ));


	$wp_customize->add_setting('contactform_wsform_id', array(
        'default' => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('contactform_wsform_id', array(
        'label' => __('Contact Form WSform ID', 'fitness_pleasure'),
        'section' => 'wsform_section',
        'type' => 'text',
		'description' => __('Enter the WS Form ID for your contact form. ', 'fitness_pleasure'),
    ));
}
add_action( 'customize_register', 'fitness_pleasure_customize_wsforms' );



// Footer Widget on/off

function mytheme_customize_footer_widget( $wp_customize ) {
    $wp_customize->add_section( 'footer_widget_section', array(
        'title'    => __( 'Footer Widget', 'fitness_pleasure' ),
        'priority' => 120,
    ) );

    $wp_customize->add_setting( 'show_footer_widget', array(
        'default'   => true,
        'transport' => 'refresh',
    ) );

    $wp_customize->add_control( 'show_footer_widget_control', array(
        'label'    => __( 'Show Footer Widget', 'fitness_pleasure' ),
        'section'  => 'footer_widget_section',
        'settings' => 'show_footer_widget',
        'type'     => 'checkbox',
		'description' => __('<strong>Remember to pick a nice Widget <a href="' . admin_url('widgets.php') . '" target="_blank">Appearance → Widgets</a> for a better user experience.', 'kalissimia'),
    ) );
}
add_action( 'customize_register', 'mytheme_customize_footer_widget' );

