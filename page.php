<section id="contenu">
    <div class="container">
        <?php
            if ( have_posts()) : while ( have_posts() ) : the_post();

            the_content();
            the_author();

        endwhile; endif;

        wp_reset_postdata();
        ?>
    </div>
</section>