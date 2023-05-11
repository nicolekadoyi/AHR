<header>
  <section class="header">
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

    <!-- Home-hero Content row  -->

    <div class="row row-cols-1 hero-content">


<?php if(have_rows('page_builder')):

while(have_rows('page_builder')): the_row(); ?>


<?php if(get_row_layout() == 'hero'): 

?>
                        <div class="col">
                        <h1><?php echo get_sub_field('title'); ?></h1>
                        </div>
                        <div class="col">
                        <p class="hero-text"><?php echo get_sub_field('text'); ?></p>
                        </div>
                        <div class="col">
                        <button class="hero-btn">SEE OUR PORTFOLIO</button>
                        </div>
                        
                        
                        
                      

                        <!----------------------------- The logos ------------------------------>
                        

                        <?php endif; ?>
                  <?php endwhile ;?>
                  <?php endif; ?>
      </div>

      <div class="row">

          <div class="col">
            <?php $logos = get_field('hero_gallery'); ?>

            <?php foreach($logos as $logo): ?>
              <img src="<?php echo $logo['sizes']['large']; ?>" alt="">

              <?php endforeach; ?>
          </div>
      </div>
    </section>

</header>