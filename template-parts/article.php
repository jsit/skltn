<article <?php post_class( array( 'article', 'h-entry' ) ); ?>>

	<header class="article__header">

		<?php if ( is_singular() ) { ?>
			<?php the_title( '<h1 class="article__title p-name">', '</h1>' ); ?>
		<?php } else { ?>
			<?php the_title( ' <h4 class="article__title p-name"><a href="' . get_permalink() . '">', '</a></h4>' ); ?>
		<?php } ?>

		<p class="article__timestamp"><time class="dt-published" datetime="<?php the_time( 'c' ); ?>"><?php the_time( 'F d, Y' ); ?></time><?php edit_post_link( __( 'Edit Post', 'skltn' ), ' &middot; ' ); ?><?php /* ?> &middot; <?php the_author_posts_link(); ?><?php */ ?></p>

	</header>

	<section class="article__body e-content">
		<?php the_content( 'Read more' ); ?>
	</section>

	<section class="article__comments">
		<?php comments_template(); ?>
	</section>

</article>
