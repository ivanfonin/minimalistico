<?php

class Theme_Comments_Walker extends Walker_Comment {

    var $tree_type = 'comment';
	var $db_fields = array( 'parent' => 'comment_parent', 'id' => 'comment_ID' );

	// constructor: wrapper for the comments list
	function __construct() { ?>

		<section class="comments-list">

	<?php }

	// start_lvl: wrapper for child comments list
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$GLOBALS['comment_depth'] = $depth + 2; ?>

		<section class="child-comments comments-list uk-margin-medium-left">

	<?php }

	// end_lvl: closing wrapper for child comments list
	function end_lvl( &$output, $depth = 0, $args = array() ) {
		$GLOBALS['comment_depth'] = $depth + 2; ?>

		</section>

	<?php }

	// start_el: HTML for comment template
	function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 ) {
		$depth++;
		$GLOBALS['comment_depth'] = $depth;
		$GLOBALS['comment'] = $comment;
		$parent_class = ( empty( $args['has_children'] ) ? '' : 'parent' );

		if ( 'article' == $args['style'] ) {
			$tag = 'article';
			$add_below = 'comment';
		} else {
			$tag = 'article';
			$add_below = 'comment';
		} ?>

		<article <?php comment_class( empty( $args['has_children'] ) ? 'uk-comment uk-margin-medium-top uk-margin-medium-bottom' : 'uk-comment uk-margin-medium-top uk-margin-medium-bottom parent' ) ?> id="comment-<?php comment_ID() ?>" itemprop="comment" itemscope itemtype="http://schema.org/Comment">
            <div class="uk-card">
                <header class="uk-comment-header uk-grid-medium uk-flex-middle" uk-grid>
                    <div class="uk-width-auto">
                        <?php echo get_avatar( $comment, 34, get_option( 'avatar_default', 'mystery' ), __( 'Authors gravatar', 'minimalistico' ), array( 'class' => 'uk-comment-avatar uk-border-circle' ) ); ?>
                    </div>
                    <div class="uk-width-expand">
                        <h4 class="uk-comment-title uk-margin-remove">
                            <a class="uk-link-reset" href="<?php comment_author_url(); ?>"><?php comment_author(); ?></a>
                        </h4>
                        <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                            <li>
                                <time class="comment-meta-item" datetime="<?php comment_date('Y-m-d') ?>T<?php comment_time('H:iP') ?>" itemprop="datePublished"><?php comment_date('j F Y') ?>, <a class="uk-link-reset" href="#comment-<?php comment_ID() ?>" itemprop="url"><?php comment_time() ?></a></time>
                            </li>
                            <li>
                                <?php comment_reply_link(array_merge( $args, array('class' => 'uk-link-muted', 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
                            </li>
                        </ul>
                    </div>
                    <!--
                        <h4 class="uk-comment-title"></h4>
                        <ul class="uk-comment-meta uk-subnav"></ul>
                        <div class="comment-meta post-meta" role="complementary">
            				<h2 class="comment-author">
            					<a class="comment-author-link" href="<?php comment_author_url(); ?>" itemprop="author"><?php comment_author(); ?></a>
            				</h2>
            				<time class="comment-meta-item" datetime="<?php comment_date('Y-m-d') ?>T<?php comment_time('H:iP') ?>" itemprop="datePublished"><?php comment_date('jS F Y') ?>, <a href="#comment-<?php comment_ID() ?>" itemprop="url"><?php comment_time() ?></a></time>
            				<?php edit_comment_link('<p class="comment-meta-item">Edit this comment</p>','',''); ?>
            				<?php if ($comment->comment_approved == '0') : ?>
            				<p class="comment-meta-item">Your comment is awaiting moderation.</p>
            				<?php endif; ?>
            			</div>
                    -->
                </header>
                <div class="uk-comment-body" itemprop="text">
    				<?php comment_text(); ?>
    			</div>
            </div>

	<?php }

	// end_el: closing HTML for comment template
	function end_el(&$output, $comment, $depth = 0, $args = array() ) { ?>

        </article>

	<?php }

	// destructor: closing wrapper for the comments list
	function __destruct() { ?>

        </section>

	<?php }

}
