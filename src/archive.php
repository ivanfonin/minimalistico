<?php
/**
 * Archive template file.
 */

get_header(); ?>

<?php if ( have_posts() ) : ?>

    <main role="main" uk-height-viewport="expand: true">
        <div class="uk-section uk-section-muted uk-section-xsmall">
            <header class="uk-container">
                <h1 class="uk-text-uppercase uk-text-meta">
                    <?php the_archive_title(); ?>
                </h1>
                <?php the_archive_description( '<div class="uk-text-meta">', '</div>' ); ?>
            </header>
        </div>

        <div class="uk-container uk-section-small">
            <div class="uk-grid">
                <div class="uk-width-3-4@m">
                    <div class="uk-grid-medium uk-child-width-expand@s" uk-grid uk-height-match="target: > article; row: false">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'partials/content/content', get_post_format() ); ?>
                        <?php endwhile; ?>
                    </div>
                </div>
                <div class="uk-width-1-4@m">
                    <div class="uk-grid-medium">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php theme_print_posts_pagination(); ?>

<?php else : ?>

    <main role="main" class="uk-flex uk-flex-center uk-flex-middle" uk-height-viewport="expand: true">
        <?php get_template_part( 'partials/content/none' ); ?>
    </main>

<?php endif; ?>

<?php get_footer(); ?>
