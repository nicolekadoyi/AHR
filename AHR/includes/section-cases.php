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

<div class="row redCases">
  

        <h2 class="casesHeading">CASE STUDIES</h2>


        <?php

        if(have_rows('project_section')):

            while(have_rows('project_section')):
                the_row();
        ?>

                <div class="col-md-4 ">
                    <img src="<?php the_sub_field('project_image'); ?>" alt="">
                    <h4 class="project-heading"><?php the_sub_field('project_title'); ?></h4>
                    <p class="project-p"><?php the_sub_field('project_exceprt'); ?></p>
                    <a href="<?php the_permalink(); ?>" class="cases-btn"> READ MORE</a>
                </div>
        <?php 
        endwhile;
        endif;
        ?>


  

</div>


<?php

get_footer();

?>