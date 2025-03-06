<?php
/**
 * Template part for displaying sticky 3 sticky posts
 */

$sticky = get_option('sticky_posts');
rsort($sticky); // Order by latest
$sticky_args = array(
    'post__in'       => $sticky,
    'posts_per_page' => 3, // Show only 5 sticky posts
    'ignore_sticky_posts' => 1
);
$sticky_query = new WP_Query($sticky_args);
?>

<!-- Display Sticky Posts -->
<?php if ($sticky_query->have_posts()) : ?>
    <section class="sticky-posts">
        <h1 class="section-title"><?php _e('Featured Posts', 'fitness_pleasure'); ?></h1>
        <div class="posts-grid">
            <?php while ($sticky_query->have_posts()) : $sticky_query->the_post(); ?>
                <?php get_template_part('template-parts/content/content', 'preview'); ?>
            <?php endwhile; ?>
        </div>
    </section>
<?php endif; ?>
<?php wp_reset_postdata(); ?>