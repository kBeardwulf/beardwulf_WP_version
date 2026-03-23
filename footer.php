<footer>
  <div class="ft">
    <div class="ft-top">
      <div class="ft-brand">
        <a href="<?php echo home_url(); ?>" class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logolouptexte.png" alt="Beardwulf Events">
        </a>
        <p>Développeur web, graphiste et créateur d'événements basé en France. Disponible pour des missions freelance et collaborations.</p>
        <div class="ft-social">
          <a href="#" class="soc" title="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="soc" title="Twitter / X"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="#" class="soc" title="Instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" class="soc" title="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="#" class="soc" title="GitHub"><i class="fa-brands fa-github"></i></a>
        </div>
      </div>

      <div class="ft-col">
        <h4>Navigation</h4>
        <?php
          wp_nav_menu(array(
            'theme_location'  => 'Footer',
            'container'       => false,
            'menu_class'      => 'ft-links',
          ));
        ?>
      </div>

      <div class="ft-col">
      </div>

      <div class="ft-col">
        <h4>Contact</h4>
        <ul class="ft-links">
          <li><a href="mailto:burdloffkevin@gmail.com">burdloffkevin@gmail.com</a></li>
          <li><a href="<?php the_permalink(19); ?>">Formulaire de contact</a></li>
        </ul>
      </div>
    </div>

    <div class="ft-bottom">
      <span>© <?php echo date('Y'); ?> Kevin Burdloff — Beardwulf. Tous droits réservés.</span>
      <div class="ft-legal">
        <a href="<?php the_permalink(320); ?>">Mentions légales</a>
        <a href="<?php the_permalink(588); ?>">Politique de confidentialité</a>
        <a href="<?php the_permalink(180); ?>">Plan du site</a>
      </div>
    </div>
  </div>
</footer>

  <!-- Overlay sombre -->
  <div class="mobile-overlay" id="mobile-overlay"></div>

  <!-- Panneau latéral -->
  <div class="mobile-panel" id="mobile-panel">
      <div class="mobile-panel-header">
          <a href="<?php echo home_url(); ?>" class="logo">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logolouptexte.png" alt="Beardwulf Events" style="height:40px;">
          </a>
          <button class="mobile-panel-close" id="mobile-panel-close">
              <i class="fa-solid fa-xmark"></i>
          </button>
      </div>

      <nav class="mobile-panel-nav">
          <?php wp_nav_menu(array(
              'theme_location' => 'Header',
              'container'      => false,
              'menu_class'     => 'mobile-nav-list',
          )); ?>
      </nav>

      <div class="mobile-panel-footer">
        <a href="mailto:burdloffkevin@gmail.com" class="mobile-panel-contact">
          <i class="fa-regular fa-envelope"></i>
          burdloffkevin@gmail.com
        </a>
        <div class="mobile-panel-socials">
          <a href="#" class="soc"><i class="fa-brands fa-x-twitter"></i></a>
          <a href="#" class="soc"><i class="fa-brands fa-linkedin-in"></i></a>
          <a href="#" class="soc"><i class="fa-brands fa-github"></i></a>
      </div>
    </div>
  </div>
  <?php wp_footer(); ?>
</body>
</html>