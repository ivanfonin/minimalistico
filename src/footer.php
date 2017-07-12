<?php
/**
 * Footer template file.
 */
?>
            </div> <!-- #content -->

            <footer class="uk-section uk-section-default uk-padding-remove-bottom uk-padding-remove-top">
                <div class="uk-container">
                    <div class="uk-margin-top uk-margin-bottom">
                        <div class="uk-child-width-auto@m uk-flex-middle" uk-grid>
                            <div class="uk-width-1-2@s uk-width-1-4@m uk-text-left@s uk-text-center" uk-scrollspy="cls:uk-animation-slide-left-small">
                                <span class="uk-text-small">&copy; 2014-<?php echo date('Y'); ?>,</span> <a class="uk-text-small" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">«<?php bloginfo( 'name' ); ?>»</a>
                            </div>
                            <div class="uk-width-1-2@m uk-visible@m" uk-scrollspy="cls:uk-animation-slide-bottom-small">
                                <?php if ( has_nav_menu( 'main' ) ) : ?>
                                    <?php wp_nav_menu( array(
                                        'theme_location' => 'main',
                                        'container' => 'nav',
                                        'container_class' => 'uk-navbar',
                                        'menu_class' => 'uk-navbar-nav uk-navbar-center' )
                                    ); ?>
                                <?php endif; ?>
                            </div>
                            <div class="uk-text-center uk-width-1-2@s uk-width-1-4@m uk-text-right@s uk-margin-remove-top" uk-scrollspy="cls:uk-animation-slide-right-small">
                                <a class="uk-text-small" href="<?php echo get_page_link(21); ?>">Политика конфиденциальности</a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <div id="offcanvas" uk-offcanvas="flip: true; overlay: true">
                <div class="uk-offcanvas-bar">

                    <button class="uk-offcanvas-close" type="button" uk-close></button>

                    <ul class="uk-nav uk-nav-default">
                        <li class="uk-active"><a href="#">Блог</a></li>
                        <li class="uk-parent">
                            <a href="#">Категории</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Мода</a></li>
                                <li><a href="#">Дизайн</a></li>
                            </ul>
                        </li>
                        <li class="uk-nav-header">Контакты</li>
                        <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: table"></span> +7 926 903 72 30</a></li>
                        <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> info@webminimalism.ru</a></li>
                        <li class="uk-nav-divider"></li>
                        <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span> http://webminimalism.ru</a></li>
                    </ul>

                </div>
            </div>

        </div> <!-- .uk-offcanvas-content -->

        <?php get_template_part( 'partials/search-modal' ); ?>

    </div><!-- #app -->
<?php wp_footer(); ?>
</body>
</html>
