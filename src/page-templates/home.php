<?php
/**
 * Template Name: Home Page
 *
 * Home page template file.
 */
__( 'Home Page', 'themestarter' ); ?>

<?php get_header(); ?>

    <main>
        <?php while ( have_posts() ) : the_post(); ?>

            <?php locate_template( 'partials/content/page.php', true, true ); ?>

            <?php if ( comments_open() || get_comments_number() ) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>

        <?php endwhile; ?>
    </main>

    <?php locate_template( 'partials/sections/call-to-action.php', true, true ); ?>

<?php get_footer(); ?>
