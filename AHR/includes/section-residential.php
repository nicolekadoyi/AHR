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


<!-- Code to display the residential section -->

<div class="container residential">
    <div class="row">
        <div class='col'>
            <h2><?php echo get_field('residential_title'); ?></h2>
            <div class="residential-text">
                <?php echo get_field('residential_text'); ?>
            </div>
        </div>
        <div class='col'>
            <img src="<?php echo get_field('residential_image'); ?>" alt="A video about our residential project">
        </div>
    </div>
</div>


<?php
get_footer();

?>