<?php
/**
 * Single post template file.
 */
get_header(); ?>

<main role="main" uk-height-viewport="expand: true">
    <?php while ( have_posts() ) : the_post(); ?>

        <?php if ( has_post_thumbnail() ) : ?>
            <header class="uk-section-muted uk-light">
                <div class="uk-background-norepeat uk-background-cover uk-background-center-center uk-section uk-section-xlarge" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                    <div class="uk-container">
                        <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                            <div class="uk-width-1-1@m uk-first-column">
                                <?php the_title( '<h1 class="uk-h1 uk-text-center uk-margin-small-bottom">', '</h1>' ); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="uk-section uk-section-muted uk-section-xsmall">
                <div class="uk-container">
                    <?php theme_post_single_meta(); ?>
                </div>
            </div>
        <?php endif; ?>

        <div class="uk-container uk-section-small">
            <div class="uk-grid">
                <div class="uk-width-3-4@m">
                    <div class="uk-grid-medium">
                        <?php get_template_part( 'partials/content/single' ); ?>

                        <?php if ( comments_open() || get_comments_number() ) : ?>
                            <?php comments_template(); ?>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="uk-width-1-4@m">
                    <div class="uk-grid-medium">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="uk-section uk-section-muted uk-section-xsmall">
            <div class="uk-container">
                <div class="uk-grid-small uk-child-width-expand@s" uk-grid>
                    <div>
                        <?php echo get_previous_post_link(); ?>
                    </div>
                    <div class="uk-text-right@m">
                        <?php echo get_next_post_link(); ?>
                    </div>
                </div>
            </div>
        </div>

    <?php endwhile; ?>
</main>

<?php get_footer(); ?>
