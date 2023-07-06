<?php

function register_my_menu()
{
    register_nav_menu('main-menu', 'Menu principal');
}
add_action('after_setup_theme', 'register_my_menu');


function themename_custom_logo_setup()
{
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );
    add_theme_support('custom-logo', $defaults);
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'themename_custom_logo_setup');

if (function_exists(' themename_custom_logo_setup')) {
    set_post_thumbnail_size(150, 150, true);
}
