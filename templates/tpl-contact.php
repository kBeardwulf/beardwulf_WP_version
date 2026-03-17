<?php
/*
  Template Name: Contact
  Description: page de contact
*/
get_header();
?>
<!-- PAGE HERO -->
<section class="page-hero">
  <div class="si">
    <span class="eyebrow reveal">Contact</span>
    <h1 class="stitle reveal">Parlons de<br><span class="t-lime">votre projet.</span></h1>
    <p class="sdesc reveal">Une idée, une question, un projet ? N'hésitez pas — je réponds généralement sous 24h.</p>
  </div>
</section>
 
<!-- CONTACT -->
<section id="contact">
  <div class="si">
    <div class="contact-g">
 
      <!-- INFOS -->
      <div>
        <div class="contact-info reveal">
          <div class="ci">
            <div class="ci-ic"><i class="fa-regular fa-envelope"></i></div>
            <div>
              <div class="ci-label">Email</div>
              <a href="mailto:burdloffkevin@gmail.com">burdloffkevin@gmail.com</a>
            </div>
          </div>
          <div class="ci">
            <div class="ci-ic"><i class="fa-brands fa-linkedin"></i></div>
            <div>
              <div class="ci-label">LinkedIn</div>
              <a href="#">Votre profil LinkedIn</a>
            </div>
          </div>
          <div class="ci">
            <div class="ci-ic"><i class="fa-solid fa-location-dot"></i></div>
            <div>
              <div class="ci-label">Disponibilité</div>
              <span>France — télétravail &amp; présentiel</span>
            </div>
          </div>
        </div>
 
        <!-- EXTRAS -->
        <div class="contact-extras reveal">
 
          <div class="contact-extra-card">
            <div class="ci-ic"><i class="fa-solid fa-clock"></i></div>
            <div>
              <div class="ci-label">Délai de réponse</div>
              <span>Généralement sous 24h</span>
            </div>
          </div>
 
          <div class="contact-extra-card">
            <div class="ci-ic"><i class="fa-solid fa-calendar-check"></i></div>
            <div>
              <div class="ci-label">Disponibilité</div>
              <span>Actuellement disponible pour de nouveaux projets</span>
            </div>
          </div>
 
          <div class="contact-extra-card">
            <div class="ci-ic"><i class="fa-solid fa-earth-europe"></i></div>
            <div>
              <div class="ci-label">Langues</div>
              <span>Français &amp; Anglais</span>
            </div>
          </div>
 
        </div>
      </div>
 
      <!-- FORMULAIRE -->
      <div class="cform reveal d1">
        <h3>Envoyer un message</h3>
        <div class="fg">
          <label>Votre nom</label>
          <input type="text" placeholder="Jean Dupont" />
        </div>
        <div class="fg">
          <label>Email</label>
          <input type="email" placeholder="jean@exemple.fr" />
        </div>
        <div class="fg">
          <label>Type de projet</label>
          <select>
            <option>Développement web</option>
            <option>Direction artistique</option>
            <option>Création d'événement</option>
            <option>Plusieurs domaines</option>
            <option>Autre</option>
          </select>
        </div>
        <div class="fg">
          <label>Message</label>
          <textarea placeholder="Décrivez votre projet en quelques lignes..."></textarea>
        </div>
        <button class="btn-submit">Envoyer <i class="fa-solid fa-paper-plane"></i></button>
      </div>
 
    </div>
  </div>
</section>
<?php get_footer(); ?>