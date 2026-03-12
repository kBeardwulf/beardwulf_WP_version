<?php

 
//Affiche les styles
function api_styles()
{
    //Exemple - Params : ID du fichier, chemin, version, media (all, screen...)
    wp_enqueue_style('style-theme', get_template_directory_uri() .'/assets/css/style.css', array(), null);
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap', array(), null);
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), null);
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);
}
add_action('wp_enqueue_scripts', 'api_styles');

//Applique les scripts
function api_scripts()
{
   wp_enqueue_script('swiperjs', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), false, true);
   wp_enqueue_script('script-main', get_template_directory_uri() . '/assets/js/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'api_scripts');

// get_template_directory_uri() . <= si il faut chercher les ressources en local

/* Activation des fonctionnalités de WordPress */
add_theme_support("title-tag");
add_theme_support("post-thumbnails");

/* Activaiton des menus */
register_nav_menus( array (
    // 1 : les paramètres = ID(nom du menu dans le back office, textdomain pour traduction)
    "Header" => __("Header", "beardwulf"),
    "Footer" => __("Footer - menu secondaire", "beardwulf"),
    "Footer2" => __("Footer - lien utiles", "beardwulf")
));

/* Création de post type */
function api_post_type() {
    register_post_type(
        "service", array (
            "label" => "service",
            "labels" => array
                (
                    "name" => "Services",
                    "singular_name" => "service"
                ),
            //Visible sur le front ?
            "public" => true,
            "supports" => array("title", "editor", "thumbnail"),
            "has_archive" => false,
            "menu_icon" => "dashicons-admin-multisite",
            "show_in_rest" => true
            )
        );
}
add_action("init", "api_post_type");