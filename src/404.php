<?php
/**
 * The template for displaying 404 page.
 */
?>

<?php get_header(); ?>

    <main id="main">

        <section class="error-404 not-found">
            <header class="page-header">
                <h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'themestarter' ); ?></h1>
            </header>

            <div class="page-content">
                <p><?php _e( 'Looks like nothing was found. Maybe try a search?', 'themestarter' ); ?></p>
                <?php get_search_form(); ?>
            </div>
        </section>

    </main>

<?php get_footer(); ?>
