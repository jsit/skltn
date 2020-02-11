<?php get_header(); ?>

<main class="l-content-main site-main">

	<?php
	if ( is_archive() || is_search() ) :
		the_archive_title( '<h2>', '</h2>' );
	endif;
	?>

	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();
			get_template_part( 'template-parts/article' );
		}
	} else {
		get_template_part( 'template-parts/article-not-found' );
	}
	?>

	<?php
		echo wp_kses_post(
			paginate_links(
				array(
					'type'      => 'list',
					'prev_text' => __( 'Newer posts', 'skltn' ),
					'next_text' => __( 'Older posts', 'skltn' ),
				)
			)
		);
		?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
