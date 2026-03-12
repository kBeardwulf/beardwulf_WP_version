<?php
/*
  Template Name: Contact
  Description: page de contact
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

  <!-- ========== CONTACT 50/50 ========== -->
  <section class="contact">
    <div class="container split-grid">
      <div class="contact-info fade-in">
        <span class="section-tag">Parlons de votre projet</span>
        <h2>Nous sommes à votre écoute</h2>
        <p>Vous avez un projet de construction, de rénovation ou simplement une question ? N'hésitez pas à nous contacter. Notre équipe vous répondra dans les meilleurs délais.</p>
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
                <option value="reclamation">Réclamation</option>
                <option value="autre">Autre</option>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="message">Message *</label>
            <textarea id="message" name="message" rows="5" placeholder="Décrivez votre projet ou votre demande..." required></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-full">
            <i class="fas fa-paper-plane"></i> Envoyer le message
          </button>
        </form>
      </div>
    </div>
  </section>

  <!-- ========== GOOGLE MAP ========== -->
  <section class="map-section">
    <div class="container">
      <div class="section-header fade-in">
        <span class="section-tag">Localisation</span>
        <h2>Nous trouver</h2>
        <p>Nos bureaux sont situés en plein cœur de Paris, facilement accessibles en transports en commun.</p>
      </div>
    </div>
    <div class="map-wrapper fade-in">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.999!2d2.3422!3d48.8606!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis%201er%20Arrondissement!5e0!3m2!1sfr!2sfr!4v1709000000000"
        width="100%"
        height="450"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"
        title="Localisation DWWM Bâtiment & Construction">
      </iframe>
    </div>
  </section>

  <!-- ========== RÉSEAUX SOCIAUX ========== -->
  <section class="social-section">
    <div class="container">
      <div class="section-header fade-in">
        <span class="section-tag">Restez connecté</span>
        <h2>Suivez-nous sur les réseaux</h2>
        <p>Retrouvez nos actualités, photos de chantiers et conseils sur nos réseaux sociaux.</p>
      </div>
      <div class="social-grid fade-in">
        <a href="#" class="social-badge social-facebook" aria-label="Facebook">
          <div class="social-badge-icon"><i class="fab fa-facebook-f"></i></div>
          <div class="social-badge-info">
            <strong>Facebook</strong>
            <span>Suivez notre actualité</span>
          </div>
          <i class="fas fa-arrow-right social-badge-arrow"></i>
        </a>
        <a href="#" class="social-badge social-instagram" aria-label="Instagram">
          <div class="social-badge-icon"><i class="fab fa-instagram"></i></div>
          <div class="social-badge-info">
            <strong>Instagram</strong>
            <span>Photos de nos chantiers</span>
          </div>
          <i class="fas fa-arrow-right social-badge-arrow"></i>
        </a>
        <a href="#" class="social-badge social-linkedin" aria-label="LinkedIn">
          <div class="social-badge-icon"><i class="fab fa-linkedin-in"></i></div>
          <div class="social-badge-info">
            <strong>LinkedIn</strong>
            <span>Notre réseau professionnel</span>
          </div>
          <i class="fas fa-arrow-right social-badge-arrow"></i>
        </a>
        <a href="#" class="social-badge social-youtube" aria-label="YouTube">
          <div class="social-badge-icon"><i class="fab fa-youtube"></i></div>
          <div class="social-badge-info">
            <strong>YouTube</strong>
            <span>Vidéos de nos projets</span>
          </div>
          <i class="fas fa-arrow-right social-badge-arrow"></i>
        </a>
      </div>
    </div>
  </section>
  <?php
get_footer();
?>