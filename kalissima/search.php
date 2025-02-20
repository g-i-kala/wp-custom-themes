<?php
/**
 * The template for displaying search results
 */
?>

<?php get_header(); ?>

<main id="primary" class="site-main">
    <div id="search-results" role="main" class="search-wrapper">

        <header class="search-header">
                <h1 class="page-title">
                    * <?php the_search_query(); // Displays category/tag/author name dynamically ?> *
                </h1>
        </header>

        <div class="search-posts-preview">
            <?php if (have_posts()) : ?>
                <div class="posts-grid">
                    <?php while (have_posts()) : the_post(); ?>
                        <?php get_template_part('template-parts/content/content', 'preview'); ?>
                    <?php endwhile; ?>
                </div>
                
                <!-- Pagination -->
                <div class="pagination-search">
                    <?php previous_posts_link('Newer Posts'); ?>
                    <?php next_posts_link('Older Posts'); ?>
                </div>

            <?php else : ?>
                <p><?php esc_html_e('No posts found.', 'kalissima'); ?></p>
            <?php endif; ?>
        </div>
    
    </div><!-- search results wrapper -->
</main>

<?php get_footer(); ?>