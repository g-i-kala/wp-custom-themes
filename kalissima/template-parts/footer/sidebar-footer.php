<?php
/**
 * The template for displaying the sidebar
 */
?>

<div id="sidebar-primary" class="sidebar flex flex-col">
    <div class="sidebar-static flex flex-row">
        
        <div class="footer-column-wrapper flex flex-col">
            
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
                'theme_location' => 'footer-menu',
                'container' => 'nav-footer',
                'container_class' => 'footer-menu-container',
                'menu_class' => 'footer-menu',
            ) );
            ?>
            </div>                
        </div>
        
        <?php if ( get_theme_mod( 'show_newsletter', true ) ) : ?>
            <div class="footer-column-wrapper">
                <?php get_template_part('template-parts/footer/newsletter','form');?>
            </div>
        <?php endif; ?>
    
    </div>

<!-- dynamic widget if set     -->
<div class="widget-dynamic">
    <?php if (is_active_sidebar('primary')) { ?>
    <?php dynamic_sidebar('primary'); ?>
    <?php }?>
</div>        