<?php
/**
 * The main template file.
 */

get_header(); ?>

<main uk-height-viewport="expand: true">

    <?php if ( have_posts() ) : ?>

        <div class="uk-container uk-section-small">
            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>

            <?php the_posts_pagination( $pagination_parameters ); ?>
        </div>

    <?php else : ?>

        <?php get_template_part( 'partials/content/none' ); ?>

    <?php endif; ?>

</main>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
