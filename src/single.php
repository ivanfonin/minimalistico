<?php
/**
 * Single post template file.
 */
get_header(); ?>

<main id="main">
    <?php while ( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'partials/content/single' ); ?>

        <?php if ( comments_open() || get_comments_number() ) : ?>
            <?php comments_template(); ?>
        <?php endif; ?>

        <?php the_post_navigation(); ?>

    <?php endwhile; ?>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
