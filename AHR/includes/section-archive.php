<?php
/*
Template Name : Archive
*/

get_header();

?>

<div class="container-fluid">
    <div class="row greybg">
        
    <?php

    $projects = new WP_QUERY(
        array(
            'post_type' => 'project'
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
                    <a href="<?php the_permalink(); ?>" class="grebg-btn"> READ MORE</a>

                </div>
    <?php
    endwhile;
    endif;

    ?>
    </div>
</div>

<?php

get_footer(); 
?>