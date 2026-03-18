<?php
/*
  Template pour les articles de type "realisation"
*/
get_header();
?>
 
<!-- HERO ARTICLE -->
<section class="single-hero">
  <div class="single-hero-bg"></div>
  <div class="single-hero-overlay"></div>
  <div class="si single-hero-content">
    <div class="single-meta">
      <a href="<?php echo home_url(); ?>" class="single-back">
        <i class="fa-solid fa-arrow-left"></i> Retour
      </a>
      <span class="single-categorie">Catégorie</span>
    </div>
    <h1 class="single-title">Titre du projet</h1>
    <div class="single-tags">
      <span class="proj-tag">Tag 1</span>
      <span class="proj-tag">Tag 2</span>
      <span class="proj-tag">Tag 3</span>
    </div>
  </div>
</section>
 
<!-- CONTENU -->
<section class="single-content-section">
  <div class="si single-grid">
 
    <!-- COLONNE GAUCHE : contenu principal -->
    <div class="single-main">
      <div class="single-body">
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident.</p>
        <h2>Le défi</h2>
        <p>Sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
        <h2>La solution</h2>
        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
      </div>
    </div>
 
    <!-- COLONNE DROITE : sidebar infos -->
    <aside class="single-aside">
 
      <div class="single-aside-card">
        <h4 class="single-aside-title">Informations</h4>
        <div class="single-aside-info">
          <div class="single-aside-row">
            <span class="single-aside-label">Catégorie</span>
            <span class="single-aside-value">Développement Web</span>
          </div>
          <div class="single-aside-row">
            <span class="single-aside-label">Année</span>
            <span class="single-aside-value">2024</span>
          </div>
          <div class="single-aside-row">
            <span class="single-aside-label">Client</span>
            <span class="single-aside-value">Nom du client</span>
          </div>
        </div>
      </div>
 
      <div class="single-aside-card">
        <h4 class="single-aside-title">Technologies</h4>
        <div class="pills">
          <span class="pill">WordPress</span>
          <span class="pill">PHP</span>
          <span class="pill">CSS</span>
        </div>
      </div>
 
      <a href="#contact" class="btn-lime" style="width:100%; justify-content:center; margin-top:0.5rem;">
        Travaillons ensemble <i class="fa-solid fa-arrow-right"></i>
      </a>
 
    </aside>
  </div>
</section>
 
<!-- GALERIE -->
<section class="single-galerie-section">
  <div class="si">
    <span class="eyebrow">Visuels</span>
    <h2 class="stitle">Aperçu du projet</h2>
    <div class="single-galerie">
      <div class="single-galerie-item single-galerie-large">
        <img src="https://placehold.co/900x500/0d2b1e/90f0a0?text=Image+principale" alt="Image principale" />
      </div>
      <div class="single-galerie-item">
        <img src="https://placehold.co/440x300/081a12/90f0a0?text=Détail+1" alt="Détail 1" />
      </div>
      <div class="single-galerie-item">
        <img src="https://placehold.co/440x300/081a12/90f0a0?text=Détail+2" alt="Détail 2" />
      </div>
    </div>
  </div>
</section>
 
<!-- PROJETS SUIVANTS -->
<section class="single-next-section">
  <div class="si">
    <span class="eyebrow">Continuer</span>
    <h2 class="stitle">Autres réalisations</h2>
    <div class="proj-grid">
      <div class="proj-card">
        <div class="proj-thumb">WEB</div>
        <div class="proj-body">
          <div class="proj-type">Développement Web</div>
          <h3>Autre projet</h3>
          <p>Description courte du projet suivant.</p>
        </div>
      </div>
      <div class="proj-card">
        <div class="proj-thumb">DESIGN</div>
        <div class="proj-body">
          <div class="proj-type">Direction artistique</div>
          <h3>Autre projet</h3>
          <p>Description courte du projet suivant.</p>
        </div>
      </div>
    </div>
  </div>
</section>
 
<?php get_footer(); ?>