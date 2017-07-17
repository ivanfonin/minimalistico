<?php
/**
 * Template for displaying content in search results.
 */
?>

<article id="post-<?php the_ID(); ?>" class="uk-article">
    <header>
        <?php the_title( sprintf( '<h1 class="uk-article-title uk-margin-small-bottom"><a class="uk-link-reset" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

        <?php if ( 'post' == get_post_type() ) : ?>
            <div class="uk-article-meta uk-margin-small-bottom">
                <?php theme_post_meta(); ?>
            </div>
        <?php elseif ( 'page' == get_post_type() ) : ?>
            <div class="uk-article-meta">
                <p class="uk-text-uppercase uk-margin-small-bottom">
                    <?php _e( 'Page', 'minimalistico' ); ?>
                </p>
            </div>
        <?php endif; ?>
    </header>
    <div class="uk-text-small">
        <p class="uk-margin-small-bottom">
            <?php echo wp_strip_all_tags( get_the_excerpt(), true ); ?>
        </p>
    </div>
    <footer class="uk-text-meta">
        <?php theme_show_post_author(); ?>
    </footer>
</article>
