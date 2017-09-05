<?php
/**
 * Header template file.
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
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
    <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'minimalistico' ); ?></a>

    <div id="app">

        <div class="uk-offcanvas-content">
            <div class="uk-navbar-container uk-box-shadow-small">
                <div class="uk-container">
                    <nav class="uk-navbar" uk-navbar>
                        <div class="uk-navbar-left">
                            <a class="uk-navbar-item uk-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <?php if ( has_custom_logo() ) : ?>
                                    <?php the_custom_logo(); ?>
                                <?php else : ?>
                                    <?php bloginfo( 'name' ); ?>
                                <?php endif; ?>
                            </a>
                            <?php if ( has_nav_menu( 'main' ) ) : ?>
                                <?php wp_nav_menu( array(
                                    'theme_location' => 'main',
                                    'container' => false,
                                    'menu_class' => 'uk-navbar-nav uk-visible@m',
                                    'walker' => new Theme_Navbar_Walker(),
                                    'depth' => 2,
                                ) ); ?>
                            <?php endif; ?>
                        </div>
                        <div class="uk-navbar-right">
                            <div class="uk-navbar-item uk-padding-remove-left">
                                <button uk-toggle="target: #show-search-modal" type="button" uk-icon="icon: search">
                                    <span class="screen-reader-text">
                                        <?php _e( 'Search', 'minimalistico' ); ?>
                                    </span>
                                </button>
                            </div>
                            <?php if ( has_nav_menu( 'social' ) ) : ?>
                                <?php wp_nav_menu( array(
                                    'theme_location' => 'social',
                                    'container' => 'nav',
                                    'container_class' => 'uk-navbar uk-visible@m',
                                    'menu_class' => 'uk-navbar-nav uk-navbar-center',
                                    'link_before' => '<span class="uk-hidden">',
                                    'link_after' => '</span>',
                                ) ); ?>
                            <?php endif; ?>
                            <?php if ( has_nav_menu( 'main' ) ) : ?>
                                <div class="uk-navbar-item uk-hidden@m">
                                    <button uk-toggle="target: #offcanvas" type="button">
                                        <span uk-icon="icon: menu"></span>
                                    </button>
                                </div>
                            <?php endif; ?>
                        </div>
                    </nav>
                </div>
            </div>

            <div id="content">
