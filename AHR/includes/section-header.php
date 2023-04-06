<?php
get_header();

?>
<?php
if(have_posts() ){
    while(have_posts()){
        the_post();
        the_content();
    }
}
?>



<?php 
/////////////Variables///////////////
$logos = get_field("logos");

?>


<header>
 <div class="container-fluid home-hero">
   <div class="row justify-content-start">
    <nav class="navbar navbar-expand">
        <a href="" class="navbar-brand"><img src="<?php echo get_field('logo'); ?>" alt="The website logo"></a>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item">
                <a href="" class="nav-link">MENU HERE <i class="fa-solid fa-bars"></i></i></a>
            </li>
        </ul>
    </nav>
   </div>

 <!-- Home-hero Content row  -->
   <div class="row row-cols-1 hero-content">
        <div class="col"><h1><?php echo get_field('title'); ?></h1></div>
        <div class="col"><p class="hero-text"><?php echo get_field('description'); ?></p></div>
        <div class="col"><button class='hero-btn'><?php echo get_field('button_text'); ?> <i class="fa-solid fa-arrow-right"></i></button></div>
   </div>


   <!-- Logos row  -->
   <div class="row">
        <div class="col">
        <?php if($logos): ?>
                <?php foreach ($logos as $singleLogo): ?>

                    <img src="<?php echo $singleLogo; ?>" alt="The logos"> 

                <?php endforeach ?>
            <?php endif ?>
        </div>
   </div>
</div>
</header>



<?php
get_footer();

?>