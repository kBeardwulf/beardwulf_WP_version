<!-- FOOTER -->
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
        <h4>Services</h4>
        <ul class="ft-links">
          <li><a href="#">Développement WordPress</a></li>
          <li><a href="#">Intégration HTML/CSS</a></li>
          <li><a href="#">Identité visuelle</a></li>
          <li><a href="#">Maquettage Figma</a></li>
          <li><a href="#">Organisation d'événements</a></li>
        </ul>
      </div>

      <div class="ft-col">
        <h4>Contact</h4>
        <ul class="ft-links">
          <li><a href="mailto:burdloffkevin@gmail.com">burdloffkevin@gmail.com</a></li>
          <li><a href="#">LinkedIn</a></li>
          <li><a href="#contact">Formulaire de contact</a></li>
        </ul>
      </div>
    </div>

    <div class="ft-bottom">
      <span>© <?php echo date('Y'); ?> Kevin Burdloff — Beardwulf. Tous droits réservés.</span>
      <div class="ft-legal">
        <a href="#">Mentions légales</a>
        <a href="#">Politique de confidentialité</a>
        <a href="#">Plan du site</a>
      </div>
    </div>
  </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/scriptperso.js"></script>

<?php wp_footer(); ?>
</body>
</html>