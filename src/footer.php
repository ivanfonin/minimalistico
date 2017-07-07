<?php
/**
 * Footer template file.
 */
?>

        <div class="uk-section uk-section-muted uk-section-large">
            <div class="uk-container">
                <div class="uk-flex-middle uk-text-center">
                    <h2 uk-scrollspy="cls:uk-animation-slide-top-small">Хотите работать с нами?</h2>
                    <p uk-scrollspy="cls:uk-animation-slide-bottom-small">Оставьте заявку на сайте и мы свяжемся с Вами в течение рабочего дня.</p>
                    <a href="#" class="uk-button uk-button-text" uk-scrollspy="cls:uk-animation-slide-bottom-small">Оставить заявку</a>
                </div>
            </div>
        </div>

        <footer class="uk-section uk-section-default uk-padding-remove-bottom uk-padding-remove-top">
            <div class="uk-container">
                <div class="uk-margin-top uk-margin-bottom">
                    <div class="uk-child-width-auto@m uk-flex-middle" uk-grid>
                        <div class="uk-width-1-4@m uk-text-left@m uk-text-center" uk-scrollspy="cls:uk-animation-slide-left-small">
                            <span class="uk-text-small">&copy; 2014-<?php echo date('Y'); ?>,</span> <a class="uk-text-small" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">«<?php bloginfo( 'name' ); ?>»</a>
                        </div>
                        <div class="uk-width-1-2@m" uk-scrollspy="cls:uk-animation-slide-bottom-small">
                            <?php if ( has_nav_menu( 'main' ) ) : ?>
                                <?php wp_nav_menu( array(
                                    'theme_location' => 'main',
                                    'container' => 'nav',
                                    'container_class' => 'uk-navbar',
                                    'menu_class' => 'uk-navbar-nav uk-navbar-center' )
                                ); ?>
                            <?php endif; ?>
                        </div>
                        <div class="uk-text-center uk-width-1-4@m uk-text-right@m" uk-scrollspy="cls:uk-animation-slide-right-small">
                            <a class="uk-button uk-inline uk-button-text uk-text-small" href="#">Политика конфиденциальности</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- #app -->
<?php wp_footer(); ?>
</body>
</html>
