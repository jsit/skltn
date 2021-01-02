<?php get_header(); ?>

<main class="site-main" id="site-main">

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
			get_template_part( 'template-parts/article', get_post_format() ? : 'standard' );
		}
	} else {
		get_template_part( 'template-parts/article', 'not-found' );
	}
	?>

	<?php get_template_part( 'template-parts/common/pagination' ); ?>

</main>

<?php get_sidebar(); ?>

<?php
get_footer();
