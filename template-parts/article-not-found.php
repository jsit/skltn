<article <?php post_class( 'article' ); ?>>

	<header class="article__header">

		<?php if ( is_singular() ) { ?>
			<?php the_title( '<h1 class="article__title">', '</h1>' ); ?>
		<?php } else { ?>
			<?php the_title( ' <h4 class="article__title"><a href="' . get_permalink() . '">', '</a></h4>' ); ?>
		<?php } ?>

	</header>

	<div class="article__body">
		<p>Sorry, but there&rsquo;s nothing here.</p>
	</div>

</article>

