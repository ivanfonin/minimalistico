<?php
/**
 * Sidebar template file.
 */
?>

<?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
    <aside class="sidebar" role="complementary">
        <?php theme_print_main_sidebar_with_uikit_class(); ?>
    </aside>
<?php else : ?>
    <?php return; ?>
<?php endif; ?>
