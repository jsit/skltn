<?php if ( ! is_singular() ) { ?>
	<p class="article__comment-count">
		<a href="<?php comments_link(); ?>">
			<?php comments_number( __( 'Leave a Comment', 'skltn' ), __( 'One Response', 'skltn' ), __( '% Responses', 'skltn' ) ); ?>
		</a>
	</p>
<?php } ?>

<section class="article__comments">
<?php
if ( is_single() && ! is_attachment() ) {
	comments_template();
}
?>
</section>

