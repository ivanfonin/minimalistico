<?php
/**
 * Theme helper functions.
 */

/**
 * Post meta info - publishing date, author and categories list.
 */
if ( ! function_exists( 'theme_post_meta' ) ) {

    function theme_post_meta() {
        $posted_on = sprintf( '<time class="date uk-margin-right" datetime="%1$s">%2$s</time>',
                             esc_attr( get_the_date('c') ),
                             esc_html( get_the_date() )
        );

        $author = sprintf( '<a class="author-link uk-margin-right" href="%1$s">%2$s</a>',
                          esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
                          esc_html( get_the_author() )
        );

        $theme_post_meta = '<span class="posted-on">' . $posted_on . '</span><span class="author">' . $author . '</span>';

        $categories_list = get_the_category_list( __( ', ', 'themestarter' ) );

        if ( $categories_list ) {
            echo '<p class="uk-text-small uk-text-meta uk-text-uppercase uk-margin-small-bottom">';
                echo $theme_post_meta . '<span class="categories">' . $categories_list . '</span>';
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
        $tags_list = get_the_tag_list( '', __( ', ', 'themestarter' ) );

        if ( $tags_list ) {
            printf( '<span class="tags">' . __( 'Tags: %1$s', 'themestarter' ) . '</span>', $tags_list );
        }
    }

}

/**
 * Posts pagination parameters - the_post_pagination( $pagination_parameters );
 */
$pagination_parameters = array(
    'end_size' => 2,
    'mid_size' => 2,
    'prev_text' => '<',
    'next_text' => '>',
    'screen_reader_text' => __( 'Posts Navigation', 'themestarter' ),
);

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
