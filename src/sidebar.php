<?php
/**
 * Sidebar template file.
 */
?>

<?php if ( is_active_sidebar( 'blog-sidebar' ) ) : ?>
    <aside class="sidebar" role="complementary">
        <?php theme_print_blog_sidebar(); ?>
    </aside>
<?php endif; ?>

<?php if ( is_active_sidebar( 'page-sidebar' ) ) : ?>
    <aside class="sidebar" role="complementary">
        <?php theme_print_sidebar_with_uikit_classes( 'page-sidebar' ); ?>
    </aside>
<?php endif; ?>
