<section class="article__body" itemprop="articleBody">
	<p>
		This file was attached to the post <strong><a href="<?php echo esc_url( get_permalink( $post->post_parent ) ); ?>"><?php echo wp_kses_post( get_the_title( $post->post_parent ) ); ?></a></strong>.
	</p>
	<p>
		<?php the_attachment_link( '', true ); ?>
	</p>
</section>
