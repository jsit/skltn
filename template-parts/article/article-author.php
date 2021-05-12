<?php
/**
 * The template for displaying the article author
 *
 * @package WordPress
 * @subpackage skltn
 * @since skltn 0.1.4
 */

?>

<span class="article__author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>" itemprop="author" itemscope itemtype="https://schema.org/Person"><span itemprop="name"><?php the_author(); ?></span></a></span>

