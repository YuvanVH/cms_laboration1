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


//navigations menu
function labb1_setup_theme()
{
  add_theme_support('menus');
  register_nav_menu('primary_menu', 'Primary Menu');
}
add_action('after_setup_theme', 'labb1_setup_theme');

// Funktion för att registrera widgetområde för sidomenyn
// Funktion för att registrera widgetområden
function labb1_widgets_init()
{
  // Widgetområde för blogg-sidomenyn
  register_sidebar(array(
    'name' => __('Blogg Sidebar', 'textdomain'),
    'id' => 'blog-sidebar',
    'description' => __('Sidopanel för bloggsidan.', 'textdomain'),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="widgettitle">',
    'after_title' => '</h2>',
  ));

  // Widgetområde för standard-sidebar
  register_sidebar(array(
    'name'          => __('Sidebar', 'ditt-tema'),
    'id'            => 'sidebar-1',
    'description'   => __('Sidebar för temat', 'ditt-tema'),
    'before_widget' => '<div class="widget">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  // Widgetområde för footern
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
