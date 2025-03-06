<!-- newsletter form -->
<aside class="footer-aside">
    <div class="newsletter-section">
        <h3 class="widget-title"><?php _e( 'Subscribe to the Newsletter', 'fitness_pleasure' ); ?></h3>
        <?php
            $newsletter_wsform_id = get_theme_mod('newsletter_wsform_id');
            if (!empty($newsletter_wsform_id)) {
                echo do_shortcode('[ws_form id="' . esc_attr($newsletter_wsform_id) . '"]');
            } else {
                echo '<p>' . __('Please set your newsletter form ID in the Customizer.', 'fitness_pleasure') . '</p>';
            }
        ?>
    </div>
</aside>