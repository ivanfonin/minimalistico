<?php
/**
 * Template for displaying single post content.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="uk-container">
        <?php if ( ! has_post_thumbnail() ) : ?>
            <header>
                <?php the_title( '<h1 class="uk-h1 uk-text-left uk-text-center@m uk-margin-large-bottom">', '</h1>' ); ?>
            </header>
        <?php endif; ?>
        <div>
            <?php the_content(); ?>
        </div>
        <footer>
            <?php theme_show_post_author(); ?>
            <?php theme_show_comments_number(); ?>
        </footer>
    </div>
</article>
