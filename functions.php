<?php 

function add_google_fonts()
{
    wp_register_style('Ubuntu', 'https://fonts.googleapis.com/css?family=Ubuntu&display=swap');
    wp_enqueue_style('Ubuntu');
}

function add_scripts()
{
    wp_enqueue_style('bmd', 'https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css', array(), '4.1.1');
    wp_enqueue_script('bmdJS', 'https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js', array(), '4.1.1', true);
    wp_enqueue_script('popper', 'https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js', array(), '1.12.6');
    wp_enqueue_script('font_awesome', 'https://kit.fontawesome.com/e84cd79da4.js', array(), '');
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_print_styles', 'add_google_fonts');
add_action('wp_enqueue_scripts', 'add_scripts');