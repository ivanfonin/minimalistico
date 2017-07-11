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
        <div class="uk-offcanvas-content">

            <div class="uk-navbar-container uk-box-shadow-small">
                <div class="uk-container">
                    <nav class="uk-navbar" uk-navbar>
                        <div class="uk-navbar-left">
                            <a class="uk-navbar-item uk-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <?php bloginfo( 'name' ); ?>
                            </a>
                            <?php if ( has_nav_menu( 'main' ) ) : ?>
                                <?php wp_nav_menu( array(
                                    'theme_location' => 'main',
                                    'container' => false,
                                    'menu_class' => 'uk-navbar-nav uk-visible@m' ) );
                                ?>
                            <?php endif; ?>
                        </div>
                        <div class="uk-navbar-right">
                            <div class="uk-navbar-item uk-padding-remove-left">
                                <a id="show-search-modal" href="#search-modal" uk-toggle><span uk-icon="icon: search"></span></a>
                            </div>
                            <div class="uk-navbar-item uk-hidden@m">
                                <a href="#offcanvas" uk-toggle><span uk-icon="icon: menu"></span></a>
                            </div>
                            <div class="uk-navbar-item uk-visible@m">
                                <a href="#" class="uk-button uk-button-default uk-box-shadow-medium uk-box-shadow-hover-small">Оставить заявку</a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
