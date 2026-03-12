<?php
/*
  Template Name: Blog
  Description: page de blog
*/
get_header();
?>

<!-- ========== BREADCRUMB ========== -->
  <section class="breadcrumb-section">
    <div class="container">
      <nav class="breadcrumb" aria-label="Fil d'Ariane">
        <a href="<?php echo home_url(); ?>">Accueil</a>
        <span class="breadcrumb-sep"><i class="fas fa-chevron-right"></i></span>
        <span class="breadcrumb-current"><?php the_title(); ?></span>
      </nav>
      <h1 class="page-title"><?php the_title(); ?></h1>
      <?php get_the_title();?>
    </div>
  </section>

<!-- ========== CONTENU ========== -->
  <section id="contenu">
      <div class="container">
        <?php the_author(); ?>
        <?php the_content(); ?>

        <?php the_post_thumbnail(); ?>
        <img src="<?php the_post_thumbnail_url(); ?>">

      </div>
  </section>

   <!-- ========== INTRO ========== -->
  <section class="page-intro-section">
    <div class="container">
      <div class="page-intro fade-in">
        <span class="section-tag">Actualités &amp; Conseils</span>
        <h2>Restez informé sur le monde du bâtiment</h2>
        <p>Retrouvez nos articles, conseils pratiques et actualités du secteur de la construction. De la réglementation aux tendances architecturales, en passant par nos retours d'expérience terrain, nous partageons notre expertise pour vous aider dans vos projets.</p>
      </div>
    </div>
  </section>

  <!-- ========== BLOG LISTING ========== -->
  <section class="blog-section">
    <div class="container">
      <div class="blog-grid">

        <?php
          $articles = new WP_Query(array
          (
            'orderby' => 'ID',
            'order' => 'ASC',
            'posts_per_page' => -1
          )
        );

        while ($articles->have_posts()) : $articles->the_post();
        ?>

        <!-- Article 1 -->
        <article class="blog-card fade-in">
          <a href="#" class="blog-card-image">
            <?php the_post_thumbnail() ?>
          </a>
          <div class="blog-card-body">
            <span class="blog-card-category"><?php the_category(", "); ?></span>
            <div class="blog-card-meta">
              <span><i class="far fa-calendar-alt"></i> <?php the_time("d m, Y") ?>;</span>
              <span><i class="far fa-user"></i><?php the_author() ?></span>
            </div>
            <h3><a href="blog-article.html"><?php the_title() ?></a></h3>
            <p><?php the_excerpt() ?></p>
            <a href="<?php the_permalink() ?>" class="blog-card-link">Lire la suite <i class="fas fa-arrow-right"></i></a>
          </div>
        </article>
        <?php endwhile; wp_reset_postdata(); ?>
      </div>
    </div>
  </section>

<?php
get_footer();
?>