<?php
/**
 * Template Name: Home Page
 *
 * Home page template file.
 */
__( 'Home Page', 'themestarter' ); ?>

<?php get_header(); ?>

    <main class="uk-container uk-section">
        <?php while ( have_posts() ) : the_post(); ?>

            <?php locate_template( 'partials/content/page.php', true, true ); ?>

            <?php if ( comments_open() || get_comments_number() ) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>

            <posts></posts>

        <?php endwhile; ?>
    </main>


<?php get_footer(); ?>
