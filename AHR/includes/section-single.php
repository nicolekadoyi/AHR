<?php
get_header();
?>





<div class="container-fluid singles">
    <div class="row singlesContent">
        

        <?php
        if(have_rows('singles')):
            while(have_rows('singles')):
                the_row('singles');
            
        ?>

                <div class="col-md-6">
                    <h2><?php echo get_field('singles_heading'); ?></h2>
                    <?php the_sub_field('text'); ?>
                </div>

                <div class="col-md-6">
                    <img src="<?php the_sub_field('image'); ?>" alt="">
                </div>

        <?php
        endwhile;
        endif;
        ?>
        
    </div>

    <div class="row singlesReverse" >
        

        <?php
        if(have_rows('singles_reverse')):
            while(have_rows('singles_reverse')):
                the_row('singles_reverse');
            
        ?>

                <div class="col-md-6">
                    <img src="<?php the_sub_field('image'); ?>" alt="">
                </div>


                <div class="col-md-6">
                    <h2><?php echo get_field('singles_heading'); ?></h2>
                    <?php the_sub_field('text'); ?>
                </div>

            
        <?php
        endwhile;
        endif;
        ?>
        
    </div>

    <div class="row singlesContent">
        

        <?php
        if(have_rows('last_single_case')):
            while(have_rows('last_single_case')):
                the_row('last_single_case');
            
        ?>

                <div class="col-md-6">
                    <h2><?php echo get_field('singles_heading'); ?></h2>
                    <?php the_sub_field('text'); ?>
                </div>

                <div class="col-md-6">
                    <img src="<?php the_sub_field('image'); ?>" alt="">
                </div>

        <?php
        endwhile;
        endif;
        ?>
        
    </div>

</div>

<div class="row redCases">
  
  <h2 class="casesHeading"><?php echo get_field('other_heading'); ?></h2>

  <?php

    if(have_rows('other_projects')):

        while(have_rows('other_projects')):
            the_row();
    ?>

            <div class="col-md-4">
                <img src="<?php the_sub_field('project_image'); ?>" alt="">
                <h4 class="project-heading"><?php the_sub_field('project_title'); ?></h4>
                <p class="project-p"><?php the_sub_field('project_excerpt'); ?></p>
                <a href="<?php the_permalink(); ?>" class="cases-btn">READ MORE</a>
            </div>
    <?php 
    endwhile;
    endif;
    ?> 
</div>



<?php
get_footer();

?>