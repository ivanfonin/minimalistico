<?php
/**
 * Page template file.
 */
?>

<?php get_header(); ?>

    <main role="main" uk-height-viewport="expand: true">
        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'partials/content/page' ); ?>

            <?php if ( comments_open() || get_comments_number() ) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>

            <?php wp_link_pages( array(
        		'before'           => '<p>' . __( 'Pages:', 'minimalistico' ),
        		'after'            => '</p>',
        		'link_before'      => '',
        		'link_after'       => '',
        		'next_or_number'   => 'number',
        		'separator'        => ' ',
        		'nextpagelink'     => __( 'Next page', 'minimalistico' ),
        		'previouspagelink' => __( 'Previous page', 'minimalistico' ),
        		'pagelink'         => '%',
        		'echo'             => 1
        	) ); ?>

        <?php endwhile; ?>
    </main>

<?php get_footer(); ?>
