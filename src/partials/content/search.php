<?php
/**
 * Template for displaying content in search results.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="post-header">
        <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                <figure class="post-thumbnail"><?php the_post_thumbnail(); ?></figure>
            </a>
        <?php endif; ?>
        
        <?php the_title( sprintf( '<h1 class="post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
        
        <?php if ( 'post' == get_post_type() ) : ?>
            <div class="post-meta">
                <?php theme_post_meta(); ?>
            </div>
        <?php endif; ?>
    </header>
    <div class="post-excerpt">
        <?php the_excerpt(); ?>
    </div>
    <footer class="post-footer">
        <?php theme_post_footer_meta(); ?>
    </footer>
</article>