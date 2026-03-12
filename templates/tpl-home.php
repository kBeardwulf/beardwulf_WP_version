<?php
/*
  Template Name: Accueil
  Description: page d'accueil
*/
get_header();
?>

  <!-- ========== HERO ========== -->
  <section class="hero" id="accueil">
    <div class="container hero-content">
      <h1 class="hero-title">Construisons ensemble<br>votre avenir</h1>
      <p class="hero-subtitle">Expert en bâtiment et construction depuis plus de 20 ans.<br>Qualité, fiabilité et savoir-faire au service de vos projets.</p>
      <div class="hero-buttons">
        <a href="<?php the_permalink(12); ?>" class="btn btn-accent">Demander un devis</a>
        <a href="<?php the_permalink(16); ?>" class="btn btn-outline-white">Nos réalisations</a>
      </div>
    </div>
  </section>

  <!-- ========== ABOUT 50/50 ========== -->
  <section class="about" id="about">
    <div class="container split-grid">
      <div class="split-text fade-in">
        <span class="section-tag">Qui sommes-nous</span>
        <h2>Une expertise reconnue<br>dans le bâtiment</h2>
        <p>Depuis plus de 20 ans, DWWM accompagne particuliers et professionnels dans la réalisation de leurs projets de construction et de rénovation. Notre équipe de passionnés met son savoir-faire au service de votre vision.</p>
        <p>Nous nous engageons à respecter les délais, les budgets et les normes les plus exigeantes. Chaque projet est unique et mérite une attention particulière, c'est pourquoi nous vous offrons un accompagnement personnalisé de A à Z.</p>
        <a href="contact.html" class="btn btn-primary">Nous contacter</a>
      </div>
      <div class="split-image fade-in">
        <img src="images/accueil-1.jpg" alt="Équipe DWWM sur un chantier de construction">
      </div>
    </div>
  </section>

  <!-- ========== SERVICES ========== -->
  <section class="services" id="services">
    <div class="container">
      <div class="section-header fade-in">
        <span class="section-tag">Ce que nous proposons</span>
        <h2>Nos Services</h2>
        <p>Des solutions complètes pour tous vos projets de construction et de rénovation.</p>
      </div>
      <div class="services-grid">
        <div class="service-box fade-in">
          <div class="service-icon"><i class="fas fa-building"></i></div>
          <h3>Construction neuve</h3>
          <p>Conception et construction de bâtiments résidentiels et commerciaux, de la fondation à la livraison clé en main.</p>
        </div>
        <div class="service-box fade-in">
          <div class="service-icon"><i class="fas fa-hammer"></i></div>
          <h3>Rénovation</h3>
          <p>Rénovation complète ou partielle de vos espaces. Modernisez votre habitat tout en préservant son caractère.</p>
        </div>
        <div class="service-box fade-in">
          <div class="service-icon"><i class="fas fa-expand-arrows-alt"></i></div>
          <h3>Extension &amp; Surélévation</h3>
          <p>Agrandissez votre espace de vie avec des extensions sur mesure, parfaitement intégrées à l'existant.</p>
        </div>
        <div class="service-box fade-in">
          <div class="service-icon"><i class="fas fa-couch"></i></div>
          <h3>Aménagement intérieur</h3>
          <p>Optimisez et transformez vos espaces intérieurs avec des aménagements fonctionnels et esthétiques.</p>
        </div>
        <div class="service-box fade-in">
          <div class="service-icon"><i class="fas fa-hard-hat"></i></div>
          <h3>Gros œuvre</h3>
          <p>Fondations, murs porteurs, dalles et charpentes. La structure solide de votre bâtiment, notre spécialité.</p>
        </div>
        <div class="service-box fade-in">
          <div class="service-icon"><i class="fas fa-plug"></i></div>
          <h3>Second œuvre</h3>
          <p>Électricité, plomberie, isolation, plâtrerie et finitions pour un résultat impeccable dans les moindres détails.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== GALLERY ========== -->
  <section class="gallery" id="realisations">
    <div class="container">
      <div class="section-header fade-in">
        <span class="section-tag">Portfolio</span>
        <h2>Nos Réalisations</h2>
        <p>Découvrez quelques-uns de nos projets récents, témoignages de notre savoir-faire.</p>
      </div>
      <div class="gallery-grid">
        <div class="gallery-item fade-in" data-index="0">
          <img src="images/accueil-real-1.jpg" alt="" loading="lazy">
          <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
        </div>
        <div class="gallery-item fade-in" data-index="1">
          <img src="images/accueil-real-2.jpg" alt="" loading="lazy">
          <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
        </div>
        <div class="gallery-item fade-in" data-index="2">
          <img src="images/accueil-real-3.jpg" alt="" loading="lazy">
          <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
        </div>
        <div class="gallery-item fade-in" data-index="3">
          <img src="images/accueil-real-4.jpg" alt="" loading="lazy">
          <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
        </div>
        <div class="gallery-item fade-in" data-index="4">
          <img src="images/accueil-real-5.jpg" alt="" loading="lazy">
          <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
        </div>
        <div class="gallery-item fade-in" data-index="5">
          <img src="images/accueil-real-6.jpg" alt="" loading="lazy">
          <div class="gallery-overlay"><i class="fas fa-search-plus"></i></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== PARTNERS ========== -->
  <section class="partners">
    <div class="container">
      <div class="section-header fade-in">
        <span class="section-tag">Ils nous font confiance</span>
        <h2>Nos Partenaires</h2>
      </div>
      <div class="swiper partners-swiper fade-in">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="images/accueil-logo1.jpg" alt=""></div>
          <div class="swiper-slide"><img src="images/accueil-logo2.jpg" alt=""></div>
          <div class="swiper-slide"><img src="images/accueil-logo3.jpg" alt=""></div>
          <div class="swiper-slide"><img src="images/accueil-logo4.jpg" alt=""></div>
          <div class="swiper-slide"><img src="images/accueil-logo5.jpg" alt=""></div>
          <div class="swiper-slide"><img src="images/accueil-logo6.jpg" alt=""></div>
          <div class="swiper-slide"><img src="images/accueil-logo7.jpg" alt=""></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== TESTIMONIALS ========== -->
  <section class="testimonials" id="temoignages">
    <div class="container">
      <div class="section-header fade-in">
        <span class="section-tag">Avis clients</span>
        <h2>Ce que disent nos clients</h2>
        <p>La satisfaction de nos clients est notre plus belle récompense.</p>
      </div>
      <div class="testimonials-grid">
        <div class="testimonial-card fade-in">
          <div class="testimonial-stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="testimonial-text">"DWWM a réalisé la construction de notre maison dans les délais et le budget prévus. Le suivi de chantier était irréprochable. Nous recommandons vivement cette entreprise."</p>
          <div class="testimonial-author">
            <div class="testimonial-avatar">ML</div>
            <div>
              <strong>Marie Lefèvre</strong>
              <span>Construction maison individuelle</span>
            </div>
          </div>
        </div>
        <div class="testimonial-card fade-in">
          <div class="testimonial-stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
          </div>
          <p class="testimonial-text">"Une équipe professionnelle et à l'écoute. La rénovation de nos bureaux a été menée avec expertise. Le résultat dépasse nos attentes. Merci à toute l'équipe !"</p>
          <div class="testimonial-author">
            <div class="testimonial-avatar">PD</div>
            <div>
              <strong>Pierre Durand</strong>
              <span>Rénovation bureaux professionnels</span>
            </div>
          </div>
        </div>
        <div class="testimonial-card fade-in">
          <div class="testimonial-stars">
            <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
          </div>
          <p class="testimonial-text">"Excellent travail sur notre extension. L'équipe a su proposer des solutions techniques adaptées et le chantier a été propre et bien organisé du début à la fin."</p>
          <div class="testimonial-author">
            <div class="testimonial-avatar">SB</div>
            <div>
              <strong>Sophie Bernard</strong>
              <span>Extension &amp; surélévation</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CONTACT 50/50 ========== -->
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