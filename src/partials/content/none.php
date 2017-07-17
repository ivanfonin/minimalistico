<?php
/**
 * Template is displaying when there is no post content.
 */
?>

<section class="uk-container uk-section-small">
    <header>
        <h1 class="uk-h1 uk-text-center"><?php _e( 'Nothing Found', 'minimalistico' ); ?></h1>
    </header>
    <div class="uk-text-center">
        <?php if ( is_search() ) : ?>
            <p><?php _e( 'Sorry, but nothing was found. Try other keywords.', 'minimalistico' ); ?></p>
            <?php get_search_form(); ?>
        <?php else : ?>
            <p><?php _e( 'Hm, looks like nothing was found. Maybe try a search?', 'minimalistico' ); ?></p>
            <?php get_search_form(); ?>
        <?php endif; ?>
    </div>
</section>
