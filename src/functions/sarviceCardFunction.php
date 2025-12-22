<?php
function ak_custom_card_section($wp_customize)
{

    // Add Section
    $wp_customize->add_section('ak_card_customize_section', array(
        'title'       => __('Customize Card', 'asif_domain'),
        'description' => __('Customize card from here', 'asif_domain'),
        'priority'    => 160,
    ));

    // Card Title Text
    $wp_customize->add_setting('ak_card_title_setting', array(
        'default'           => __('Default Card Title', 'asif_domain'),
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('ak_card_title_control', array(
        'label'    => __('Card Title', 'asif_domain'),
        'section'  => 'ak_card_customize_section',
        'settings' => 'ak_card_title_setting',
        'type'     => 'text',
    ));

    // Card Title Color
    $wp_customize->add_setting('ak_card_title_color', array(
        'default'           => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'ak_card_title_color_control',
            array(
                'label'    => __('Card Title Color', 'asif_domain'),
                'section'  => 'ak_card_customize_section',
                'settings' => 'ak_card_title_color',
            )
        )
    );
}
add_action('customize_register', 'ak_custom_card_section');

// Hide hex input field in color picker
function ak_customizer_hide_color_input()
{
?>
    <style>
        .wp-picker-input-wrap {
            display: none !important;
        }
    </style>
<?php
}
add_action('customize_controls_print_styles', 'ak_customizer_hide_color_input');
?>