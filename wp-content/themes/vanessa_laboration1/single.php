<?php get_header(); ?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <?php
          if (have_posts()) :
            while (have_posts()) :
              the_post(); ?>
              <article>
                <?php if (has_post_thumbnail()) : ?>
                  <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>
                <h1 class="title"><?php the_title(); ?></h1>
                <ul class="meta">
                  <li><i class="fa fa-calendar"></i><?php echo get_the_date(); ?></li>
                  <li><i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="Inlägg av <?php the_author(); ?>"><?php the_author(); ?></a></li>
                  <li><i class="fa fa-tag"></i> <?php the_category(', '); ?></li>
                </ul>
                <div class="content">
                  <?php the_content(); ?>
                </div>
              </article>
          <?php endwhile;
          else :
            echo '<p>Inga inlägg hittades.</p>';
          endif; ?>
        </div>
        <aside id="secondary" class="col-xs-12 col-md-3">
          <?php get_sidebar(); ?>
        </aside>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
