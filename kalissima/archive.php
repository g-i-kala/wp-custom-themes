<?php
/*
Template Name: Archives
*/
get_header(); ?>

<main id="primary" class="site-main">
    <div id="archive" role="main" class="archive-wrapper">

    <header class="archive-header">
            <h1 class="page-title">
                <?php the_archive_title(); // Displays category/tag/author name dynamically ?>
            </h1>
    </header>

    <div class="archive-posts-preview">
        <?php if ((is_category() || is_tag() || is_date()) && have_posts()) : ?>
            <div class="posts-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content/content', 'preview'); ?>
                <?php endwhile; ?>
            </div>
            
            <!-- Pagination -->
            <div class="pagination-archive">
                <?php previous_posts_link('Newer Posts'); ?>
                <?php next_posts_link('Older Posts'); ?>
            </div>

        <?php else : ?>
            <p><?php esc_html_e('Select month, category or use the search box.', 'kalissima'); ?></p>
        <?php endif; ?>
    </div>

    <!-- Search Form at Bottom -->
    <div class="search-form-archive">
        <?php get_search_form(array('aria_label' => __('Site search', 'kalissima'))); ?>
    </div>
    
    <div class="archive-content flex flex-row"> 
        <div class="archive-column">
            <h2 class="archive-header">Archives by Month:</h2>
            <ul>
                <?php wp_get_archives('type=monthly'); ?>
            </ul>
        </div>
        <div class="archive-column">
            <h2 class="archive-header">Archives by Subject:</h2>
            <ul>
                <?php wp_list_categories(); ?>
            </ul>
        </div>
    </div>

    </div><!-- archive wrapper -->
</main>

<?php
get_footer();