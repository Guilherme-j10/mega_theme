<?php  get_header();
    /*
        template name: blog   
    */
?>
    <!-- blog -->
    <div class="blog_container">
        <?php
            $all_posts = get_posts();

            if($all_posts){
                foreach($all_posts as $post):
                    setup_postdata($post); 
                    $data = get_the_date(); ?>
                    <a href="<?php the_permalink(); ?>" class="box_container">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                        <h1><?php the_title(); ?></h1>
                        <small><i class="fas fa-clock"></i> <?php echo $data; ?></small>
                        <p><?php the_content(); ?></p>
                    </a> 
                <?php endforeach;
            }
        ?>
    </div>
<?php get_footer(); ?>