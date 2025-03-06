<!-- dynamic widget if set     -->
<?php if ( get_theme_mod( 'show_footer_widget', true ) ) : ?>
    <div class="widget-dynamic">
        <?php if (is_active_sidebar('primary')) { ?>
        <?php dynamic_sidebar('primary'); ?>
        <?php }?>
    </div>        
<?php endif; ?>