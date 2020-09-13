<section class="article__body" itemprop="articleBody">
	<?php
		the_content(
			sprintf(
				wp_kses_post(
					/* translators: %s: Post title. */
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
	?>
</section>
