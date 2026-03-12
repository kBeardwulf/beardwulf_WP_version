  <!-- ========== FOOTER ========== -->
  <footer class="footer">
    <div class="container footer-grid">
      <!-- Col 1: Logo + texte -->
      <div class="footer-col">
        <a href="index.html" class="footer-logo">
          <img src="<?php echo get_template_directory_uri();?>/images/logo/logo.svg" alt="DWWM">
        </a>
        <p>Votre partenaire de confiance pour tous vos projets de construction et de rénovation. Qualité, fiabilité et savoir-faire depuis plus de 20 ans.</p>
        <div class="footer-social">
          <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
        </div>
      </div>
      
      <!-- Col 2: Menu secondaire -->
      <div class="footer-col">
        <h4>Navigation</h4>
          <?php
            wp_nav_menu(array(
              "menu" => "Footer",
              "theme_location" => "Footer",
              "depth" => 2,
              "container" => "",
              "container_id" => "",
              "container_class" => "",
              "menu_class" => "",
              "menu_id" => "",
            ));
          ?>
        </div>
      

      <!-- Col 3: Pages utiles -->
      <div class="footer-col">
        <h4>Informations</h4>
          <?php
            wp_nav_menu(array(
              "menu" => "Footer2",
              "theme_location" => "Footer2",
              "depth" => 2,
              "container" => "",
              "container_id" => "",
              "container_class" => "",
              "menu_class" => "",
              "menu_id" => "",
            ));
          ?>
        </div>

      <!-- Col 4: Coordonnées -->
      <div class="footer-col">
        <h4>Contact</h4>
        <ul class="footer-contact">
          <li><i class="fas fa-map-marker-alt"></i> 12 Rue de la Construction, 75001 Paris</li>
          <li><i class="fas fa-phone-alt"></i> 01 23 45 67 89</li>
          <li><i class="fas fa-envelope"></i> <?php echo antispambot("contact@dwwm-batiment.fr"); ?></li>
          <li><i class="fas fa-clock"></i> Lun-Ven : 8h-18h</li>
        </ul>
      </div>
    </div>

    <!-- Sub-footer -->
    <div class="sub-footer">
      <div class="container">
        <p>&copy; <?php echo date('Y'); ?> DWWM Bâtiment &amp; Construction. Tous droits réservés.</p>
      </div>
    </div>
  </footer>

  <!-- ========== LIGHTBOX ========== -->
  <div class="lightbox" id="lightbox">
    <button class="lightbox-close" aria-label="Fermer"><i class="fas fa-times"></i></button>
    <button class="lightbox-prev" aria-label="Précédent"><i class="fas fa-chevron-left"></i></button>
    <button class="lightbox-next" aria-label="Suivant"><i class="fas fa-chevron-right"></i></button>
    <div class="lightbox-content">
      <img src="" alt="" id="lightbox-img">
    </div>
  </div>

  <!-- ========== SCROLL TO TOP ========== -->
  <button class="scroll-top" id="scrollTop" aria-label="Retour en haut">
    <i class="fas fa-chevron-up"></i>
  </button>

  <?php wp_footer(); ?>
</body>
</html>