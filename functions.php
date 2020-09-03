<?php

    add_theme_support('post-thumbnails');


    //
    function dinamic_menu(){
        register_nav_menus([
            'header-menu' => __('Menu header')
        ]);
    }
    add_action('init', 'dinamic_menu');