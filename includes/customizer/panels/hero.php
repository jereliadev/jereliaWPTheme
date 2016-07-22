<?php

/* Hero */


    $wp_customize->add_section( 'jerelia_panel_hero', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Перший екран', 'jerelia' ),
        'description' => '',
    ) );

// Image
$wp_customize->add_setting( 'jerelia_hero_general_image',
    array(
        'sanitize_callback' => 'esc_url_raw',
        'default'           => esc_url( get_template_directory_uri() . '/layouts/images/front-page-header.jpg' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize, 'jerelia_hero_general_image',
        array(
            'label'     => __( 'Головне зображення', 'jerelia' ),
            'section'   => 'jerelia_panel_hero',
            'settings'  => 'jerelia_hero_general_image',
            'priority'  => 1
        )
    )
);

// Title
$wp_customize->add_setting( 'jerelia_hero_general_title',
    array(
        'sanitize_callback' => 'sanitize_html',
        'default'           => __( 'Лидер Jerelia', 'jerelia' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control(
    'jerelia_hero_general_title',
    array(
        'label'         => __( 'Лідер', 'jerelia' ),
        'description'   => __( 'Введіть ім’я та призвище в орудному відмінку.', 'jerelia'),
        'section'       => 'jerelia_panel_hero' ,
        'priority'      => 2
    )
);

// Entry
$wp_customize->add_setting( 'jerelia_hero_general_entry',
    array(
        'sanitize_callback' => 'sanitize_html',
        'default'           => __( 'Обмежений фінансово? Розпочни власний бізнес в інтернеті та отримай свободу!', 'jerelia' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control( 'jerelia_hero_general_entry',
    array(
        'label'         => __( 'Заклик', 'jerelia' ),
        'description'   => __( 'Введіть заклик над формою зв’язку.', 'jerelia'),
        'section'       => 'jerelia_panel_hero' ,
        'priority'      => 3,
        'type'          => 'textarea'
    )
);