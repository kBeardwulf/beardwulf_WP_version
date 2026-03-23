<?php
/*
  Template pour les articles de type "realisation"
*/
get_header();
?>
 
<!-- HERO ARTICLE -->
<section class="single-hero">
  <div class="single-hero-overlay"></div>
  <div class="si single-hero-content">
    <div class="single-meta">
      <a href="<?php echo home_url(); ?>" class="single-back">
        <i class="fa-solid fa-arrow-left"></i> Retour
      </a>

      <?php $cats = get_the_terms(get_the_ID(), 'proj_categorie');
      if($cats): ?>
        <span class="single-categorie"><?php echo esc_html($cats[0]->name); ?></span>
      <?php endif; ?>

    </div>
    <h1 class="single-title"><?php the_title(); ?></h1>
    <div class="single-tags">

      <?php $tags = get_the_terms(get_the_ID(), 'proj_tag');
      if($tags): foreach($tags as $tag): ?>
        <span class="proj-tag"><?php echo esc_html($tag->name); ?></span>
      <?php endforeach; endif; ?>

    </div>
  </div>
</section>
 
<!-- CONTENU -->
<section class="single-content-section">
  <div class="si single-grid">
 
    <!-- COLONNE GAUCHE : contenu principal -->
    <div class="single-main">
      <div class="single-body">
        <?php the_content(); ?>
      </div>
    </div>
 
    <!-- COLONNE DROITE : sidebar infos -->
    <aside class="single-aside">
 
      <div class="single-aside-card">
        <h4 class="single-aside-title">Informations</h4>
        <div class="single-aside-info">
          <div class="single-aside-row">
            <span class="single-aside-label">Catégorie</span>
            <span class="single-aside-value">
              <?php if($cats): echo esc_html($cats[0]->name); endif; ?>
            </span>
          </div>
          <div class="single-aside-row">
            <span class="single-aside-label">Année</span>
            <span class="single-aside-value"><?php the_field('annee_projet'); ?></span>
          </div>
          <div class="single-aside-row">
            <span class="single-aside-label">Client</span>
            <span class="single-aside-value"><?php the_field('client_projet'); ?></span>
          </div>
        </div>
      </div>
 
      <div class="single-aside-card">
        <h4 class="single-aside-title">Technologies</h4>

        <div class="pills">
          <?php if($tags): foreach($tags as $tag): ?>
            <span class="pill"><?php echo esc_html($tag->name); ?></span>
          <?php endforeach; endif; ?>
        </div>

      </div>
 
      <a href="<?php the_permalink(19); ?>" class="btn-lime" style="width:100%; justify-content:center; margin-top:0.5rem;">
        Travaillons ensemble <i class="fa-solid fa-arrow-right"></i>
      </a>
 
    </aside>
  </div>
</section>
 
<!-- PROJETS SUIVANTS -->
<section class="single-next-section">
  <div class="si">
    <span class="eyebrow">Continuer</span>
    <h2 class="stitle">Autres réalisations</h2>
    <div class="proj-grid">

      <?php $autres = new WP_Query(array(
        'post_type'      => 'realisation',
        'posts_per_page' => 2,
        'post__not_in'   => array(get_the_ID()),
        'orderby'        => 'rand'
      ));
      if($autres->have_posts()): while($autres->have_posts()): $autres->the_post(); ?>
        <div class="proj-card">
          <div class="proj-thumb">
            <a href="<?php the_permalink(); ?>" class="proj-thumb-link"></a>
            <?php if(has_post_thumbnail()): the_post_thumbnail('large'); endif; ?>
          </div>
          <div class="proj-body">
            <?php $c = get_the_terms(get_the_ID(), 'proj_categorie');
            if($c): echo '<div class="proj-type">' . esc_html($c[0]->name) . '</div>'; endif; ?>
            <h3><a href="<?php the_permalink(); ?>" class="proj-title-link"><?php the_title(); ?></a></h3>
            <p><?php the_excerpt(); ?></p>
            <div class="proj-tags">
            <?php if($tags && !is_wp_error($tags)): foreach($tags as $tag): ?>
              <span class="proj-tag"><?php echo esc_html($tag->name); ?></span>
            <?php endforeach; endif; ?>
          </div>
          </div>
          
        </div>
      <?php endwhile; wp_reset_postdata(); endif; ?>

    </div>
  </div>
</section>
<?php get_footer(); ?>