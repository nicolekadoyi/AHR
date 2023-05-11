<?php 
/*
Template Name : Single Page
*/
?>
<?php get_header(); ?>

<?php

if(have_posts()):
    while(have_posts()):
        the_post(); 
?>


<section class="project-header">
    <div class="container-fluid home-hero">
    <div class="row justify-content-start">
        <nav class="navbar navbar-expand">
            <a href="" class="navbar-brand"><img src="http://localhost:8080/wordpress/wordpress/wp-content/uploads/2022/08/logo-white-1.png" alt="The website logo"></a>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a href="" class="nav-link">MENU HERE <i class="fa-solid fa-bars"></i></i></a>
                </li>
            </ul>
        </nav>
    </div>


    <div class="single-hero-text">
        <h1 class="single-heading"><?php the_title(); ?></h1>
        <div class="hero-text"><?php the_excerpt(); ?></div>
    </div>
      

    </div>
</section>


<?php get_template_part('partials/blocks/section' , 'project'); ?>
<?php get_template_part('partials/blocks/section' , 'posts'); ?>
<?php get_template_part('partials/blocks/section' , 'footer'); ?>


<?php endwhile ?>
<?php endif; ?>

<?php get_footer(); ?>




