<?php
/**
 * Theme functions and defenitions.
 */

/**
 * Set up theme defaults here and register support for various features.
 */
if ( ! function_exists( 'theme_setup' ) ) {

    function theme_setup() {

        // Make the theme available for translations.
        load_theme_textdomain( 'themestarter', get_template_directory() . '/languages' );

        // Add default posts and comments RSS feed links to head.
        add_theme_support( 'automatic-feed-links' );

        // Let WordPress manage the document title.
        add_theme_support( 'title-tag' );

        // Enable support for Post Thumbnails on posts and pages.
        add_theme_support( 'post-thumbnails' );

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'main' => __( 'Main Menu', 'themestarter' ),
        ) );

        // Output valid HTML5 for search form, comment form, comments and gallery.
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
        ) );

        // Add support for Post Formats.
        add_theme_support( 'post-formats', array(
            'image', 'gallery', 'video', 'audio', 'quote', 'link',
        ) );

    }

}
add_action( 'after_setup_theme', 'theme_setup' );

/**
 * Registers an editor stylesheet for the theme.
 */
add_editor_style( get_template_directory_uri() . '/assets/css/admin/editor-style.css' );

/**
  * Declare WooCommerce suppor.
  */
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'woocommerce_support' );

/**
 * Register widget areas.
 */
function theme_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'themestarter' ),
        'id' => 'main-sidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ) );
}
add_action( 'widgets_init', 'theme_widgets_init' );

/**
 * Remove some header tags and emoji.
 */
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wp_generator');
remove_action( 'wp_head', 'wp_shortlink_wp_head' );
remove_action( 'wp_head', 'wlwmanifest_link');
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );

/**
 * Enqueue theme scripts and styles.
 */
function theme_scripts_and_styles() {

    // Load main stylesheet.
    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
    wp_enqueue_style( 'app-style', get_template_directory_uri() . '/assets/css/app.css' );

    // Load main scripts.
    wp_enqueue_script( 'app-manifest', get_template_directory_uri() . '/assets/js/manifest.js', '', '', true );
    wp_enqueue_script( 'app-vendor', get_template_directory_uri() . '/assets/js/vendor.js', '', '', true );
    wp_enqueue_script( 'app-script', get_template_directory_uri() . '/assets/js/app.js', array( 'jquery' ), '', true );
    wp_localize_script( 'app-script', 'App', array(
            'domain' => home_url(),
            'root' => esc_url_raw( rest_url() ),
            'nonce' => wp_create_nonce( 'wp_rest' ),
            'csrfToken' => wp_create_nonce( 'csrf' )
        )
    );

    // Comments reply script.
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'theme_scripts_and_styles' );

/**
 * Don't display the front-end admin bar
 */
add_filter( 'show_admin_bar', '__return_false' );

/**
 * Enqueue custom admin scripts.
 */
function theme_admin_scripts() {
    wp_enqueue_script( 'app-manifest', get_template_directory_uri() . '/assets/js/manifest.js', '', '', true );
    wp_enqueue_script( 'app-vendor', get_template_directory_uri() . '/assets/js/vendor.js', '', '', true );
    wp_enqueue_script( 'admin-scripts', get_template_directory_uri() . '/assets/js/admin/admin.js', '', '', true );
}
add_action( 'admin_enqueue_scripts', 'theme_admin_scripts' );

/**
 * Minimalistico required files like Sage do. :)
 *
 * The mapped array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 */
array_map( function ( $file ) {

    $file = "inc/{$file}.php";

    if ( ! locate_template( $file, true, true ) ) {
        wp_die( sprintf(__('Error locating <code>%s</code> for inclusion.', 'themestarter'), $file), 'File not found' );
    }

}, ['helpers'] );
