<?php
/**
 * The default template for displaying content.
 */
?>

<article id="post-<?php the_ID(); ?>" class="uk-margin-bottom">
    <header class="post-header">
        <?php if ( has_post_thumbnail() ) : ?>
            <figure class="post-thumbnail"><?php the_post_thumbnail(); ?></figure>
        <?php endif; ?>
        <h1 class="uk-h4 uk-margin-small-bottom"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <div class="uk-article-meta">
            <?php theme_post_meta(); ?>
        </div>
    </header>
    <div class="uk-text-small uk-margin-remove-bottom">
        <?php the_excerpt(); ?>
    </div>
    <footer class="uk-text-meta">
        <?php theme_post_footer_meta(); ?>
    </footer>
</article>
