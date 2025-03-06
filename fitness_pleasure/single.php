<?php
/**
 * The template for displaying all single posts
 */

 get_header(); ?>
 
 <div id="primary" class="content-area">
	 <main id="main" class="site-main" role="main">

	 <?php
	 // Start the loop.
	 while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/post/content', 'post' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			 comments_template();
		endif;

		// Previous/next post navigation.
		the_post_navigation( array(
			'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next Post', 'fitness_pleasure' ) . '</span>',
			'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous Post', 'fitness_pleasure' ) . '</span>',
		));

	 // End the loop.
	 endwhile;
	 ?>

	 </main><!-- .site-main -->
 </div><!-- .content-area -->

<?php get_footer(); ?>
