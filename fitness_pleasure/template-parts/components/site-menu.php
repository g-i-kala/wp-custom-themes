<!-- Site Menu -->
<?php
$menu_class = esc_attr($args['menu_class']); 
?>

<!-- Menu -->
<div id="navbar" class="site-nav header-menu-container hidden lg:block">
    <nav role="navigation" aria-label="<?php _e('Main Navigation', 'fitness_pleasure'); ?>" class="navbar font-thin">
        <?php
        wp_nav_menu( array(
            'theme_location' => 'header-menu',
            'menu_class' => "header-menu flex $menu_class text-white *:px-2 *:hover:text-primary *:[&.current-menu-item]:text-primary", // each ul element class
        ) );
        ?>
        </nav>
</div>
