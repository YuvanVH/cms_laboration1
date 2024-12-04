<?php
get_header();
?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
          <h1>Sökresultat för: <?php echo get_search_query(); ?></h1>

          <div class="searchform-wrap">
            <?php get_search_form(); ?>
          </div>

          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <article>
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                <?php endif; ?>
                <h2 class="title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <ul class="meta">
                  <li><i class="fa fa-calendar"></i> <?php the_date(); ?></li>
                  <li><i class="fa fa-user"></i> <a href=<?php the_author_link(); ?></a></li>
                  <li><i class=" fa fa-tag"></i> <?php the_category(', '); ?></li>
                </ul>
                <p><?php the_excerpt(); ?></p>
              </article>
            <?php endwhile; ?>

            <!-- resultat -->
            <div class="pagination">
              <?php
              echo paginate_links();
              ?>
            </div>
          <?php else : ?>
            <p>Inga resultat hittades för din sökning.</p>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
