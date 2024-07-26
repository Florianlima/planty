<?php

// Action qui permet de charger des scripts dans notre theme
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    // Chargement du style.css du theme parent Hello theme
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Chargement du themeChild.css theme personnalise
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

function register_custom_menus() {
    register_nav_menus(
        array(
            'main-menu' => 'Menu principal' ));
        }
        add_action('init', 'register_custom_menus');
?>
