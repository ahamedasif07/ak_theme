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

    wp_enqueue_style(
        'custom-css',
        get_template_directory_uri() . '/css/custom.css',
        array(),
        '1.0.0',
        'all'
    );
    
      //   Tailwind output css
    wp_enqueue_style(
        'tailwind-css',
        get_template_directory_uri(   ). '/src/output.css',
        array(),
        
        'all'
    );



    //   Tailwind output css
    // wp_enqueue_style(
    //     'tailwind-css',
    //     get_template_directory_uri() . '/src/output.css',
    //     array(),
    //     '1.0.0',
    //     'all'
    // );

 
}

add_action('wp_enqueue_scripts', 'ak_theme_assets');



// Theme Customizer function
function ak_customize_banner($wp_customize) {

    /* =========================
       1️⃣ SECTION ADD
       ========================= */
    $wp_customize->add_section('home_banner_section', array(
        'title'       => __('Home Banner ', 'asif-domain'),
        'description' => __('This is home banner image section', 'asif-domain'),
    ));


    /* =========================
       2️⃣ SETTING ADD
       ========================= */
    $wp_customize->add_setting('home_banner_image', array(
        'default' => get_template_directory_uri() . '/images/banner.png',
    ));


    /* =========================
       3️⃣ CONTROL ADD (IMAGE UPLOAD)
       ========================= */
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'home_banner_image',
            array(
                'label'    => __('Upload Home Banner Image', 'asif-domain'),
                'section'  => 'home_banner_section',
                'settings' => 'home_banner_image',
            )
        )
    );
}

add_action('customize_register', 'ak_customize_banner');