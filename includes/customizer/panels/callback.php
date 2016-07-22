<?php

/* Callback */


    $wp_customize->add_section( 'jerelia_panel_callback', array(
        'priority' => 16,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Колбек', 'jerelia' ),
        'description' => '',
    ) );

// Image
$wp_customize->add_setting( 'jerelia_callback_general_image',
    array(
        'sanitize_callback' => 'esc_url_raw',
        'default'           => esc_url( get_template_directory_uri() . '/layouts/images/callback-image.jpg' ),
        'transport'         => 'refresh'
    )
);
$wp_customize->add_control(
    new WP_Customize_Image_Control( $wp_customize, 'jerelia_callback_general_image',
        array(
            'label'     => __( 'Зображення', 'jerelia' ),
            'section'   => 'jerelia_panel_callback',
            'settings'  => 'jerelia_callback_general_image',
            'priority'  => 1
        )
    )
);

// Entry
$wp_customize->add_setting( 'jerelia_callback_general_entry',
    array(
        'sanitize_callback' => 'sanitize_html',
        'default'           => __( 'Є речі які я не розповідаю на сайті, такі собі секрети мого бізнесу. Підписуйся, щоб дізнатісь більше!', 'jerelia' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control( 'jerelia_callback_general_entry',
    array(
        'label'         => __( 'Введіть заклик нижньої форми', 'jerelia' ),
        'section'       => 'jerelia_panel_callback' ,
        'priority'      => 3,
        'type'          => 'textarea'
    )
);