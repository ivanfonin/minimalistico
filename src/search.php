<?php
/**
 * Search template file.
 */
?>

<?php get_header(); ?>

<main role="main">

    <?php if ( have_posts() ) : ?>

        <header class="page-header">
            <h1 class="page-title">
                <?php printf( __( 'Search Results for: %s', 'themestarter' ), get_search_query() ); ?>
            </h1>
        </header>

        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'partials/content', 'search' ); ?>

        <?php endwhile; ?>

        <?php the_posts_pagination( array(
            'end_size' => 2,
            'mid_size' => 2,
            'prev_text' => '<',
            'next_text' => '>',
            'screen_reader_text' => __( 'Posts Navigation', 'themestarter' ),
        ) ); ?>

    <?php else : ?>

        <?php get_template_part( 'partials/content', 'none' ); ?>

    <?php endif; ?>

</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
