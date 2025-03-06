<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php wp_title('|', true, 'right'); ?></title>
    <?php wp_head(); ?>
</head>

<!-- open the body -->
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

    <div id="page" class="site flex flex-col justify-center align-center">
        <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'kalissima' ); ?></a>

        <?php get_template_part('/template-parts/header/site','header'); ?>

        <div class="content-wrapper"> <!-- Content starts -->
            <div class="content-container"> <!-- Container starts -->


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
			?>
            <!-- the sticky row -->
            <?php get_template_part('template-parts/content/content','sticky-posts') ?>

            <!-- normal posts -->
            <?php get_template_part('template-parts/content/content','all-posts') ?>
        
        <?php
		else :

			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>

	</main><!-- #main -->


    </div><!-- Container ends -->
    </div><!-- Wrapper ends -->
        <footer id="colophon" class="site-footer">
            <div class="site-footer flex flex-col">

            <?php get_template_part('template-parts/footer/sidebar', 'footer'); ?>

            </div>
            
            <?php get_template_part('template-parts/footer/footer','copyrights'); ?>

            </div>
        </footer>
    </div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
