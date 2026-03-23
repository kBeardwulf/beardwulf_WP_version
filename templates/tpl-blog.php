<?php
/*
  Template Name: Blog
  Description: page de blog
*/
get_header();
?>
 
<!-- PAGE HERO -->
<section class="page-hero arch-hero">
  <div class="si">
    <span class="eyebrow reveal">Réalisations</span>
    <h1 class="stitle reveal">Mes projets<br><span class="t-lime">récents.</span></h1>
    <p class="sdesc reveal">Développement web, direction artistique, création d'événements — un aperçu concret de ce que je peux réaliser pour vous.</p>
 
    <!-- BARRE DE RECHERCHE -->
    <div class="arch-search reveal">
      <div class="arch-search-wrap">
        <i class="fa-solid fa-magnifying-glass arch-search-ic"></i>
        <input type="text" id="arch-search-input" class="arch-search-input" placeholder="Rechercher un projet..." />
      </div>
    </div>
 
    <!-- FILTRES PAR CATÉGORIE -->
    <div class="arch-filters reveal">
      <button class="arch-filter active" data-filter="all">Tous</button>
      <?php
        $categories = get_terms(array(
          'taxonomy'   => 'proj_categorie',
          'hide_empty' => true,
        ));
        if($categories && !is_wp_error($categories)):
          foreach($categories as $cat): ?>
            <button class="arch-filter" data-filter="<?php echo esc_attr($cat->slug); ?>">
              <?php echo esc_html($cat->name); ?>
            </button>
      <?php endforeach; endif; ?>
    </div>
 
  </div>
</section>
 
<!-- GRILLE DES PROJETS -->
<section class="arch-section">
  <div class="si">
 
    <!-- MESSAGE AUCUN RÉSULTAT -->
    <div class="arch-empty" id="arch-empty" style="display:none;">
      <i class="fa-solid fa-circle-xmark"></i>
      <p>Aucun projet ne correspond à votre recherche.</p>
    </div>
 
    <div class="proj-grid arch-grid" id="arch-grid">
      <?php
        $realisations = new WP_Query(array(
          'post_type'      => 'realisation',
          'posts_per_page' => -1,
          'orderby'        => 'date',
          'order'          => 'DESC'
        ));
 
        if($realisations->have_posts()):
          while($realisations->have_posts()): $realisations->the_post();
 
            $cats = get_the_terms(get_the_ID(), 'proj_categorie');
            $cat_slugs = '';
            if($cats && !is_wp_error($cats)) {
              $cat_slugs = implode(' ', wp_list_pluck($cats, 'slug'));
            }
 
            $tags = get_the_terms(get_the_ID(), 'proj_tag');
      ?>
 
        <div class="proj-card arch-card" data-category="<?php echo esc_attr($cat_slugs); ?>" data-title="<?php echo esc_attr(strtolower(get_the_title())); ?>">
          <a href="<?php the_permalink(); ?>" class="arch-card-link">
 
            <div class="proj-thumb">
              <?php if(has_post_thumbnail()): ?>
                <?php the_post_thumbnail('large'); ?>
              <?php else: ?>
                <span><?php
                  if($cats && !is_wp_error($cats)) echo strtoupper(substr($cats[0]->name, 0, 3));
                  else echo 'PRJ';
                ?></span>
              <?php endif; ?>
            </div>
 
            <div class="proj-body">
              <?php if($cats && !is_wp_error($cats)): ?>
                <div class="proj-type"><?php echo esc_html($cats[0]->name); ?></div>
              <?php endif; ?>
              <h3><?php the_title(); ?></h3>
              <p><?php the_excerpt(); ?></p>
              <div class="proj-tags">
                <?php if($tags && !is_wp_error($tags)): foreach($tags as $tag): ?>
                  <span class="proj-tag"><?php echo esc_html($tag->name); ?></span>
                <?php endforeach; endif; ?>
              </div>
            </div>
 
          </a>
        </div>
 
      <?php endwhile; wp_reset_postdata();
        endif; ?>
    </div>
 
  </div>
</section>
 
<!-- CTA FINAL -->
<section class="arch-cta-section">
  <div class="si arch-cta">
    <div>
      <h2 class="stitle reveal">Un projet en tête ?</h2>
      <p class="sdesc reveal">Travaillons ensemble — je réponds généralement sous 24h.</p>
    </div>
    <a href="<?php echo get_permalink(19); ?>" class="btn-lime reveal">
      Me contacter <i class="fa-solid fa-arrow-right"></i>
    </a>
  </div>
</section>
 
<script>
document.addEventListener('DOMContentLoaded', function() {
 
  const cards   = document.querySelectorAll('.arch-card');
  const filters = document.querySelectorAll('.arch-filter');
  const input   = document.getElementById('arch-search-input');
  const empty   = document.getElementById('arch-empty');
 
  let activeFilter = 'all';
  let searchQuery  = '';
 
  function filterCards() {
    let visible = 0;
 
    cards.forEach(card => {
      const category = card.dataset.category || '';
      const title    = card.dataset.title || '';
 
      const matchFilter = activeFilter === 'all' || category.includes(activeFilter);
      const matchSearch = title.includes(searchQuery.toLowerCase());
 
      if(matchFilter && matchSearch) {
        card.style.display = '';
        visible++;
      } else {
        card.style.display = 'none';
      }
    });
 
    empty.style.display = visible === 0 ? 'flex' : 'none';
  }
 
  filters.forEach(btn => {
    btn.addEventListener('click', function() {
      filters.forEach(b => b.classList.remove('active'));
      this.classList.add('active');
      activeFilter = this.dataset.filter;
      filterCards();
    });
  });
 
  input.addEventListener('input', function() {
    searchQuery = this.value.trim();
    filterCards();
  });
 
});
</script>
 
<?php get_footer(); ?>