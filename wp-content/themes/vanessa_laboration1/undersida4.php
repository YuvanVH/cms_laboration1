<?php
/* Template Name: Undersida 4 */
get_header(); ?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-8 col-md-6">
          <h1><?php the_title(); ?></h1>
          <div><?php the_content(); ?></div>
        </div>
        <div class="col-xs-12 col-sm-4 col-md-6">
          <!-- Visa utvald bild -->
          <?php if (has_post_thumbnail()) : ?>
            <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
          <?php endif; ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
