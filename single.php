<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php bloginfo('name'); ?></title>
        <!-- carregamento do estilo padrao -->
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <!-- carregamento dos incones do fontawesome -->
        <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/css/all.css">
        <?php wp_head(); ?>
    </head>
    <body>
        <!-- header -->
        <header style="background-image: url('<?php the_post_thumbnail_url(); ?>">
            <div class="filter">
                <!-- headedr do html e css -->
                <div class="header">
                    <a href="<?php bloginfo('url'); ?>"><h1><?php bloginfo('name'); ?></h1></a>
                    <a href="#" class="call_menu" ><i class="fas fa-bars"></i></a>
                </div>
                <!-- header do js -->
                <div class="header" id="header">
                    <a href="<?php bloginfo('url'); ?>"><h1><?php bloginfo('name'); ?></h1></a>
                    <a href="#" class="call_menu" ><i class="fas fa-bars"></i></a>
                </div>
                <div class="banner">
                    <h1><?= the_title(); ?></h1>
                    <p><i style="margin-right: 10px;" class="fas fa-clock"></i><?php echo get_the_date(); ?></p>
                </div>
            </div>
        </header>
        <!-- menu -->
        <div class="menu_toggle_modal" id="menu">
            <span class="close_modal" id="close"><i class="fas fa-times"></i></span>
            <?php wp_nav_menu(
                ['theme_location' => 'header-menu']
            ); ?>
        </div>

        <!-- conteudo -->

        <div class="content">
            <?php the_content(); ?>
        </div>
<?php get_footer(); ?>