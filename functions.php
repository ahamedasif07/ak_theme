<?php
// ===============================
// AK Theme Assets
// ===============================
function ak_theme_assets() {

    // Theme main style.css
    wp_enqueue_style(
        'ak-style',
        get_stylesheet_uri(),
        array(),
        '1.0.0',
        'all'
    );

    // Custom CSS
    wp_enqueue_style(
        'custom-css',
        get_template_directory_uri() . '/css/custom.css',
        array(),
        '1.0.0',
        'all'
    );
    
    // Tailwind output CSS
    wp_enqueue_style(
        'tailwind-css',
        get_template_directory_uri() . '/src/output.css',
        array(),
        '1.0.0',
        'all'
    );

    // Google Fonts
    wp_enqueue_style(
        'roboto-font',
        'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100..900;1,100..900&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts','ak_theme_assets');


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
        $atts['class'] = 'transition font-bold text-[16px] duration-300 hover:text-blue-600 block px-4';
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