# Fitness Pleasure WordPress Theme - UNDER CONSTRUCTION

Fitness Pleasure is a modern and dynamic WordPress theme designed specifically for fitness enthusiasts, gyms, wellness centers, personal trainers, and sports-related content. The theme is built with a focus on customization, performance, and a user-friendly experience, offering various features that help create a visually appealing and functional website.

## Basic Files Checklist for a Working Fitness Theme

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
- `comments.php`: Template for comments section.
- `search.php`: Template for search results.

### 2. Template Parts
- `template-parts/components/site-logo-title.php`: reusable part, with classes passed as props.
- `template-parts/components/site-menu.php`: reusable part, with classes passed as props.
- `template-parts/components/site-widget-dynamic.php`: reusable part, with classes passed as props.
- `template-parts/content/content.php`: Main content template for posts/pages.
- `template-parts/content/content-single.php`: Template for displaying single post content.
- `template-parts/content/content-preview.php`: Template for post previews (used in archives).
- `template-parts/content/content-sticky-posts.php`: For displaying sticky posts.
- `template-parts/page/content-page.php`: Content for static pages.
- `template-parts/page/content-post.php`: Content for single post display.
- `template-parts/post/content-all-posts.php`: Specific content layout for home.
- `template-parts/footer/newsletter-form.php`: Newsletter signup integration - customizable.
- `template-parts/footer/contact-form.php`: Contact form integration - customizable.
- `template-parts/footer/sidebar-footer.php`: Footer menu, newsletter signup, and search bar - customizable.

### 3. Functions and Features
- `functions.php`: Main theme functions file where you can enqueue scripts/styles, register menus, add theme support, etc.
  - Custom Navigation: Use `wp_nav_menu()` to create custom navigation menus for header and footer.
  - Custom Logo Support: Add support for custom logos.
  - Post Thumbnails Support: Enable featured images for posts.
  - Custom Widget Social Media Icons Areas: Define widget areas in the footer.
  - Enqueue Scripts and Styles: Properly enqueue your stylesheets and scripts.
- Customizable in the Customizer:
  - Logo image.
  - Newsletter signup form.
  - Contact form integration.
  - Single Menu.

### 4. Assets
- `style.css`: Main stylesheet for your theme, including theme details in the header comment.
- `assets/js/`: JavaScript files for dynamic features (e.g., sliders, mobile navigation, animations).
- `assets/fonts/`: Fonts used in your theme.
- `assets/images/`: Any images used (e.g., logos, header images).

### 5. SEO and Accessibility Enhancements
- Pagination: Customize pagination links for improved navigation.
- Customizer Options: Add options for users to customize colors, fonts, and other styles through the WordPress Customizer.
- **Social Share Buttons**: Integrate share buttons for easy social media sharing.
- **Accessibility**: Ensure proper ARIA labels for forms, navigation menus, and other interactive elements.

### 6. Fitness-Specific Features
- **Customizable Fitness Posts**: Create dynamic posts tailored for fitness-related content, like workout routines, healthy recipes, fitness tips, etc.
- **Online Classes Integration**: Showcase online classes, memberships, and schedules.
- **Progress Trackers**: Built-in layouts for progress tracking posts (weight tracking, workout logs, etc.).

### Enhancements to Consider
**Under Construction**
- **Membership System**: Integration with membership plugins to allow users to sign up for exclusive content.
- **Event Calendar**: Integration with an event calendar plugin to showcase fitness events or online webinars.

## Installation
1. Download the theme files and upload them to your WordPress installation under `wp-content/themes/fitness-pleasure`.
2. Activate the theme through the 'Appearance' > 'Themes' menu in WordPress.
3. Customize the theme through the WordPress Customizer (`Appearance` > `Customize`).

## License
This theme is licensed under the [GPL-2.0 License](LICENSE).

## Contributing
Feel free to fork this repository and submit pull requests. If you find any issues, please open a ticket in the issues section.

## Support
For any support requests, please contact karocreativedesings@gmail.com.

Enjoy creating with the Fitness Pleasure WordPress Theme!
