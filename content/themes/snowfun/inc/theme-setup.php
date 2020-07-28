<?php
function snowFun_setup()
{
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus([
        'menu_left' => 'Menu de navigation gauche',
        'menu_right' => 'Menu de navigation droit',
    ]);
}
add_action('after_setup_theme', 'snowFun_setup');

