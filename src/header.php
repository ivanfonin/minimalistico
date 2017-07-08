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

        <div class="uk-navbar-container">
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
                            <a href="#modal-full" uk-toggle><span uk-icon="icon: search"></span></a>
                        </div>
                        <div class="uk-navbar-item uk-hidden@m">
                            <a href="#modal-full" uk-toggle><span uk-icon="icon: menu"></span></a>
                        </div>
                        <div class="uk-navbar-item uk-visible@m">
                            <a href="#" class="uk-button uk-button-default uk-box-shadow-small uk-box-shadow-hover-medium">Оставить заявку</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>

        <div id="modal-full" class="uk-modal-full" uk-modal>
            <div class="uk-modal-dialog">
                <button class="uk-modal-close-full uk-close-large" type="button" uk-close></button>
                <div class="uk-grid-collapse uk-child-width-1-2@s uk-flex-middle" uk-grid>
                    <div class="uk-background-cover" style="background-image: url('../docs/images/photo.jpg');" uk-height-viewport></div>
                    <div class="uk-padding-large">
                        <h1>Headline</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                </div>
            </div>
        </div>
