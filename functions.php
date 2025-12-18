<?php
function ak_theme_assets() {

    // Theme main style.css
    wp_enqueue_style(
        'ak-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0',
        'all'
    );

    // Tailwind output css
    wp_enqueue_style(
        'tailwind-css',
        get_template_directory_uri() . '/src/output.css',
        array(),
        '1.0.0',
        'all'
    );
}

add_action('wp_enqueue_scripts', 'ak_theme_assets');