<?php
if( have_rows('page_builder') ):
    while ( have_rows('page_builder') ) : the_row();
        if( get_row_layout() == 'hero' ):
        include(get_template_directory().'/partials/blocks/section-header.php');
        elseif( get_row_layout() == 'socials' ):
        include(get_template_directory().'/partials/blocks/section-socials.php');
        elseif( get_row_layout() == 'gallery' ):
        include(get_template_directory().'/partials/blocks/section-gallery.php');
        elseif( get_row_layout() == 'residential' ):
        include(get_template_directory().'/partials/blocks/section-residential.php');
        elseif( get_row_layout() == 'banner' ):
        include(get_template_directory().'/partials/blocks/section-banner.php');
        elseif( get_row_layout() == 'single_project' ):
        include(get_template_directory().'/partials/blocks/section-project.php'); ?>
       <?php endif;
    endwhile;
endif;
?>



