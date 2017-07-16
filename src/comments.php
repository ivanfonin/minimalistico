<?php
/**
 * Comments template file.
 */
?>

<?php if ( post_password_required() ) { return; } ?>

<div class="comments uk-section-small">
    <?php if ( have_comments() ) : ?>
        <h2 class="uk-h3 uk-text-muted">
            <span uk-icon="comment"></span> <?php echo get_comments_number(); ?>
        </h2>

        <?php theme_comment_nav(); ?>

        <div class="uk-comment-list">
			<?php
				wp_list_comments( array(
                    'walker' => new Theme_Comments_Walker(),
					'style' => 'div',
					'short_ping'  => true,
					'avatar_size' => 34,
				) );
			?>
		</div>

        <?php theme_comment_nav(); ?>

    <?php endif; ?>

    <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'themestarter' ); ?></p>
	<?php endif; ?>

    <?php

    $commenter = wp_get_current_commenter();
    $req = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );

    $fields   =  array(
        'author' =>
            '<div class="uk-margin">' .
                '<input class="uk-input" id="author" name="author" type="text" placeholder="' . __( 'Name', 'themestarter' ) . '" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' />' .
            '</div>',
        'email' =>
            '<div class="uk-margin">' .
                '<input class="uk-input" id="email" name="email" type="text" placeholder="' . __( 'Email', 'themestarter' ) . '" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' />' .
            '</div>',
    );

    $comments_args = array(
        'fields' => $fields,
        'class_submit' => 'uk-button uk-button-secondary',
        'comment_notes_before' => '',
        'comment_notes_after' => '',
        'comment_field' =>
            '<div class="uk-margin">' .
                '<textarea class="uk-textarea" id="comment" name="comment" aria-required="true" placeholder="' . __( 'Comment', 'themestarter' ) . '"></textarea>' .
            '</div>',
    ); ?>

    <div class="uk-section uk-section-xsmall">
        <div class="uk-card">
            <?php comment_form( $comments_args ); ?>
        </div>
    </div>
</div>
