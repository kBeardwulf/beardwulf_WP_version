<?php
/*
  Template Name: Services
  Description: page des services
*/
get_header();
?>
<!-- ========== BREADCRUMB ========== -->
  <section class="breadcrumb-section">
    <div class="container">
      <nav class="breadcrumb" aria-label="Fil d'Ariane">
        <a href="<?php echo home_url(); ?>">Accueil</a>
        <span class="breadcrumb-sep"><i class="fas fa-chevron-right"></i></span>
        <span class="breadcrumb-current"><?php the_title(); ?></span>
      </nav>
      <h1 class="page-title"><?php the_title(); ?></h1>
    </div>
  </section>

  <!-- ========== INTRODUCTION PLEINE LARGEUR ========== -->
  <section class="page-intro-section">
    <div class="container">
      <div class="page-intro fade-in">
        <span class="section-tag">Ce que nous proposons</span>
        <h2>Des solutions complètes pour chaque projet</h2>
        <p>Chez DWWM, nous proposons une gamme complète de services dans le domaine du bâtiment et de la construction. De la conception à la livraison, notre équipe pluridisciplinaire vous accompagne à chaque étape de votre projet. Que vous soyez un particulier souhaitant construire la maison de vos rêves, un professionnel désirant rénover ses locaux ou un promoteur planifiant un programme immobilier, nous avons l'expertise et les ressources nécessaires pour concrétiser votre vision.</p>
      </div>
    </div>
  </section>

  <!-- ========== SERVICES ========== -->
  <section class="services">
    <div class="container">
      <div class="services-grid">
      <?php
          $articles = new WP_Query(array
          (
            'post_type' => 'service',
            'orderby' => 'ID',
            'order' => 'ASC',
            'posts_per_page' => -1
          )
        );

        while ($articles->have_posts()) : $articles->the_post();
      ?>
        <div class="service-box fade-in">
          <div class="service-icon"><i class="fas fa-building"></i></div>
          <h3><?php the_title(); ?></h3>
          <?php the_excerpt(); ?>
        </div>
      <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
  </section>

  <!-- ========== CTA ========== -->
  <section class="cta-section">
    <div class="container cta-content fade-in">
      <h2>Prêt à concrétiser votre projet ?</h2>
      <p>Nos experts sont à votre disposition pour étudier votre projet et vous proposer un devis détaillé, gratuit et sans engagement.</p>
      <a href="contact.html" class="btn btn-accent">Demander un devis gratuit</a>
    </div>
  </section>

  <!-- ========== CONTACT ========== -->
  <section class="contact" id="contact">
    <div class="container split-grid">
      <div class="contact-info fade-in">
        <span class="section-tag">Parlons de votre projet</span>
        <h2>Contactez-nous</h2>
        <p>N'hésitez pas à nous contacter pour discuter de votre projet. Nous vous répondrons dans les plus brefs délais.</p>
        <ul class="contact-details">
          <li>
            <i class="fas fa-map-marker-alt"></i>
            <div>
              <strong>Adresse</strong>
              <span>12 Rue de la Construction<br>75001 Paris, France</span>
            </div>
          </li>
          <li>
            <i class="fas fa-phone-alt"></i>
            <div>
              <strong>Téléphone</strong>
              <span>01 23 45 67 89</span>
            </div>
          </li>
          <li>
            <i class="fas fa-envelope"></i>
            <div>
              <strong>Email</strong>
              <span>contact@dwwm-batiment.fr</span>
            </div>
          </li>
          <li>
            <i class="fas fa-clock"></i>
            <div>
              <strong>Horaires</strong>
              <span>Lun - Ven : 8h00 - 18h00<br>Sam : 9h00 - 12h00</span>
            </div>
          </li>
        </ul>
      </div>
      <div class="contact-form-wrap fade-in">
        <form class="contact-form" id="contactForm" novalidate>
          <div class="form-row">
            <div class="form-group">
              <label for="name">Nom complet *</label>
              <input type="text" id="name" name="name" placeholder="Jean Dupont" required>
            </div>
            <div class="form-group">
              <label for="email">Email *</label>
              <input type="email" id="email" name="email" placeholder="jean@exemple.fr" required>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="phone">Téléphone</label>
              <input type="tel" id="phone" name="phone" placeholder="01 23 45 67 89">
            </div>
            <div class="form-group">
              <label for="subject">Sujet *</label>
              <select id="subject" name="subject" required>
                <option value="" disabled selected>Choisir un sujet</option>
                <option value="devis">Demande de devis</option>
                <option value="info">Demande d'information</option>
                <option value="rdv">Prise de rendez-vous</option>
                <option value="autre">Autre</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="message">Message *</label>
            <textarea id="message" name="message" rows="5" placeholder="Décrivez votre projet..." required></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-full">
            <i class="fas fa-paper-plane"></i> Envoyer le message
          </button>
        </form>
      </div>
    </div>
  </section>
  <?php
get_footer();
?>