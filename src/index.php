<?php
/**
 * The main template file.
 */

get_header(); ?>

<main role="main" uk-height-viewport="expand: true">

    <?php if ( have_posts() ) : ?>

        <div class="uk-container uk-section-small">
            <div class="uk-grid">
                <div class="uk-width-3-4@m">
                    <div class="uk-grid-medium uk-child-width-expand@s" uk-grid uk-height-match="target: > article; row: false">
                        <?php while ( have_posts() ) : the_post(); ?>
                            <?php get_template_part( 'content', get_post_format() ); ?>
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

        <?php print_theme_posts_pagination(); ?>

    <?php else : ?>

        <?php get_template_part( 'partials/content/none' ); ?>

    <?php endif; ?>

</main>


<?php get_footer(); ?>
