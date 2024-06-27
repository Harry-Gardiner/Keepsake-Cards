<?php
// Add your custom styles.
function my_child_theme_styles() {
    // Enqueue the parent stylesheet.
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Enqueue your custom stylesheet.
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}

// Hook into the 'wp_enqueue_scripts' action.
add_action('wp_enqueue_scripts', 'my_child_theme_styles');