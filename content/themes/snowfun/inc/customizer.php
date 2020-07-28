<?php

if (!function_exists('snowfun_customize_register')) {

    require('customizer/snowfun_home.php');


    function snowfun_customize_register($wp_customize) {

        $wp_customize->add_panel(
            'snowfun_theme_panel',
            [
                // Titre du panel (affiché)
                'title' => '&#10233; Snowfun &#10232;',
                // Description du panel (click sur (?) en haut)
                'description' => 'Snowfun Panel - Gestion du texte',
                // Emplacement
                'priority' => 1
            ]
        );

        $wp_customize->add_section(
            'snowfun_home',
            [
                'title' => "Modifier le texte de présentation",
                'panel' => 'snowfun_theme_panel'
            ]
        );

        snowfun_home($wp_customize);

    }
   
}

add_action('customize_register', 'snowfun_customize_register');