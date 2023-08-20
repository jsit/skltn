<?php
/**
 * The sidebar template
 *
 * @package WordPress
 * @subpackage skltn
 * @since skltn 0.1
 */

?>

<aside class="sidebar">

	<?php
		if ( is_single() ) {
			dynamic_sidebar( 'about-sidebar' );
		} else {
			dynamic_sidebar( 'archive-sidebar' );
		}
	?>

</aside>

