<?php
get_header();



if(have_posts() ){
    while(have_posts()){
        the_post();
        the_content();
    }
}
?>

<div class="container-fluid">
        <div class="row">
            <div class="col-md-4 follow">
                <p class="social-text">
                    FOLLOW US ON SOCIAL MEDIA
                </p>
            </div>
            <div class="col-md-8 justify-content-end social-icons">
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin"></i>
                <i class="fa-brands fa-twitter"></i>
            </div>
        </div>
</div>
<?php
get_footer();

?>



