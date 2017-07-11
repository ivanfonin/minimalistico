<?php
/**
 * The default template for displaying content.
 */
?>

<article id="post-<?php the_ID(); ?>" class="uk-margin-bottom uk-width-1-2@s uk-width-1-3@l">
    <header class="post-header">
        <a href="<?php the_permalink(); ?>">
            <figure class="uk-margin-small-bottom uk-cover-container uk-height-small uk-section-muted">
                <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'medium', array( 'uk-cover' => '' ) ); ?>
                <?php endif; ?>
            </figure>
        </a>
        <div class="uk-article-meta">
            <?php theme_post_meta(); ?>
        </div>
        <h1 class="uk-h4 uk-margin-small-bottom uk-margin-small-top">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h1>
    </header>
    <div class="uk-text-small">
        <p class="uk-margin-small-bottom">
            <?php echo wp_strip_all_tags( get_the_excerpt(), true ); ?>
        </p>
    </div>
    <footer class="uk-text-meta">
        <?php //theme_post_footer_meta(); ?>
    </footer>
</article>
