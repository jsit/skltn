<?php get_header(); ?>

<main class="site-main">

	<?php
	if ( is_archive() ) {
		get_template_part( 'template-parts/archive/archive-header' );
	} elseif ( is_search() ) {
		get_template_part( 'template-parts/archive/archive-header', 'search' );
	}
	?>

	<?php
	if ( have_posts() ) {
		while ( have_posts() ) {
			the_post();

			// Set a template part "name" based on post type or post format
			// https://developer.wordpress.org/reference/functions/get_template_part/
			switch ( get_post_type() ) {
				/* If it's a post, use the post format ('standard', 'aside', etc.) */
				case 'post':
					$template_name = get_post_format() ? : 'standard';
					/* If it isn't a post, use the post type ('page', 'attachment', etc.) */
				default:
					$template_name = get_post_type();
			}

			get_template_part(
				'template-parts/article',
				$template_name,
				[ 'template_name' => $template_name ]
			);
		}
	} else {
		get_template_part( 'template-parts/article', 'not-found' );
	}
	?>

	<?php get_template_part( 'template-parts/common/pagination', get_post_type() ); ?>

</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
