<?php

function snowfun_home($wp_customize) {

    $wp_customize->add_setting(
        'home_text',
        [
            'default' => 'Depuis 33 années, Snow fun ne cesse d\'évoluer et d\'innover afin d\'offrir la meilleure qualité dans ses prestations. De la sécurite des enfants équipés de blousons, au recrutement des moniteurs diplômés, Snow fun ne laisse rien au hasard... Aujourd\'hui avec 10 moniteurs, une gamme complète de cours, du debutant au skieur extrême, une école de snowboard, le passage de test et la priorité aux remontées mécaniques, Snow fun dispose d\'une structure performante, sûre et reconnue, lui permettant de repondre aux différents désirs de sa clientèle.'
        ]
    );

    $wp_customize->add_control(
        'home_text',
        [
            'type' => 'textarea',
            'section' => 'snowfun_home',
            'label' => 'Tapper le texte de présentation:',
        ]
    );

}