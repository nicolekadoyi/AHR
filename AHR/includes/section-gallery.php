<?php
$gallery = get_field("gallery");

?>

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

<!-- Code to display the gallery -->

<div class="container-fluid gallery"> 
    <div class="row justify-content-center">
        <div class="col">
            <?php if ($gallery):?>

                <?php foreach ($gallery as $image): ?>
                <img src="<?php echo $image['sizes']['large']; ?>" alt="Images of our projects"> 

                <?php endforeach; ?>

            <?php endif; ?>
        </div>
    </div>
</div>



<?php
get_footer();

?>
















