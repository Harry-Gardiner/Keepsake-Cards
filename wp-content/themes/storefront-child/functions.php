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




// function customize_storefront_header() {
//     remove_action( 'storefront_header', 'storefront_display_logo', 20 );
//     remove_action( 'storefront_header', 'storefront_cart_link', 60 );
    
//     // Step 3: Rehook the functions to your custom actions or directly in header.php
//     // For direct execution in header.php, you can skip this step
//     add_action( 'custom_storefront_site_branding', 'storefront_display_logo' );
//     add_action( 'custom_storefront_header_cart', 'storefront_cart_link' );
// }

// add_action( 'init', 'customize_storefront_header' );


/**
 * @snippet       WooCommerce Disable Default CSS
 * @how-to        Get CustomizeWoo.com FREE
 * @author        Rodolfo Melogli
 * @compatible    WooCommerce 8
 * @community     https://businessbloomer.com/club/
*/
 
// function wpcustom_deregister__styles(){
//     wp_deregister_style('storefront-woocommerce-style');
//     wp_deregister_style('storefront-style');
// }
// add_action( 'wp_print_styles', 'wpcustom_deregister__styles', 100 );


// add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );