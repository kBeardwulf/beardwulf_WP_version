<?php get_header(); ?>

<!-- ========== BREADCRUMB ========== -->
  <section class="breadcrumb-section">
    <div class="container">
      <nav class="breadcrumb" aria-label="Fil d'Ariane">
        <a href="<?php echo home_url(); ?>">Accueil</a>
        <span class="breadcrumb-sep"><i class="fas fa-chevron-right"></i></span>
        <a href="<?php the_permalink(10); ?>">Blog</a>
        <span class="breadcrumb-sep"><i class="fas fa-chevron-right"></i></span>
        <span class="breadcrumb-current"><?php the_title(); ?></span>
      </nav>
      <h1 class="page-title"><?php the_title(); ?></h1>
    </div>
  </section>

  <!-- ========== ARTICLE DETAIL 70/30 ========== -->
    <?php
        if ( have_posts()) : while ( have_posts() ) : the_post();
    ?>
    <section class="article-detail">
    <div class="container article-detail-grid">

      <!-- ===== COLONNE GAUCHE (70%) ===== -->
      <article class="article-main">

        <!-- Image d'illustration -->
        <div class="article-hero fade-in">
          <?php the_post_thumbnail() ?>
        </div>

        <!-- Meta -->
        <div class="article-meta fade-in">
          <span class="article-meta-category"><?php the_category(", ") ?></span>
          <div class="article-meta-info">
            <span><i class="far fa-calendar-alt"></i><?php the_time("d m, Y") ?></span>
            <span><i class="far fa-user"></i> <?php the_author() ?></span>
            <span><i class="far fa-clock"></i> 6 min de lecture</span>
          </div>
        </div>

        <!-- Contenu de l'article -->
        <div class="article-content fade-in">
          <?php the_content(); ?>
        </div>

        <?php
            $url = get_permalink();
            $titre = get_the_title();
        ?>

        <!-- Partage social -->
        <div class="article-share fade-in">
          <span class="article-share-label">Partager cet article :</span>
          <div class="article-share-links">
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $url; ?>" class="share-btn share-facebook" aria-label="Partager sur Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a target="_blank" href="https://x.com/intent/post?text=En train de lire <?php the_title(); ?> => <?php the_permalink(); ?> via @wpchannel" class="share-btn share-twitter" aria-label="Partager sur X (Twitter)"><i class="fab fa-x-twitter"></i></a>
            <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo $url; ?>" target="_blank" class="share-btn share-linkedin" aria-label="Partager sur LinkedIn"><i class="fab fa-linkedin-in"></i></a>
            <a href="mailto:?subject=<?php echo $titre?>&body=<?php echo $url; ?>" target="_blank" class="share-btn share-email" aria-label="Partager par email"><i class="fas fa-envelope"></i></a>
          </div>
        </div>

      </article>
    <?php 
        endwhile; endif; wp_reset_postdata();
    ?>

    <!-- ===== COLONNE DROITE (30%) ===== -->
    <aside class="article-sidebar">
    
    <!-- Suggestions d'articles -->
    <div class="sidebar-widget fade-in">
        <h4>Articles récents</h4>
        <div class="sidebar-articles">
    
    
    <div class="container">
        <?php
                $articles = new WP_Query(array 
                (
                    'post__not_in' => array (get_the_ID()),
                    'orderby' => 'ID',
                    'order' => 'ASC',
                    'posts_per_page' => 4
                    )
                );
                while ($articles->have_posts()) : $articles->the_post();
            ?>  
        <div class="blog-grid">
            <a href="#" class="sidebar-article-card">
              <div class="sidebar-article-img">
                <?php the_post_thumbnail() ?>
              </div>
              <div class="sidebar-article-info">
                <span class="sidebar-article-date"><?php echo date("d m, Y"); ?></span>
                <h5><?php the_title(); ?></h5>
              </div>
            </a>
        </div>
        <?php 
            endwhile; wp_reset_postdata();
        ?>
    </div>

        <!-- CTA Sidebar -->
        <div class="sidebar-cta fade-in">
          <div class="sidebar-cta-content">
            <h4>Un projet de construction ?</h4>
            <p>Nos experts vous accompagnent de A à Z dans le respect de la RE 2020.</p>
            <a href="contact.html" class="btn btn-accent btn-full">Demander un devis</a>
          </div>
        </div>

      </aside>
    </div>
  </section>
<?php get_footer(); ?>