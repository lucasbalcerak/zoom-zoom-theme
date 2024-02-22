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
            'add_new_item' => 'Oferta',
            'edit_item' => 'Edytuj Oferte',
            'all_items' => 'Oferty',
            'singular_name' => 'Oferta'
        ),
        'menu_icon' => 'dashicons-money'
    ));
}

add_action('init','custom_post_types');