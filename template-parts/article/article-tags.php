<?php
/**
 * The template for displaying the article tags
 *
 * @package WordPress
 * @subpackage skltn
 * @since skltn 0.1.4
 */

?>

<?php
the_tags( sprintf( '<p class="article__tags">%s', __( 'Tags: ', 'skltn' ) ), ', ', '</p>' );

