<!-- Site header -->

<header>
    <div class="header-wrapper">  
        <div class="header-rwd flex flex-row content-container space-between-center">
            
            <!-- Logo -->
            <div class="header-logo">
                <?php if ( has_custom_logo() ) { ?>
                    <div id="site-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" 
                        rel="home"
                        aria-label="<?php esc_attr_e('Site Logo', 'kalissima'); ?>">
                        <?php the_custom_logo(); ?>
                        </a>    
                    </div>
                <?php } else { ?>
                    <h1 class="site-title"><?php bloginfo('name'); ?></h1>
                    <p class="site-description"><?php bloginfo('description'); ?></p>
                <?php } ?>
            </div>
            
            <!-- Hamburger Menu -->
            <button id="menu-toggle" class="hamburger" aria-expanded="false" aria-label="<?php _e('Toggle navigation','kalissima') ?>" aria-controls="navbar">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>
            
            <!-- Navigation -->
            <div class="site-nav header-menu-container">
                <nav role="navigation" aria-label="<?php _e('Main Navigation', 'kalissima'); ?>" class="navbar">
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