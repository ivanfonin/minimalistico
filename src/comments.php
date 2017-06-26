<?php
/**
 * Comments template file.
 */
?>

<?php if ( post_password_required() ) { return; } ?>

<div class="site-comments">
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php printf( __( 'Comments published: %1$d', 'themestarter' ), get_comments_number() ); ?>
        </h2>

        <?php theme_comment_nav(); ?>

        <ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 56,
				) );
			?>
		</ol>

        <?php theme_comment_nav(); ?>

    <?php endif; ?>

    <?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php _e( 'Comments are closed.', 'themestarter' ); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>
</div>
