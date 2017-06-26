<?php
/**
 * Template Name: Home Page
 *
 * Home page template file.
 */
__( 'Home Page', 'themestarter' ); ?>

<?php get_header(); ?>

    <main class="site-page">
        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', 'page' ); ?>

            <?php if ( comments_open() || get_comments_number() ) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>

        <?php endwhile; ?>
    </main>

    <posts></posts>

<?php get_footer(); ?>
