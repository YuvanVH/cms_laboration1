<?php
/* Template Name: Blogg */
get_header();
?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <h1>Blogg </h1>
          <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
              <article>
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
                <h2 class="title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <ul class="meta">
                  <li><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></li>
                  <li><i class="fa fa-user"></i>
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="Inlägg av <?php the_author(); ?>"><?php the_author(); ?>
                    </a>
                  </li>
                  <li><i class="fa fa-tag"></i> <?php the_category(', '); ?></li>
                </ul>
                <p><?php the_excerpt(); ?></p>
              </article>
            <?php endwhile; ?>

            <!-- Paginering -->
            <nav class="navigation pagination" aria-label="Sidonumrering för inlägg">
              <h2 class="screen-reader-text">Sidonumrering för inlägg</h2>
              <?php
              echo get_the_posts_pagination(array(
                'mid_size'           => 2,
                'prev_text'          => '<span class="prev page-numbers">Föregående</span>',
                'next_text'          => '<span class="next page-numbers">Nästa</span>',
                'before_page_number' => '<span class="page-numbers">',
                'after_page_number'  => '</span>',
              ));
              ?>
            </nav>

          <?php else : ?>
            <p>Inga blogginlägg hittades.</p>
          <?php endif; ?>
        </div>

        <!-- Dynamisk sidopanel -->
        <aside id="secondary" class="col-xs-12 col-md-3">
          <div id="sidebar">
            <!-- Sök widget -->
            <ul>
              <?php if (is_active_sidebar('search-widget')) : ?>
                <?php dynamic_sidebar('search-widget'); ?>
              <?php endif; ?>
            </ul>

            <ul role="navigation">
              <!-- Sidor widget -->
              <?php if (is_active_sidebar('pages-widget')) : ?>
                <?php dynamic_sidebar('pages-widget'); ?>
              <?php endif; ?>

              <!-- Arkiv widget -->
              <?php if (is_active_sidebar('archives-widget')) : ?>
                <?php dynamic_sidebar('archives-widget'); ?>
              <?php endif; ?>

              <!-- Kategorier widget -->
              <?php if (is_active_sidebar('categories-widget')) : ?>
                <?php dynamic_sidebar('categories-widget'); ?>
              <?php endif; ?>
            </ul>
          </div>
        </aside>

      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
