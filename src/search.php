<?php
/**
 * Search template file.
 */
?>

<?php get_header(); ?>

<main id="main" role="main">

    <?php if ( have_posts() ) : ?>

        <header class="page-header">
            <h1 class="page-title">
                <?php printf( __( 'Search Results for: %s', 'themestarter' ), get_search_query() ); ?>
            </h1>
        </header>

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'partials/content', 'search' );s ?>

        <?php endwhile; ?>

        <?php the_posts_pagination( $pagination_parameters ); ?>

    <?php else : ?>

        <?php get_template_part( 'partials/content', 'none' ); ?>

    <?php endif; ?>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
