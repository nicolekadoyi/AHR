<?php get_header(); ?>

<?php
if( have_posts() ):
    while ( have_posts() ) :
        the_post();
        get_template_part( 'partials/content-page' );
    endwhile; // End of the loop.
endif;
?>
<?php get_footer(); ?>
