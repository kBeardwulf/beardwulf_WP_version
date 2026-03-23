<?php
/*
  Template Name: Services
  Description: page des services
*/
get_header();
?>
 
<!-- PAGE HERO -->
<section class="page-hero serv-hero">
  <div class="si">
    <span class="eyebrow reveal"><?php the_field('titre_sourcil'); ?></span>
    <h1 class="stitle reveal"><?php the_field('titre_ligne_1'); ?><br><span class="t-lime"><?php the_field('titre_ligne_2'); ?></span></h1>
    <p class="sdesc reveal"><?php the_field('desc_titre'); ?></p>
  </div>
</section>
 
<!-- CARDS SERVICES -->
<section class="serv-section">
  <div class="si">
    <div class="serv-grid">
 
       <?php if( have_rows('repet_cat') ) : while( have_rows('repet_cat') ): the_row(); ?>
        <a href="<?php the_sub_field('url_categorie'); ?>" class="serv-card reveal">
          <div class="serv-card-top">
            <div class="serv-ic"><?php the_sub_field('icone_categorie'); ?></div>
            <span class="serv-num"><?php the_sub_field('numero_categorie'); ?></span>
          </div>
          <h2 class="serv-title"><?php the_sub_field('titre_cat_1'); ?><br><?php the_sub_field('titre_cat_2'); ?></h2>
          <p class="serv-desc"><?php the_sub_field('desc_cat'); ?></p>
          <div class="serv-tags">
            <?php if( have_rows('repet_pills_cat') ) : while( have_rows('repet_pills_cat') ): the_row(); ?>
              <span class="pill"><?php the_sub_field('nom_de_pill'); ?></span>
            <?php endwhile; endif; ?>
          </div>
          <div class="serv-cta">
            Découvrir <i class="fa-solid fa-arrow-right"></i>
          </div>
        </a>
      <?php endwhile; endif; ?>

    </div>
  </div>
</section>
 
<!-- POURQUOI MOI -->
<section class="serv-why-section">
  <div class="si">
    <div class="serv-why-g">
      <div>
        <span class="eyebrow reveal"><?php the_field('titre_sourcil_pkmoi'); ?></span>
        <h2 class="stitle reveal"><?php the_field('titre_pkmoi_1'); ?><br><span class="t-lime"><?php the_field('titre_pkmoi_2'); ?></span></h2>
        <p class="sdesc reveal" style="max-width:100%"><?php the_field('desc_pkmoi_1'); ?></p>
        <p class="sdesc reveal" style="max-width:100%; margin-top:1rem"><?php the_field('desc_pkmoi_2'); ?></p>
        <div class="values reveal">

          <?php if( have_rows('repet_avantage_pkmoi') ) : while( have_rows('repet_avantage_pkmoi') ): the_row(); ?>
            <div class="value">
              <div class="value-ic"><?php the_sub_field('icone_avantage_pkmoi'); ?></div>
              <span><?php the_sub_field('texte_avantage_pkmoi'); ?></span>
            </div>
          <?php endwhile; endif; ?>

        </div>
        <a href="<?php echo get_permalink(19); ?>" class="btn-lime reveal">
          <?php the_field('texte_interaction'); ?> <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
 
      <!-- STATS -->
      <div class="serv-stats reveal d1">

        <?php if( have_rows('repet_stats') ) : while( have_rows('repet_stats') ): the_row(); ?>
          <div class="serv-stat-card">
            <span class="serv-stat-n"><?php the_sub_field('nombre_stat'); ?></span>
            <span class="serv-stat-l"><?php the_sub_field('texte_stat'); ?></span>
          </div>
        <?php endwhile; endif; ?>

      </div>
    </div>
  </div>
</section>
 
<!-- CTA FINAL -->
<section class="serv-cta-section">
  <div class="si serv-cta-inner">
    <div>
      <h2 class="stitle reveal"><?php the_field('titre_contact'); ?></h2>
      <p class="sdesc reveal"><?php the_field('description_contact'); ?></p>
    </div>
    <a href="<?php echo get_permalink(19); ?>" class="btn-lime reveal">
      <?php the_field('texte_btn_contact'); ?> <i class="fa-solid fa-arrow-right"></i>
    </a>
  </div>
</section>
 
<?php get_footer(); ?>