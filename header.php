<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body>

<!-- HEADER -->
<header>
  <div class="hdr">
    <a href="<?php echo home_url(); ?>" class="logo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logolouptexte.png" alt="Beardwulf Events">
    </a>
    <?php
      wp_nav_menu(array(
        'theme_location'  => 'Header',
        'container'       => 'nav',
        'container_class' => 'nav',
        'menu_class'      => 'nav-list',
      ));
    ?>

    <!-- Burger -->
    <button class="burger" id="burger" aria-label="Menu">
      <span></span>
      <span></span>
      <span></span>
    </button>
  </div>
</header>
