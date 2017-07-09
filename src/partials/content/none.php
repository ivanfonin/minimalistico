<?php
/**
 * Template is displaying when there is no post content.
 */
?>

<section class="uk-container uk-section-small">
    <header>
        <h1 class="uk-h4"><?php _e( 'Nothing Found', 'themestarter' ); ?></h1>
    </header>
    <div class="page-content">
        <?php if ( is_search() ) : ?>
            <p><?php _e( 'Sorry, but nothing was found. Try other keywords.', 'themestarter' ); ?></p>
            <?php get_search_form(); ?>
        <?php else : ?>
            <p><?php _e( 'Hm, looks like nothing was found. Maybe try a search?', 'themestarter' ); ?></p>
            <?php get_search_form(); ?>
        <?php endif; ?>
    </div>
</section>
