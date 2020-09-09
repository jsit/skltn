<?php

function skltn_theme_setup() {
	add_theme_support( 'post-formats', array( 'link', 'aside' ) );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'skltn_theme_setup' );

function skltn_editor_styles() {
	add_theme_support( 'editor-styles' );
	add_editor_style( get_stylesheet_directory_uri() . '/stylesheets/css/style-editor.css' );
}
add_action( 'after_setup_theme', 'skltn_editor_styles' );

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
}
add_action( 'wp_enqueue_scripts', 'skltn_enqueue_styles_scripts' );
