<?php
/**
 * Theme helper functions.
 */

/**
 * Add uk-list class to ul elements inside main sidebar widgets.
 */
if ( ! function_exists( 'theme_print_main_sidebar_with_uikit_class' ) ) {

    function theme_print_main_sidebar_with_uikit_class() {
        ob_start();
        dynamic_sidebar( 'blog-sidebar' );
        $sidebar_html = ob_get_contents();
        ob_end_clean();

        $theme_sidebar_with_uikit_ul_class = str_replace("<ul>", '<ul class="uk-list">', $sidebar_html);

        echo $theme_sidebar_with_uikit_ul_class;
    }

}

/**
 * Post meta info - publishing date, author and categories list.
 */
if ( ! function_exists( 'theme_post_meta' ) ) {

    function theme_post_meta() {
        $posted_on = sprintf( '<time class="date uk-margin-right uk-button uk-button-link uk-link-reset" datetime="%1$s">%2$s</time>',
                             esc_attr( get_the_date('c') ),
                             esc_html( get_the_date() )
        );

        $author = sprintf( '<a class="author-link uk-margin-right uk-button uk-button-link" href="%1$s">%2$s</a>',
                          esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
                          esc_html( get_the_author() )
        );

        $theme_post_meta = '<span uk-icon="icon: clock; ratio: .7"></span> <span class="posted-on">' . $posted_on . '</span> <span uk-icon="icon: user; ratio: .7"></span> <span class="author">' . $author . '</span>';

        $categories_list = '<span class="uk-button uk-button-link">';
        $categories_list .= get_the_category_list( __( '</span>, <span class="uk-button uk-button-link">', 'themestarter' ) );
        $categories_list .= '</span>';

        if ( $categories_list ) {
            echo '<p class="uk-text-meta uk-margin-small-bottom">';
                echo $theme_post_meta . '<span uk-icon="icon: tag; ratio: .7"></span> <span class="categories">' . $categories_list . '</span>';
            echo '</p>';
        } else {
            echo '<p class="uk-text-small uk-text-meta uk-text-uppercase uk-margin-small-bottom">';
                echo $theme_post_meta;
            echo '</p>';
        }
    }

}

/**
 * Post footer meta - tags list.
 */
if ( ! function_exists( 'theme_post_footer_meta' ) ) {

    function theme_post_footer_meta() {
        $tag_list = get_the_tag_list( '<span uk-icon="icon: hashtag; ratio: .7"></span><span class="tags"><span class="uk-button uk-button-link">', '</span>, <span class="uk-button uk-button-link">', '</span></span>' );

        if ( $tag_list ) {
            echo $tag_list;
        }
    }

}

/**
 * Wrap posts pagination with special markup to style it.
 * Display pagination only if there is more than one page.
 */
function theme_print_posts_pagination() {
    if ( $GLOBALS['wp_query']->max_num_pages > 1 ) { ?>
        <div class="uk-section uk-section-muted uk-section-xsmall">
            <div class="uk-container">
                <?php the_posts_pagination( array(
                    'end_size' => 2,
                    'mid_size' => 2,
                    'prev_text' => __( 'Previous', 'themestarter' ),
                    'next_text' => __( 'Next', 'themestarter' ),
                    'screen_reader_text' => __( 'Posts Navigation', 'themestarter' ),
                ) ); ?>
            </div>
        </div>
    <?php }
}

/**
 * Display comment navigation links.
 */
if ( ! function_exists( 'theme_comment_nav' ) ) {

    function theme_comment_nav() {

        if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

            <nav class="comment-navigation" role="navigation">
                <h2 class="comment-nav-title"><?php _e( 'Comment navigation', 'themestarter' ); ?></h2>
                <div class="comment-nav-links">
                    <?php
                        if ( $prev_link = get_previous_comments_link( __( 'Older Comments', 'themestarter' ) ) ) :
                            printf( '<div class="nav-previous">%s</div>', $prev_link );
                        endif;

                        if ( $next_link = get_next_comments_link( __( 'Newer Comments', 'themestarter' ) ) ) :
                            printf( '<div class="nav-next">%s</div>', $next_link );
                        endif;
                    ?>
                </div>
            </nav>

        <?php endif;
    }

}
