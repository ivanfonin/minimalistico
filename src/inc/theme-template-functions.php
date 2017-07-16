<?php
/**
 * Theme helper functions.
 */

/**
 * Add uk-list class to ul elements inside blog sidebar widgets.
 */
if ( ! function_exists( 'theme_print_blog_sidebar' ) ) {

    function theme_print_blog_sidebar() {
        ob_start();
        dynamic_sidebar( 'blog-sidebar' );
        $sidebar_html = ob_get_contents();
        ob_end_clean();

        $theme_sidebar_with_uikit_ul_class = str_replace("<ul>", '<ul class="uk-list">', $sidebar_html);

        echo $theme_sidebar_with_uikit_ul_class;
    }

}

/**
 * Add uk-list class to ul elements inside page sidebar widgets.
 */
if ( ! function_exists( 'theme_print_page_sidebar' ) ) {

    function theme_print_page_sidebar() {
        ob_start();
        dynamic_sidebar( 'page-sidebar' );
        $sidebar_html = ob_get_contents();
        ob_end_clean();

        $theme_sidebar_with_uikit_ul_class = str_replace("<ul>", '<ul class="uk-list">', $sidebar_html);

        echo $theme_sidebar_with_uikit_ul_class;
    }

}

/**
* Add support for the Pageviews plugin.
*/
if ( ! function_exists( 'theme_show_pageviews' ) ) {

    function theme_show_pageviews() {
       if ( ! has_action( 'pageviews' ) )
           return;

       $post = get_post(); ?>

       <span class="uk-text-small uk-text-bold">
           <span uk-icon="icon: forward; ratio: .7"></span> <a href="<?php the_permalink(); ?>" class="uk-margin-small-right uk-button uk-button-link"><?php do_action( 'pageviews' ); ?></a>
       </span>

       <?php
    }

}

/**
* Show posted on date.
*/
if ( ! function_exists( 'theme_show_posted_on_date' ) ) {

    function theme_show_posted_on_date() {
        $posted_on = sprintf( '<time class="date uk-margin-small-right uk-button uk-button-link" datetime="%1$s">%2$s</time>',
                             esc_attr( get_the_date('c') ),
                             esc_html( get_the_date() )
        ); ?>

        <span uk-icon="icon: clock; ratio: .7"></span> <span class="posted-on"><?php echo $posted_on; ?></span>

        <?php
    }

}

/**
* Show post author.
*/
if ( ! function_exists( 'theme_show_post_author' ) ) {

    function theme_show_post_author() {
        $author = sprintf( '<a class="author-link uk-margin-small-right uk-button uk-button-link" href="%1$s">%2$s</a>',
                          esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ),
                          esc_html( get_the_author() )
        );

        echo '<span uk-icon="icon: user; ratio: .7"></span> <span class="author">' . $author . '</span> ';
    }

}

/**
* Show post categories.
*/
if ( ! function_exists( 'theme_show_post_categories' ) ) {

    function theme_show_post_categories() {
        $categories_list = get_the_category_list( __( '</span>, <span class="uk-button uk-button-link">', 'themestarter' ) );

        if ( $categories_list ) {
            echo '<span class="uk-button uk-button-link">' . $categories_list . '</span>';
        }
    }

}

/**
* Show comments number.
*/
if ( ! function_exists( 'theme_show_comments_number' ) ) {

    function theme_show_comments_number() { ?>
        <span class="uk-text-small uk-text-bold uk-margin-small-right">
            <span uk-icon="icon: comment; ratio: .7"></span>&nbsp;
            <span class="uk-button uk-button-link"><?php echo get_comments_number(); ?></span>
        </span>
        <?php
    }

}

/**
 * Post meta info - publishing date, author and categories list.
 */
if ( ! function_exists( 'theme_post_meta' ) ) {

    function theme_post_meta() {
            theme_show_posted_on_date();
            theme_show_comments_number();
            theme_show_pageviews();
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
 */
function theme_print_posts_pagination() {

    // Display pagination only if there is more than one page.
    if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
		return;
	} ?>

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

    <?php
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
