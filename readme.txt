=== skltn ===
Contributors: topdownjimmy  
Tested up to: 5.5.1  
Stable tag: 0.1.7  
License: GPL-2.0-or-later  
License URI: http://www.gnu.org/licenses/gpl-2.0.html  

A super bare-bones, unopinionated WordPress blog theme that follows BEM, passes WordPress's theme guidelines, and allows for easy child theming.

== Description ==
A super bare-bones, unopinionated WordPress blog theme that follows BEM, passes WordPress's theme guidelines, and allows for easy child theming.

Some notes:

1. This theme currently only supports single-level header nav (i.e., no sub-menus).

= How to Use This Theme =

There are a number of ways to use skltn on your WordPress site:

1. Create a child theme. This is the recommended use-case for skltn. Your child theme must reference skltn in its style.css file as described in [the WordPress documentation](https://developer.wordpress.org/themes/advanced-topics/child-themes/).
1. Use it as-is and add all necessary styling in the "Customize" section of the admin panel.
1. Modify it as needed. This is not recommended, as any updates to the theme will be harder to incorporate into your modified version.

= Colors =

This theme provides a "Primary Color" theme customization option. The value of this color is available to child themes in several ways:

1. As CSS custom properties on `:root{}` for use in your own CSS:
    - `var(--skltn-primary-color)`: The hex of the chosen color
    - `var(--skltn-primary-hue)`: The hue of the chosen color
1. As a theme mod value available with `get_theme_mod( 'skltn_primary_color_hex' )`

= Development =

This theme is built with a simple Gulp setup. To begin working on the theme:

1. Install Node and NPM globally.
1. Run `npm ci` from within the theme directory.
1. Run `gulp` to compile the Sass and watch for changes.

== Frequently Asked Questions ==

== Changelog ==

=== 0.1.6 ===

- Fixes to block embed styles
- Link timestamps if post has no title
- Add .archive-title class
- Add site description to header
- Add .site-body to <body>
- Other various bug fixes and improvements

=== 0.1.4 ===

- Add `$content_width` theme support
    - Include `--wp-content-width` as CSS custom property
- Decrease verbosity of "Continue reading" more link
- Add comment-list template
- Add comment-count template
- Add article author, timestamp, tags templates

== Upgrade Notice ==

== Screenshots ==
