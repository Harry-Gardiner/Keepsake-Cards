<?php
// Add your custom styles.
function my_child_theme_styles()
{
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
function add_svg_to_upload_mimes($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'add_svg_to_upload_mimes');


/**
 * Header
 *
 */

// // Remove the original storefront site branding action
// function ksc_remove_default_branding() {
//     remove_action('storefront_header', 'storefront_site_branding', 20);
// }
// add_action('init', 'ksc_remove_default_branding');

// // Custom site branding
// function ksc_heading_branding() {
//     echo '<div class="site-branding">';
//     if (has_custom_logo()) {
//         the_custom_logo();
//     } else {
//         echo '<div class="site-logo">
//             <a href="' . esc_url(home_url('/')) . '" rel="home">
//                 <img src="' . get_stylesheet_directory_uri() . '/images/default-logo.png" alt="' . get_bloginfo('name') . '">
//             </a>
//         </div>';
//     }
//     echo '<div class="site-title">
//             <a href="' . esc_url(home_url('/')) . '" rel="home">' . get_bloginfo('name') . '</a>
//         </div>
//     </div>';
// }
// add_action('storefront_header', 'ksc_heading_branding', 20);

// // Remove search TODO: work back in
// function ksc_remove_search() {
//     remove_action('storefront_header', 'storefront_product_search', 40);
// }
// add_action('init', 'ksc_remove_search');
