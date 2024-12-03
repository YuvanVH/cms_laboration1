<?php
get_header();
?>
<main>
  <section>
    <div class="container">
      <div class="row">
        <div id="primary" class="col-xs-12 col-md-9">
          <h1>Författare: <span><?php echo $forfattare['namn']; ?></span></h1>
          <p><?php echo $forfattare['biografi']; ?></p> <!-- Visa författarens biografi -->

          <?php while ($inlagg = $result_inlagg->fetch_assoc()) { ?>
            <article>
              <img src="img/<?php echo $inlagg['bild']; ?>" alt="<?php echo $inlagg['titel']; ?>" />
              <h2 class="title">
                <a href="inlagg.php?id=<?php echo $inlagg['id']; ?>"><?php echo $inlagg['titel']; ?></a>
              </h2>
              <ul class="meta">
                <li>
                  <i class="fa fa-calendar"></i> <?php echo $inlagg['datum']; ?>
                </li>
                <li>
                  <i class="fa fa-user"></i> <a href="forfattare.php?id=<?php echo $forfattare['id']; ?>"><?php echo $forfattare['namn']; ?></a>
                </li>
                <li>
                  <i class="fa fa-tag"></i> <?php echo $inlagg['kategori']; ?>
                </li>
              </ul>
              <p><?php echo substr($inlagg['innehall'], 0, 150); ?>...</p> <!-- Förhandsvisning av inlägg -->
            </article>
          <?php } ?>
        </div>
      </div>
    </div>
  </section>
</main>
<?php get_footer(); ?>
