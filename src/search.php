<?php
/**
 * Search template file.
 */
?>

<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

    <main role="main" uk-height-viewport="expand: true">
        <div class="uk-section uk-section-muted uk-section-xsmall">
            <header class="uk-container">
                <h1 class="uk-text-uppercase uk-text-meta">
                    <?php printf( __( '<span uk-icon="icon: search"></span> %s', 'minimalistico' ), get_search_query() ); ?>
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

        <?php theme_print_posts_pagination(); ?>
    </main>

<?php else : ?>

    <main role="main" class="uk-flex uk-flex-center uk-flex-middle" uk-height-viewport="expand: true">
        <?php get_template_part( 'partials/content/none' ); ?>
    </main>

<?php endif; ?>

<?php get_footer(); ?>
