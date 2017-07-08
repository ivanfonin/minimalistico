<?php
/**
 * Page template file.
 */
?>

<?php get_header(); ?>

    <main role="main">
        <?php while ( have_posts() ) : the_post(); ?>

            <?php locate_template( 'partials/content/page.php', true, true ); ?>

            <?php if ( comments_open() || get_comments_number() ) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>

        <?php endwhile; ?>
    </main>

<?php get_footer(); ?>
