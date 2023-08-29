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
 * @since skltn 0.1.4 Use comment-count template
 */

?>

<?php get_template_part( 'template-parts/comments/comment', 'count' ); ?>

<?php
if ( is_single() && ! is_attachment() ) {
	?>
<section class="article__comments<?php echo ( is_attachment() || is_page_template( 'templates/template-full-width.php' ) ) ? ' is-layout-constrained has-global-padding' : ''; ?>">
	<?php
	comments_template( '/comments.php', true );
}
?>
</section>
<?php

