<?php
/**
 * The template for displaying all single pages
 */
?>
<?php get_header(); ?>

<main id="main-content">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <?php get_template_part('template-parts/content/content','page') ?>
    <?php endwhile; endif; ?>
</main>

<?php get_footer(); ?>