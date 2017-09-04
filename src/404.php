<?php
/**
 * The template for displaying 404 page.
 */
?>

<?php get_header(); ?>

    <main role="main" class="uk-flex uk-flex-center uk-flex-middle" uk-height-viewport="expand: true">

        <section class="uk-container uk-section-small">
            <header>
                <h1 class="uk-h1 uk-text-center"><?php _e( 'Oops! That page can&rsquo;t be found.', 'minimalistico' ); ?></h1>
            </header>

            <div class="uk-text-center">
                <p><?php _e( 'Looks like nothing was found. Maybe try a search?', 'minimalistico' ); ?></p>
                <?php get_search_form(); ?>
            </div>
        </section>

    </main>

<?php get_footer(); ?>
