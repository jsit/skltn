<article <?php post_class( 'article' ); ?> itemscope itemtype="https://schema.org/BlogPosting">

	<header class="article__header">

		<?php get_template_part( 'template-parts/article/article', 'title' ); ?>

		<?php get_template_part( 'template-parts/article/article', 'meta' ); ?>

	</header>

	<?php get_template_part( 'template-parts/article/article', 'body' ); ?>

	<?php wp_link_pages( $args ); ?>

	<?php get_template_part( 'template-parts/article/article', 'comments' ); ?>

</article>
