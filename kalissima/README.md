# Kalissima WordPress Theme

Kalissima is a custom WordPress theme designed for bloggers and content creators. This theme is designed to be customizable, with various template parts and features to enhance your website's functionality and appearance.

## Basic Files Checklist for a Working Blog Theme

### 1. Core Template Files
- `index.php`: Main template file.
- `header.php`: Contains the opening HTML, `<head>` section, and header content.
- `footer.php`: Contains the footer content and closing tags.
- `sidebar.php`: Optional sidebar file for widgets.
- `404.php`: Template for 404 error pages.
- `archive.php`: Template for displaying post archives (categories, tags, dates).
- `single.php`: Template for displaying single posts.
- `page.php`: Template for displaying static pages.
- `home.php`: Template for the blog posts index.
- `front-page.php`: Template for the site's front page.
- `search.php`: Template for search results.

### 2. Template Parts
- `template-parts/content/content.php`: Main content template for posts/pages.
- `template-parts/content/content-single.php`: Template for displaying single post content.
- `template-parts/content/content-preview.php`: Template for post previews (used in archives).
- `template-parts/content/content-sticky-posts.php`: For displaying sticky posts.
- `template-parts/page/content-page.php`: Content for static pages.
- `template-parts/page/content-post.php`: Content for single post display.
- `template-parts/post/content-all-posts.php`: Specific content layout for home.
- `template-parts/footer/newsletter.php`: Hardcoded newsletter signup - customizable.
- `template-parts/footer/sidebar-footer.php`: Hardcoded, footer menu & newsletter signup.

### 3. Functions and Features
- `functions.php`: Main theme functions file where you can enqueue scripts/styles, register menus, add theme support, etc.
  - Custom Navigation: Use `wp_nav_menu()` to create a custom navigation menu (2 menus: header and footer, customizable).
  - Custom Logo Support: Add support for custom logos.
  - Post Thumbnails Support: Enable featured images for posts.
  - Custom Widget Areas: Define any sidebar or footer widget areas. In the footer, below the hardcoded static-sidebar (see template parts).
  - Enqueue Scripts and Styles: Properly enqueue your stylesheets and scripts.
- Customizable in the Customizer:
  - Logo image.
  - Header image.
  - Colors.
  - Newsletter in footer on/off.
  - Menus: header & footer.

### 4. Assets
- `style.css`: Main stylesheet for your theme, including theme details in the header comment.
- `assets/js/`: Any JavaScript files for interactivity (e.g., scripts for sliders, mobile menus).
- `assets/fonts/`: Fonts used in your theme.
- `assets/images/`: Any images used (e.g., logo, header image).

### 5. SEO and Accessibility Enhancements
- Pagination: Customize pagination links for better navigation.
- Customizer Options: Add options for users to customize colors, fonts, and other styles through the WordPress Customizer.

**Under Audit**
- ARIA Labels: Ensure your forms and navigation menus have proper ARIA attributes for accessibility.
- SEO Optimization: Ensure proper HTML markup and use of heading tags.

### Enhancements to Consider
**Under Construction**
- Custom Fields: Implement Advanced Custom Fields (ACF) for additional post metadata.
- Related Posts: Functionality to display related posts at the bottom of single post pages.
- Social Share Buttons: Add share buttons to single posts for social media.
- Comments: Customize the comments template for better user engagement.

## Installation
1. Download the theme files and upload them to your WordPress installation under `wp-content/themes/kalissima`.
2. Activate the theme through the 'Appearance' > 'Themes' menu in WordPress.
3. Customize the theme through the WordPress Customizer (`Appearance` > `Customize`).

## License
This theme is licensed under the [GPL-2.0 License](LICENSE).

## Contributing
Feel free to fork this repository and submit pull requests. If you find any issues, please open a ticket in the issues section.

## Support
For any support requests, please contact [your email here].

Enjoy creating with the Kalissima WordPress Theme!
