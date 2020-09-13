<section class="article__body" itemprop="articleBody">
	<p>
		<?php
			echo sprintf(
				/* translators: 1: Parent post URL, 2: Parent post title */
				wp_kses_post( 'This file was attached to the post <strong><a href="%1$s">%2$s</a></strong>.', 'skltn' ),
				esc_url( get_permalink( $post->post_parent ) ),
				wp_kses_post( get_the_title( $post->post_parent ) )
			);
			?>
	</p>
	<p>
		<?php the_attachment_link( '', true ); ?>
	</p>
</section>
