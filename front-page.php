<?php get_header(); ?>

<?php

if(have_posts()):
    while(have_posts()):
        the_post(); 
?>
<?php get_template_part('partials/blocks/section' , 'header'); ?>

<?php get_template_part('partials/blocks/section' , 'socials'); ?>

<?php get_template_part('partials/blocks/section' , 'gallery'); ?>

<?php get_template_part('partials/blocks/section' , 'residential'); ?>

<?php get_template_part('partials/blocks/section' , 'banner'); ?>

<?php get_template_part('partials/blocks/section' , 'posts'); ?>



<?php get_template_part('partials/blocks/section' , 'footer'); ?>




<?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>