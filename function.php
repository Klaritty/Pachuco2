<?php
// Registrar ubicaciones del menú
function twentytwentyfour_child_theme_setup()
{
    register_nav_menus(
        array(
            'primary' => esc_html__('Menú Principal', 'twentytwentyfour-child'),
        ));
}
add_action('after_setup_theme', 'twentytwentyfour_child_theme_setup');


function consthera_theme_suport()
{
    add_theme_support('custom-logo');
}

function cc_mime_types($mimes)
{
    $mimes['svg'] = 'image/svg+xml';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');

function pachuco_enqueue_styles() {
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/tailwind_output.css');
    wp_enqueue_style('form-styles', get_template_directory_uri() . '/formStyles.css');
    wp_enqueue_style('swiper', get_template_directory_uri() . '/node_modules/swiper/swiper-bundle.min.css');
}
add_action('wp_enqueue_scripts', 'pachuco_enqueue_styles');
