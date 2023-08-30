<?php
/**
 * The comment list template
 *
 * @package WordPress
 * @subpackage skltn
 * @since skltn 0.1.7
 */

?>

<ol class="comment-list">
	<?php
	wp_list_comments(
		array(
			'avatar_size' => 48,
			'style'       => 'ol',
			'type'        => $args['comments_type'],
			'short_ping'  => true,
			'reply_text'  => __( 'Reply', 'skltn' ),
		)
	);
	?>
</ol>

<?php

