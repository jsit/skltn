<?php
/**
 * The template for displaying the article comments
 *
 * Shows the comment count with link on archive pages, or the comments list and
 * form on singular pages
 *
 * @package WordPress
 * @subpackage skltn
 * @since skltn 0.1
 */

?>

<?php if ( ! is_singular() ) { ?>
	<p class="article__comment-count">
		<a href="<?php comments_link(); ?>">
			<?php comments_number( __( 'Leave a Comment', 'skltn' ), __( 'One Response', 'skltn' ), __( '% Responses', 'skltn' ) ); ?>
		</a>
	</p>
<?php } ?>

<section class="article__comments">
<?php
if ( is_single() && ! is_attachment() ) {
	comments_template();
}
?>
</section>

