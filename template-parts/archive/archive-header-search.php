<?php
/**
 * The template for displaying the archive header
 *
 * @package WordPress
 * @subpackage skltn
 * @since skltn 0.1
 */

?>

<header class="site-main__header">
	<h2 class="archive-title">
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

