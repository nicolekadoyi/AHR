<?php
if( have_rows('page_builder') ):
    while ( have_rows('page_builder') ) : the_row();
        if( get_row_layout() == 'hero' ):
            include(get_template_directory().'/partials/layouts/hero.php');
        // elseif( get_row_layout() == 'sample_review' ):
        //     include(get_template_directory().'/partials/blocks/sample_reviews.php');
        endif;
    endwhile;
endif;
?>