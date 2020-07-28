<?php

if (!function_exists('snowfun_scripts')):

function snowfun_scripts()
{
    wp_enqueue_style(
        'snowfun_app_css',
        get_theme_file_uri('/public/css/app.css'),
        ['snowfun_vendor_css'],
        '1.0.0'
    );

    wp_enqueue_style(
        'snowfun_vendor_css',
        get_theme_file_uri('/public/css/vendor.css'),
        [],
        '1.0.0'
    );

    wp_enqueue_script(
        'snowfun_app_js',
        get_theme_file_uri('/public/js/app.js'),
        ['snowfun_vendor_js'],
        '1.0.0',
        true
    );

    wp_enqueue_script(
        'snowfun_vendor_js',
        get_theme_file_uri('/public/js/vendor.js'),
        [],
        '1.0.0',
        true
    );
}

endif;

add_action('wp_enqueue_scripts', 'snowfun_scripts');