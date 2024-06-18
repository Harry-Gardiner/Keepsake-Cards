<?php
function storefront_child_enqueue_styles() {
    wp_enqueue_style('storefront-parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('storefront-child-style', get_stylesheet_directory_uri() . '/style.css', array('storefront-parent-style'));
}
add_action('wp_enqueue_scripts', 'storefront_child_enqueue_styles');
