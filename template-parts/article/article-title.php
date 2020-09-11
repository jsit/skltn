<?php if ( is_singular() ) { ?>
	<?php the_title( '<h1 class="article__title" itemprop="headline">', '</h1>' ); ?>
<?php } else { ?>
	<?php the_title( '<h3 class="article__title" itemprop="headline"><a href="' . get_permalink() . '">', '</a></h3>' ); ?>
<?php } ?>

