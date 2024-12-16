<?php
/* Template Name: Hem */
get_header(); ?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <div class="hero">
            <?php if (has_post_thumbnail()) : ?>
              <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
            <?php endif; ?>
            <div class="text">
              <h1>Hej och välkommen!</h1>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sed sodales mauris. Aliquam felis est, efficitur vel fringilla quis, vehicula quis ex.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
