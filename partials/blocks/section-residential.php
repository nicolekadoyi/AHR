<!-- Code to display the residential section -->
<section class="residential">
    <div class="container ">
        <div class="row ">

        <?php if(have_rows('page_builder')):
        while(have_rows('page_builder')):
            the_row(); ?>
            
            <?php if(get_row_layout() == 'residential'): ?>

                <div class="col">
                    <h2 class="residential_heading"><?php the_sub_field('title'); ?></h2>
                    <div class="residential-text"><?php the_sub_field('description'); ?></div>
                </div>
                <div class="col">
                    <img src="<?php the_sub_field('image'); ?>" alt="">
                </div>

                <?php endif; ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>