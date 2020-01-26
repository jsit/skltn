<article <?php post_class( array( 'article', 'h-entry' ) ); ?>>

	<header class="article__header">

		<?php if ( is_singular() ) { ?>
			<?php the_title( '<h1 class="article__title p-name">', '</h1>' ); ?>
		<?php } else { ?>
			<?php the_title( ' <h4 class="article__title p-name"><a href="' . get_permalink() . '">', '</a></h4>' ); ?>
		<?php } ?>

	</header>

	<div class="article__body e-content">
		<p>Sorry, but there&rsquo;s nothing here.</p>
	</div>

</article>

