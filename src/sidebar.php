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
