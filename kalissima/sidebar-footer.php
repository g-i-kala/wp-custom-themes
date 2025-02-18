<?php
/**
 * The template for displaying the sidebar
 */
?>

<div id="sidebar-primary" class="sidebar flex flex-col">
    <div class="sidebar-static flex flex-row">
        <aside id="search" class="widget widget-search">
            <h4 class="widget-title"><?php _e('Search', 'kalissima'); ?></h4>
            <?php get_search_form(); ?>
        </aside><!-- #search -->

        <aside id="archives" class="widget">
            <h4 class="widget-title"><?php _e('Archives', 'kalissima'); ?></h4>
            <!-- display as dropdown -->
            <form action="<?php echo esc_url(home_url('/')); ?>" method="get">
                <select name="archive-dropdown" onchange="this.form.submit();">
                    <option value=""><?php _e('Select Month', 'kalissima'); ?></option>
                    <?php wp_get_archives(array(
                        'type'            => 'monthly',
                        'format'          => 'option',
                        'show_post_count' => false
                    )); ?>
                </select>
            </form>
            
        </aside><!-- #archives -->

        <aside id="meta" class="widget flex flex-col remove-list-stye">
            <h4 class="widget-title"><?php _e('Meta', 'kalissima'); ?></h4>
                <?php wp_register(); ?>
                <?php wp_loginout(); ?>
                <?php wp_meta(); ?>
        </aside><!-- #meta -->
    </div>
<div class="widget-dynamic">
    <?php if (is_active_sidebar('primary')) { ?>
    <?php dynamic_sidebar('primary'); ?>
    <?php }?>
</div>        