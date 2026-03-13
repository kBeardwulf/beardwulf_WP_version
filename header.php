<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beardwulf — Portfolio</title>
  <?php wp_head(); ?>
</head>
<body>

<!-- HEADER -->
<header>
  <div class="hdr">
    <a href="#" class="logo">
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
  </div>
</header>
