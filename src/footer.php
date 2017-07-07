<?php
/**
 * Footer template file.
 */
?>

        <footer class="uk-section uk-section-secondary uk-section-large uk-padding-remove-bottom">
            <div class="uk-container">
                <div class="uk-margin-top uk-margin-bottom">
                    <div class="uk-child-width-auto@m uk-flex-middle" uk-grid>
                        <div class="uk-width-1-4@m uk-text-left@m uk-text-center uk-text-small" uk-scrollspy="cls:uk-animation-slide-left-small">
                            <p>&copy; 2014-<?php echo date('Y'); ?>, <a href="#">«Веб Минимализм»</a></p>
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
                        <div class="uk-width-1-4@m uk-text-right@m uk-text-center uk-text-small" uk-scrollspy="cls:uk-animation-slide-right-small">
                            <p><a href="#">Политика конфиденциальности</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- #app -->
<?php wp_footer(); ?>
</body>
</html>
