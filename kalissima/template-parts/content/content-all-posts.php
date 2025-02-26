<!-- Normal Posts -->
<?php
$normal_args = array(
    'post__not_in' => $sticky,
    'posts_per_page' => 6,
    //'category_name'   => 'kite', // Multiple tag slugs
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1
);
$normal_query = new WP_Query($normal_args);
?>

<section class="normal-posts">
    <h1 class="section-title"><?php _e('Blog Posts', 'kalissima'); ?></h1>
    <div class="posts-grid">
        <?php if ($normal_query->have_posts()) : ?>
            <?php while ($normal_query->have_posts()) : $normal_query->the_post(); ?>
                <?php get_template_part('template-parts/content/content', 'preview'); ?>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<!-- Pagination -->
<div class="pagination-index">
    <div class="pagination-links">
        <?php previous_posts_link('Newer Posts'); ?>
        <?php next_posts_link('Older Posts', $normal_query->max_num_pages); ?>
    </div>
</div>

<?php wp_reset_postdata(); ?>