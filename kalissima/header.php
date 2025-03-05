<?php
/**
 * The template for displaying the header
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<!-- open the body -->
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary">
            <?php esc_html_e( 'Skip to content', 'kalissima' ); ?>
        </a>

        <?php get_template_part('/template-parts/header/site','header'); ?>
        
        <div class="content-wrapper"> <!-- Content starts -->
            <div class="content-container"> <!-- Container starts -->