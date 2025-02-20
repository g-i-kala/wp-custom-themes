<?php
/**
 * The template for displaying content preview
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-preview'); ?>>
    <!-- <div class="post-preview-container"> -->
        <?php if (has_post_thumbnail()) : ?>
            <div class="post-thumbnail-index">
                <?php the_post_thumbnail('medium'); ?>
            </div>
        <?php endif; ?>
        <div class="post-info">
            <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div class="post-meta">
                <span><?php echo get_the_date(); ?></span>
            </div>
            <p class="post-excerpt"><?php echo get_the_excerpt(); ?></p>
            <a class="read-more" href="<?php the_permalink(); ?>"><?php _e('Read More', 'kalissima'); ?></a>
        </div>
    <!-- </div> -->
</article>