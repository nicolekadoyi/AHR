<section class=" gallery">
    <div class="container-fluid">
        <div class="row ">
            <div class="col d-flex justify-content-between">

            <?php $gallery = get_field('gallery'); ?>

            <?php foreach($gallery as $image): ?>

                <img src="<?php echo $image['sizes']['medium']; ?>" alt="">
                
                <?php endforeach; ?>

            </div>
        </div>
    </div>
</section>