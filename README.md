# Wacool - Info on the net

**Theme Name:** Wacool - Info on the net  
**Version:** 0.2
**Requires WordPress:** 6.0  
**Tested up to:** 7.0  
**Requires PHP:** 7.4  
**License:** GNU General Public License v2 or later  
**License URI:** http://www.gnu.org/licenses/gpl-2.0.html  
**Text Domain:** wacool-info-on-the-net  

## Description

Info on the Net is a WordPress theme inspired by early internet and year 2000 era design aesthetics. It features a dark color scheme with classic web styling, suitable for tech, hacking culture, and information-focused websites.

## Features

- Responsive layout using Bootstrap 4.6
- Dark color scheme with classic web feel
- Custom logo support
- Custom header image support
- Primary navigation menu + Social media menu
- 1 sidebar widget area + 2 footer widget areas
- Breadcrumb navigation on pages
- Font Awesome 5 icons
- Alegreya Google Font for navigation
- Block editor (Gutenberg) compatible via theme.json
- Translation-ready
- Accessible (skip link, ARIA labels, keyboard navigation)
- No hardcoded URLs

## Installation

1. Download the theme zip file
2. Go to **WordPress Admin → Appearance → Themes → Add New → Upload Theme**
3. Upload the zip file and activate

## Required Assets

The theme requires the following third-party assets (not included, place in `/assets/`):

- `assets/css/bootstrap.min.css` — Bootstrap 4.6.0
- `assets/js/bootstrap.min.js` — Bootstrap 4.6.0 JS
- `assets/js/popper.js` — Popper.js 1.16.1
- `assets/font-awesome/all.css` — Font Awesome 5.15.3 + webfonts folder

These are standard open-source libraries under their respective licenses (MIT).

## Theme Structure

```
wacool-info-on-the-net/
├── style.css               # Theme header + styles
├── functions.php           # Theme setup, enqueue, widgets
├── index.php               # Main blog template
├── header.php              # Site header
├── footer.php              # Site footer
├── page.php                # Single page template
├── single.php              # Single post template
├── archive.php             # Archive template
├── search.php              # Search results template
├── blog.php                # Blog page template (card layout)
├── 404.php                 # 404 error page
├── comments.php            # Comments template
├── theme.json              # Block editor settings
├── custom-editor-style.css # Block editor styles
├── screenshot.png          # Theme screenshot (880x660)
├── languages/              # Translation files (.pot)
└── assets/
    ├── css/
    │   └── bootstrap.min.css
    ├── js/
    │   ├── navigation.js   # Mobile menu script
    │   ├── popper.js
    │   └── bootstrap.min.js
    └── font-awesome/
        ├── all.css
        └── webfonts/
```

## Changelog

### 1.0.0
- Initial release
- Renamed from "WACOOL - Hack On The Net" to "Wacool - Info on the net"
- WordPress 6.x / 7.x compatibility
- Full Theme Review guidelines compliance
- Added theme.json for block editor support
- Fixed hardcoded URLs in breadcrumb
- Fixed sidebar widget ID bug (`sidebar-` → `sidebar-1`)
- Added skip link for accessibility
- Added ARIA labels throughout
- Added mobile menu with keyboard support
- Added search.php and archive.php
- Added translation support

## Credits

- Bootstrap 4.6.0 — MIT License — https://getbootstrap.com
- Font Awesome 5.15.3 — CC BY 4.0 / SIL OFL 1.1 / MIT — https://fontawesome.com
- Popper.js 1.16.1 — MIT License — https://popper.js.org
- Alegreya Font — SIL Open Font License — https://fonts.google.com/specimen/Alegreya
- Original theme concept: Laurent CASSEL & Benoit SAKOTE — https://www.spiralstatic.eu

## License

This theme is licensed under the GNU General Public License v2 or later.
See http://www.gnu.org/licenses/gpl-2.0.html
