<?php

// load script
function load_file() {
    wp_enqueue_style('style', get_stylesheet_uri() );
}

add_action('wp_enqueue_scripts', 'load_file');

if (function_exists('register_nav_menu'))
{
    register_nav_menu('main_menu', 'Menu Utama' );
    register_nav_menu('footer_menu', 'Footer Menu');
}

?>