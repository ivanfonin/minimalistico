<?php
/**
 * Template Name: Home Page
 *
 * Home page template file.
 */
__( 'Home Page', 'themestarter' ); ?>

<?php get_header(); ?>

    <main class="uk-container uk-section uk-padding-remove-bottom">
        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', 'page' ); ?>

            <?php if ( comments_open() || get_comments_number() ) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>

        <?php endwhile; ?>
    </main>

    <div class="uk-container uk-section">
        <posts></posts>
    </div>


<?php get_footer(); ?>
