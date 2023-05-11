<section class="project">
    <div class="container">
        <div class="row single-project">
            <?php if(have_rows('page_builder')):
                while(have_rows('page_builder')):
                    the_row(); ?>  

                    <?php if(get_row_layout() == 'single_project'): ?>

                        <div class="col-md-6 single-content">
                            <h2 class="red">
                                <?php echo get_sub_field('single_heading'); ?>
                            </h2>
                            <div class="single-text">
                            <?php echo get_sub_field('single_text'); ?>
                            </div>
                        </div> 

                        <div class="col-md-6">
                            <img src="<?php echo get_sub_field('single_image_left'); ?>" alt="">
                        </div>

                        <?php endif; ?>
                        
                        <?php endwhile; ?>
                        <?php endif; ?>
        

        </div>

        <div class="row single-project">
            <?php if(have_rows('page_builder')):
            while(have_rows('page_builder')):
                the_row(); ?>  

                <?php if(get_row_layout() == 'single_project'): ?>

                    <div class="col-md-6">
                    
                        <img src="<?php the_sub_field('single_image_right'); ?>" alt="">
                    
                    </div>

                    <div class="col-md-6 single-content">
                        <h2 class="red">
                            <?php the_sub_field('single_heading'); ?>
                        </h2>
                        <div class="single-text">
                        <?php the_sub_field('single_text'); ?>
                        </div>
                    </div>


                    <?php endif; ?>
                    
                <?php endwhile; ?>
                <?php endif; ?>

        </div>

        <div class="row single-project">
            <?php if(have_rows('page_builder')):
            while(have_rows('page_builder')):
                the_row(); ?>  

                <?php if(get_row_layout() == 'single_project'): ?>

                    <div class="col-md-6 single-content" >
                        <h2 class="red">
                            <?php the_sub_field('single_heading'); ?>
                        </h2>
                        <div class="single-text">
                        <?php the_sub_field('single_text'); ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                    
                    <img src="<?php the_sub_field('single_image_left'); ?>" alt="">
                    
                </div>

                    <?php endif; ?>
                    
                <?php endwhile; ?>
                <?php endif; ?>

        </div>
    </div>
</section>


