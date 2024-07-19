<?php
// Add your custom styles.
function my_child_theme_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/assets/css/style.css', array('parent-style'));
}

add_action('wp_enqueue_scripts', 'my_child_theme_styles', 20);

// Add your custom scripts.
// function my_child_theme_scripts() {
//     wp_enqueue_script('child-custom-script', get_stylesheet_directory_uri() . '/path/file.js', array('jquery'), false, true);
// }

// add_action('wp_enqueue_scripts', 'my_child_theme_scripts');

// SVG Support + sanitize SVG
function add_svg_to_upload_mimes( $mimes ) {
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter( 'upload_mimes', 'add_svg_to_upload_mimes' );