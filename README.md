# skltn #
**Contributors:** topdownjimmy
**Tested up to:** 5.3.2
**Stable tag:** 1.0
**License:** GPL-2.0-or-later
**License URI:** http://www.gnu.org/licenses/gpl-2.0.html

A super bare-bones, unopinionated WordPress theme that follows BEM, passes WordPress's theme guidelines, and allows for easy child theming.

## Description ##
A super bare-bones, unopinionated WordPress theme that follows BEM, passes WordPress's theme guidelines, and allows for easy child theming.

This theme provides a "Primary Color" theme customization option. The value of this color is available to child themes in several ways:

1. As CSS custom properties on `:root{}`:
  - `var(--skltn-primary-color)`: The hex of the chosen color
  - `var(--skltn-primary-hue)`: The hue of the chosen color
1. As a theme mod value available with `get_theme_mod( 'skltn_primary_color_hex' )`
