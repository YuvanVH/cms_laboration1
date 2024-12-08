<?php
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

// Aktivera stöd för thumbnails o menyer
function labb1_setup_theme()
{
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  register_nav_menu('primary_menu', 'Primary Menu');

  // Ta bort blockbaserade widgets (om det behövs...?)
  remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme', 'labb1_setup_theme');

// Anpassa pagineringen för att matcha HTML-struktur
function labb1_custom_pagination($template)
{
  // Byt HTML-strukturen till statiska ver
  $template = '
    <nav class="navigation pagination" aria-label="Sidonumrering för inlägg">
        <h2 class="screen-reader-text">Sidonumrering för inlägg</h2>
        %3$s
    </nav>';
  return $template;
}
add_filter('navigation_markup_template', 'labb1_custom_pagination');

// Registrera widgetområden
function labb1_widgets_init()
{
  // Registrera widget för sökformulär
  register_sidebar(array(
    'name'          => 'Sök Widget',
    'id'            => 'search-widget',
    'before_widget' => '<li id="search-2" class="widget widget_search">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
  ));
  // Registrera andra widgets (exempelvis för sidor, arkiv etc.)
  register_sidebar(array(
    'name'          => 'Sidopanel Meny',
    'id'            => 'sidebar-menu',
    'before_widget' => '<li class="widget widget_nav_menu">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
  ));

  register_sidebar(array(
    'name'          => 'Sidor Widget',
    'id'            => 'pages-widget',
    'before_widget' => '<li id="pages-2" class="widget widget_pages">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
  ));

  // Registrera widget för arkiv
  register_sidebar(array(
    'name'          => 'Arkiv Widget',
    'id'            => 'archives-widget',
    'before_widget' => '<li id="archives-2" class="widget widget_archive">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
  ));

  // Registrera widget för kategorier
  register_sidebar(array(
    'name'          => 'Kategorier Widget',
    'id'            => 'categories-widget',
    'before_widget' => '<li id="categories-2" class="widget widget_categories">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
  ));

  register_sidebar(array(
    'name'          => 'Footer Section 1',
    'id'            => 'footer-section-1',
    'before_widget' => '<div class="col-xs-12 col-sm-6 col-md-4">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  register_sidebar(array(
    'name'          => 'Footer Section 2',
    'id'            => 'footer-section-2',
    'before_widget' => '<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));

  register_sidebar(array(
    'name'          => 'Footer Section 3',
    'id'            => 'footer-section-3',
    'before_widget' => '<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">',
    'after_widget'  => '</div>',
    'before_title'  => '<h4>',
    'after_title'   => '</h4>',
  ));
  register_sidebar(array(
    'name'          => 'Footer Copyright',
    'id'            => 'footer-copyright',
    'before_widget' => '<div class="row bottom"><div class="col-xs-12">',
    'after_widget'  => '</div></div>',
    'before_title'  => '',
    'after_title'   => '',
  ));
}
add_action('widgets_init', 'labb1_widgets_init');
