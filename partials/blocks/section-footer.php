<section  class="footer">
    <div class="container-fluid footer-menu">
        <div class="row">
            <div class="col footer-icons">
                <img src="http://localhost:8080/wordpress/wordpress/wp-content/uploads/2022/08/logo-black-2.png" alt="">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin"></i>
                <i class="fa-brands fa-twitter"></i>
            </div>

            <div class="col">
                
                    <?php wp_nav_menu( 

                            array( 
                                'theme_location' => 'footer1' ,
                            )
                    );
                    ?>

            </div>
            <div class="col">
                
                    <?php wp_nav_menu( 

                            array( 
                                'theme_location' => 'footer2' ,
                            )
                    );
                    ?>

            </div>
            <div class="col">
                
                    <?php wp_nav_menu( 

                            array( 
                                'theme_location' => 'footer3' ,
                            )
                    );
                    ?>

            </div>
            <div class="col">
                
                    <?php wp_nav_menu( 

                            array( 
                                'theme_location' => 'footer4' ,
                            )
                    );
                    ?>

            </div>
        </div>
    </div>

    <hr>

    <div class="container-fluid footer-legal">
        <div class="row">
            <div class="col">
                <p>@AHR Group Limited 2023</p>
            </div>

            <div class="col">

                    <?php wp_nav_menu(

                            array(
                                'theme_location' => 'legal1'

                            )
                            );
                            ?>
            </div>

            <div class="col">

                    <?php wp_nav_menu(

                                array(
                                    'theme_location' => 'legal2'

                                )
                                );
                                ?>
                    </div>

            <div class="col">

                    <?php wp_nav_menu(

                                array(
                                    'theme_location' => 'legal3'

                                )
                                );
                        ?>
            </div>

        </div>
    </div>
</section>