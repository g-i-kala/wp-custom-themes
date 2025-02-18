<?php
/**
 * The template for displaying the header
 */
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <link rel="stylesheet" href="<?php echo esc_url(get_stylesheet_uri()); ?>" type="text/css" />
    <?php wp_head(); ?>
</head>

<!-- open the body -->
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'kalissima' ); ?></a>

        <header>
            <div class="header-wrapper">
                <?php if ( get_header_image() ) : ?>
                <div id="site-header">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">
                    </a>
                </div>
                <?php endif; ?>

                <?php if ( has_custom_logo() ) { ?>
                    <div id="site-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                        <?php the_custom_logo(); ?>
                    </div>
                <?php } else { ?>
                    <h1 class="site-title"><?php bloginfo('name'); ?></h1>
                    <p class="site-description"><?php bloginfo('description'); ?></p>
                <?php } ?>
                
                <div class="site-nav">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'header-menu',
                    'container' => 'nav',
                    'container_class' => 'header-menu-container',
                    'menu_class' => 'header-menu',
                ) );
                ?>
                </div>                
                
            </div>
            
        </header>
        <div class="content-wrapper"> <!-- Content starts -->
            <div class="content-container"> <!-- Content starts -->