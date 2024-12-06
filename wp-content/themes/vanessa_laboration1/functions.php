<?php

wp_enqueue_style('tema-style', get_stylesheet_uri(), array(), '1.1'); //felsökning

function vanessa_labb_enqueue_scripts()
{
  // Lägg till CSS
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), null);
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), null);
  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), null);

  // Lägg till JavaScript
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), null, true);
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'vanessa_labb_enqueue_scripts');

// Aktivera stöd för thumbnails och menyer
function labb1_setup_theme()
{
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  register_nav_menu('primary_menu', 'Primary Menu');

  // Ta bort blockbaserade widgets (om det behövs)
  remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme', 'labb1_setup_theme');

// Registrera widgetområden
function labb1_widgets_init()
{
  register_sidebar(array(
    'name'          => 'Sidebar 1',
    'id'            => 'sidebar-1',
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
  ));

  register_sidebar(array(
    'name'          => __('Footer', 'ditt-tema'),
    'id'            => 'footer-1',
    'description'   => __('Footer-widgetområde', 'ditt-tema'),
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
}
add_action('widgets_init', 'labb1_widgets_init');
