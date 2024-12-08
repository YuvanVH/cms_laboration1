<?php
/* Template Name: Undersida */
get_header(); ?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <h1><?php the_title(); ?></h1>
          <div><?php the_content(); ?></div>
        </div>

        <aside id="secondary" class="col-xs-12 col-md-3">
          <?php if (is_active_sidebar('undersida-sidebar')) : ?>
            <?php dynamic_sidebar('undersida-sidebar'); ?>
          <?php else : ?>
            <ul id="menu-sidomeny" class="side-menu">
              <li><a href="undersida.html">Undersida</a></li>
              <li class="current-menu-item"><a href="undersida-2.html" aria-current="page">Undersida 2</a></li>
              <li><a href="undersida-3.html">Undersida 3</a></li>
              <li><a href="undersida-4.html">Undersida 4</a></li>
            </ul>
          <?php endif; ?>
        </aside>

      </div>
    </div>
  </section>
</main>
<?php get_footer();
