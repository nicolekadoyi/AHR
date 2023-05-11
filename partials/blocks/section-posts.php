
<section class="redCases">
    <div class="container" >
        <div class="row">

            <h2 class="casesHeading">CASE STUDIES</h2>    

            <?php

            $projects = new WP_QUERY(
                array(
                    'post_type' => 'project',
                    'cat' => '14'
                )
                );

                if($projects->have_posts()):
                    while($projects->have_posts()):
                        $projects->the_post();

            ?>

                    <div class="col-md-4">
                        <?php the_post_thumbnail(); ?>
                        <h4><?php the_title(); ?></h4>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="cases-btn"> READ MORE <i class="fa-solid fa-arrow-right cases-arrow"></i></a>

                    </div>
            <?php
            endwhile;
            endif;
            ?>

        </div>
    </div>
</section>   