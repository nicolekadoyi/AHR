<?php
/**
*Template Name:Archive
*/

get_header();

?>

<section class="archive-header">
    <div class="container-fluid home-hero">
                <nav class="navbar navbar-expand">
                    <a href="" class="navbar-brand"><img src="http://localhost:8080/wordpress/wordpress/wp-content/uploads/2022/08/logo-white-1.png" alt="The website logo"></a>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="" class="nav-link">MENU HERE <i class="fa-solid fa-bars"></i></i></a>
                        </li>
                    </ul>
                </nav>

                <div class="archive-hero-text">
                    <h1 class="archive-heading"><?php the_title(); ?></h1>
                    <div class="archive-text"><?php echo get_field('hero_text'); ?></div>
                </div>
    </div>

</section>


<section class="archive-categories">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
            <button class="all-btn btn-danger">ALL</button>
                        <?php
                        $terms = get_categories();
                        foreach ($terms as $key => $catTerms) {
                         ?>
                            <a href="<?php echo get_category_link( $catTerms -> term_id) ; ?> " class="category-btn"><?php echo $catTerms -> cat_name; ?></a>
                            <?php
                            }
        
                
                            ?>
            </button>

            </div>
            <div class="col-md-3 ms-auto">
                <p class="search-bar">SEARCH FOR A CATEGORY...<i class="fa-solid fa-magnifying-glass"></i> </p> 
                
            </div>
        </div>
    </div>

</section>
<section class="greybg"> 
    <div class="container-fluid ">
        <div class="row ">
            

        <?php

        $projects = new WP_QUERY(
            array(
                'post_type' => 'project',
                'cat' => '19'
            )
            );

            if($projects->have_posts()):
                while($projects->have_posts()):
                    $projects->the_post();
        
        ?>

                    <div class="col-md-4">
                        <?php the_post_thumbnail(); ?>
                        <h4><?php the_title(); ?></h4>

                        <div class="cat-col">
                            <?php

                            
                                $termsSingle = get_the_category();
                                $termsif = array_slice($termsSingle, -2);

                                    foreach ( $termsif as $key1 => $catSingle) {
                                        ?>
                                        <a href="<?php echo get_category_link( $catSingle -> term_id); ?>" class=" cat-btn"><?php echo $catSingle -> cat_name;?></a>
                            <?php
                            }
                            ?>
                        </div>
                      
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="greybg-btn"> READ MORE <i class="fa-solid fa-arrow-right project-arrow"></i></a>

                    </div>
        <?php
        endwhile;
        endif;

        ?>

        </div>
    </div>
</section>


    <?php get_template_part('partials/blocks/section' , 'footer'); ?>
   

<?php

get_footer(); 
?>