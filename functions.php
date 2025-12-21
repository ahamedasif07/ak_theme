<?php
// ===============================
// AK Theme Assets
// ===============================
function ak_theme_assets() {

    // Theme CSS
    wp_enqueue_style('ak-style', get_stylesheet_uri());

    // Tailwind
    wp_enqueue_style(
        'tailwind-css',
        get_template_directory_uri() . '/src/output.css',
        array(),
        '1.0.0'
    );

    // Custom CSS
    wp_enqueue_style(
        'custom-css',
        get_template_directory_uri() . '/src/custom.css',
        array('tailwind-css'),
        '1.0.0'
    );


    // Navbar scroll JS
    wp_enqueue_script(
        'ak-navbar-scroll',
        get_template_directory_uri() . '/src/js/NavBar.js',
        array(),
        '1.0',
        true
    );


// Swiper CSS
wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css');

// Swiper JS
wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js', array(), null, true);

// Slider init JS (তোমার custom js)
wp_enqueue_script(
    'ak-slider-init',
    get_template_directory_uri() . '/src/js/swper.js',
    array('swiper-js'), // dependency ঠিকভাবে
    '1.0',
    true
);


    // AOS CSS
    wp_enqueue_style(
        'aos-css',
        'https://unpkg.com/aos@2.3.1/dist/aos.css',
        array(),
        '2.3.1'
    );

    // AOS JS
    wp_enqueue_script(
        'aos-js',
        'https://unpkg.com/aos@2.3.1/dist/aos.js',
        array(),
        '2.3.1',
        true
    );

    // AOS Init (DOM ready safe)
    wp_add_inline_script(
        'aos-js',
        'document.addEventListener("DOMContentLoaded", function () {
            AOS.init({
                duration: 1000,
                easing: "ease-in-out",
                once: true
            });
        });'
    );
}
add_action('wp_enqueue_scripts', 'ak_theme_assets');


// ===============================
// AK Theme Customizer
// ===============================
function ak_theme_customize($wp_customize) {

    // Header Image
    $wp_customize->add_section('ak_theme_header_image', array(
        'title' => __('Home Banner', 'asif_domain'),
        'description' => __('Upload a header image for your theme', 'asif_domain'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('ak_theme_header_image', array(
        'default' => get_template_directory_uri() . '/images/banner.png',
        'sanitize_callback' => 'esc_url_raw',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'ak_theme_header_image',
        array(
            'label' => __('Upload Banner Image', 'asif_domain'),
            'section' => 'ak_theme_header_image',
            'settings' => 'ak_theme_header_image',
        )
    ));

    // Background Color
    $wp_customize->add_section('ak_theme_colors', array(
        'title'    => __('Theme Colors', 'asif_domain'),
        'priority' => 31,
    ));

    $wp_customize->add_setting('ak_bg_color', array(
        'default'   => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'ak_bg_color_control',
            array(
                'label'    => __('Background Color', 'asif_domain'),
                'section'  => 'ak_theme_colors',
                'settings' => 'ak_bg_color',
            )
        )
    );

}
add_action('customize_register', 'ak_theme_customize');


// ===============================
// AK Runtime CSS Variables
// ===============================
function ak_runtime_css_vars() {
    ?>
<style>
:root {
    --ak-header-bg: #020617;
    --ak-page-bg: <?php echo esc_attr(get_theme_mod('ak_bg_color', '#ffffff'));
    ?>;
    --ak-section-padding-y: 4rem;
    --ak-page-text-align: center;
    --ak-box-padding-top: <?php echo esc_attr(get_theme_mod('ak_box_padding_top', 0));
    ?>px;
    --ak-box-padding-right: <?php echo esc_attr(get_theme_mod('ak_box_padding_right', 0));
    ?>px;
    --ak-box-padding-bottom: <?php echo esc_attr(get_theme_mod('ak_box_padding_bottom', 0));
    ?>px;
    --ak-box-padding-left: <?php echo esc_attr(get_theme_mod('ak_box_padding_left', 0));
    ?>px;

    --ak-box-margin-top: <?php echo esc_attr(get_theme_mod('ak_box_margin_top', 0));
    ?>px;
    --ak-box-margin-right: <?php echo esc_attr(get_theme_mod('ak_box_margin_right', 0));
    ?>px;
    --ak-box-margin-bottom: <?php echo esc_attr(get_theme_mod('ak_box_margin_bottom', 0));
    ?>px;
    --ak-box-margin-left: <?php echo esc_attr(get_theme_mod('ak_box_margin_left', 0));
    ?>px;
}
</style>
<?php
}
add_action('wp_head', 'ak_runtime_css_vars');


// ===============================
// AK Theme Menus
// ===============================
function ak_register_menus() {
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'asif_domain'),
        'footer_menu'  => __('Footer Menu', 'asif_domain'),
    ));
}
add_action('after_setup_theme', 'ak_register_menus');


// ===============================
// AK Menu Classes & Effects
// ===============================
function ak_add_nav_link_class($atts, $item, $args) {
    if ($args->theme_location == 'primary_menu') {
        $atts['class'] = 'transition font-bold text-[10px] duration-300 hover:text-blue-600 block px-4';
    }
    return $atts;
}
add_filter('nav_menu_link_attributes', 'ak_add_nav_link_class', 10, 3);

function ak_nav_menu_item_classes($classes, $item, $args) {
    if ($args->theme_location == 'primary_menu') {
        $classes[] = 'relative group';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'ak_nav_menu_item_classes', 10, 3);

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




// ============================
// About Card Section - Padding & Margin Control with Stepper
// ============================
function ak_box_customizer($wp_customize) {

    // নতুন Section বানাচ্ছি
    $wp_customize->add_section('about_card_section', array(
        'title'    => __('About Card Settings', 'asif_domain'),
        'priority' => 30,
        'description' => 'Control padding and margin for About Card box.',
    ));

    // ==========================
    // Padding Top
    $wp_customize->add_setting('ak_box_padding_top', array(
        'default' => 10, // px হিসাবে ডিফল্ট
        'sanitize_callback' => 'absint', // positive integer
    ));
    $wp_customize->add_control('ak_box_padding_top', array(
        'label' => __('Box Padding Top (px)', 'asif_domain'),
        'section' => 'about_card_section',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 0,
            'max' => 200,
            'step' => 1,
        ),
    ));

    // Padding Right
    $wp_customize->add_setting('ak_box_padding_right', array(
        'default' => 10,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('ak_box_padding_right', array(
        'label' => __('Box Padding Right (px)', 'asif_domain'),
        'section' => 'about_card_section',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 0,
            'max' => 200,
            'step' => 1,
        ),
    ));

    // Padding Bottom
    $wp_customize->add_setting('ak_box_padding_bottom', array(
        'default' => 10,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('ak_box_padding_bottom', array(
        'label' => __('Box Padding Bottom (px)', 'asif_domain'),
        'section' => 'about_card_section',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 0,
            'max' => 200,
            'step' => 1,
        ),
    ));

    // Padding Left
    $wp_customize->add_setting('ak_box_padding_left', array(
        'default' => 10,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('ak_box_padding_left', array(
        'label' => __('Box Padding Left (px)', 'asif_domain'),
        'section' => 'about_card_section',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 0,
            'max' => 200,
            'step' => 1,
        ),
    ));

    // ==========================
    // Margin Top
    $wp_customize->add_setting('ak_box_margin_top', array(
        'default' => 10,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('ak_box_margin_top', array(
        'label' => __('Box Margin Top (px)', 'asif_domain'),
        'section' => 'about_card_section',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 0,
            'max' => 200,
            'step' => 1,
        ),
    ));

    // Margin Right
    $wp_customize->add_setting('ak_box_margin_right', array(
        'default' => 10,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('ak_box_margin_right', array(
        'label' => __('Box Margin Right (px)', 'asif_domain'),
        'section' => 'about_card_section',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 0,
            'max' => 200,
            'step' => 1,
        ),
    ));

    // Margin Bottom
    $wp_customize->add_setting('ak_box_margin_bottom', array(
        'default' => 10,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('ak_box_margin_bottom', array(
        'label' => __('Box Margin Bottom (px)', 'asif_domain'),
        'section' => 'about_card_section',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 0,
            'max' => 200,
            'step' => 1,
        ),
    ));

    // Margin Left
    $wp_customize->add_setting('ak_box_margin_left', array(
        'default' => 10,
        'sanitize_callback' => 'absint',
    ));
    $wp_customize->add_control('ak_box_margin_left', array(
        'label' => __('Box Margin Left (px)', 'asif_domain'),
        'section' => 'about_card_section',
        'type' => 'number',
        'input_attrs' => array(
            'min' => 0,
            'max' => 200,
            'step' => 1,
        ),
    ));
}
add_action('customize_register', 'ak_box_customizer');


// anamation aosenque
function ak_enqueue_aos_assets() {

 
}
add_action('wp_enqueue_scripts', 'ak_enqueue_aos_assets');