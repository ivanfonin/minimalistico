<?php
/**
 * The default template for displaying content.
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="post-header">
        <?php if ( has_post_thumbnail() ) : ?>
            <figure class="post-thumbnail"><?php the_post_thumbnail(); ?></figure>
        <?php endif; ?>
        <h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
        <div class="post-meta">
            <?php theme_post_meta(); ?>
        </div>
    </header>
    <div class="post-content">
        <?php if ( is_search() ) : ?>
            <?php the_excerpt(); ?>
        <?php else : ?>
            <?php the_content( __( 'Read more', 'themestarter' ) ); ?>
            <?php wp_link_pages(); ?>
        <?php endif; ?>
    </div>
    <footer class="post-footer">
        <?php theme_post_footer_meta(); ?>
    </footer>
</article>
