<?php
function vanessa_labb_enqueue_scripts()
{
  // Lägg till CSS (tror jag)
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), null);
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), null);
  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), null);

  // Lägg till JavaScript
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), null, true);
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'vanessa_labb_enqueue_scripts');

// Ska kolla upp: wp_dequeue_style() ????
