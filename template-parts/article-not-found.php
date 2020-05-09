<article <?php post_class( 'article' ); ?>>

	<header class="article__header">

		<?php the_title( '<h1 class="article__title">', '</h1>' ); ?>

	</header>

	<div class="article__body">
		<p><?php esc_html_e( 'There doesn&rsquo;t seem to be anything here.', 'skltn' ); ?></p>
		<p><?php esc_html_e( 'Either you&rsquo;re looking for a page that no longer exists, or you followed a broken link.', 'skltn' ); ?></p>
		<p><?php esc_html_e( 'If you have some idea of what you&rsquo;re looking for, you might find it with a search:', 'skltn' ); ?></p>
		<?php echo get_search_form(); ?>
	</div>

</article>

