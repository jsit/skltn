<?php
	echo wp_kses_post(
		paginate_links(
			array(
				'type'      => 'list',
				'prev_text' => __( 'Newer posts', 'skltn' ),
				'next_text' => __( 'Older posts', 'skltn' ),
			)
		)
	);
