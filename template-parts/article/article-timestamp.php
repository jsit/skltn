<?php
/**
 * The template for displaying the article timestamp
 *
 * @package WordPress
 * @subpackage skltn
 * @since skltn 0.1.4
 */

?>

<span class="article__timestamp">

<?php
if ( true === $args['link'] ) {
	echo '<a href="' . esc_url( get_permalink() ) . '">';
}
?>

<time datetime="<?php the_time( 'c' ); ?>" itemprop="datePublished"><?php the_time( 'M j, Y' ); ?></time>

<?php
if ( true === $args['link'] ) {
	echo '</a>';
}
?>

<?php edit_post_link( __( 'Edit Post', 'skltn' ), ' &middot; ' ); ?>

</span>
