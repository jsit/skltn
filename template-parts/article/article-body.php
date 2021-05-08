<?php
/**
 * The template for displaying the body of an article (post, page, attachment)
 *
 * @package WordPress
 * @subpackage skltn
 * @since skltn 0.1
 */

?>

<div class="article__body" itemprop="articleBody">
	<?php if ( is_attachment() ) : ?>
		<p>
		<?php
		/* translators: 1: URL of parent post, 2: Title of parent post */
		printf( wp_kses_post( __( 'This file was attached to the post <strong><a href="%1$s">%2$s</a></strong>.', 'skltn' ) ), esc_url( get_permalink( $post->post_parent ) ), wp_kses_post( get_the_title( $post->post_parent ) ?: esc_html__( '(no title)', 'skltn' ) ) );
		?>
		</p>
		<p>
			<?php the_attachment_link( '', true ); ?>
		</p>
		<ol class="article__attachment-nav">
			<li class="article__attachment-nav-prev">
				<?php previous_image_link(); ?>
			</li>
			<li class="article__attachment-nav-next">
				<?php next_image_link(); ?>
			</li>
		</ol>
		<?php
	else :
		the_content(
			sprintf(
				wp_kses_post(
					/* translators: %s: Post title */
					__( '<span aria-label="Continue reading &ldquo;%s&rdquo;">Continue reading</span>', 'skltn' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				the_title_attribute( array( 'echo' => false ) )
			)
		);
	endif;
	?>
</div>

