<?php
/**
 * The template for displaying the article meta: timestamp, author, and tags
 *
 * @package WordPress
 * @subpackage skltn
 * @since skltn 0.1
 * @since skltn 0.1.4 Use timestamp, author, and tags template parts
 */

?>

<p class="article__meta">
	<?php get_template_part( 'template-parts/article/article', 'timestamp' ); ?>

	<?php get_template_part( 'template-parts/article/article', 'author' ); ?>
</p>

<?php
get_template_part( 'template-parts/article/article', 'tags' );

