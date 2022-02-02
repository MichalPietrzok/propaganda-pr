<?php

/**
 * fv functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package fv
 */

if (!function_exists('fv_setup')) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function fv_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on fv, use a find and replace
		 * to change 'fv' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('fv', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(array(
			'menu-1' => esc_html__('Primary', 'fv'),
		));

    add_image_size( 'news-mini', 420, 262, true );
		add_image_size( 'raport-box', 393, 186, true );
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support('html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		));

		// Set up the WordPress core custom background feature.
		add_theme_support('custom-background', apply_filters('fv_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		)));

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support('custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		));
	}
endif;
add_action('after_setup_theme', 'fv_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fv_content_width()
{
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters('fv_content_width', 640);
}
add_action('after_setup_theme', 'fv_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fv_widgets_init()
{
	register_sidebar(array(
		'name'          => esc_html__('Sidebar', 'fv'),
		'id'            => 'sidebar-1',
		'description'   => esc_html__('Add widgets here.', 'fv'),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	));
}
add_action('widgets_init', 'fv_widgets_init');

/**
 * Enqueue scripts and styles.
 */

function add_async_forscript($url)
{
	if (strpos($url, '#asyncload') === false)
		return $url;
	else if (is_admin())
		return str_replace('#asyncload', '', $url);
	else
		return str_replace('#asyncload', '', $url) . "' defer='defer";
}
add_filter('clean_url', 'add_async_forscript', 11, 1);


function fv_scripts()
{
	wp_enqueue_style('fv-css-libs', get_template_directory_uri() . '/dist/css/libs.css');
	wp_enqueue_style('fv-css-app', get_template_directory_uri() . '/dist/css/app.css');
	wp_enqueue_script('fv-js-app', get_template_directory_uri() . '/dist/js/app.js#asyncload',  array(), '20151215', true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'fv_scripts');

// function add_favicon()
// {
// 	echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_template_directory_uri() . '/favicon.ico" />';
// }

// add_action('wp_head', 'add_favicon');


function objects_init()
{
	$args = array(
		'label' => 'Objekty',
		'public' => true,
		'has_archive' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array(
			'with_front' => false,
			'slug' => 'objects',
		),
		'query_var' => true,
		'menu_icon' => 'dashicons-admin-home',
		'supports' => array(
			'title',
			'revisions',
			'page-attributes',
			'author'
		),
		'show_in_rest' => true,
		'rest_base' => 'objects',
		'taxonomies' => array( 'category' )
	);
	register_post_type('objects', $args);
}

add_action('init', 'objects_init');

function events_init()
{
	$args = array(
		'label' => 'Wydarzenia',
		'public' => true,
		'has_archive' => true,
		'show_ui' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'rewrite' => array(
			'with_front' => false,
			'slug' => 'events',
		),
		'query_var' => true,
		'menu_icon' => 'dashicons-media-interactive',
		'supports' => array(
			'title',
			'revisions',
			'page-attributes',
			'author',
			'editor',
			'thumbnail'
		),
		'show_in_rest' => true,
		'rest_base' => 'events',
		'taxonomies' => array( 'wydarzenia' )
	);
	register_post_type('events', $args);

	register_taxonomy(
		"wydarzenia",
		array("events"),
		array(
			"hierarchical" => true,
			"labels" => [
				'name' => _x('Typ wydarzenia', 'taxonomy general name'),
				'singular_name' => _x('wydarzenia', 'taxonomy singular name'),
				'search_items' =>  __('Wyszukaj wydarzenie'),
				'all_items' => __('Wszystkie wydarzenia'),
				'parent_item' => __('Rodzic wydarzenia'),
				'parent_item_colon' => __('Rodzic wydarzenia:'),
				'edit_item' => __('Edytuj wydarzenia'),
				'update_item' => __('Aktualizuj wydarzenia'),
				'add_new_item' => __('Dodaj nowego wydarzenia'),
				'new_item_name' => __('Dodaj nowego wydarzenia'),
				'menu_name' => __('Typ wydarzenia'),
				'local_images' => true
			],
			'query_var' => true,
			'show_admin_column' => true,
			'show_ui' => true,
			"singular_label" => "wydarzenia",
			'rewrite' => array('slug' => 'wydarzenia'),
			'show_in_rest'      => true
			)
		);
}

add_action('init', 'events_init');

function logout_page() {  
  $login_page  = home_url( 'wp-admin' );  
  wp_redirect( $login_page . "?loggedout=true" );  
  exit;  
}  
add_action('wp_logout','logout_page');

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
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

require get_template_directory() . '/inc/add-subscriber.php';

if (function_exists('acf_add_options_page')) {
	acf_add_options_page();
  acf_set_options_page_menu('Options');
}


function replace_core_jquery_version() {
  wp_deregister_script( 'jquery' );

  wp_register_script( 'jquery',  get_template_directory_uri() . '/jquery-3.5.1.min.js', array(), '3.5.1' );
}

function theme_slug_filter_wp_title( $title ) {
    if ( is_404() ) {
        $title = 'Ta strona nie istnieje | PRCH';
    }
    // You can do other filtering here, or
    // just return $title
    return $title;
}
// Hook into wp_title filter hook
add_filter( 'wp_title', 'theme_slug_filter_wp_title' );

function images() {
  return bloginfo('template_directory').'/dist/img/';
}

add_action( 'wp_enqueue_scripts', 'replace_core_jquery_version' );

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');