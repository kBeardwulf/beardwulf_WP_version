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
  <div class="hero-content hero-content--split">
    <div class="hero-text">
      <span class="hero-eyebrow"><span class="hero-dot"></span><?php the_field('tag_dispo'); ?></span>
      <h1 class="hero-title">
        <span class="t-lime"><?php the_field('hero_title_ligne_1'); ?></span><br>
        <span class="t-outline"><?php the_field('hero_title_ligne_2'); ?></span><br>
        <?php the_field('hero_title_ligne_3'); ?><br>
        <span class="t-lime"><?php the_field('hero_title_ligne_4'); ?></span>
      </h1>
      <p class="hero-sub"><?php the_field('hero_paragraphe'); ?></p>
      <div class="hero-actions">
        <a href="#projets" class="btn-lime"><?php the_field('btn_1'); ?> <?php the_field('icone_btn_1'); ?></a>
        <a href="#contact" class="btn-ghost"><?php the_field('btn_2'); ?> <?php the_field('icone_btn_2'); ?></a>
      </div>
    </div>
    <div class="hero-photo">
      <?php 
        $hero_img = get_field('image_droite');
        if($hero_img):
          echo wp_get_attachment_image($hero_img['ID'], 'full'); ?>
      <?php endif; ?>
    </div>
  </div>
</section>

<!-- STATS BAND -->
<div class="stats-band">
  <div class="stats-inner">
    <div class="stat"><span class="stat-n"><?php the_field('chiffre_1'); ?></span><span class="stat-l"><?php the_field('descriptif_1'); ?></span></div>
    <div class="stat-sep"></div>
    <div class="stat"><span class="stat-n"><?php the_field('chiffre_2'); ?></span><span class="stat-l"><?php the_field('descriptif_2'); ?></span></div>
    <div class="stat-sep"></div>
    <div class="stat"><span class="stat-n"><?php the_field('chiffre_3'); ?></span><span class="stat-l"><?php the_field('descriptif_3'); ?></span></div>
    <div class="stat-sep"></div>
    <div class="stat"><span class="stat-n"><?php the_field('chiffre_4'); ?></span><span class="stat-l"><?php the_field('descriptif_4'); ?></span></div>
  </div>
</div>

<!-- COMPÉTENCES -->
<section id="competences">
  <div class="si">
    <span class="eyebrow reveal"><?php the_field('sous_titre_au_dessus_du_titre'); ?></span>
    <h2 class="stitle reveal"><?php the_field('titre_ligne_1_comp'); ?><br><?php the_field('titre_ligne_2_comp'); ?></h2>
    <p class="sdesc reveal"><?php the_field('descriptif_comp'); ?></p>
    <div class="skills-grid">

      <?php if( have_rows('repet_comp') ) : while( have_rows('repet_comp') ): the_row(); ?>
        <div class="skill-card reveal">
          <div class="skill-ic"><?php the_sub_field('icone_comp'); ?></div>
          <h3><?php the_sub_field('titre_comp'); ?></h3>
          <p><?php the_sub_field('descriptif_comp'); ?></p>

          <div class="pills">
            <?php if( have_rows('les_pills') ) : while( have_rows('les_pills') ): the_row(); ?>
              <span class="pill"><?php the_sub_field('nom_de_pill'); ?></span>
            <?php endwhile; endif; ?>
          </div>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>

<!-- MÉTHODE -->
<section id="methode">
  <div class="si">
    <span class="eyebrow reveal"><?php the_field('sous_titre_au_dessus_methode'); ?></span>
    <h2 class="stitle reveal"><?php the_field('titre_methode'); ?></h2>
    <p class="sdesc reveal"><?php the_field('description_methodes'); ?></p>
    <div class="steps">

      <?php if( have_rows('repet_methodes') ) : while( have_rows('repet_methodes') ): the_row(); ?>
        <div class="step reveal">
          <div class="step-num"><?php the_sub_field('numero_etape'); ?></div>
          <div class="step-emoji"><?php the_sub_field('emoji_pour_faire_joli'); ?></div>
          <h3><?php the_sub_field('titre_etape'); ?></h3>
          <p><?php the_sub_field('descript_etape'); ?></p>

          <?php if( get_sub_field('icone_suivante') ): ?>
            <span class="step-arrow"><?php the_sub_field('icone_suivante'); ?></span>
          <?php endif; ?>
        </div>
      <?php endwhile; endif; ?>
      
    </div>
  </div>
</section>

<!-- PROJETS -->
<section id="projets">
  <div class="si">
    <span class="eyebrow reveal"><?php the_field('sous_titre_au_dessus_blog'); ?></span>
    <h2 class="stitle reveal"><?php the_field('titre_real'); ?></h2>
    <p class="sdesc reveal"><?php the_field('desc_real'); ?></p>
    <div class="proj-grid">
      <?php
        $realisations = new WP_Query(array(
            'post_type'      => 'realisation',
            'posts_per_page' => 3,
            'orderby'        => 'date',
            'order'          => 'DESC'
        ));
        if( $realisations->have_posts() ):
          while( $realisations->have_posts() ): $realisations->the_post();
      ?>
      <div class="proj-card reveal">
        <div class="proj-thumb">
          <a href="<?php the_permalink(); ?>" class="proj-thumb-link"></a>
          <?php if( has_post_thumbnail() ): the_post_thumbnail('large'); endif; ?>
        </div>
        <div class="proj-body">
          <?php $cats = get_the_terms(get_the_ID(), 'proj_categorie');
            if($cats): echo '<div class="proj-type">' . esc_html($cats[0]->name) . '</div>';
          endif; ?>
          <h3><a href="<?php the_permalink(); ?>" class="proj-title-link"><?php the_title(); ?></a></h3>
          <p><?php the_excerpt(); ?></p>
          <div class="proj-tags">
            <?php $tags = get_the_terms(get_the_ID(), 'proj_tag');
              if($tags): foreach($tags as $tag): ?>
                <span class="proj-tag"><?php echo esc_html($tag->name); ?></span>
            <?php endforeach; endif; ?>
          </div>
        </div>
      </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>
  </div>
</section>

<!-- À PROPOS -->
<section id="apropos">
  <div class="si">
    <div class="apropos-g">
      <div class="swiper apropos-swiper">
        <div class="swiper-wrapper">
          <?php 
          $images = get_field('galerie_apropos');
          if($images): foreach($images as $image): ?>
            <div class="swiper-slide">
              <div class="apropos-img">
                <?php echo wp_get_attachment_image($image['ID'], 'full'); ?>
              </div>
            </div>
          <?php endforeach; endif; ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>

      <div>
        <span class="eyebrow reveal"><?php the_field('sous_titre_apropos'); ?></span>
        <h2 class="stitle reveal"><?php the_field('titre_ligne_1_apropos'); ?><br><?php the_field('titre_ligne_2_apropos'); ?></h2>
        <p class="sdesc reveal" style="max-width:100%"><?php the_field('paragraphe_1_apropos'); ?></p>
        <p class="sdesc reveal" style="max-width:100%;margin-top:1rem"><?php the_field('paragraphe_2_apropos'); ?></p>
        <div class="values reveal">
          <?php if( have_rows('soft_skills_apropos') ) : while( have_rows('soft_skills_apropos') ): the_row(); ?>
            <div class="value">
              <div class="value-ic"><?php the_sub_field('icone_apropos'); ?></div>
              <span><?php the_sub_field('descript_apropos'); ?></span>
            </div>
          <?php endwhile; endif; ?>
        </div>
        <a href="#contact" class="btn-lime reveal"><?php the_field('btn_apropos'); ?> <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section id="contact">
  <div class="si">
    <div class="contact-g">
      <div>
        <span class="eyebrow reveal"><?php the_field('sous_titre_au_dessus_contact'); ?></span>
        <h2 class="stitle reveal"><?php the_field('titre_ligne_1_contact'); ?><br><?php the_field('titre_ligne_2_contact'); ?></h2>
        <p class="sdesc reveal"><?php the_field('phrase_accroche_contact'); ?></p>
        <div class="contact-info reveal">
          <?php if( have_rows('repet_contact') ): while( have_rows('repet_contact') ): the_row(); ?>
            <div class="ci">
              <div class="ci-ic"><?php the_sub_field('icone_contact') ?></div>
              <div>
                <div class="ci-label"><?php the_sub_field('label_contact'); ?></div>

                <?php if( get_sub_field('type_contact') == 'mail' ): ?>
                  <a href="mailto:<?php the_sub_field('email_contact'); ?>"><?php the_sub_field('email_contact'); ?></a>
                <?php elseif( get_sub_field('type_contact') == 'lien' ): ?>
                  <a href="<?php the_sub_field('lien_contact'); ?>" target="_blank" rel="noopener noreferrer"><?php the_sub_field('label_du_lien'); ?></a>
                <?php else: ?>
                  <span><?php the_sub_field('texte_contact'); ?></span>
                <?php endif; ?>

              </div>
            </div>
          <?php endwhile; endif; ?>
        </div>
      </div> <!-- ✅ ferme le div gauche -->
      <div class="cform reveal d1">
        <h3><?php the_field('titre_droite_contact'); ?></h3>
        <?php echo do_shortcode('[contact-form-7 id="8d35c62" title="Formulaire de contact page accueil"]'); ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer(); ?>