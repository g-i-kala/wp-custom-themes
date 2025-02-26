<?php
/*
Template Name: Contact Page
*/
get_header();
?>

<main id="primary" class="site-main">
    
    <!-- Wrapper div for title and content -->
    <div class="page-wrapper">
        
        <!-- Page Title -->
        <header class="page-title-wrapper">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </header>

        <!-- Page Content -->
        <div class="page-content flex">
            <div class="contact-form-wrapper">
       
            <?php
            $wsform_id = get_theme_mod('contactform_wsform_id');
            if (!empty($wsform_id)) {
                echo do_shortcode('[ws_form id="' . esc_attr($wsform_id) . '"]');
            } else {
                echo '<p>' . __('Please set a WSForm ID in the Customizer.', 'kalissima') . '</p>';
            }
            ?>
            </div>
        </div>
        
    </div> <!-- End of page-wrapper -->

</main><!-- #main -->
<?php

get_footer();