<?php
/**
 * Template for displaying content in search results.
 */
?>

<article id="post-<?php the_ID(); ?>" class="uk-article">
    <header>
        <!--
        <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <figure class="post-thumbnail"><?php the_post_thumbnail(); ?></figure>
            </a>
        <?php endif; ?>
    -->
        <?php the_title( sprintf( '<h1 class="uk-article-title uk-margin-small-bottom"><a class="uk-link-reset" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

        <?php if ( 'post' == get_post_type() ) : ?>
            <div class="uk-article-meta">
                <?php theme_post_meta(); ?>
            </div>
        <?php elseif ( 'page' == get_post_type() ) : ?>
            <div class="uk-article-meta">
                <p class="uk-text-uppercase uk-margin-small-bottom">
                    <?php _e( 'Page', 'themestarter' ); ?>
                </p>
            </div>
        <?php endif; ?>
    </header>
    <div>
        <?php the_excerpt(); ?>
    </div>
    <footer class="uk-grid-small uk-child-width-auto" uk-grid>
        <?php theme_post_footer_meta(); ?>
    </footer>
</article>
