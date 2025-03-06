<?php
/**
 * The template for displaying home page - all posts 
 */
get_header();
?>
    <main id="primary" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
					<header class="home-header">
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
				<?php
			endif;
			?>

            <!-- normal posts -->
            <?php get_template_part('template-parts/content/content','all-posts') ?>
        
        <?php
		else :

			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>

	</main><!-- #main -->
<?php

get_footer();