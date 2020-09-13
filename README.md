# skltn #
**Contributors:** topdownjimmy
**Tested up to:** 5.5.1
**Stable tag:** 1.0
**License:** GPL-2.0-or-later
**License URI:** http://www.gnu.org/licenses/gpl-2.0.html

A super bare-bones, unopinionated WordPress theme that follows BEM, passes WordPress's theme guidelines, and allows for easy child theming.

## Description ##
A super bare-bones, unopinionated WordPress theme that follows BEM, passes WordPress's theme guidelines, and allows for easy child theming.

### How to Use This Theme ###

There are a number of ways to use skltn on your WordPress site:

1. Create a child theme. This is the recommended use-case for skltn. Your child theme must reference skltn in its style.css file as described in [the WordPress documentation](https://developer.wordpress.org/themes/advanced-topics/child-themes/).
1. Use it as-is and add all necessary styling in the "Customize" section of the admin panel.
1. Modify it as needed. This is not recommended, as any updates to the theme will be harder to incorporate into your modified version.

### Template Parts ###

Any template part in `template-parts` can be overridden in a child theme, including in many cases by appending a [post type](https://developer.wordpress.org/reference/functions/get_post_type/#comment-1863) ('page', 'attachment', etc.) or [post format](https://developer.wordpress.org/reference/functions/get_post_format/) ('standard', 'aside', etc.) to the filename. So, for instance, you can override *just* article meta (the timestamp, author name, edit post link, etc.) for *just* 'gallery' post types by creating the file `template-parts/article/article-meta-gallery.php` in your child theme. (Note that you cannot target 'post' post types, since this theme uses their post format in the template part filename; in other words, `article-body-gallery.php` will work, but `article-body-post.php` will not.)

```
article[-post_type/post_format].php
archive/
  archive-header.php
  archive-header-search.php
article/
  article-body[-post_type/post_format].php
  article-comments[-post_type/post_format].php
  article-meta[-post_type/post_format].php
  article-title[-post_type/post_format].php
common/
  pagination[-post-format].php
```

### Colors ###

This theme provides a "Primary Color" theme customization option. The value of this color is available to child themes in several ways:

1. As CSS custom properties on `:root{}` for use in your own CSS:
    - `var(--skltn-primary-color)`: The hex of the chosen color
    - `var(--skltn-primary-hue)`: The hue of the chosen color
1. As a theme mod value available with `get_theme_mod( 'skltn_primary_color_hex' )`

### Development ###

This theme is built with a simple Gulp setup. To begin working on the theme:

1. Install Node and NPM globally.
1. Run `npm ci` from within the theme directory.
1. Run `gulp` to compile the Sass and watch for changes.

## Frequently Asked Questions ##

## Changelog ##

## Upgrade Notice ##

