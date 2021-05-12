<?php
/**
 * The template for displaying the article timestamp
 *
 * @package WordPress
 * @subpackage skltn
 * @since skltn 0.1.4
 */

?>

<span class="article__timestamp"><time datetime="<?php the_time( 'c' ); ?>" itemprop="datePublished"><?php the_time( 'M j, Y' ); ?></time><?php edit_post_link( __( 'Edit Post', 'skltn' ), ' &middot; ' ); ?></span>

