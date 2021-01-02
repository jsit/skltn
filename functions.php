<?php

function skltn_theme_setup() {
	add_theme_support( 'post-formats', array( 'link', 'aside' ) );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'automatic-feed-links' );
	load_theme_textdomain( 'skltn', get_template_directory() . '/languages' );

	global $content_width;
	if ( ! isset( $content_width ) ) {
		$content_width = 960;
	}
}
add_action( 'after_setup_theme', 'skltn_theme_setup' );

function skltn_nav_menus() {
	register_nav_menus(
		array(
			'header' => __( 'Header Nav', 'skltn' ),
		)
	);
}
add_action( 'init', 'skltn_nav_menus' );

function skltn_sidebars() {
	register_sidebar(
		array(
			'name'          => __( 'About Sidebar', 'skltn' ),
			'id'            => 'about-sidebar',
			'description'   => __( 'Sidebar Widgets on most pages', 'skltn' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget__heading">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => __( 'Footer', 'skltn' ),
			'id'            => 'footer',
			'description'   => __( 'Footer', 'skltn' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget__heading">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'skltn_sidebars' );

function skltn_enqueue_styles_scripts() {
	wp_enqueue_style( 'skltn-style', get_template_directory_uri() . '/style.css', '', wp_get_theme()->get( 'Version' ) );
	wp_enqueue_script( 'skltn-script', get_template_directory_uri() . '/script.js', '', wp_get_theme()->get( 'Version' ), true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'skltn_enqueue_styles_scripts' );

function skltn_default_skin_editor_styles() {
	add_editor_style( get_stylesheet_directory_uri() . '/skins/default/style-editor.css' );
}
add_action( 'after_setup_theme', 'skltn_default_skin_editor_styles' );

function skltn_default_skin_styles() {
	wp_enqueue_style( 'skltn-skin', get_template_directory_uri() . '/skins/default/style.css', '', wp_get_theme()->get( 'Version' ) );
}
add_action( 'wp_enqueue_scripts', 'skltn_default_skin_styles' );

function skltn_customize_register( $wp_customize ) {
	$wp_customize->add_setting(
		'skltn_primary_color',
		array(
			'default'           => 'default',
			'transport'         => 'refresh',
			'sanitize_callback' => 'skltn_sanitize_color_option',
		)
	);

	$wp_customize->add_control(
		'skltn_primary_color',
		array(
			'type'     => 'radio',
			'label'    => __( 'Primary Color', 'skltn' ),
			'choices'  => array(
				'default' => _x( 'Default', 'primary color', 'skltn' ),
				'custom'  => _x( 'Custom', 'primary color', 'skltn' ),
			),
			'section'  => 'colors',
			'priority' => 5,
		)
	);
	
	// Add primary color hex setting and control.
	$wp_customize->add_setting(
		'skltn_primary_color_hex',
		array(
			'default'           => '#39d',
			'transport'         => 'refresh',
			'sanitize_callback' => 'sanitize_hex_color',
		)
	);

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'skltn_primary_color_hex',
			array(
				'label'       => __( 'Primary Color', 'skltn' ),
				'description' => __( 'Apply a custom color for buttons, links, featured images, etc.', 'skltn' ),
				'section'     => 'colors',
				'mode'        => 'full',
			)
		)
	);
}
add_action( 'customize_register', 'skltn_customize_register' );

function skltn_sanitize_color_option( $choice ) {
	$valid = array(
		'default',
		'custom',
	);

	if ( in_array( $choice, $valid, true ) ) {
		return $choice;
	}

	return 'default';
}

function skltn_colors_css_wrap() {
	$primary_color = '#39d';

	if ( 'default' !== get_theme_mod( 'skltn_primary_color', 'default' ) ) {
		$primary_color = get_theme_mod( 'skltn_primary_color_hex', '#39d' );
	}

	$primary_color_hue = floor( skltn_hex_to_hsl( substr( $primary_color, 1, 6 ) )[0] * 360 );
	?>

	<style type="text/css" id="custom-theme-colors" <?php echo is_customize_preview() ? 'data-hue="' . absint( $primary_color ) . '"' : ''; ?>>
		:root {
			--skltn-primary-color: <?php echo esc_html( $primary_color ); ?>;
			--skltn-primary-hue: <?php echo esc_html( $primary_color_hue ); ?>;
		}
	</style>

	<?php
}
add_action( 'wp_head', 'skltn_colors_css_wrap' );
add_action( 'admin_head', 'skltn_colors_css_wrap' );

// Convert hex color to HSL color; returns array
// https://gist.github.com/bedeabza/10463089
function skltn_hex_to_hsl( $hex ) {
	if ( strlen( $hex ) === 3 ) {
		$hex = $hex[0] . $hex[0] . $hex[1] . $hex[1] . $hex[2] . $hex[2];
	}
	$hex = array( $hex[0] . $hex[1], $hex[2] . $hex[3], $hex[4] . $hex[5] );
	$rgb = array_map(
		function( $part ) {
			return hexdec( $part ) / 255;
		},
		$hex
	);

	$max = max( $rgb );
	$min = min( $rgb );

	$l = ( $max + $min ) / 2;

	if ( $max === $min ) {
		$h = $s = 0; // phpcs:ignore Squiz.PHP.DisallowMultipleAssignments.Found
	} else {
		$diff = $max - $min;
		$s    = $l > 0.5 ? $diff / ( 2 - $max - $min ) : $diff / ( $max + $min );

		switch ( $max ) {
			case $rgb[0]:
				$h = ( $rgb[1] - $rgb[2] ) / $diff + ( $rgb[1] < $rgb[2] ? 6 : 0 );
				break;
			case $rgb[1]:
				$h = ( $rgb[2] - $rgb[0] ) / $diff + 2;
				break;
			case $rgb[2]:
				$h = ( $rgb[0] - $rgb[1] ) / $diff + 4;
				break;
		}

		$h /= 6;
	}

	return array( $h, $s, $l );
}

// Convert HSV to HSL
function skltn_hsv_to_hsl( $h, $s, $v ) {
	// both hsv and hsl values are in [0, 1]
	$l = ( 2 - $s ) * $v / 2;

	if ( 0 !== $l ) {
		if ( 1 === $l ) {
			$s = 0;
		} elseif ( $l < 0.5 ) {
			$s = $s * $v / ( $l * 2 );
		} else {
			$s = $s * $v / ( 2 - $l * 2 );
		}
	}

	return [ $h, $s, $l ];
}
