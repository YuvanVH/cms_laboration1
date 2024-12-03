<?php
/* Template Name: Blogg */
get_header(); ?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <!-- Primär innehåll -->
        <div id="primary" class="col-xs-12 col-md-9">
          <h1>Blogg</h1>

          <?php
          if (have_posts()) :
            while (have_posts()) : the_post(); ?>
              <article>
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>

                <h2 class="title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <ul class="meta">
                  <li>
                    <i class="fa fa-calendar"></i> <?php echo get_the_date(); ?>
                  </li>
                  <li>
                    <i class="fa fa-user"></i>
                    <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" rel="author">
                      <?php the_author(); ?>
                    </a>
                  </li>
                  <li>
                    <i class="fa fa-tag"></i> <?php the_category(', '); ?>
                  </li>
                </ul>
                <p><?php the_excerpt(); ?></p>
              </article>
          <?php endwhile;

            // Sidnumrering
            the_posts_pagination(array(
              'prev_text' => __('Föregående'),
              'next_text' => __('Nästa'),
            ));
          else :
            echo '<p>Inga inlägg hittades.</p>';
          endif; ?>
        </div>

        <!-- Sidomeny -->
        <aside id="secondary" class="col-xs-12 col-md-3">
          <div id="sidebar">
            <?php if (is_active_sidebar('blog-sidebar')) : ?>
              <?php dynamic_sidebar('blog-sidebar'); ?>
            <?php else : ?>
              <ul>
                <li>Sök-widget</li>
                <li>Arkiv-widget</li>
                <li>Kategorier-widget</li>
              </ul>
            <?php endif; ?>
          </div>
        </aside>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
