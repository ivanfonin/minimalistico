<?php
/**
 * Search template file.
 */
?>

<?php get_header(); ?>

<main role="main">

    <?php if ( have_posts() ) : ?>

        <div uk-height-viewport="expand: true">
            <div class="uk-section uk-section-muted uk-section-xsmall">
                <header class="uk-container">
                    <h1 class="uk-text-uppercase uk-text-meta">
                        <?php printf( __( '<span uk-icon="icon: search"></span> «%s»', 'themestarter' ), get_search_query() ); ?>
                    </h1>
                </header>
            </div>

            <div class="uk-section-small">
                <div class="uk-container">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php get_template_part( 'partials/content/search' ); ?>
                    <?php endwhile; ?>
                </div>
            </div>

            <?php print_theme_posts_pagination(); ?>
        </div>

    <?php else : ?>

        <div class="uk-flex uk-flex-center uk-flex-middle" uk-height-viewport="expand: true">
            <?php get_template_part( 'partials/content/none' ); ?>
        </div>

    <?php endif; ?>

</main>

<?php get_footer(); ?>
