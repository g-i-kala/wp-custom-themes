<?php
/**
 * The template for displaying 404 pages (Not Found)
 */

 get_header(); ?>

 <div id="primary" class="content-area">
 <div id="content" class="site-content" role="main">

     <header class="page-header">
         <h1 class="page-title"><?php _e( 'Not Found', 'fitness_pleasure' ); ?></h1>
     </header>

     <div class="page-wrapper">
         <div class="page-content">
             <h2><?php _e( 'It looks like the wind just dropped..', 'fitness_pleasure' ); ?></h2>
             
             <div class="search-404">
                <p><?php _e( 'Maybe try a search?', 'fitness_pleasure' ); ?></p>
                <?php get_search_form(); ?>
             </div>
         </div><!-- .page-content -->
     </div><!-- .page-wrapper -->

 </div><!-- #content -->
</div><!-- #primary -->

<?php 
    get_footer();
?>