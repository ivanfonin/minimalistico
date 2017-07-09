<?php
/**
 * Archive template file.
 */

get_header(); ?>

<main role="main">

    <?php if ( have_posts() ) : ?>

        <div uk-height-viewport="expand: true">
            <div class="uk-section uk-section-muted uk-section-xsmall">
                <header class="uk-container">
                    <h1 class="uk-text-uppercase uk-text-meta">
                        <span uk-icon="icon: tag"></span> <?php single_cat_title( '', true ); ?>
                    </h1>
                    <?php the_archive_description( '<div class="uk-text-meta">', '</div>' ); ?>
                </header>
            </div>

            <div class="uk-container uk-section-small">
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'content', get_post_format() ); ?>
                <?php endwhile; ?>

                <?php the_posts_pagination( $pagination_parameters ); ?>
            </div>
        </div>

    <?php else : ?>

        <div class="uk-flex uk-flex-center uk-flex-middle" uk-height-viewport="expand: true">
            <?php get_template_part( 'partials/content/none' ); ?>
        </div>

    <?php endif; ?>

</main>

<?php get_footer(); ?>
