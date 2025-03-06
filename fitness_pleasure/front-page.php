<?php
/**
 * The template for displaying the front page
 */
?>
<?php get_header(); ?>
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
			<!-- landing hero -->
			<div id="hero "class="hero">
				<?php $hero_image = get_theme_mod('hero_image'); ?>
				<?php if ($hero_image) : ?>
					<img src="<?php echo esc_url($hero_image); ?>" alt="<?php esc_attr_e('Hero Image', 'fitness_pleasure'); ?>" class="hero-image" />
				<?php endif; ?>
			</div>
			<!-- the button to open sticky row -->			
			<button id='latest-posts-button' class="button-std">Check the posts out!</button>
			<div id='latest-posts-container'></div>
		<?php
		else :

			get_template_part( 'template-parts/content/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php get_footer(); ?>