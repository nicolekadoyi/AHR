<?php

?>

<?php
get_header();
?>


<?php
if(have_posts() ){
    while(have_posts()){
        the_post();
        the_content();
    }
}
?>


<!-- Code to display the banner section -->

<div class="row row-cols-1 banner">
    <div class="col"><h1><?php echo get_field('banner_heading'); ?></h1></div>
    <div class="col banner-text"><p><?php echo get_field('banner_text'); ?></p></div>
    <div class="col"><button class='hero-btn'><?php echo get_field('banner_button_text'); ?> <i class="fa-solid fa-arrow-right"></i></button></div>
</div>


<?php
get_footer();

?>



