<article <?php post_class( 'article' ); ?> itemscope itemtype="https://schema.org/BlogPosting">

	<?php $template_name = $args['template_name']; ?>

	<header class="article__header">

		<?php get_template_part( 'template-parts/article/article-title', $template_name ); ?>

		<?php get_template_part( 'template-parts/article/article-meta', $template_name ); ?>

	</header>

	<?php get_template_part( 'template-parts/article/article-body', $template_name ); ?>

	<?php wp_link_pages( $args ); ?>

	<?php get_template_part( 'template-parts/article/article-comments', $template_name ); ?>

</article>
