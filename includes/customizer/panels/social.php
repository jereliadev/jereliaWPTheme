<?php

/* Social */
    $wp_customize->add_section( 'jerelia_panel_social', array(
        'priority' => 12,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Соціальні мережі', 'jerelia' ),
        'description' => '',
    ) );

// Show this section
$wp_customize->add_setting( 'jerelia_social_general_show',
    array(
        'sanitize_callback' => 'jerelia_sanitize_checkbox',
        'default'           => 1,
        'transport'         => 'refresh'
    )
);
$wp_customize->add_control('jerelia_social_general_show',
    array(
        'type'      => 'checkbox',
        'label'     => __( 'Показувати на головній?', 'illdy' ),
        'section'   => 'jerelia_panel_social',
        'priority'  => 1
    )
);

// Title
$wp_customize->add_setting( 'jerelia_social_general_title',
    array(
        'sanitize_callback' => 'sanitize_html',
        'default'           => __( 'Слідуй за мною', 'jerelia' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control( 'jerelia_social_general_title',
    array(
        'label'         => __( 'Заклик', 'jerelia' ),
        'section'       => 'jerelia_panel_social' ,
        'priority'      => 2
    )
);

    // Facebook button URL
    $wp_customize->add_setting( 'jerelia_social_general_linkFB',
        array(
        'sanitize_callback' => 'sanitize_html',
            'default'            => 'Jerelia.Ukraine',
            'transport'          => 'refresh'
        )
    );
    $wp_customize->add_control( 'jerelia_social_general_linkFB',
        array(
            'label'          => __( 'Введіть адресу групи', 'jerelia' ),
            'description'    => __( 'наприклад Jerelia.Ukraine', 'jerelia' ),
            'section'        => 'jerelia_panel_social',
            'settings'       => 'jerelia_social_general_linkFB',
            'priority'       => 3
        )
    );

        // VK button URL
    $wp_customize->add_setting( 'jerelia_social_general_linkVK',
        array(
        'sanitize_callback' => 'sanitize_html',
            'default'            => '89969471',
            'transport'          => 'refresh'
        )
    );
    $wp_customize->add_control( 'jerelia_social_general_linkVK',
        array(
            'label'          => __( 'Введіть код групи VK', 'jerelia' ),
            'description'    => __( 'наприклад 89969471', 'jerelia' ),
            'section'        => 'jerelia_panel_social',
            'settings'       => 'jerelia_social_general_linkVK',
            'priority'       => 4
        )
    );
