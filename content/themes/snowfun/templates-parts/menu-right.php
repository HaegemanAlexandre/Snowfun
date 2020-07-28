<?php

// Je récupere mon menu dans ma variable $menu
$menu = wp_nav_menu([
    // Je désigne le menu à afficher "définit dans functions.php
    'theme_location' => 'menu_right',
    // Je souhaite avoir un container (= une balise qui englobe mon menu) "<nav>"
    'container' => 'nav',
    // Je souhaite que mon container ai la classe "main-nav
    'container_class' => 'main-nav',
    // Je ne souhaite pas afficher mon menu directement mais le récuperer dans une variable
    'echo' => false
]);

// Je vais retirer toutes les balises (via strip_tags) dans ma variable $menu
// strip_tags (http://php.net/manual/fr/function.strip-tags.php)
// prend en 2em argument les balise à conserver
$menu = strip_tags($menu, '<a><nav>');

// Je n'ai plus qu'a afficher mon $menu
echo $menu;

