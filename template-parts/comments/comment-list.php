<?php
/**
 * The template for displaying list of comments
 *
 * @package WordPress
 * @subpackage skltn
 * @since skltn 0.1.4
 */

?>

<ol class="comment-list">
	<?php
		wp_list_comments(
			array(
				'avatar_size' => 48,
				'style'       => 'ol',
				'short_ping'  => true,
				'reply_text'  => __( 'Reply', 'skltn' ),
			)
		);
		?>
</ol>

