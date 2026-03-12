<?php
/*
  Template Name: Qui sommes-nous
  Description: page de qui nous sommes
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

  <!-- ========== ABOUT 50/50 ========== -->
  <section class="about-page">
    <div class="container split-grid">
      <div class="split-text fade-in">
        <span class="section-tag">Notre histoire</span>
        <h2>Une passion pour la construction depuis 2004</h2>
        <p>Fondée il y a plus de 20 ans, DWWM est née de la volonté de proposer des services de construction et de rénovation alliant excellence technique et relation humaine. Notre fondateur, fort d'une expérience de terrain, a su fédérer une équipe de professionnels partageant les mêmes valeurs : rigueur, transparence et respect du client.</p>
        <p>Aujourd'hui, notre entreprise intervient sur tout type de projet, du particulier souhaitant rénover son appartement au promoteur immobilier planifiant un programme neuf. Nous sommes fiers d'avoir contribué à la transformation de centaines de projets en réalisations concrètes.</p>
        <p>Notre force réside dans notre capacité à allier tradition du métier et techniques modernes. Chaque chantier est géré avec la même exigence de qualité, quelle que soit son envergure.</p>
      </div>
      <div class="split-image fade-in">
        <img src="images/qsn-1.jpg" alt="L'équipe DWWM sur un chantier">
      </div>
    </div>
  </section>

  <!-- ========== POURQUOI NOUS CHOISIR ========== -->
  <section class="why-us">
    <div class="container">
      <div class="section-header fade-in">
        <span class="section-tag">Nos atouts</span>
        <h2>Pourquoi nous choisir</h2>
        <p>Des engagements concrets qui font la différence sur chacun de nos chantiers.</p>
      </div>
      <div class="why-us-grid">
        <div class="why-us-box fade-in">
          <div class="why-us-icon"><i class="fas fa-certificate"></i></div>
          <h3>Expertise certifiée</h3>
          <p>Nos équipes sont certifiées et formées en continu aux dernières normes et techniques de construction.</p>
        </div>
        <div class="why-us-box fade-in">
          <div class="why-us-icon"><i class="fas fa-clock"></i></div>
          <h3>Respect des délais</h3>
          <p>Nous nous engageons contractuellement sur les délais de livraison et mettons tout en œuvre pour les respecter.</p>
        </div>
        <div class="why-us-box fade-in">
          <div class="why-us-icon"><i class="fas fa-file-invoice-dollar"></i></div>
          <h3>Devis transparent</h3>
          <p>Nos devis sont détaillés et sans surprise. Vous savez exactement ce que vous payez, sans coûts cachés.</p>
        </div>
        <div class="why-us-box fade-in">
          <div class="why-us-icon"><i class="fas fa-shield-alt"></i></div>
          <h3>Garantie décennale</h3>
          <p>Tous nos travaux sont couverts par une garantie décennale, pour votre tranquillité d'esprit sur le long terme.</p>
        </div>
        <div class="why-us-box fade-in">
          <div class="why-us-icon"><i class="fas fa-handshake"></i></div>
          <h3>Accompagnement personnalisé</h3>
          <p>Un interlocuteur unique vous accompagne de la conception à la réception, pour un suivi sans faille.</p>
        </div>
        <div class="why-us-box fade-in">
          <div class="why-us-icon"><i class="fas fa-gem"></i></div>
          <h3>Matériaux de qualité</h3>
          <p>Nous sélectionnons rigoureusement nos fournisseurs pour vous garantir des matériaux durables et performants.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== CHIFFRES CLÉS ========== -->
  <section class="key-figures">
    <div class="container">
      <div class="section-header fade-in">
        <span class="section-tag">En quelques chiffres</span>
        <h2>Nos chiffres clés</h2>
      </div>
      <div class="figures-grid">
        <div class="figure-box fade-in">
          <div class="figure-icon"><i class="fas fa-hard-hat"></i></div>
          <div class="figure-number" data-count="500" data-suffix="+">0</div>
          <span class="figure-label">Chantiers réalisés</span>
        </div>
        <div class="figure-box fade-in">
          <div class="figure-icon"><i class="fas fa-calendar-check"></i></div>
          <div class="figure-number" data-count="20" data-suffix="+">0</div>
          <span class="figure-label">Années d'expérience</span>
        </div>
        <div class="figure-box fade-in">
          <div class="figure-icon"><i class="fas fa-users"></i></div>
          <div class="figure-number" data-count="45" data-suffix="">0</div>
          <span class="figure-label">Collaborateurs</span>
        </div>
        <div class="figure-box fade-in">
          <div class="figure-icon"><i class="fas fa-smile"></i></div>
          <div class="figure-number" data-count="98" data-suffix="%">0</div>
          <span class="figure-label">Clients satisfaits</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ========== TESTIMONIALS ========== -->
  <section class="testimonials">
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
  <?php
get_footer();
?>