<?php
/**
 * The template for displaying the footer
 */
?>
    </div><!-- Container ends -->
    </div><!-- Wrapper ends -->
        <footer id="colophon" class="site-footer">
            <div class="site-footer flex flex-col">

            <?php get_template_part('template-parts/footer/sidebar', 'footer'); ?>

            </div>
            <div class="footer-copyright flex felx-col">
                <p>Copyright
                    <a href="https://karocreative.pl"
                    aria-label="<?php _e('Visit the author\'s website', 'kalissima'); ?>" 
                    rel="author">KaroCreative </a>
                    <?php echo date('Y') ?>
                </p>
            </div>

            </div>
        </footer>
    </div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
