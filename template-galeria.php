<?php get_header();

    /*
        template name: galeria
    */
?>
    <!-- galeria -->
    <section class="galery">
        <div class="header_galery">
            <h1>GALERIA</h1>
        </div>
        <div class="box_images">
            <?php

                $images = easy_image_gallery_get_image_ids();
                if($images){
                    foreach ($images as $img){
                        $image = wp_get_attachment_image_src($img, 'thumb-custom');
            ?>
                            <img height="220px" src="<?= $image[0]; ?>" alt="">
            <?php
                    }
                }

            ?>
        </div>
    </section>
<?php get_footer(); ?>