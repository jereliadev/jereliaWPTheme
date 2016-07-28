<?php

/* Team */
        $wp_customize->add_panel( 'jerelia_panel_team',
    array(
        'priority'          => 16,
        'capability'        => 'edit_theme_options',
        'theme_supports'    => '',
        'title'             => __( 'Відгуки', 'jerelia' ),
        'description'       => __( 'Control various options for team section from front page.', 'jerelia' ),
    )
);


//------------ Settings

   $wp_customize->add_section( 'jerelia_panel_team_setting', array(
        'priority' => 10,
        'panel'     => 'jerelia_panel_team',
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Налаштування', 'jerelia' ),
        'description' => '',
    ) );

// Show this section
$wp_customize->add_setting( 'jerelia_team_general_show',
    array(
        'sanitize_callback' => 'jerelia_sanitize_checkbox',
        'default'           => 1,
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control('jerelia_team_general_show',
    array(
        'type'      => 'checkbox',
        'label'     => __( 'Показувати на головній?', 'illdy' ),
        'section'   => 'jerelia_panel_team_setting',
        'priority'  => 1
    )
);

$wp_customize->add_setting( 'jerelia_team_general_title',
    array(
        'sanitize_callback' => 'sanitize_html',
        'default'           => __( '', 'jerelia' ),
        'capability' => 'edit_theme_options',
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control('jerelia_team_general_title',
    array(
        'label'     => __( 'Заклик', 'illdy' ),
        'section'   => 'jerelia_panel_team_setting',
        'settings'  => 'jerelia_team_general_title',
        'priority'  => 2
    )
);

//------------ 1

   $wp_customize->add_section( 'jerelia_panel_team_1', array(
        'priority' => 10,
        'panel'     => 'jerelia_panel_team',
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Перший відгук', 'jerelia' ),
        'description' => '',
    ) );

// Image
$wp_customize->add_setting( 'jerelia_team_general_image_1',
    array(
        'sanitize_callback' => 'absint',
        'default'           => esc_url( get_template_directory_uri() . '/layouts/images/person1.jpg' ),
        'transport'         => 'refresh'
    )
);

$wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control($wp_customize, 'jerelia_team_general_image_1',
                array(
                    'label'       => __( 'Зображення', 'jerelia' ),
                    'section'     => 'jerelia_panel_team_1',
                    'settings'  => 'jerelia_team_general_image_1',
                    'flex_width'  => false,
                    'flex_height' => false,
                    'width'       => 125,
                    'height'      => 125,
                )
        )
    );

// Name
$wp_customize->add_setting( 'jerelia_team_general_name_1',
    array(
        'sanitize_callback' => 'sanitize_html',
        'default'           => __( 'Диана Морозова', 'jerelia' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control('jerelia_team_general_name_1',
    array(
        'label'         => __( 'Ім’я та Прізвище', 'jerelia' ),
        'section'       => 'jerelia_panel_team_1' ,
        'priority'      => 2
    )
);

// Entry
$wp_customize->add_setting( 'jerelia_team_general_entry_1',
    array(
        'sanitize_callback' => 'sanitize_html',
        'default'           => __( 'Олена Філатова – це дійсно лідер, вона не просто зібрала команду, а поєднала абсолютно різних людей, надихнула їх на подолання перепон та досягнення спільної мети.', 'jerelia' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control( 'jerelia_team_general_entry_1',
    array(
        'label'         => __( 'Текст відгуку', 'jerelia' ),
        'section'       => 'jerelia_panel_team_1' ,
        'priority'      => 3,
        'type'          => 'textarea'
    )
);
//------------ 2

   $wp_customize->add_section( 'jerelia_panel_team_2', array(
        'priority' => 10,
        'panel'     => 'jerelia_panel_team',
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Другий відгук', 'jerelia' ),
        'description' => '',
    ) );

// Image
$wp_customize->add_setting( 'jerelia_team_general_image_2',
    array(
        'sanitize_callback' => 'absint',
        'default'           => esc_url( get_template_directory_uri() . '/layouts/images/person2.jpg' ),
        'transport'         => 'refresh'
    )
);

$wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control($wp_customize, 'jerelia_team_general_image_2',
                array(
                    'label'       => __( 'Зображення', 'jerelia' ),
                    'section'     => 'jerelia_panel_team_2',
                    'settings'  => 'jerelia_team_general_image_2',
                    'flex_width'  => false,
                    'flex_height' => false,
                    'width'       => 125,
                    'height'      => 125,
                )
        )
    );

// Name
$wp_customize->add_setting( 'jerelia_team_general_name_2',
    array(
        'sanitize_callback' => 'sanitize_html',
        'default'           => __( 'Микола Журавель', 'jerelia' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control( 'jerelia_team_general_name_2',
    array(
        'label'         => __( 'Ім’я та Прізвище', 'jerelia' ),
        'section'       => 'jerelia_panel_team_2' ,
        'priority'      => 2
    )
);

// Entry
$wp_customize->add_setting( 'jerelia_team_general_entry_2',
    array(
        'sanitize_callback' => 'sanitize_html',
        'default'           => __( 'Олена Філатова унікальна, її я можу слухати годинами, і не лише тому, що вона красномовно говорить, а тому, що її промови дійсно змістовні, мудрі та актуальні.', 'jerelia' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control( 'jerelia_team_general_entry_2',
    array(
        'label'         => __( 'Текст відгуку', 'jerelia' ),
        'section'       => 'jerelia_panel_team_2' ,
        'priority'      => 3,
        'type'          => 'textarea'
    )
);
//------------ 3

   $wp_customize->add_section( 'jerelia_panel_team_3', array(
        'priority' => 10,
        'panel'     => 'jerelia_panel_team',
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'Третій відгук', 'jerelia' ),
        'description' => '',
    ) );

// Image
$wp_customize->add_setting( 'jerelia_team_general_image_3',
    array(
        'sanitize_callback' => 'absint',
        'default'           => esc_url( get_template_directory_uri() . '/layouts/images/person3.jpg' ),
        'transport'         => 'refresh'
    )
);

$wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control($wp_customize, 'jerelia_team_general_image_3',
                array(
                    'label'       => __( 'Зображення', 'jerelia' ),
                    'section'     => 'jerelia_panel_team_3',
                    'settings'  => 'jerelia_team_general_image_3',
                    'flex_width'  => false,
                    'flex_height' => false,
                    'width'       => 125,
                    'height'      => 125,
                )
        )
    );
// Name
$wp_customize->add_setting( 'jerelia_team_general_name_3',
    array(
        'sanitize_callback' => 'sanitize_html',
        'default'           => __( 'Вероника Максимова', 'jerelia' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control( 'jerelia_team_general_name_3',
    array(
        'label'         => __( 'Ім’я та Прізвище', 'jerelia' ),
        'section'       => 'jerelia_panel_team_3' ,
        'priority'      => 2
    )
);

// Entry
$wp_customize->add_setting( 'jerelia_team_general_entry_3',
    array(
        'sanitize_callback' => 'sanitize_html',
        'default'           => __( 'Раніше я не зустрічала людину, котра б змогла декількома словами мотивувати, надихнути, підтримати в непростій ситуації та направити в необхідну колію. Тепер я знаю таку людину – це Олена Філатова.', 'jerelia' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control( 'jerelia_team_general_entry_3',
    array(
        'label'         => __( 'Текст відгуку', 'jerelia' ),
        'section'       => 'jerelia_panel_team_3' ,
        'priority'      => 3,
        'type'          => 'textarea'
    )
);

