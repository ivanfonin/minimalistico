<?php
/**
 * Template for displaying single post content.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="post-header">
        <?php if ( has_post_thumbnail() ) : ?>
            <figure class="post-thumbnail"><?php the_post_thumbnail(); ?></figure>
        <?php endif; ?>

        <?php the_title( '<h1 class="post-title">', '</h1>' ); ?>

        <div class="uk-article-meta">
            <?php theme_post_meta(); ?>
        </div>
    </header>
    <div>
        <?php the_content(); ?>
    </div>
    <footer class="post-footer">
        <?php theme_post_footer_meta(); ?>
    </footer>
</article>
