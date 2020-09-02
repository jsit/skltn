<article <?php post_class( 'article' ); ?> itemscope itemtype="https://schema.org/BlogPosting">

	<header class="article__header">

		<?php if ( is_singular() ) { ?>
			<?php the_title( '<h1 class="article__title" itemprop="headline">', '</h1>' ); ?>
		<?php } else { ?>
			<?php the_title( '<h3 class="article__title" itemprop="headline"><a href="' . get_permalink() . '">', '</a></h3>' ); ?>
		<?php } ?>

		<p class="article__timestamp"><time datetime="<?php the_time( 'c' ); ?>" itemprop="datePublished"><?php the_time( 'M j, Y' ); ?></time><?php edit_post_link( __( 'Edit Post', 'skltn' ), ' &middot; ' ); ?></p>

		<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>" class="article__author" itemprop="author" itemscope itemtype="https://schema.org/Person">
			<span itemprop="name"><?php the_author(); ?></span>
		</a>

	</header>

	<section class="article__body" itemprop="articleBody">
		<?php if ( is_attachment() ) { ?>
		<p>
			This file was attached to the post <strong><a href="<?php echo esc_url( get_permalink( $post->post_parent ) ); ?>"><?php echo wp_kses_post( get_the_title( $post->post_parent ) ); ?></a></strong>.
		</p>
		<p>
			<?php the_attachment_link( '', true ); ?>
		</p>
			<?php } else { ?>
				<?php the_content( 'Read more' ); ?>
			<?php } ?>
	</section>

	<?php if ( ! is_singular() ) { ?>
		<p class="article__comment-count"><a href="<?php comments_link(); ?>"><?php comments_number( __( 'Leave a Comment', 'skltn' ), __( 'One Response', 'skltn' ), __( '% Responses', 'skltn' ) ); ?></a></p>
	<?php } ?>

	<section class="article__comments">
	<?php
	if ( is_single() && comments_open() && ! is_attachment() ) {
		comments_template();
	}
	?>
	</section>

</article>
