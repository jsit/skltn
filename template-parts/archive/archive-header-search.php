<header class="site-main__header">
	<h2>
		<?php
			echo sprintf(
				wp_kses_post(
					/* translators: %s: Searched phrase */
					__( 'Search results for &ldquo;%s&rdquo;', 'skltn' )
				),
				get_search_query()
			)
			?>
	</h2>
</header>
