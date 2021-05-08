<?php
/**
 * The template for displaying the article title
 *
 * @package WordPress
 * @subpackage skltn
 * @since skltn 0.1
 */

?>

<?php
if ( is_singular() ) {
	the_title( '<h1 class="article__title" itemprop="headline">', '</h1>' );
} else {
	the_title( '<h3 class="article__title" itemprop="headline"><a href="' . esc_url( get_permalink() ) . '">', '</a></h3>' );
}

