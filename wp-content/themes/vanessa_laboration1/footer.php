<footer id="footer">
  <div class="container">
    <div class="row top">
      <?php if (is_active_sidebar('footer-section-1')) : ?>
        <?php dynamic_sidebar('footer-section-1'); ?>
      <?php endif; ?>

      <?php if (is_active_sidebar('footer-section-2')) : ?>
        <?php dynamic_sidebar('footer-section-2'); ?>
      <?php endif; ?>

      <?php if (is_active_sidebar('footer-section-3')) : ?>
        <?php dynamic_sidebar('footer-section-3'); ?>
      <?php endif; ?>
    </div>

    <?php if (is_active_sidebar('footer-copyright')) : ?>
      <?php dynamic_sidebar('footer-copyright'); ?>
    <?php else : ?>
      <div class="row bottom">
        <div class="col-xs-12">
          <p>Copyright &copy; Grupp X, <?php echo date('Y'); ?></p>
        </div>
      </div>
    <?php endif; ?>

  </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>
