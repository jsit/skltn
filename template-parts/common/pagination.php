<?php
/**
 * The template for displaying pagination
 *
 * @package WordPress
 * @subpackage skltn
 * @since skltn 0.1
 */

?>

<?php
	echo wp_kses_post(
		paginate_links(
			array(
				'type'      => 'list',
				'prev_text' => __( '&larr; Newer posts', 'skltn' ),
				'next_text' => __( 'Older posts &rarr;', 'skltn' ),
			)
		)
	);
