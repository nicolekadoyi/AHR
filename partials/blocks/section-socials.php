<?php get_header(); ?>
<section class=" socials"> 
    <div class="container-fluid">
        <div class="row ">
            

                <?php if(have_rows('page_builder')):
                while(have_rows('page_builder')):
                    the_row(); ?>

                    <?php if(get_row_layout() == 'socials') : ?>

                        
                    <div class="col-md-4 follow">
                        <p class="social-text">
                            <?php the_sub_field('text'); ?>
                        </p>
                    </div>
                    
                    <div class="col-md-8 justify-content-end social-icons">
                        <i class="fa-brands fa-instagram"></i>
                        <i class="fa-brands fa-linkedin"></i>
                        <i class="fa-brands fa-twitter"></i>
                    </div>

                        <?php endif; ?>

                    <?php endwhile; ?>
                    <?php endif; ?>

            
        </div>
    </div>
</section>

<?php get_footer(); ?>




























