<article <?php post_class( 'article' ); ?>>

	<header class="article__header">

		<?php if ( is_singular() ) { ?>
			<?php the_title( '<h1 class="article__title">', '</h1>' ); ?>
		<?php } else { ?>
			<?php the_title( ' <h4 class="article__title"><a href="' . get_permalink() . '">', '</a></h4>' ); ?>
		<?php } ?>

		<p class="article__timestamp"><?php the_time( 'F d, Y' ); ?><?php edit_post_link( __( 'Edit Post', 'skltn' ), ' &middot; ' ); ?><?php /* ?> &middot; <?php the_author_posts_link(); ?><?php */ ?></p>

	</header>

	<div class="article__body">
		<?php the_content( 'Read more' ); ?>
	</div>

</article>
