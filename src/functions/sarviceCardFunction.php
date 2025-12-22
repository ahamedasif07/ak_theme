<?php
function ak_custom_card_section($wp_customize)
{
    // =========================
    // Section
    // =========================
    $wp_customize->add_section('ak_card_customize_section', array(
        'title'       => __('Customize Card', 'asif_domain'),
        'description' => __('Customize card from here', 'asif_domain'),
        'priority'    => 160,
    ));

    // =========================
    // Card Title
    // =========================
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

    // Card title Font Size
    // =========================
    $wp_customize->add_setting('ak_card_title_size', array(
        'default'           => 16, // default 16px
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('ak_card_title_size_control', array(
        'label'       => __('title Font Size (px)', 'asif_domain'),
        'section'     => 'ak_card_customize_section',
        'settings'    => 'ak_card_title_size',
        'type'        => 'number',
        'input_attrs' => array(
            'min'  => 10,
            'max'  => 40,
            'step' => 1,
        ),
    ));

    // =========================
    // Card Title Color
    // =========================
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

    // =========================
    // Card Description
    // =========================
    $wp_customize->add_setting('ak_card_description_setting', array(
        'default'           => __('This is default card description.', 'asif_domain'),
        'sanitize_callback' => 'sanitize_textarea_field',
    ));

    $wp_customize->add_control('ak_card_description_control', array(
        'label'    => __('Card Description', 'asif_domain'),
        'section'  => 'ak_card_customize_section',
        'settings' => 'ak_card_description_setting',
        'type'     => 'textarea',
    ));

    // =========================
    // Card Description Font Size
    // =========================
    $wp_customize->add_setting('ak_card_description_size', array(
        'default'           => 16, // default 16px
        'sanitize_callback' => 'absint',
    ));

    $wp_customize->add_control('ak_card_description_size_control', array(
        'label'       => __('Description Font Size (px)', 'asif_domain'),
        'section'     => 'ak_card_customize_section',
        'settings'    => 'ak_card_description_size',
        'type'        => 'number',
        'input_attrs' => array(
            'class' => 'asif-input-change', // custom class
            'min'   => 10,
            'max'   => 40,
            'step'  => 1,
        ),
    ));

    // Card description Color
    // =========================
    $wp_customize->add_setting('ak_card_description_color', array(
        'default'           => '#000000',
        'sanitize_callback' => 'sanitize_hex_color',
    ));


    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'ak_card_description_color_control',
            array(
                'label'    => __('Card description Color', 'asif_domain'),
                'section'  => 'ak_card_customize_section',
                'settings' => 'ak_card_description_color',
            )
        )
    );


    // =========================
    // Card Image
    // =========================
    $wp_customize->add_setting('ak_card_image_setting', array(
        'default'           => get_template_directory_uri() . '/images/banner.png',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'ak_card_image_control',
            array(
                'label'    => __('Card Image', 'asif_domain'),
                'section'  => 'ak_card_customize_section',
                'settings' => 'ak_card_image_setting',
            )
        )
    );
    // hover Card Image
    // =========================
    $wp_customize->add_setting('ak_card_hover_image_setting', array(
        'default'           => get_template_directory_uri() . '/images/banner (2).png',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'ak_card_hover_image_control',
            array(
                'label'    => __('Card Hover Image', 'asif_domain'),
                'section'  => 'ak_card_customize_section',
                'settings' => 'ak_card_hover_image_setting',
            )
        )
    );
}
add_action('customize_register', 'ak_custom_card_section');
