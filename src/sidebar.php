<?php
/**
 * Sidebar template file.
 */
?>

<?php if ( is_active_sidebar( 'main-sidebar' ) ) : ?>
    <aside class="site-sidebar" role="complementary">
        <?php dynamic_sidebar( 'main-sidebar' ); ?>
    </aside>
<?php else : ?>
    <?php return; ?>
<?php endif; ?>