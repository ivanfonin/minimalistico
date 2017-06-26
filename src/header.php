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
        <header class="site-header">
            <div class="site-branding">
                <h1>
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <?php bloginfo( 'name' ); ?>
                    </a>
                </h1>
                <h2><?php bloginfo( 'description' ); ?></h2>
            </div>
            <nav class="site-navigation">
                <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
            </nav>
        </header>

        <div class="site-content">
