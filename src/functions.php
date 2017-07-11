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
        'before_widget' => '<div id="%1$s" class="widget uk-card uk-box-shadow-medium uk-box-shadow-hover-small uk-card-body uk-margin-medium-bottom %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="uk-h4">',
        'after_title' => '</h3>',
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
 * Don't display the front-end admin bar for non administrators.
 */
function theme_show_admin_bar_for_admins_only( $content ) {
    return ( current_user_can( 'administrator' ) ) ? $content : false;
}
add_filter( 'show_admin_bar' , 'theme_show_admin_bar_for_admins_only');

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
 * Minimalistico theme helper files.
 */
 require("inc/helpers.php");

/**
 * Theme excerpt length.
 */
function theme_excerpt_length( $length ) {
	return 10;
}
add_filter( 'excerpt_length', 'theme_excerpt_length', 99 );

/**
 * Theme excerpt more text.
 */
function theme_excerpt_more( $more ) {
    return '...';
}
add_filter( 'excerpt_more', 'theme_excerpt_more' );

/**
 * Add UIkit to archive title.
 */
function theme_archive_title( $title ) {
    $html_start = '<span class="uk-text-meta uk-button-text">';
    $html_end = '</span>';
    if ( is_category() ) {
        $title = single_cat_title( '<span uk-icon="icon: tag"></span> ', false );
    } elseif ( is_tag() ) {
        $title = single_tag_title( '<span uk-icon="icon: hashtag"></span> ', false );
    } elseif ( is_author() ) {
        $title = '<span uk-icon="icon: user"></span> <span>' . get_the_author() . '</span>';
    } elseif ( is_post_type_archive() ) {
        $title = post_type_archive_title( '<span uk-icon="icon: tag"></span> ', false );
    } else {
        $title = __( 'Archives', 'themestarter' );
    }

    return $html_start.$title.$html_end;
}
add_filter( 'get_the_archive_title', 'theme_archive_title' );
