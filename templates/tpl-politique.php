<?php
/*
  Template Name: Politique de confidentialité
  Description: Page politique de confidentialité - Beardwulf Events
*/
get_header();
?>

<!-- PAGE HERO -->
<section class="page-hero">
  <div class="si">
    <span class="eyebrow">Légal</span>
    <h1 class="stitle">Politique de<br><span class="t-lime">confidentialité</span></h1>
    <p class="sdesc">Dernière mise à jour : <?php echo date('d/m/Y'); ?></p>
  </div>
</section>

<!-- CONTENU -->
<section id="privacy">
  <div class="si">
    <div class="privacy-layout">

      <!-- SOMMAIRE -->
      <aside class="privacy-summary reveal">
        <div class="privacy-summary-inner">
          <p class="privacy-summary-label">Sommaire</p>
          <nav>
            <a href="#p-responsable">1. Responsable du traitement</a>
            <a href="#p-collecte">2. Données collectées</a>
            <a href="#p-finalites">3. Finalités</a>
            <a href="#p-conservation">4. Conservation</a>
            <a href="#p-droits">5. Vos droits</a>
            <a href="#p-cookies">6. Cookies</a>
            <a href="#p-tiers">7. Services tiers</a>
            <a href="#p-contact">8. Contact</a>
          </nav>
        </div>
      </aside>

      <!-- ARTICLES -->
      <div class="privacy-content">

        <div class="privacy-block reveal" id="p-responsable">
          <div class="privacy-block-num">01</div>
          <h2>Responsable du traitement</h2>
          <p>Le responsable du traitement des données personnelles collectées sur ce site est :</p>
          <div class="privacy-info-box">
            <div class="pib-row"><span class="pib-label">Nom</span><span>Kevin Burdloff</span></div>
            <div class="pib-row"><span class="pib-label">Activité</span><span>Développeur web, graphiste & créateur d'événements</span></div>
            <div class="pib-row"><span class="pib-label">Site</span><span><?php echo esc_html( get_bloginfo('url') ); ?></span></div>
            <div class="pib-row"><span class="pib-label">Contact</span><span>Via le formulaire de contact du site</span></div>
          </div>
        </div>

        <div class="privacy-block reveal" id="p-collecte">
          <div class="privacy-block-num">02</div>
          <h2>Données collectées</h2>
          <p>Ce site collecte uniquement les données que vous transmettez volontairement via le formulaire de contact :</p>
          <ul class="privacy-list">
            <li><i class="fa-solid fa-circle-dot"></i> Nom et prénom</li>
            <li><i class="fa-solid fa-circle-dot"></i> Adresse e-mail</li>
            <li><i class="fa-solid fa-circle-dot"></i> Le contenu de votre message</li>
          </ul>
          <p>Aucune donnée n'est collectée à votre insu. Aucune information sensible (bancaire, médicale, etc.) ne vous est demandée.</p>
        </div>

        <div class="privacy-block reveal" id="p-finalites">
          <div class="privacy-block-num">03</div>
          <h2>Finalités du traitement</h2>
          <p>Les données collectées via le formulaire de contact sont utilisées exclusivement pour :</p>
          <ul class="privacy-list">
            <li><i class="fa-solid fa-circle-dot"></i> Répondre à vos demandes de renseignements ou de devis</li>
            <li><i class="fa-solid fa-circle-dot"></i> Assurer le suivi de nos échanges professionnels</li>
          </ul>
          <p>Elles ne sont en aucun cas utilisées à des fins commerciales, revendues ou transmises à des tiers sans votre accord.</p>
        </div>

        <div class="privacy-block reveal" id="p-conservation">
          <div class="privacy-block-num">04</div>
          <h2>Durée de conservation</h2>
          <p>Vos données sont conservées uniquement le temps nécessaire au traitement de votre demande, et au maximum <strong>3 ans</strong> à compter du dernier contact, conformément aux recommandations de la CNIL.</p>
          <p>À l'issue de ce délai, vos données sont supprimées ou anonymisées.</p>
        </div>

        <div class="privacy-block reveal" id="p-droits">
          <div class="privacy-block-num">05</div>
          <h2>Vos droits</h2>
          <p>Conformément au Règlement Général sur la Protection des Données (RGPD — Règlement UE 2016/679), vous disposez des droits suivants :</p>
          <ul class="privacy-list">
            <li><i class="fa-solid fa-circle-dot"></i> <strong>Droit d'accès</strong> : obtenir une copie de vos données</li>
            <li><i class="fa-solid fa-circle-dot"></i> <strong>Droit de rectification</strong> : corriger des données inexactes</li>
            <li><i class="fa-solid fa-circle-dot"></i> <strong>Droit à l'effacement</strong> : demander la suppression de vos données</li>
            <li><i class="fa-solid fa-circle-dot"></i> <strong>Droit à la limitation</strong> : restreindre le traitement de vos données</li>
            <li><i class="fa-solid fa-circle-dot"></i> <strong>Droit d'opposition</strong> : vous opposer au traitement de vos données</li>
            <li><i class="fa-solid fa-circle-dot"></i> <strong>Droit à la portabilité</strong> : recevoir vos données dans un format structuré</li>
          </ul>
          <p>Pour exercer ces droits, contactez-moi via le formulaire de contact du site. Vous disposez également du droit d'introduire une réclamation auprès de la <strong>CNIL</strong> (<a href="https://www.cnil.fr" target="_blank" rel="noopener noreferrer">www.cnil.fr</a>).</p>
        </div>

        <div class="privacy-block reveal" id="p-cookies">
          <div class="privacy-block-num">06</div>
          <h2>Cookies</h2>
          <p>Ce site utilise un nombre limité de cookies, strictement nécessaires à son bon fonctionnement :</p>
          <ul class="privacy-list">
            <li><i class="fa-solid fa-circle-dot"></i> <strong>Cookies de session WordPress</strong> : permettent la navigation sur le site</li>
            <li><i class="fa-solid fa-circle-dot"></i> <strong>Cookie de consentement du formulaire</strong> : mémorise l'acceptation des conditions Contact Form 7</li>
          </ul>
          <p>Aucun cookie publicitaire ou de tracking tiers n'est déposé sur ce site. Vous pouvez configurer votre navigateur pour refuser les cookies, ce qui peut cependant affecter certaines fonctionnalités.</p>
        </div>

        <div class="privacy-block reveal" id="p-tiers">
          <div class="privacy-block-num">07</div>
          <h2>Services tiers</h2>
          <p>Ce site peut faire appel aux services tiers suivants, qui disposent de leurs propres politiques de confidentialité :</p>
          <div class="privacy-info-box">
            <div class="pib-row"><span class="pib-label">Hébergeur</span><span>o2switch — <a href="https://www.o2switch.fr/privacy-policy/" target="_blank" rel="noopener noreferrer">Politique de confidentialité</a></span></div>
            <div class="pib-row"><span class="pib-label">CMS</span><span>WordPress — <a href="https://wordpress.org/about/privacy/" target="_blank" rel="noopener noreferrer">Politique de confidentialité</a></span></div>
            <div class="pib-row"><span class="pib-label">Formulaire</span><span>Contact Form 7 (traitement local, aucune donnée externe)</span></div>
          </div>
        </div>

        <div class="privacy-block reveal" id="p-contact">
          <div class="privacy-block-num">08</div>
          <h2>Contact & réclamation</h2>
          <p>Pour toute question relative à cette politique ou pour exercer vos droits, vous pouvez me contacter directement via la page <a href="<?php echo esc_url( get_permalink( get_page_by_path('contact') ) ); ?>">Contact</a> du site.</p>
          <p>En cas de réponse insatisfaisante, vous pouvez saisir la <strong>Commission Nationale de l'Informatique et des Libertés (CNIL)</strong> :</p>
          <div class="privacy-info-box">
            <div class="pib-row"><span class="pib-label">Site</span><span><a href="https://www.cnil.fr" target="_blank" rel="noopener noreferrer">www.cnil.fr</a></span></div>
            <div class="pib-row"><span class="pib-label">Adresse</span><span>3 Place de Fontenoy, TSA 80715, 75334 Paris Cedex 07</span></div>
            <div class="pib-row"><span class="pib-label">Tél.</span><span>01 53 73 22 22</span></div>
          </div>
        </div>

        <!-- CTA -->
        <div class="privacy-cta reveal">
          <a href="<?php echo esc_url( home_url('/') ); ?>" class="btn-ghost">
            <i class="fa-solid fa-arrow-left"></i> Retour à l'accueil
          </a>
          <a href="<?php echo esc_url( get_permalink( get_page_by_path('mentions-legales') ) ); ?>" class="btn-ghost">
            Mentions légales <i class="fa-solid fa-arrow-right"></i>
          </a>
        </div>

      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>