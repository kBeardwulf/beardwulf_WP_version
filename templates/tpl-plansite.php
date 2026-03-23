<?php
/*
  Template Name: Plan du site
  Description: Page plan du site - Beardwulf Events
*/
get_header();
?>
 
<!-- PAGE HERO -->
<section class="page-hero">
  <div class="si">
    <span class="eyebrow">Navigation</span>
    <h1 class="stitle">Plan du site</h1>
    <p class="sdesc">Retrouvez ici l'ensemble des pages du site classées par catégorie.</p>
  </div>
</section>
 
<!-- PLAN DU SITE -->
<section id="plansite">
  <div class="si">
    <div class="plansite-grid">
 
      <!-- NAVIGATION PRINCIPALE -->
      <div class="ps-group reveal">
        <div class="ps-group-header">
          <div class="ps-ic"><i class="fa-solid fa-house"></i></div>
          <h2>Navigation principale</h2>
        </div>
        <ul class="ps-links">
          <li>
            <a href="<?php echo esc_url( home_url('/') ); ?>">
              <span class="ps-arrow"><i class="fa-solid fa-arrow-right"></i></span>
              Accueil
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path('a-propos') ) ); ?>">
              <span class="ps-arrow"><i class="fa-solid fa-arrow-right"></i></span>
              À propos de moi
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path('projets') ) ); ?>">
              <span class="ps-arrow"><i class="fa-solid fa-arrow-right"></i></span>
              Mes projets
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path('contact') ) ); ?>">
              <span class="ps-arrow"><i class="fa-solid fa-arrow-right"></i></span>
              Contact
            </a>
          </li>
        </ul>
      </div>
 
      <!-- COMPÉTENCES -->
      <div class="ps-group reveal d1">
        <div class="ps-group-header">
          <div class="ps-ic"><i class="fa-solid fa-code"></i></div>
          <h2>Compétences</h2>
        </div>
        <ul class="ps-links">
          <li class="ps-parent">
            <span class="ps-label">
              <span class="ps-arrow-muted"><i class="fa-solid fa-layer-group"></i></span>
              Toutes les compétences
            </span>
          </li>
          <li class="ps-child">
            <a href="<?php echo esc_url( get_permalink( get_page_by_path('competences/developpement-web') ) ); ?>">
              <span class="ps-arrow"><i class="fa-solid fa-arrow-turn-down-right"></i></span>
              Développement Web
            </a>
          </li>
          <li class="ps-child">
            <a href="<?php echo esc_url( get_permalink( get_page_by_path('competences/identite-visuelle') ) ); ?>">
              <span class="ps-arrow"><i class="fa-solid fa-arrow-turn-down-right"></i></span>
              Identité Visuelle
            </a>
          </li>
          <li class="ps-child">
            <a href="<?php echo esc_url( get_permalink( get_page_by_path('competences/creation-evenement') ) ); ?>">
              <span class="ps-arrow"><i class="fa-solid fa-arrow-turn-down-right"></i></span>
              Création d'événement
            </a>
          </li>
        </ul>
      </div>
 
      <!-- LÉGAL -->
      <div class="ps-group reveal d2">
        <div class="ps-group-header">
          <div class="ps-ic"><i class="fa-solid fa-scale-balanced"></i></div>
          <h2>Informations légales</h2>
        </div>
        <ul class="ps-links">
          <li>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path('mentions-legales') ) ); ?>">
              <span class="ps-arrow"><i class="fa-solid fa-arrow-right"></i></span>
              Mentions légales
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path('politique-de-confidentialite') ) ); ?>">
              <span class="ps-arrow"><i class="fa-solid fa-arrow-right"></i></span>
              Politique de confidentialité
            </a>
          </li>
          <li>
            <a href="<?php echo esc_url( get_permalink( get_page_by_path('plan-du-site') ) ); ?>">
              <span class="ps-arrow"><i class="fa-solid fa-arrow-right"></i></span>
              Plan du site
            </a>
          </li>
        </ul>
      </div>
 
    </div>
 
    <!-- CTA RETOUR ACCUEIL -->
    <div class="ps-cta reveal">
      <a href="<?php echo esc_url( home_url('/') ); ?>" class="btn-ghost">
        <i class="fa-solid fa-arrow-left"></i> Retour à l'accueil
      </a>
    </div>
 
  </div>
</section>
 
<?php get_footer(); ?>