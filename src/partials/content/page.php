<?php
/**
 * Template file for displaying page content.
 */
?>

<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="page-header">
        <?php if ( has_post_thumbnail() ) : ?>
            <figure class="post-thumbnail"><?php the_post_thumbnail(); ?></figure>
        <?php endif; ?>
        
        <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
    </header>
    <div class="page-content">
        <?php the_content(); ?>
    </div>
    <footer class="page-footer">
        <?php wp_link_pages(); ?>
    </footer>
</article>