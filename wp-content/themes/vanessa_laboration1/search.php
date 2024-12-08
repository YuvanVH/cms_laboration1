<?php
get_header();
?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
          <h1>Sökresultat för: <?php echo the_search_query(); ?></h1>

          <div class="searchform-wrap">
            <?php get_search_form(); ?>
          </div>

          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <article>
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php echo the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                <?php endif; ?>
                <h2 class="title">
                  <a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <ul class="meta">
                  <li><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></li>
                  <li><i class="fa fa-user"></i> <?php echo get_the_author_posts_link(); ?></li>
                  <li><i class="fa fa-tag"></i> <?php echo get_the_category_list(', '); ?></li>
                </ul>
                <p><?php echo the_excerpt(); ?></p>
              </article>
            <?php endwhile; ?>

            <!-- Pagination -->
            <div class="pagination">
              <?php
              echo get_the_posts_pagination();
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

<?php
get_footer();
?>
