<?php get_header(); ?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <h1>Kategori: <span><?php single_cat_title(); ?></span></h1>

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <article>
                                <?php if (has_post_thumbnail()) : ?>
                                    <img src="<?php the_post_thumbnail_url(); ?>" />
                                <?php endif; ?>
                                <h2 class="title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                <ul class="meta">
                                    <li>
                                        <i class="fa fa-calendar"></i> <?php the_date(); ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-user"></i> <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>" title="Inlägg av <?php the_author(); ?>" rel="author"><?php the_author(); ?></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-tag"></i> <?php the_category(', '); ?>
                                    </li>
                                </ul>
                                <p><?php the_excerpt(); ?></p>
                            </article>
                        <?php endwhile; ?>

                        <nav class="navigation pagination" aria-label="Sidonumrering för inlägg">
                            <?php
                            the_posts_pagination(array(
                                'prev_text' => 'Föregående',
                                'next_text' => 'Nästa',
                            ));
                            ?>
                        </nav>

                    <?php else : ?>
                        <p>Inga inlägg hittades för denna kategori.</p>
                    <?php endif; ?>
                </div>

                <aside id="secondary" class="col-xs-12 col-md-3">
                    <div id="sidebar">
                        <?php get_sidebar(); ?>
                    </div>
                </aside>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>
