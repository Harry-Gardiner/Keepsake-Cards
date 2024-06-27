<?php
// Add your custom styles.
function my_child_theme_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}

add_action('wp_enqueue_scripts', 'my_child_theme_styles');

// Add your custom scripts.
// function my_child_theme_scripts() {
//     wp_enqueue_script('child-custom-script', get_stylesheet_directory_uri() . '/path/file.js', array('jquery'), false, true);
// }

// add_action('wp_enqueue_scripts', 'my_child_theme_scripts');