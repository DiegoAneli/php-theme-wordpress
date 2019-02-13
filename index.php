<?php get_header(); ?>

  <div class="container">

    <div class="row">
      <div class="col-8">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

          <div class="post">
            <h2>
                <a href="<?php the_permalink(); ?>"></a>
                  <?php the_title(); ?>
                  <small><?php the_time('j F Y'); ?></small>

            </h2>
            <p><?php the_excerpt(); ?></p>
            <h3>Scritto da: <?php the_author_posts_link(); ?></h3>


          </div>

        <?php endwhile; else: ?>
          <p>Nessun articolo disponibile</p>
        <?php endif; ?>


      </div>
      <div class="col-4">
        <?php get_sidebar(); ?>

      </div>
    </div>

  </div>

<?php get_footer(); ?>
