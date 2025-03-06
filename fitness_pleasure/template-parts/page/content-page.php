<?php
/**
 * The template for displaying the page structure
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <!-- Wrapper div for title and content -->
    <div class="page-wrapper">
        
        <!-- Page Title -->
        <header class="page-title-wrapper">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </header>

        <!-- Page Content -->
        <div class="page-content">
            <?php the_content(); ?>
        </div>
        
    </div> <!-- End of page-wrapper -->

</article>