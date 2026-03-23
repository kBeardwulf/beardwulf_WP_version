<?php
/*
  Template Name: À Propos
  Description: Page de présentation de Kevin Burdloff
*/
get_header();
?>
 
<!-- PAGE HERO -->
<section class="page-hero about-hero">
  <div class="si">
    <span class="eyebrow reveal"><?php the_field('titre_sourcil'); ?></span>
    <h1 class="stitle reveal"><?php the_field('titre_ligne_1'); ?><br><span class="t-lime"><?php the_field('titre_ligne_2'); ?></span></h1>
    <p class="sdesc reveal"><?php the_field('desc_hero'); ?></p>
  </div>
</section>
 
<!-- INTRO -->
<section class="about-intro-section">
  <div class="si">
    <div class="about-intro-g">
 
      <!-- PHOTO 1 -->
      <div class="about-photo reveal">
        <?php
          $photo_1 = get_field('photo_apropos_1');
          if($photo_1): echo wp_get_attachment_image($photo_1['ID'], 'full');
          else: ?>
            <div class="about-photo-placeholder"><i class="fa-solid fa-user"></i></div>
          <?php endif; ?>
      </div>
 
      <div>
        <span class="eyebrow reveal"><?php the_field('titre_sourcil_intro'); ?></span>
        <h2 class="stitle reveal"><?php the_field('titre_intro_1'); ?><br><span class="t-lime"><?php the_field('titre_intro_2'); ?></span></h2>
        <?php the_field('desc_intro'); ?>
 
        <div class="values reveal">
          <?php if( have_rows('repet_intro') ): while( have_rows('repet_intro') ): the_row(); ?>
            <div class="value">
              <div class="value-ic"><?php the_sub_field('icone_intro'); ?></div>
              <span><?php the_sub_field('label_intro'); ?></span>
            </div>
          <?php endwhile; endif; ?>
        </div>
 
        <a href="<?php echo get_permalink(19); ?>" class="btn-lime reveal">
          Travaillons ensemble <i class="fa-solid fa-arrow-right"></i>
        </a>
      </div>
 
    </div>
  </div>
</section>
 
<!-- MON HISTOIRE -->
<section class="about-story-section">
  <div class="si">
    <span class="eyebrow reveal"><?php the_field('titre_sourcil_story'); ?></span>
    <h2 class="stitle reveal"><?php the_field('titre_story_1'); ?><br><span class="t-lime"><?php the_field('titre_story_2'); ?></span></h2>
 
    <div class="about-timeline">
 
      <?php if( have_rows('repet_story') ): while( have_rows('repet_story') ): the_row(); ?>
        <div class="about-tl-item reveal">
          <div class="about-tl-ic">
            <?php the_sub_field('icone_story'); ?>
          </div>
          <div class="about-tl-body">
            <span class="about-tl-tag"><?php the_sub_field('titre_sourcil_repetstory'); ?></span>
            <h3><?php the_sub_field('titre_repetstory'); ?></h3>
            <p><?php the_sub_field('desc_repetstory'); ?></p>
          </div>
        </div>
      <?php endwhile; endif; ?>
 
    </div>
  </div>
</section>
 
<!-- PHOTO + CITATION -->
<section class="about-quote-section">
  <div class="si">
    <div class="about-quote-g">
 
      <!-- PHOTO 2 -->
      <div class="about-photo about-photo--square reveal">
        <?php
          $photo_2 = get_field('photo_apropos_2');
          if($photo_2): echo wp_get_attachment_image($photo_2['ID'], 'full');
          else: ?>
            <div class="about-photo-placeholder"><i class="fa-solid fa-user"></i></div>
          <?php endif; ?>
      </div>
 
      <div class="about-quote-content reveal d1">
        <i class="fa-solid fa-quote-left about-quote-ic"></i>
        <blockquote class="about-quote">
          <?php the_field('titre_citation'); ?>
        </blockquote>
        <?php the_field('wysiwyg_citation'); ?>
      </div>
 
    </div>
  </div>
</section>
 
<!-- CE QUI ME DRIVE -->
<section class="about-drive-section">
  <div class="si">
    <span class="eyebrow reveal"><?php the_field('titre_sourcil_motiv'); ?></span>
    <h2 class="stitle reveal"><?php the_field('titre_motiv_1'); ?><br><span class="t-lime"><?php the_field('titre_motiv_2'); ?></span></h2>
 
    <div class="about-drive-grid">
      <?php if( have_rows('repet_motiv') ): while( have_rows('repet_motiv') ): the_row(); ?>
        <div class="about-drive-card reveal">
          <div class="about-drive-ic"><?php the_sub_field('icone_motiv'); ?></div>
          <h3><?php the_sub_field('titre_motiv'); ?></h3>
          <p><?php the_sub_field('desc_motiv'); ?></p>
        </div>
      <?php endwhile; endif; ?>
    </div>
  </div>
</section>
 
<!-- CTA -->
<section class="about-cta-section">
  <div class="si about-cta-inner">
    <div>
      <h2 class="stitle reveal"><?php the_field('titre_contact_1'); ?><br><span class="t-lime"><?php the_field('titre_contact_2'); ?></span></h2>
      <p class="sdesc reveal"><?php the_field('desc_contact'); ?></p>
    </div>
    <a href="<?php echo get_permalink(19); ?>" class="btn-lime reveal">
      <?php the_field('btn_contact'); ?> <i class="fa-solid fa-arrow-right"></i>
    </a>
  </div>
</section>
 
<?php get_footer(); ?>