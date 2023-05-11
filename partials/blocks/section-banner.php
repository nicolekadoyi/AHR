<section class="banner">
    <div class="container-fluid">
        <div class="row row-cols-1 ">
            
            <?php if(have_rows('page_builder')):
            while(have_rows('page_builder')):
                the_row(); ?>

                <?php if(get_row_layout() == 'banner'): ?>

                    <div class="col">
                        <h2 class="banner-title"><?php echo get_sub_field('title'); ?></h2>
                    </div>
                    <div class="col">
                        <p class="banner-text"><?php echo get_sub_field('description'); ?></p>
                    </div>
                    <div class="col">
                        <button class="banner-btn">GET IN TOUCH <i class="fa-solid fa-arrow-right project-arrow"></i></button>
                    </div>
                    
                    <?php endif; ?>
                <?php endwhile; ?>
                <?php endif; ?>

        </div>
    </div>
</section>
