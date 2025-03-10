<?php
/**
 * The template for displaying content of a single post
 */
?>

<article id="post-<?php the_ID(); ?>" class="post-single flex flex-col center-center">
    <div class="post-wrapper flex flex-col">

        <!-- Post Meta (Author, Date) -->
        <div class="post-meta flex flex-row">
            <span class="post-author"><?php //_e('By', 'fitness_pleasure'); ?> <?php //the_author_posts_link(); ?></span>
            <span class="post-date"><?php echo get_the_date(); ?></span>
        </div>

        <!-- Post Title -->
        <div class="entry-header">
            <h1 class="post-title"><?php the_title(); ?></h1>
        </div>

        <!-- Featured Image -->
        <div class="post-thumbnail-crop">
        <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail-crop">
                <?php the_post_thumbnail('large'); ?>
            </div>
        <?php endif; ?>
        </div>

        <!-- Post Content -->
        <div class="entry-content">
            <?php the_content(); ?>
        </div>

    </div>       
</article>
