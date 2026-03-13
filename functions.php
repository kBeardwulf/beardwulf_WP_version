<?php

 
//Affiche les styles
function beardwulf_styles()
{
    //Exemple - Params : ID du fichier, chemin, version, media (all, screen...)
    wp_enqueue_style('style-theme', get_template_directory_uri() .'/assets/css/style.css', array(), null);
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,700;0,800;0,900;1,700;1,800;1,900&family=Barlow:wght@400;500;600&display=swap', array(), null);
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), null);
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);
    wp_enqueue_style('style-tailwind', get_template_directory_uri() .'/assets/css/monstyle.css', array(), null);
    wp_enqueue_style('style-perso', get_template_directory_uri() .'/assets/css/style-perso.css', array(), null);
}
add_action('wp_enqueue_scripts', 'beardwulf_styles');

//Applique les scripts
function beardwulf_script()
{
    wp_enqueue_script('swiperjs', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), false, true);
    wp_enqueue_script('script-main', get_template_directory_uri() . '/assets/js/script.js', array(), false, true);
    wp_enqueue_script('beardwulf-script', get_template_directory_uri() . '/assets/js/scriptperso.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'beardwulf_script');

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

/* Fonction pour mon image en background */
function beardwulf_inline_styles() {
    $img_url = get_template_directory_uri() . '/assets/img/HeroBannerIndex.jpg';
    $css = '.hero-bg { background-image: url("' . $img_url . '"); }';
    wp_add_inline_style( 'style-perso', $css );
}
add_action( 'wp_enqueue_scripts', 'beardwulf_inline_styles' );