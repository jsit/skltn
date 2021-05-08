<?php
/**
 * The template for displaying the article meta: timestamp, author, and tags
 *
 * @package WordPress
 * @subpackage skltn
 * @since skltn 0.1
 */

?>

<header class="site-main__header">
	<?php
		the_archive_title( '<h2 class="archive-title">', '</h2>' );
		the_archive_description( '<p class="archive-description">', '</p>' );
	?>
</header>

