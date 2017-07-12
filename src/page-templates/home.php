<?php
/**
 * Template Name: Home Page
 *
 * Home page template file.
 */
__( 'Home Page', 'themestarter' ); ?>

<?php get_header(); ?>

    <main uk-height-viewport="expand: true">
        <?php while ( have_posts() ) : the_post(); ?>

            <article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if ( has_post_thumbnail() ) : ?>
                    <header class="uk-section-muted uk-light">
                        <div class="uk-background-norepeat uk-background-cover uk-background-center-center uk-section uk-section-xlarge" style="background-image: url('<?php the_post_thumbnail_url( 'full' ); ?>');">
                            <div class="uk-container">
                                <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                                    <div class="uk-width-1-1@m uk-first-column">
                                        <?php the_title( '<h1 class="uk-h1 uk-text-center uk-margin-small-bottom">', '</h1>' ); ?>
                                        <p class="uk-h4 uk-text-center uk-margin-remove-top">
                                            <?php bloginfo('description'); ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                <?php endif; ?>

                <div class="uk-container uk-container-small uk-section">
                    <?php if ( ! has_post_thumbnail() ) : ?>
                        <header>
                            <?php the_title( '<h1 class="uk-h1 uk-text-left uk-text-center@m uk-margin-large-bottom">', '</h1>' ); ?>
                        </header>
                    <?php endif; ?>
                    <div>
                        <?php the_content(); ?>
                    </div>
                    <footer>
                        <posts></posts>
                    </footer>
                </div>
            </article>

        <?php endwhile; ?>
    </main>

    <?php locate_template( 'partials/widgets/call-to-action.php', true, true ); ?>

<?php get_footer(); ?>
