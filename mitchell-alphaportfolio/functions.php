<?php
/**
 * Alpha-Portfolio functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Alpha-Portfolio
 */

if ( ! function_exists( 'mitchell_alphaportfolio_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function mitchell_alphaportfolio_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on Alpha-Portfolio, use a find and replace
	 * to change 'mitchell-alphaportfolio' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'mitchell-alphaportfolio', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'mitchell-alphaportfolio' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	/* add_theme_support( 'custom-background', apply_filters( 'mitchell_alphaportfolio_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) ); */
}
endif;
add_action( 'after_setup_theme', 'mitchell_alphaportfolio_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mitchell_alphaportfolio_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mitchell_alphaportfolio_content_width', 640 );
}
add_action( 'after_setup_theme', 'mitchell_alphaportfolio_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mitchell_alphaportfolio_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mitchell-alphaportfolio' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mitchell-alphaportfolio' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mitchell_alphaportfolio_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function mitchell_alphaportfolio_scripts() {
	// Add Google Fonts
	wp_enqueue_style('mitchell-alphaportfolio-google-fonts', 'https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700');

	// Add normalize
	wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css');

	// Add owlcarousel
	wp_enqueue_style( 'owlcarousel', get_template_directory_uri() . '/css/owl.carousel.css');
	wp_enqueue_style( 'owlcarousel-default', get_template_directory_uri() . '/css/owl.theme.default.css');

	// Add style.css
	wp_enqueue_style( 'mitchell-alphaportfolio-style', get_stylesheet_uri() );

	wp_enqueue_script( 'mitchell-alphaportfolio-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'mitchell-alphaportfolio-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if (is_front_page()) {
		wp_enqueue_script( 'please-wait', get_template_directory_uri() . '/js/please-wait.min.js', array(), null, true );

		wp_enqueue_script( 'preloader', get_template_directory_uri() . '/js/preloader.js', array('please-wait'), null, true );

		wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/js/imagesloaded.pkgd.min.js', array(), null, true );

		wp_enqueue_script( 'eventmove', get_template_directory_uri() . '/js/jquery.event.move.js', array(), null, true );

		wp_enqueue_script( 'twentytwenty', get_template_directory_uri() . '/js/jquery.twentytwenty.js', array('eventmove'), null, true );

		wp_enqueue_script( 'scrollreveal', get_template_directory_uri() . '/js/scrollreveal.min.js', array(), null, true );

		wp_enqueue_script( 'theater', get_template_directory_uri() . '/js/theater.min.js', array(), null, true );

		wp_enqueue_script( 'owlcarousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), null, true );

		wp_enqueue_script( 'main', get_template_directory_uri() . '/js/index.js', array('please-wait','preloader','imagesloaded','eventmove','twentytwenty','scrollreveal','theater','owlcarousel'), null, true );
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'mitchell_alphaportfolio_scripts' );

function modify_jquery_version() {
    if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery',
'http://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', false, '2.0.s');
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'modify_jquery_version');
