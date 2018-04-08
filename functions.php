<?php
function enqueue_my_scripts() {
    // jQuery is stated as a dependancy - it will be loaded by WordPress before the theme scripts
    wp_enqueue_script( 'theme-js', get_template_directory_uri() . '/dist/js/scripts.min.js', array('jquery'), true);
}
add_action('wp_enqueue_scripts', 'enqueue_my_scripts');

function enqueue_my_styles() {
    wp_enqueue_style( 'theme-css', get_template_directory_uri() . '/dist/css/style.min.css' );
}
add_action('wp_enqueue_scripts', 'enqueue_my_styles');
