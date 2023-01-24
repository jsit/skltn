<?php
/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage skltn
 * @since skltn 0.1
 */
?><!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#" <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<?php wp_head(); ?>

	</head>

	<body <?php body_class('site-body'); ?>>

		<?php wp_body_open(); ?>

		<div class="page-wrapper">

			<header class="site-header">

				<a class="site-header__skip-link" href="#site-main">Skip to content</a>

				<?php
					$skltn_logo_html = '<%1$s class="site-header__logo"><a href="' . esc_url( home_url() ) . '">' . esc_html( get_bloginfo( 'name' ) ) . '</a></%1$s>';

					$skltn_logo_tag = ( is_front_page() || is_home() ) && ! is_page() ? 'h1' : 'p';

					echo sprintf( $skltn_logo_html, $skltn_logo_tag ); //phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				?>

				<?php
					if ( !empty( get_bloginfo( 'description' ) ) ) {
				?>
				<p class="site-header__tagline">
					<?php bloginfo( 'description' ); ?>
				</p>
				<?php
					}
				?>

				<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'header',
								'container'       => 'nav',
								'fallback_cb'     => false,
								'depth'           => 1,
								'container_class' => 'site-nav',
								'items_wrap'      => '<ul id="%1$s" class="%2$s site-nav__list">%3$s</ul>',
							)
						);
						?>
			</header>
