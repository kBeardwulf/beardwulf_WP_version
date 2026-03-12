<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>

  <!-- ========== HEADER ========== -->
  <header class="header" id="header">
    <div class="container header-inner">
      <a href="#accueil" class="logo">
        <img src="<?php echo get_template_directory_uri();?>/images/logo/logo.svg" alt="DWWM Bâtiment & Construction">
      </a>

      <?php
        wp_nav_menu(array(
          "menu" => "Header",
          "theme_location" => "Header",
          "depth" => 2,
          "container" => "nav",
          "container_id" => "nav",
          "container_class" => "nav",
          "menu_class" => "nav-list",
          "menu_id" => "",
        ));
      ?>


      <div class="header-social">
        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
      </div>

      <button class="hamburger" id="hamburger" aria-label="Menu">
        <span></span>
        <span></span>
        <span></span>
      </button>
    </div>
  </header>
