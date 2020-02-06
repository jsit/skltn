<article <?php post_class( array( 'article', 'h-entry' ) ); ?>>

	<header class="article__header">

		<?php if ( is_singular() ) { ?>
			<?php the_title( '<h1 class="article__title p-name">', '</h1>' ); ?>
		<?php } else { ?>
			<?php the_title( '<h3 class="article__title p-name"><a href="' . get_permalink() . '">', '</a></h3>' ); ?>
		<?php } ?>

	</header>

	<div class="article__body e-content">
		<p><?php _e( 'There doesn&rsquo;t seem to be anything here.', 'skltn' ); ?></p>
		<p><?php _e( 'Either you&rsquo;re looking for a page that no longer exists, or you followed a broken link.', 'skltn' ); ?></p>
		<p><?php _e( 'If you have some idea of what you&rsquo;re looking for, you might find it with a search:', 'skltn' ); ?></p>
		<?php echo get_search_form(); ?>
	</div>

</article>

