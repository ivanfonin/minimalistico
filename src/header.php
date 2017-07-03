<?php
/**
 * Header template file.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
    <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div id="app">
        <header class="uk-navbar-container tm-navbar-container uk-sticky uk-sticky-fixed">
            <div class="uk-container uk-container-expand">
                <nav class="uk-navbar">
                    <div class="uk-navbar-left">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="uk-navbar-item uk-logo">
                            <?php bloginfo( 'name' ); ?>
                        </a>
                    </div>
                    <?php wp_nav_menu( array( 'theme_location' => 'main', 'container_class' => 'uk-navbar-right', 'menu_class' => 'uk-navbar-nav' ) ); ?>
                </nav>
            </div>
        </header>
