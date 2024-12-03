<?php
/* Template Name: Kontakt */
get_header();
?>

<main>
  <section>
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-md-8 col-md-offset-2">
          <h1>Kontakt</h1>
          <form method="post" action="">
            <label for="name">Namn</label>
            <input type="text" id="name" name="name" required />

            <label for="email">E-post</label>
            <input type="email" id="email" name="email" required />

            <label for="message">Meddelande</label>
            <textarea id="message" name="message" required></textarea>

            <input type="submit" value="Skicka" />
          </form>

          <!-- Minns ej om functionen va viktig men här finns den -->
          <?php
          if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Hantera formdata (skicka e-post, spara till databas, etc.)
            $name = sanitize_text_field($_POST['name']);
            $email = sanitize_email($_POST['email']);
            $message = sanitize_textarea_field($_POST['message']);

            // Skicka e-post
            wp_mail('info@thecompany.com', 'Nytt kontaktmeddelande', $message, 'From: ' . $name . ' <' . $email . '>');
            echo '<p>Tack för ditt meddelande! Vi hör av oss snart.</p>';
          }
          ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
