<?php

function loadFiles() {
    wp_enqueue_script('font-awsome', 'https://kit.fontawesome.com/bc201f4e0c.js', array(), '1.0', true);
    wp_enqueue_style('main_style', get_theme_file_uri('/build/style-index.css'));
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Cormorant+SC:wght@300;400;500;600;700&display=swap');
}

add_action('wp_enqueue_scripts', 'loadFiles');