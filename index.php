<?php get_header(); ?>
        <section class="blog">
            <div class="header_blog">
                <h1>BLOG</h1>
            </div>
            <div class="container">
                <?php
        
                    $posts = get_posts(['posts_per_page' => 2]);
                    $i = 0;

                    if($posts){
                        foreach ($posts as $post) :
                           setup_postdata($post);
                            $data = get_the_date();
                            if($i == 1): ?>
                                <div class="box_blog">
                                    <div class="right_side">
                                        <h1><?php the_title(); ?></h1>
                                        <div class="information">
                                            <p><i class="far fa-clock"></i> <?php echo $data; ?></p>
                                        </div>
                                        <p><?php the_content(); ?></p>
                                        <div class="line_link">
                                            <a href="<?php the_permalink(); ?>">reed more </a>
                                        </div>
                                    </div>
                                    <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                </div>
                            <?php else: ?>
                                <div class="box_blog">
                                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                <div class="right_side">
                                    <h1><?php the_title(); ?></h1>
                                    <div class="information">
                                        <p><i class="far fa-clock"></i> <?php echo $data; ?></p>
                                    </div>
                                    <p><?php the_content(); ?></p>
                                    <div class="line_link">
                                        <a href="<?php the_permalink(); ?>">reed more </a>
                                    </div>
                                </div>
                            </div>
                            <?php endif; ?>
                <?php $i++;  endforeach;
                    }

                ?>
            </div>
            <a href="<?php echo bloginfo('url').'/Blog'; ?>">Ver todos >></a>
        </section>

        <!-- galeria -->
        <section class="galery">
            <div class="header_galery">
                <h1>GALERY</h1>
            </div>
            <div class="box_images">
                <img src="<?php bloginfo('template_url'); ?>/assets/imagens/160406.jpg" alt="">
                <img src="<?php bloginfo('template_url'); ?>/assets/imagens/160406.jpg" alt="">
                <img src="<?php bloginfo('template_url'); ?>/assets/imagens/160406.jpg" alt="">
                <img src="<?php bloginfo('template_url'); ?>/assets/imagens/160406.jpg" alt="">
                <img src="<?php bloginfo('template_url'); ?>/assets/imagens/160406.jpg" alt="">
                <img src="<?php bloginfo('template_url'); ?>/assets/imagens/160406.jpg" alt="">
            </div>
        </section>
<?php get_footer(); ?>