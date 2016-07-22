<?php

/* About */
$wp_customize->add_section( 'jerelia_panel_about', array(
        'priority' => 11,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Про себе', 'jerelia' ),
        'description' => '',
    ) );

    // Image
    $wp_customize->add_setting( 'jerelia_about_general_image',
        array(
            'sanitize_callback' => 'esc_url_raw',
            'default'           => esc_url( get_template_directory_uri() . '/layouts/images/about-image.jpg' ),
            'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control(
        new WP_Customize_Image_Control( $wp_customize, 'jerelia_about_general_image',
            array(
                'label'     => __( 'Зображення', 'jerelia' ),
                'section'   => 'jerelia_panel_about',
                'settings'  => 'jerelia_about_general_image',
                'priority'  => 1
            )
        )
    );
   
    // Title
    $wp_customize->add_setting( 'jerelia_about_general_title',
        array(
            'sanitize_callback' => 'sanitize_html',
            'default'           => __( 'Давайте знайомитись', 'jerelia' ),
            'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control(
        'jerelia_about_general_title',
        array(
            'label'         => __( 'Заклик', 'jerelia' ),
            'section'       => 'jerelia_panel_about' ,
            'priority'      => 2
        )
    );

    // Entry
    $wp_customize->add_setting( 'jerelia_about_general_entry',
        array(
            'sanitize_callback' => 'sanitize_html',
            'default'           => __( 'Мене звати Олена Філатова. Я – Регіональний Директор, член Ради Інвесторів компанії J’erelia. Експерт в області маркетингу і побудови бізнеса, бізнес-тренер и коуч. Головна моя задача: створювати умови для розвитку бізнесу кожного українця, незалежно від фаху, професії чи освіти.', 'jerelia' ),
            'transport'         => 'postMessage'
        )
    );
    $wp_customize->add_control( 'jerelia_about_general_entry',
        array(
            'label'         => __( 'Текст', 'jerelia' ),
            'description'   => __( 'Введіть короткий текст про себе.', 'jerelia'),
            'section'       => 'jerelia_panel_about' ,
            'priority'      => 3,
            'type'          => 'textarea'
        )
    );