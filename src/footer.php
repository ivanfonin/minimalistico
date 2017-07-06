<?php
/**
 * Footer template file.
 */
?>

        <footer class="uk-section uk-section-primary uk-section-xlarge uk-padding-remove-bottom">
            <div class="uk-container">
                <div class="uk-margin-top uk-margin-bottom">
                    <div class="uk-child-width-auto@m uk-flex-middle" uk-grid>
                        <div class="uk-width-1-4@m uk-text-left@m uk-text-center">
                            <p>&copy; 2014-<?php echo date('Y'); ?>, «Веб Минимализм»</p>
                        </div>
                        <div class="uk-width-1-2@m">
                            <?php if ( has_nav_menu( 'main' ) ) : ?>
                                <?php wp_nav_menu( array(
                                    'theme_location' => 'main',
                                    'container' => 'nav',
                                    'container_class' => 'uk-navbar',
                                    'menu_class' => 'uk-navbar-nav uk-navbar-center' )
                                ); ?>
                            <?php endif; ?>
                        </div>
                        <div class="uk-width-1-4@m uk-text-right@m uk-text-center">
                            <p>Политика конфиденциальности</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

    </div><!-- #app -->
<?php wp_footer(); ?>
</body>
</html>
