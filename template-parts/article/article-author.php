<?php
/**
 * The template for displaying the article author
 *
 * @package WordPress
 * @subpackage skltn
 * @since skltn 0.1.4
 */

?>

<small class="article__author"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>" itemprop="author" itemscope itemtype="https://schema.org/Person"><small itemprop="name"><?php the_author(); ?></small></a></small>

