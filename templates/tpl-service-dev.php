<?php
/*
  Template Name: Service - Développement Web
  Description: Page de détail du service développement web
*/
get_header();
?>
 
<!-- PAGE HERO -->
<section class="page-hero sdet-hero">
  <div class="si">
    <a href="<?php echo get_permalink(26); ?>" class="single-back reveal">
      <i class="fa-solid fa-arrow-left"></i> Tous les services
    </a>
    <div class="sdet-hero-content">
      <div>
        <span class="eyebrow reveal"><?php the_field('titre_sourcil'); ?></span>
        <h1 class="stitle reveal"><?php the_field('titre_1'); ?><br><span class="t-lime"><?php the_field('titre_2'); ?></span></h1>
        <p class="sdesc reveal" style="max-width:100%"><?php the_field('titre_desc'); ?></p>
        <div class="sdet-hero-actions reveal">
          <a href="#contact-service" class="btn-lime"><?php the_field('btn_1_text'); ?> <i class="fa-solid fa-arrow-right"></i></a>
          <a href="<?php echo get_permalink(14); ?>" class="btn-ghost"><?php the_field('btn_2_text'); ?> <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="sdet-hero-ic reveal d1">
        <?php the_field('icone_hero'); ?>
      </div>
    </div>
  </div>
</section>
 
<!-- CE QUE JE PROPOSE -->
<section class="sdet-section">
  <div class="si">
    <span class="eyebrow reveal"><?php the_field('titre_sourcil_presta'); ?></span>
    <h2 class="stitle reveal"><?php the_field('titre_presta_1'); ?><br><?php the_field('titre_presta_2'); ?></h2>
    <p class="sdesc reveal"><?php the_field('desc_presta'); ?></p>
 
    <div class="sdet-grid reveal">

      <?php if( have_rows('repet_presta') ) : while( have_rows('repet_presta') ): the_row(); ?>
        <div class="sdet-card">
          <div class="sdet-card-ic"><?php the_sub_field('icone_presta'); ?></div>
          <h3><?php the_sub_field('nom_de_presta'); ?></h3>
          <p><?php the_sub_field('desc_presta'); ?></p>
          <div class="pills">

            <?php if( have_rows('repet_pills_presta') ) : while( have_rows('repet_pills_presta') ): the_row(); ?>
              <span class="pill"><?php the_sub_field('nom_de_pill'); ?></span>
            <?php endwhile; endif; ?>

          </div>
        </div>
        <?php endwhile; endif; ?>
 
    </div>
  </div>
</section>
 
<!-- MON PROCESS -->
<section class="sdet-process-section">
  <div class="si">
    <span class="eyebrow reveal"><?php the_field('titre_sourcil_process'); ?></span>
    <h2 class="stitle reveal"><?php the_field('titre_process_1'); ?><br><span class="t-lime"><?php the_field('titre_process_2'); ?></span></h2>
 
    <div class="sdet-steps reveal">
 
      <?php if( have_rows('repet_process') ) : while( have_rows('repet_process') ): the_row(); ?>
        <div class="sdet-step">
          <div class="sdet-step-num"><?php the_sub_field('numero_etape'); ?></div>
          <div class="sdet-step-body">
            <h3><?php the_sub_field('titre_etape'); ?></h3>
            <p><?php the_sub_field('desc_etape'); ?></p>
          </div>
        </div>
      <?php endwhile; endif; ?>
 
    </div>
  </div>
</section>
 
<!-- TECHNOLOGIES -->
<section class="sdet-tech-section">
  <div class="si">
    <span class="eyebrow reveal"><?php the_field('titre_sourcil_techno'); ?></span>
    <h2 class="stitle reveal"><?php the_field('titre_techno_1'); ?><br><?php the_field('titre_techno_2'); ?></h2>
 
    <div class="sdet-tech-label reveal"><?php the_field('label_techno_maitrise'); ?></div>
    <div class="sdet-tech-grid reveal">

      <?php if( have_rows('repet_techno_maitrise') ) : while( have_rows('repet_techno_maitrise') ): the_row(); ?>
        <div class="sdet-tech-item">
          <?php the_sub_field('icone_techno_maitrise'); ?>
          <span><?php the_sub_field('nom_techno_maitrise'); ?></span>
        </div>
      <?php endwhile; endif; ?>
    </div>
 
    <div class="sdet-tech-label reveal"><?php the_field('techno_en_cours'); ?><span class="comp-learning-badge"><i class="fa-solid fa-seedling"></i> Fast learner</span></div>
    <div class="sdet-tech-grid sdet-tech-grid--muted reveal">

      <?php if( have_rows('repet_techno_en_cours') ) : while( have_rows('repet_techno_en_cours') ): the_row(); ?>
        <div class="sdet-tech-item sdet-tech-item--muted">
          <?php the_sub_field('icone_techno_en_cours'); ?>
          <span><?php the_sub_field('nom_techno_en_cours'); ?></span>
        </div>
      <?php endwhile; endif; ?>
      
    </div>
  </div>
</section>
 
<!-- RÉALISATIONS LIÉES -->
<section class="sdet-real-section">
  <div class="si">
    <span class="eyebrow reveal"><?php the_field('titre_soucil_real'); ?></span>
    <h2 class="stitle reveal"><?php the_field('titre_real_1'); ?><br><?php the_field('titre_real_2'); ?></h2>
    <div class="proj-grid">
      <?php
        $projets_web = new WP_Query(array(
          'post_type'      => 'realisation',
          'posts_per_page' => 3,
          'orderby'        => 'date',
          'order'          => 'DESC',
          'tax_query'      => array(
            array(
              'taxonomy' => 'proj_categorie',
              'field'    => 'slug',
              'terms'    => 'developpement-web',
            ),
          ),
        ));
        if($projets_web->have_posts()):
          while($projets_web->have_posts()): $projets_web->the_post();
            $c = get_the_terms(get_the_ID(), 'proj_categorie');
            $t = get_the_terms(get_the_ID(), 'proj_tag');
      ?>
        <div class="proj-card">
          <div class="proj-thumb">
            <a href="<?php the_permalink(); ?>" class="proj-thumb-link"></a>
            <?php if(has_post_thumbnail()): the_post_thumbnail('large'); endif; ?>
          </div>
          <div class="proj-body">
            <?php if($c): echo '<div class="proj-type">' . esc_html($c[0]->name) . '</div>'; endif; ?>
            <h3><a href="<?php the_permalink(); ?>" class="proj-title-link"><?php the_title(); ?></a></h3>
            <p><?php the_excerpt(); ?></p>
            <div class="proj-tags">
              <?php if($t && !is_wp_error($t)): foreach($t as $tag): ?>
                <span class="proj-tag"><?php echo esc_html($tag->name); ?></span>
              <?php endforeach; endif; ?>
            </div>
          </div>
        </div>
      <?php endwhile; wp_reset_postdata();
        else: ?>
        <p class="sdesc">Bientôt disponible — revenez voir mes dernières réalisations !</p>
      <?php endif; ?>
    </div>
  </div>
</section>
 
<!-- FORMULAIRE DE CONTACT -->
<section class="sdet-contact-section" id="contact-service">
  <div class="si">
    <div class="contact-g">
      <div>
        <span class="eyebrow reveal"><?php the_field('titre_sourcil_contact'); ?></span>
        <h2 class="stitle reveal"><?php the_field('titre_contact_1'); ?><br><span class="t-lime"><?php the_field('titre_contact_2'); ?></span></h2>
        <p class="sdesc reveal"><?php the_field('desc_contact'); ?></p>
        <div class="contact-info reveal">

          <?php if( have_rows('repet_infos_contact') ): while( have_rows('repet_infos_contact') ): the_row(); ?>
            <div class="ci">
              <div class="ci-ic"><?php the_sub_field('icone_contact'); ?></div>
              <?php if( get_sub_field('type_contact') == 'mail' ): ?>
                <div>
                  <div class="ci-label">Email</div>
                  <a href="mailto:<?php the_sub_field('email_contact'); ?>"><?php the_sub_field('email_contact'); ?></a>
                </div>
              <?php elseif( get_sub_field('type_contact') == 'lien' ): ?>
                <div>
                  <div class="ci-label"><?php the_sub_field('label_contact'); ?></div>
                  <a href="<?php the_sub_field('lien_contact'); ?>"><?php the_sub_field('precision_supp_contact'); ?></a>
                </div>
              <?php else: ?>
                <div>
                  <div class="ci-label"><?php the_sub_field('label_contact'); ?></div>
                  <span><?php the_sub_field('precision_supp_contact'); ?></span>
                </div>
              <?php endif; ?>
            </div>
          <?php endwhile; endif; ?>

        </div>
      </div>
      <div class="cform reveal d1">
        <h3><?php the_field('titre_droite_contact'); ?></h3>
        <?php echo do_shortcode('[contact-form-7 id="8d35c62" title="Formulaire de contact page accueil"]'); ?>
      </div>
    </div>
  </div>
</section>
 
<?php get_footer(); ?>