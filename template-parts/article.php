<?php
/**
 * The template for displaying an article (post, page, attachment)
 *
 * @package WordPress
 * @subpackage skltn
 * @since skltn 0.1
 */

?>

<article <?php post_class( 'article' ); ?> itemscope itemtype="https://schema.org/BlogPosting">

	<?php if ( !has_block( 'post-title' ) ) { ?>
	<header class="article__header<?php echo ( is_attachment() || is_page_template( 'templates/template-full-width.php' ) ) ? ' is-layout-constrained has-global-padding' : ''; ?>">

		<?php get_template_part( 'template-parts/article/article', 'title' ); ?>

		<?php get_template_part( 'template-parts/article/article', 'meta' ); ?>

	</header>
	<?php } ?>

	<?php get_template_part( 'template-parts/article/article', 'body' ); ?>

	<?php wp_link_pages( $args ); ?>

	<?php get_template_part( 'template-parts/article/article', 'comments' ); ?>

</article>

