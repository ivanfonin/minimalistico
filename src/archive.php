<?php
/**
 * Archive template file.
 */

get_header(); ?>

<main uk-height-viewport="expand: true">

    <?php if ( have_posts() ) : ?>

        <div class="uk-container uk-section-small">
            <header>
                <?php
                    the_archive_title( '<h1 class="uk-h4">', '</h1>' );
                    the_archive_description( '<div>', '</div>' );
                ?>
            </header>

            <?php while ( have_posts() ) : the_post(); ?>
                <?php get_template_part( 'content', get_post_format() ); ?>
            <?php endwhile; ?>

            <?php the_posts_pagination( $pagination_parameters ); ?>
        </div>

    <?php else : ?>

        <?php get_template_part( 'partials/content/none' ); ?>

    <?php endif; ?>

</main>

<?php get_footer(); ?>
