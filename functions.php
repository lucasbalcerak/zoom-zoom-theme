<?php

function loadFiles() {
    wp_enqueue_style('main_style', get_theme_file_uri('/build/style-index.css'));
}

add_action('wp_enqueue_scripts', 'loadFiles');