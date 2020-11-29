<section class="article__body" itemprop="articleBody">
	<?php if ( is_attachment() ) : ?>
		<p>
			This file was attached to the post <strong><a href="<?php echo esc_url( get_permalink( $post->post_parent ) ); ?>"><?php echo wp_kses_post( get_the_title( $post->post_parent ) ?: __( '(no title)', 'skltn' ) ); ?></a></strong>.
		</p>
		<p>
			<?php the_attachment_link( '', true ); ?>
		</p>
		<ol class="article__attachment-nav">
			<li class="article__attachment-nav-prev">
				<?php previous_image_link(); ?>
			</li>
			<li class="article__attachment-nav-next">
				<?php next_image_link(); ?>
			</li>
		</ol>
		<?php
	else :
		the_content(
			sprintf(
				wp_kses_post(
					/* translators: %s: Post title */
					__( 'Continue reading "%s"', 'skltn' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			)
		);
	endif;
	?>
</section>

