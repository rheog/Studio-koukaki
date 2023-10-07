<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
}

// Get customizer options form parent theme
if (get_stylesheet() !== get_template()) {
    add_filter('pre_update_option_theme_mods_' . get_stylesheet(), function ($value, $old_value) {
        update_option('theme_mods_' . get_template(), $value);
        return $old_value; // prevent update to child theme mods
    }, 10, 2);
    add_filter('pre_option_theme_mods_' . get_stylesheet(), function ($default) {
        return get_option('theme_mods_' . get_template(), $default);
    });
}

// coverflow
function enqueue_swiper_assets()
{
    // Enregistrez et chargez le fichier CSS de SwiperJS
    wp_enqueue_style('swiper-css', 'URL_DU_FICHIER_CSS', array(), '6.3.1');

    // Enregistrez et chargez le fichier JavaScript de SwiperJS
    wp_enqueue_script('swiper-js', 'URL_DU_FICHIER_JS', array('jquery'), '6.3.1', true);
}

// Ajoutez les styles et scripts à la file d'attente
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');


// ajout lien  script.js 
function my_custom_scripts()
{
    wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/script.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'my_custom_scripts');
