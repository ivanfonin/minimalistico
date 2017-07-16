<?php
/**
 * Page template file.
 */
?>

<?php get_header(); ?>

    <main role="main" uk-height-viewport="expand: true">
        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'partials/content/page' ); ?>

            <?php if ( comments_open() || get_comments_number() ) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>

        <?php endwhile; ?>
    </main>

<?php get_footer(); ?>
