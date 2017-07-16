<?php
/**
 * Theme functions and defenitions.
 */

/**
 * Set up theme defaults here and register support for various features.
 */
if ( ! function_exists( 'theme_setup' ) ) {

    function theme_setup() {

        // Set the default content width.
	       $GLOBALS['content_width'] = 920;

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
            'social' => __( 'Social Menu', 'themestarter' ),
        ) );

        // Output valid HTML5 for search form, comment form, comments and gallery.
        add_theme_support( 'html5', array(
            'search-form', 'comment-form', 'comment-list', 'gallery', 'caption',
        ) );

        // Add support for Post Formats.
        add_theme_support( 'post-formats', array(
            'image', 'gallery', 'video', 'audio', 'quote', 'link',
        ) );

        // Add theme support for Custom Logo.
        add_theme_support( 'custom-logo', array(
            'height'      => 80,
            'width'       => 160,
            'flex-width'  => true,
        ) );

        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );

        // Add support for the Pageviews plugin
		add_theme_support( 'pageviews' );

    }

}
add_action( 'after_setup_theme', 'theme_setup' );

/**
 * Registers an editor stylesheet for the theme.
 */
add_editor_style( get_template_directory_uri() . '/assets/css/admin/editor-style.css' );

/**
 * Register widget areas.
 */
function theme_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Blog Sidebar', 'themestarter' ),
        'id' => 'blog-sidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget uk-card uk-box-shadow-medium uk-box-shadow-hover-small uk-card-body uk-margin-medium-bottom %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="uk-h4">',
        'after_title' => '</h3>',
    ) );

    register_sidebar( array(
        'name' => __( 'Page Sidebar', 'themestarter' ),
        'id' => 'page-sidebar',
        'description' => '',
        'before_widget' => '<div id="%1$s" class="widget uk-card uk-box-shadow-medium uk-box-shadow-hover-small uk-card-body uk-margin-medium-bottom %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="uk-h4">',
        'after_title' => '</h3>',
    ) );
}
add_action( 'widgets_init', 'theme_widgets_init' );

/**
 * Enqueue theme scripts and styles.
 */
function theme_scripts_and_styles() {

    // Load main stylesheet.
    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
    wp_enqueue_style( 'app-style', get_template_directory_uri() . '/assets/css/app.css' );

    // Load main scripts.
    wp_enqueue_script( 'app-manifest', get_template_directory_uri() . '/assets/js/manifest.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'app-vendor', get_template_directory_uri() . '/assets/js/vendor.js', array( 'app-manifest' ), '', true );
    wp_enqueue_script( 'app-script', get_template_directory_uri() . '/assets/js/app.js', array( 'app-vendor' ), '', true );
    wp_localize_script( 'app-script', 'App', array(
            'domain' => home_url(),
            'ajaxUrl' => admin_url( 'admin-ajax.php' ),
            'root' => esc_url_raw( rest_url() ),
            'nonce' => wp_create_nonce( 'wp_rest' ),
            'csrfToken' => wp_create_nonce( 'csrf' ),
        )
    );

    // Comments reply script.
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

}
add_action( 'wp_enqueue_scripts', 'theme_scripts_and_styles' );

/**
 * Enqueue custom admin scripts.
 */
function theme_admin_scripts() {
    wp_enqueue_script( 'app-manifest', get_template_directory_uri() . '/assets/js/manifest.js', array( 'jquery' ), '', true );
    wp_enqueue_script( 'app-vendor', get_template_directory_uri() . '/assets/js/vendor.js', array( 'app-manifest' ), '', true );
    wp_enqueue_script( 'admin-scripts', get_template_directory_uri() . '/assets/js/admin/admin.js', array( 'app-vendor' ), '', true );
}
add_action( 'admin_enqueue_scripts', 'theme_admin_scripts' );

/**
 * Theme template functions.
 */
require 'inc/theme-template-functions.php';

/**
 * Theme hooks.
 */
require 'inc/theme-hooks.php';

/**
 * Require Navbar Walker class.
 * Require Comments Walker class.
 * Require Offcanvas Nav Walker class.
 * Classes generate UIkit v3 navbar markup, comments markup and nav in offcanvas markup.
 */
require 'inc/Theme_Navbar_Walker.php';
require 'inc/Theme_Comments_Walker.php';
require 'inc/Theme_Offcanvas_Nav_Walker.php';
