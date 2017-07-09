<?php
/**
 * Search template file.
 */
?>

<?php get_header(); ?>

<main role="main" uk-height-viewport="expand: true">

    <?php if ( have_posts() ) : ?>

        <div class="uk-container uk-section-small">
            <header>
                <h1 class="uk-h4">
                    <?php printf( __( 'Search Results for: %s', 'themestarter' ), get_search_query() ); ?>
                </h1>
            </header>

            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'partials/content/search' ); ?>
            <?php endwhile; ?>

            <?php the_posts_pagination( $pagination_parameters ); ?>
        </div>

    <?php else : ?>

        <?php get_template_part( 'partials/content/none' ); ?>

    <?php endif; ?>

</main>

<?php get_footer(); ?>
