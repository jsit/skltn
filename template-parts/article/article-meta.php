<p class="article__timestamp"><time datetime="<?php the_time( 'c' ); ?>" itemprop="datePublished"><?php the_time( 'M j, Y' ); ?></time><?php edit_post_link( __( 'Edit Post', 'skltn' ), ' &middot; ' ); ?></p>

<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ), get_the_author_meta( 'user_nicename' ) ) ); ?>" class="article__author" itemprop="author" itemscope itemtype="https://schema.org/Person">
	<span itemprop="name"><?php the_author(); ?></span>
</a>

