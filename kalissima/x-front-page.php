<?php
/**
 * The template for displaying the front page
 */

if ( 'posts' == get_option( 'show_on_front' ) ) {
    include( get_home_template() );
} else {
    // Custom content markup goes here
    echo "<h1>"; _e('This is my landing page','kalissima'); echo "</h1>"; 
    echo "<a href='/index.php'>"; _e('Go to main page','kalissima'); echo "</a><br>";
    echo "<a href='/coaching'>"; _e('Go to coaching page','kalissima'); echo "</a>";    
    //or include( get_page_template() );

    $sticky = get_option( 'sticky_posts' );
    if (!empty($sticky)) {
        $query  = new WP_Query(array(
            'post__in' => $sticky,
            'orderby'   => 'date',
            'order'     => 'desc'
        ));
    }

            if ( $query->have_posts() ) :
            while ( $query->have_posts() ) : $query->the_post();
            ?>    
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <h2 class="entry-title"><?php the_title(); ?></h2>
                </header>
                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div>
                </article>
            <?php     

            endwhile;
            endif;

        wp_reset_postdata();

}
