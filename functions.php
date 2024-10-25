<?php

function theme_enqueue_styles()
{
    wp_enqueue_style('main-style', get_template_directory_uri() . '/css/main.css', array(), filemtime(get_template_directory() . '/css/main.css'));
    wp_enqueue_style('burger-style', get_template_directory_uri() . '/css/burger.css', array(), filemtime(get_template_directory() . '/css/burger.css'));
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');


//créer un emplacemet pour le menu header et footer dans wp
function custom_theme_setup()
{
    add_theme_support('menu');
    add_theme_support('footer');

    register_nav_menu('main-menu', __('Menu de navigation'));
    register_nav_menu('footer-menu', __('Pieds de page'));
}

add_action('after_setup_theme', 'custom_theme_setup');


//utilise le Customizer de WordPressa pour l'ajout d'une option permettant de télécharger un logo pour le site.
function your_theme_new_customizer_settings($wp_customize)
{
    // créer un réglage (add_setting) pour le logo et un contrôle (add_control) pour télécharger l'image en tant que logo
    $wp_customize->add_setting('your_theme_logo');
    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize,
        'your_theme_logo',
        array(
            'label' => 'Upload Logo',
            'section' => 'title_tagline',
            'settings' => 'your_theme_logo',
        )
    ));
}
add_action('customize_register', 'your_theme_new_customizer_settings');

// charge les fichiers js
function enqueue_animations_js()
{
    wp_enqueue_script('jquery');
    wp_enqueue_script('burger_js', get_template_directory_uri() . '/js/burger.js', array(), filemtime(get_template_directory() . '/js/burger.js'), true);
}
add_action('wp_enqueue_scripts', 'enqueue_animations_js');