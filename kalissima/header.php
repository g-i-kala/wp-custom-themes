<?php
/**
 * The template for displaying the header
 */
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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

                <div class="header-rwd flex flex-row content-container space-between-center">
                    <div class="header-logo">
                        <?php if ( has_custom_logo() ) { ?>
                            <div id="site-logo">
                                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                                <?php the_custom_logo(); ?>
                            </div>
                        <?php } else { ?>
                            <h1 class="site-title"><?php bloginfo('name'); ?></h1>
                            <p class="site-description"><?php bloginfo('description'); ?></p>
                        <?php } ?>
                    </div>
                    
                    <button class="hamburger" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </button>

                    <div class="site-nav header-menu-container">
                        <nav class="navbar">
                            <?php
                            wp_nav_menu( array(
                                'theme_location' => 'header-menu',
                                'container' => 'nav',
                                'menu_class' => 'header-menu',
                            ) );
                            ?>
                         </nav>
                    </div>
                </div>             
                
            </div>
            
        </header>
        <div class="content-wrapper"> <!-- Content starts -->
            <div class="content-container"> <!-- Container starts -->