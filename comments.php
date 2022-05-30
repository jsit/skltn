<?php
/**
 * The comments template
 *
 * @package WordPress
 * @subpackage skltn
 * @since skltn 0.1
 * @since skltn 0.1.4 Use comment-list template for comments list
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

<?php
	// You can start editing here -- including this comment!
if ( have_comments() ) :
	?>
	<h2 class="comments-title">
	<?php
	$skltn_comments_number = get_comments_number();
	if ( '1' === $skltn_comments_number ) {
		/* translators: %s: Post title. */
		printf( wp_kses_post( _x( 'One Response to <q>%s</q>', 'comments title', 'skltn' ) ), wp_kses_post( get_the_title() ) );
	} else {
		printf(
			esc_html(
				/* translators: 1: Number of comments, 2: Post title. */
				_nx(
					'%1$s Response to &ldquo;%2$s&rdquo;',
					'%1$s Responses to &ldquo;%2$s&rdquo;',
					$skltn_comments_number,
					'comments title',
					'skltn'
				)
			),
			esc_html( number_format_i18n( $skltn_comments_number ) ),
			wp_kses_post( get_the_title() )
		);
	}
	?>
	</h2>

	<?php
	foreach ( $comments_by_type as $skltn_comments_type => $skltn_comments ) {
		if ( 0 < count( $skltn_comments ) && 'trackback' !== $skltn_comments_type && 'pingback' !== $skltn_comments_type ) {
			// 'pings' includes both trackbacks and pingbacks, so disregard those
			// individual categories

			// Don't add a heading for 'Comments', since that's what "normal" comments
			// are
			if ( 'comment' !== $skltn_comments_type ) {
				echo '<h3 class="comment-section-title">', esc_html( ucfirst( $skltn_comments_type ) ), '</h3>';
			}
			?>

	<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'avatar_size' => 48,
					'style'       => 'ol',
					'type'        => $skltn_comments_type,
					'short_ping'  => true,
					'reply_text'  => __( 'Reply', 'skltn' ),
				)
			);
			?>
	</ol>
			<?php
		}
	}
	?>

	<?php
	the_comments_pagination(
		array(
			'prev_text' => '<span class="screen-reader-text">' . __( 'Previous', 'skltn' ) . '</span>',
			'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'skltn' ) . '</span>',
		)
	);

	endif; // Check for have_comments().

// If comments are closed and there are comments, let's leave a little note, shall we?
if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>

	<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'skltn' ); ?></p>
		<?php
	endif;

comment_form();
?>

</div><!-- #comments -->

