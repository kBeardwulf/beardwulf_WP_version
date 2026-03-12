<?php
/*
  Template Name: réalisations
  Description: page des réalisations
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

  <!-- ========== INTRO ========== -->
  <section class="page-intro-section">
    <div class="container">
      <div class="page-intro fade-in">
        <span class="section-tag">Portfolio</span>
        <h2>Des projets qui parlent d'eux-mêmes</h2>
        <p>Chaque chantier est une histoire unique, un défi relevé avec passion et expertise. Découvrez une sélection de nos réalisations les plus emblématiques : constructions neuves, rénovations d'envergure, extensions et aménagements intérieurs. Ces projets témoignent de notre savoir-faire et de notre engagement envers la qualité.</p>
      </div>
    </div>
  </section>

  <!-- ========== GALLERY ========== -->
  <section class="gallery">
    <div class="container">
      <div class="gallery-grid">
        <div class="gallery-item fade-in" data-index="0">
          <img src="images/real-1.jpg" alt="" loading="lazy">
          <div class="gallery-overlay">
            <div class="gallery-overlay-content">
              <i class="fas fa-search-plus"></i>
              <span>Maison contemporaine</span>
            </div>
          </div>
        </div>
        <div class="gallery-item fade-in" data-index="1">
          <img src="images/real-2.jpg" alt="" loading="lazy">
          <div class="gallery-overlay">
            <div class="gallery-overlay-content">
              <i class="fas fa-search-plus"></i>
              <span>Appartement haussmannien</span>
            </div>
          </div>
        </div>
        <div class="gallery-item fade-in" data-index="2">
          <img src="images/real-3.jpg" alt="" loading="lazy">
          <div class="gallery-overlay">
            <div class="gallery-overlay-content">
              <i class="fas fa-search-plus"></i>
              <span>Extension bois</span>
            </div>
          </div>
        </div>
        <div class="gallery-item fade-in" data-index="3">
          <img src="images/accueil-real-1.jpg" alt="" loading="lazy">
          <div class="gallery-overlay">
            <div class="gallery-overlay-content">
              <i class="fas fa-search-plus"></i>
              <span>Villa moderne</span>
            </div>
          </div>
        </div>
        <div class="gallery-item fade-in" data-index="4">
          <img src="images/accueil-real-2.jpg" alt="" loading="lazy">
          <div class="gallery-overlay">
            <div class="gallery-overlay-content">
              <i class="fas fa-search-plus"></i>
              <span>Bureaux professionnels</span>
            </div>
          </div>
        </div>
        <div class="gallery-item fade-in" data-index="5">
          <img src="images/accueil-real-3.jpg" alt="" loading="lazy">
          <div class="gallery-overlay">
            <div class="gallery-overlay-content">
              <i class="fas fa-search-plus"></i>
              <span>Cuisine ouverte</span>
            </div>
          </div>
        </div>
        <div class="gallery-item fade-in" data-index="6">
          <img src="images/accueil-real-4.jpg" alt="" loading="lazy">
          <div class="gallery-overlay">
            <div class="gallery-overlay-content">
              <i class="fas fa-search-plus"></i>
              <span>Surélévation maison</span>
            </div>
          </div>
        </div>
        <div class="gallery-item fade-in" data-index="7">
          <img src="images/accueil-real-5.jpg" alt="" loading="lazy">
          <div class="gallery-overlay">
            <div class="gallery-overlay-content">
              <i class="fas fa-search-plus"></i>
              <span>Immeuble résidentiel</span>
            </div>
          </div>
        </div>
        <div class="gallery-item fade-in" data-index="8">
          <img src="images/accueil-real-6.jpg" alt="" loading="lazy">
          <div class="gallery-overlay">
            <div class="gallery-overlay-content">
              <i class="fas fa-search-plus"></i>
              <span>Rénovation énergétique</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CTA WITH BACKGROUND IMAGE ========== -->
  <section class="cta-section cta-bg">
    <div class="container cta-content fade-in">
      <h2>Vous avez un projet en tête ?</h2>
      <p>Discutons ensemble de votre vision. Notre équipe vous accompagne de la conception à la réalisation pour donner vie à votre projet.</p>
      <div class="cta-buttons">
        <a href="contact.html" class="btn btn-accent">Demander un devis gratuit</a>
        <a href="services.html" class="btn btn-outline-white">Découvrir nos services</a>
      </div>
    </div>
  </section>
  <?php
get_footer();
?>