<?php
/**
 * The comments count template
 *
 * @package WordPress
 * @subpackage skltn
 * @since skltn 0.1.4
 */

?>

<?php if ( ! is_singular() ) { ?>
	<p class="article__comment-count">
		<a href="<?php comments_link(); ?>">
			<?php comments_number( __( 'Leave a Comment', 'skltn' ), __( 'One Response', 'skltn' ), __( '% Responses', 'skltn' ) ); ?>
		</a>
	</p>
	<?php
}

