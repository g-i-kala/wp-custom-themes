<!-- newsletter form -->
<aside class="footer-aside">
    <div class="newsletter-section">
        <h3 class="widget-title"><?php _e( 'Subscribe to the Newsletter', 'kalissima' ); ?></h3>
        <form action="YOUR_NEWSLETTER_ENDPOINT" method="POST" class="newsletter-form">
            <input type="email" name="email" placeholder="<?php _e( 'Enter your email', 'your-theme' ); ?>" required>
            <button type="submit"><?php _e( 'Subscribe', 'your-theme' ); ?></button>
        </form>
    </div>
</aside>