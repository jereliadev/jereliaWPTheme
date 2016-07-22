<?php

/* Contact */

    $wp_customize->add_section( 'jerelia_contact_section', array(
        'priority' => 20,
        'capability' => 'edit_theme_options',
        'type' => 'theme_mod',
        'title' => __( 'Контактна інформація', 'jerelia' ),
        'description' => '',
    ) );

// Email     
    $wp_customize->add_setting( 'email_field_id', array(
    'default' => '',
    'type' => 'theme_mod',
    'capability' => 'edit_theme_options',
    'transport' => '',
    'sanitize_callback' => 'sanitize_email'
    )
);

        $wp_customize->add_control( 'email_field_id', array(
        'type' => 'email',
        'priority' => 1,
        'section' => 'jerelia_contact_section',
        'label' => __( 'Email:', 'jerelia' )
         )
);
// Leader ID
$wp_customize->add_setting( 'leader_field_id',
    array(
        'sanitize_callback' => 'sanitize_html',
        'default'           => __( '1111111', 'jerelia' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control(
    'leader_field_id',
    array(
        'label'         => __( 'Jerelia ID', 'jerelia' ),
        'description'   => __( 'наприклад 111111', 'jerelia'),
        'section'       => 'jerelia_contact_section' ,
        'priority'      => 2
    )
);

// Entry
$wp_customize->add_setting( 'email_letter_entry',
    array(
        'sanitize_callback' => 'sanitize_html',
        'default'           => __( 'Доброго дня, друже! Ласкаво просимо до дружної команди  ' . get_bloginfo('name'). '! Ми працюємо в інтернеті та навчимо Вас усьому, що знаємо самі. У всіх нас єдина мета – гідне життя для себе та близьких. Мета – одна, досягаємо РАЗОМ! Наш девіз: «Лише допомагаючи заробити іншим – заробиш сам!», і це дійсно так. Я зацікавлена в Вашому успіху: чим більше Ви будете заробляти, тим швидше виросту я, а як результат – і мій прибуток. Впевнена, що наша з Вами співпраця буде довготривала та плідна.', 'jerelia' ),
        'transport'         => 'postMessage'
    )
);
$wp_customize->add_control( 'email_letter_entry',
    array(
        'label'         => __( 'Введіть текст листа з привітанням', 'jerelia' ),
        'section'       => 'jerelia_contact_section' ,
        'priority'      => 3,
        'type'          => 'textarea'
    )
);