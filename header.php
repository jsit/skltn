<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php
		//Show opengraph details in WP header

		if ( is_singular() ) {
			?>

				<meta property="og:title" content="<?php esc_attr( get_the_title() ); ?>">
				<meta property="og:description" content="<?php echo esc_attr( get_the_excerpt() ); ?>">
				<meta property="og:site_name" content="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>">
				<meta property="og:url" content="<?php echo esc_url( get_the_permalink() ); ?>">

				<?php
					$skltn_args = array(
						'post_type'   => 'attachment',
						'numberposts' => 1,
						'post_status' => null,
						'post_parent' => $post->ID,
					);

					$skltn_attachments = new WP_Query( $skltn_args );

					if ( $skltn_attachments->have_posts() ) {
						while ( $skltn_attachments->have_posts() ) {
							$skltn_attachments->the_post();
							$skltn_attachment_url = wp_get_attachment_image_src( $post->ID, 'full', false );
							?>
								<meta property="og:image" content="<?php echo esc_attr( $skltn_attachment_url[0] ); ?>">
								<link rel="image_src" type="image/jpeg" href="<?php echo esc_attr( $skltn_attachment_url[0] ); ?>">
							<?php
						}
					}
		}
		?>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php wp_body_open(); ?>

		<div class="page">

			<header class="site-header">

				<?php
					$skltn_logo_html = '<%1$s class="site-header__logo"><a href="' . esc_url( home_url() ) . '">' . esc_html( get_bloginfo( 'name' ) ) . '</a></%1$s>';
					$skltn_logo_tag = ( is_front_page() || is_home() ) && ! is_page() ? 'h1' : 'div';
					echo sprintf( $skltn_logo_html, $skltn_logo_tag ); //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				?>

				<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'header',
								'container'       => 'nav',
								'container_class' => 'site-nav',
								'items_wrap'      => '<ul id="%1$s" class="%2$s site-nav__list">%3$s</ul>',
							)
						);
						?>
			</header>
