<?php

function custom_post_types() {
    register_post_type('Cytat', array(
        'show_in_rest' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Cytat',
            'add_new_item' => 'Dodaj Cytat',
            'edit_item' => 'Edytuj Cytat',
            'all_items' => 'Cytaty',
            'singular_name' => 'Cytat'

        ),
        'menu_icon' => 'dashicons-admin-comments'
    ));

    register_post_type("Oferta", array(
        'show_in_rest' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Oferta',
            'add_new_item' => 'Dodaj oferte',
            'edit_item' => 'Edytuj Oferte',
            'all_items' => 'Oferty',
            'singular_name' => 'Oferta'
        ),
        'menu_icon' => 'dashicons-money'
    ));

    register_post_type("Zdjęcie", array(
        'show_in_rest' => true,
        'public' => true,
        'labels' => array(
            'name' => 'Galeria',
            'add_new_item' => 'Dodaj zdjęcie',
            'edit_item' => 'Edytuj Zdjęcie',
            'all_items' => 'Zdjęcia',
            'singular_name' => 'Zdjęcie'
        ),
        'menu_icon' => 'dashicons-format-gallery'
    ));

    register_post_type("Kalendarz", array(
        'show_in_rest' => true,
        'public' => true,
        'labels' => array(
            'name'=> 'Kalendarz',
            'add_new_item' => 'Dodaj wpis',
            'edit_item' => 'Edytuj wpis',
            'all_items' => 'Wpisy',
            'singular_name' => 'Wpis'
        ),
        'menu_icon' => 'dashicons-calendar-alt'
    ));
}

add_action('init','custom_post_types');