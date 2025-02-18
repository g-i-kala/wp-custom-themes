<?php
/**
 * The template for displaying all 
 */
get_header();
?>
    <main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Custom display 5 posts, custom format, sticky on top */
            $sticky = get_option('sticky_posts');
            rsort($sticky); // Order by latest
            $sticky_args = array(
                'post__in'       => $sticky,
                'posts_per_page' => 5, // Show only 5 sticky posts
                'ignore_sticky_posts' => 1
            );
            $sticky_query = new WP_Query($sticky_args);
            ?>

            <!-- Display Sticky Posts -->
            <?php if ($sticky_query->have_posts()) : ?>
                <section class="sticky-posts">
                    <h2 class="section-title"><?php _e('Featured Posts', 'kalissima'); ?></h2>
                    <div class="posts-grid">
                        <?php while ($sticky_query->have_posts()) : $sticky_query->the_post(); ?>
                            <?php get_template_part('template-parts/content/content', 'preview'); ?>
                        <?php endwhile; ?>
                    </div>
                </section>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>

            <!-- Normal Posts -->
            <?php
            $normal_args = array(
                'post__not_in' => $sticky,
                'posts_per_page' => 5,
                'category_name'   => 'eng', // Multiple tag slugs
                'paged' => get_query_var('paged') ? get_query_var('paged') : 1
            );
            $normal_query = new WP_Query($normal_args);
            ?>

            <section class="normal-posts">
                <h2 class="section-title"><?php _e('Latest Posts', 'kalissima'); ?></h2>
                <div class="posts-grid">
                    <?php if ($normal_query->have_posts()) : ?>
                        <?php while ($normal_query->have_posts()) : $normal_query->the_post(); ?>
                            <?php get_template_part('template-parts/content/content', 'preview'); ?>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </section>

            <!-- Pagination -->
            <div class="pagination">
                <?php previous_posts_link('Newer Posts'); ?>
                <?php next_posts_link('Older Posts', $normal_query->max_num_pages); ?>
            </div>

            <?php wp_reset_postdata(); ?>
        <?php
		else :

			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>

	</main><!-- #main -->
<?php

get_footer();