<?php
/**
 * Footer template file.
 */
?>

        <footer class="uk-section uk-section-primary uk-section-xlarge uk-padding-remove-bottom">
            <div class="uk-container uk-text-center">
                <div class="uk-margin-top uk-margin-bottom">
                    <div class="uk-child-width-auto@m uk-flex-middle uk-grid" uk-grid>
                        <div class="uk-text-left@m uk-text-center">
                            <p>&copy; 2017, Веб минимализм.</p>
                        </div>
                        <div class="uk-text-center">
                            <?php wp_nav_menu( array( 'theme_location' => 'main', 'container_class' => 'uk-navbar-right', 'menu_class' => 'uk-navbar-nav' ) ); ?>
                        </div>
                        <div class="uk-text-right@m uk-text-center">
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
