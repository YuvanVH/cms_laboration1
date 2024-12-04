<?php
/* Template Name: Blogg */
get_header();
?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <h1>Blogg</h1>

          <?php
          // Hämta de senaste 5 blogginläggen
          $args = array(
            'post_type' => 'post',  // Hämtar vanliga inlägg
            'posts_per_page' => 5,  // Visar 5 inlägg per sida
          );
          $query = new WP_Query($args);

          if ($query->have_posts()) :
            while ($query->have_posts()) : $query->the_post();
          ?>
              <article>
                <?php
                // Aktivera stöd för utvalda bilder
                add_theme_support('post-thumbnails');
                ?>
                <h2 class="title">
                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                </h2>
                <ul class="meta">
                  <li><i class="fa fa-calendar"></i> <?php echo get_the_date(); ?></li>
                  <li><i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="Inlägg av <?php the_author(); ?>"><?php the_author(); ?></a></li>
                  <li><i class="fa fa-tag"></i> <?php the_category(', '); ?></li>
                </ul>
                <p><?php the_excerpt(); ?></p>
              </article>
            <?php endwhile; ?>

            <!-- Paginering -->
            <nav class="navigation pagination">
              <?php
              the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => __('« Föregående', 'textdomain'),
                'next_text' => __('Nästa »', 'textdomain'),
              ));
              ?>
            </nav>

          <?php else : ?>
            <p>Inga blogginlägg hittades.</p>
          <?php endif; ?>
          <?php wp_reset_postdata(); ?>
        </div>

        <aside id="secondary" class="col-xs-12 col-md-3">
          <div id="sidebar">
            <ul>
              <li id="search-2" class="widget widget_search">
                <form class="searchform">
                  <div>
                    <label class="screen-reader-text">Sök efter:</label>
                    <input type="text" />
                    <input type="submit" value="Sök" />
                  </div>
                </form>
              </li>
            </ul>

            <ul role="navigation">
              <?php
              // Visa sidor från WordPress
              wp_list_pages(array(
                'title_li' => '<h2 class="widgettitle">Sidor</h2>',
              ));
              ?>
            </ul>

            <ul>
              <?php
              // Visa kategorier
              wp_list_categories(array(
                'title_li' => '<h2 class="widgettitle">Kategorier</h2>',
              ));
              ?>
            </ul>
          </div>
        </aside>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
