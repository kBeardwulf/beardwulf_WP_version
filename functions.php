<?php

//Affiche les styles
function beardwulf_styles()
{
    //Exemple - Params : ID du fichier, chemin, version, media (all, screen...)
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,700;0,800;0,900;1,700;1,800;1,900&family=Barlow:wght@400;500;600&display=swap', array(), null);
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css', array(), null);
    wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);
    wp_enqueue_style('style-tailwind', get_template_directory_uri() .'/assets/css/monstyle.css', array(), null);
}
add_action('wp_enqueue_scripts', 'beardwulf_styles');

function beardwulf_contact_style() 
{
  if(is_page(19)) 
    {
        wp_enqueue_style('style-contact', get_template_directory_uri() . '/assets/css/contactstyle.css', array(), null); 
    }
}
add_action('wp_enqueue_scripts', 'beardwulf_contact_style');

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
function beardwulf_register_menus() {
    register_nav_menus( array (
        // 1 : les paramètres = ID(nom du menu dans le back office, textdomain pour traduction)
        "Header" => __("Header", "beardwulf"),
        "Footer" => __("Footer - menu secondaire", "beardwulf"),
        "Footer2" => __("Footer - lien utiles", "beardwulf")
    ));
}
add_action('init', 'beardwulf_register_menus');

/* Création de post type */
function beardwulf_post_type() {
    // Réalisations
    register_post_type(
        "realisation", array(
            "label"        => "Réalisation",
            "labels"       => array(
                "name"          => "Réalisations",
                "singular_name" => "Réalisation"
            ),
            "public"       => true,
            "supports"     => array("title", "editor", "thumbnail", "excerpt"),
            "has_archive"  => true,
            "menu_icon"    => "dashicons-portfolio",
            "show_in_rest" => true
        )
    );
}
add_action("init", "beardwulf_post_type");

function beardwulf_taxonomies() {
    register_taxonomy(
        'proj_tag',
        'realisation',
        array(
            'label'        => 'Tags projet',
            'hierarchical' => false,
            'show_in_rest' => true,
            'rewrite'      => array('slug' => 'proj-tag')
        )
    );

    // Catégories de projet
    register_taxonomy(
        'proj_categorie',
        'realisation',
        array(
            'label'        => 'Catégorie',
            'hierarchical' => true,
            'show_in_rest' => true,
            'rewrite'      => array('slug' => 'categorie-projet')
        )
    );
}
add_action('init', 'beardwulf_taxonomies');

/* Fonction pour mon image en background */
function beardwulf_inline_styles() {
    $img_url = get_template_directory_uri() . '/assets/img/HeroBannerIndex.jpg';
    $css = '.hero-bg { background-image: url("' . $img_url . '"); }';
    wp_add_inline_style( 'style-perso', $css );
}
add_action( 'wp_enqueue_scripts', 'beardwulf_inline_styles' );