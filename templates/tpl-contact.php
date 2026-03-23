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
    <span class="eyebrow reveal"><?php the_field('sous_titre_hero_contact'); ?></span>
    <h1 class="stitle reveal"><?php the_field('titre_hero_ligne_1'); ?><br><span class="t-lime"><?php the_field('titre_hero_ligne_2'); ?></span></h1>
    <p class="sdesc reveal"><?php the_field('descriptif_hero'); ?></p>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <div class="si">
    <div class="contact-g">
      <div>
        <div class="contact-info reveal">
          
          <?php if( have_rows('repet_contact') ): while( have_rows('repet_contact') ): the_row(); ?>
            <div class="ci">

              <!-- Si le champ ACF renseigné est un mail -->
              <?php if( get_sub_field('type_contact') == 'mail' ): ?>
              <a style="color: #90F0A0;" href="mailto:<?php the_sub_field('email_contact'); ?>"><div class="ci-ic"><?php the_sub_field('icone_contact'); ?></div></a>
              <div>
                <div class="ci-label"><?php the_sub_field('label_contact'); ?></div>
                <a href="mailto:<?php the_sub_field('email_contact'); ?>"><?php the_sub_field('email_contact'); ?></a>
              </div>

              <!-- Si le champ ACF renseigné est un lien -->
              <?php elseif( get_sub_field('type_contact') == 'lien' ): ?>
              <a style="color: #90F0A0;" href="<?php the_sub_field('lien_contact'); ?>"><div class="ci-ic"><?php the_sub_field('icone_contact'); ?></div></a>
              <div>
                <div class="ci-label"><?php the_sub_field('label_contact'); ?></div>
                <a href="<?php the_sub_field('lien_contact'); ?>" target="_blank" rel="noopener noreferrer"><?php the_sub_field('label_du_lien'); ?></a>
              </div>

                <!-- Si le champ ACF renseigné est simplement du texte -->
              <?php else: ?>
                <div class="ci-ic"><?php the_sub_field('icone_contact'); ?></div>
                <div>
                  <div class="ci-label"><?php the_sub_field('label_contact'); ?></div>
                  <span><?php the_sub_field('texte_contact'); ?></span>
                </div>
              <?php endif; ?>
            </div>
          <!-- EXTRAS -->
            <?php if(get_sub_field('separateur')): ?>
              <div class="contact-extras reveal"></div>
            <?php endif;?>
          <?php endwhile; endif; ?>
        </div>
      </div> <!-- ferme le div gauche -->
      <div class="cform reveal d1">
        <h3><?php the_field('titre_droite_contact'); ?></h3>
        <?php echo do_shortcode('[contact-form-7 id="8d35c62" title="Formulaire de contact page accueil"]'); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>