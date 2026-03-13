<?php
/*
  Template Name: Accueil
  Description: page d'accueil
*/
get_header();
?>

  <!-- HERO -->
<section class="hero" id="accueil">
  <div class="hero-bg"></div>
  <div class="hero-overlay"></div>
  <div class="hero-content">
    <span class="hero-eyebrow"><span class="hero-dot"></span>Disponible pour de nouveaux projets</span>
    <h1 class="hero-title">
      <span class="t-lime">Créer,</span><br>
      <span class="t-outline">Concevoir,</span><br>
      Donner vie<br>
      <span class="t-lime">à vos idées.</span>
    </h1>
    <p class="hero-sub">Développeur web, graphiste &amp; créateur d'événements — je combine technique et créativité pour donner une identité forte à vos projets, du pixel au présentiel.</p>
    <div class="hero-actions">
      <a href="#projets" class="btn-lime">Voir mes projets <i class="fa-solid fa-arrow-right"></i></a>
      <a href="#contact" class="btn-ghost">Me contacter <i class="fa-regular fa-envelope"></i></a>
    </div>
  </div>
</section>

<!-- STATS BAND -->
<div class="stats-band">
  <div class="stats-inner">
    <div class="stat"><span class="stat-n">7+</span><span class="stat-l">ans dans l'événementiel</span></div>
    <div class="stat-sep"></div>
    <div class="stat"><span class="stat-n">1000+</span><span class="stat-l">participants à mes events</span></div>
    <div class="stat-sep"></div>
    <div class="stat"><span class="stat-n">3</span><span class="stat-l">domaines d'expertise</span></div>
    <div class="stat-sep"></div>
    <div class="stat"><span class="stat-n">France</span><span class="stat-l">entière</span></div>
  </div>
</div>

<!-- COMPÉTENCES -->
<section id="competences">
  <div class="si">
    <span class="eyebrow reveal">Savoir-faire</span>
    <h2 class="stitle reveal">Mes domaines<br>d'expertise</h2>
    <p class="sdesc reveal">Trois univers complémentaires pour aborder vos projets avec une vision 360°, de la conception à la réalisation.</p>
    <div class="skills-grid">
      <div class="skill-card reveal">
        <div class="skill-ic"><i class="fa-solid fa-code"></i></div>
        <h3>Développement Web</h3>
        <p>De la maquette au déploiement, je construis des interfaces modernes, performantes et accessibles — avec une vraie sensibilité design.</p>
        <div class="pills"><span class="pill">HTML5</span><span class="pill">CSS3</span><span class="pill">JavaScript</span><span class="pill">PHP</span><span class="pill">SQL</span><span class="pill">Bootstrap</span><span class="pill">Tailwind</span><span class="pill">WordPress</span></div>
      </div>
      <div class="skill-card reveal d1">
        <div class="skill-ic"><i class="fa-solid fa-pen-nib"></i></div>
        <h3>Graphisme &amp; Design</h3>
        <p>Identités visuelles, maquettes, illustrations — je maîtrise les outils professionnels de la création graphique et UX.</p>
        <div class="pills"><span class="pill">Figma</span><span class="pill">Photoshop</span><span class="pill">Illustrator</span><span class="pill">InDesign</span><span class="pill">Affinity</span><span class="pill">Clip Studio</span></div>
      </div>
      <div class="skill-card reveal d2">
        <div class="skill-ic"><i class="fa-solid fa-calendar-star"></i></div>
        <h3>Événementiel</h3>
        <p>7 ans à organiser des événements à travers la France — de petits stands à des conventions de 1000+ personnes avec une grande autonomie.</p>
        <div class="pills"><span class="pill">Notion</span><span class="pill">Discord</span><span class="pill">Gestion de projet</span><span class="pill">Autonomie</span><span class="pill">Adaptabilité</span></div>
      </div>
    </div>
  </div>
</section>

<!-- MÉTHODE -->
<section id="methode">
  <div class="si">
    <span class="eyebrow reveal">Process</span>
    <h2 class="stitle reveal">Comment je travaille</h2>
    <p class="sdesc reveal">4 étapes claires pour des projets livrés dans les délais et conformes à vos attentes — sans mauvaise surprise.</p>
    <div class="steps">
      <div class="step reveal">
        <div class="step-num">01</div>
        <div class="step-emoji">💬</div>
        <h3>Prise de contact</h3>
        <p>On discute de vos besoins, objectifs et contraintes. L'étape clé pour poser des bases solides avant de démarrer.</p>
        <span class="step-arrow"><i class="fa-solid fa-chevron-right"></i></span>
      </div>
      <div class="step reveal d1">
        <div class="step-num">02</div>
        <div class="step-emoji">✏️</div>
        <h3>Ébauches</h3>
        <p>Maquettes et premières propositions. On affine ensemble la direction créative avant la production.</p>
        <span class="step-arrow"><i class="fa-solid fa-chevron-right"></i></span>
      </div>
      <div class="step reveal d2">
        <div class="step-num">03</div>
        <div class="step-emoji">📦</div>
        <h3>Remise du projet</h3>
        <p>Livraison du projet finalisé avec tous les fichiers sources et documentations nécessaires à la prise en main.</p>
        <span class="step-arrow"><i class="fa-solid fa-chevron-right"></i></span>
      </div>
      <div class="step reveal d3">
        <div class="step-num">04</div>
        <div class="step-emoji">✅</div>
        <h3>Validation</h3>
        <p>Ajustements et retouches finales selon vos retours. Validé lorsque vous êtes pleinement satisfait.</p>
      </div>
    </div>
  </div>
</section>

<!-- PROJETS -->
<section id="projets">
  <div class="si">
    <span class="eyebrow reveal">Réalisations</span>
    <h2 class="stitle reveal">Quelques projets</h2>
    <p class="sdesc reveal">Développement web, identités visuelles, événements — un aperçu de ce que je peux créer pour vous.</p>
    <div class="proj-grid">
      <div class="proj-card reveal">
        <div class="proj-thumb">WEB</div>
        <div class="proj-body">
          <div class="proj-type">Développement Web</div>
          <h3>Nom du projet</h3>
          <p>Description du projet, ses enjeux, la solution mise en place. À remplacer par une vraie réalisation.</p>
          <div class="proj-tags"><span class="proj-tag">WordPress</span><span class="proj-tag">PHP</span><span class="proj-tag">Tailwind</span></div>
        </div>
      </div>
      <div class="proj-card reveal d1">
        <div class="proj-thumb">DESIGN</div>
        <div class="proj-body">
          <div class="proj-type">Identité visuelle</div>
          <h3>Nom du projet</h3>
          <p>Branding, charte graphique, supports print ou digitaux. À remplacer par une vraie réalisation.</p>
          <div class="proj-tags"><span class="proj-tag">Illustrator</span><span class="proj-tag">Figma</span></div>
        </div>
      </div>
      <div class="proj-card reveal d2">
        <div class="proj-thumb">EVENT</div>
        <div class="proj-body">
          <div class="proj-type">Événementiel</div>
          <h3>Nom de l'événement</h3>
          <p>Convention, festival, salon. Nombre de participants, outils, contexte. À remplacer par une vraie réalisation.</p>
          <div class="proj-tags"><span class="proj-tag">Notion</span><span class="proj-tag">Discord</span><span class="proj-tag">1000+ pers.</span></div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- À PROPOS -->
<section id="apropos">
  <div class="si">
    <div class="apropos-g">
      <div class="reveal">
        <div class="apropos-img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/HeroBannerIndex.jpg" alt="Kevin Burdloff — Beardwulf Events" />
          <span class="apropos-img-label">Kevin Burdloff — Beardwulf</span>
        </div>
      </div>
      <div>
        <span class="eyebrow reveal">À propos</span>
        <h2 class="stitle reveal">Polyvalent<br>par passion.</h2>
        <p class="sdesc reveal" style="max-width:100%">Passionné par la création sous toutes ses formes, j'ai développé une expertise rare à la croisée du développement web, du graphisme et de l'événementiel. Cette triple compétence me permet d'aborder vos projets dans leur globalité.</p>
        <p class="sdesc reveal" style="max-width:100%;margin-top:1rem">Avec 7 ans d'expérience événementielle — des petits stands en conventions jusqu'aux événements de plus de 1000 personnes à travers toute la France — j'ai appris à piloter des projets complexes avec rigueur et sang-froid.</p>
        <div class="values reveal">
          <div class="value"><div class="value-ic"><i class="fa-solid fa-bolt fa-xs"></i></div><span>Grande autonomie et réactivité</span></div>
          <div class="value"><div class="value-ic"><i class="fa-solid fa-shuffle fa-xs"></i></div><span>Adaptabilité dans tous les environnements</span></div>
          <div class="value"><div class="value-ic"><i class="fa-solid fa-handshake fa-xs"></i></div><span>Communication transparente à chaque étape</span></div>
          <div class="value"><div class="value-ic"><i class="fa-solid fa-award fa-xs"></i></div><span>Exigence constante sur la qualité rendue</span></div>
        </div>
        <a href="#contact" class="btn-lime reveal">Travaillons ensemble <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <div class="si">
    <div class="contact-g">
      <div>
        <span class="eyebrow reveal">Contact</span>
        <h2 class="stitle reveal">Parlons de<br>votre projet.</h2>
        <p class="sdesc reveal">Une idée, une question, un projet ? N'hésitez pas — je réponds généralement sous 24h.</p>
        <div class="contact-info reveal">
          <div class="ci">
            <div class="ci-ic"><i class="fa-regular fa-envelope"></i></div>
            <div><div class="ci-label">Email</div><a href="mailto:burdloffkevin@gmail.com">burdloffkevin@gmail.com</a></div>
          </div>
          <div class="ci">
            <div class="ci-ic"><i class="fa-brands fa-linkedin"></i></div>
            <div><div class="ci-label">LinkedIn</div><a href="#">Votre profil LinkedIn</a></div>
          </div>
          <div class="ci">
            <div class="ci-ic"><i class="fa-solid fa-location-dot"></i></div>
            <div><div class="ci-label">Disponibilité</div><span>France — télétravail &amp; présentiel</span></div>
          </div>
        </div>
      </div>
      <div class="cform reveal d1">
        <h3>Envoyer un message</h3>
        <div class="fg"><label>Votre nom</label><input type="text" placeholder="Jean Dupont" /></div>
        <div class="fg"><label>Email</label><input type="email" placeholder="jean@exemple.fr" /></div>
        <div class="fg"><label>Type de projet</label><select><option>Développement web</option><option>Design graphique</option><option>Événementiel</option><option>Plusieurs domaines</option><option>Autre</option></select></div>
        <div class="fg"><label>Message</label><textarea placeholder="Décrivez votre projet en quelques lignes..."></textarea></div>
        <button class="btn-submit">Envoyer <i class="fa-solid fa-paper-plane"></i></button>
      </div>
    </div>
  </div>
</section>
<?php
get_footer();
?>