<?php
function vanessa_labb1_enqueue_scripts()
{
  // Lägg till CSS
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), null);
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), null);
  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css', array(), null);

  // Lägg till JavaScript
  wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), null, true);
  wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'vanessa_labb1_enqueue_scripts');

// Fattar inte... ser ut att den inte behövs användas dessa funktioner nedan. hittar ej vart de ska implementeras

// function labb1_excerpt_length($length)
// {
//   return 20; // längd för utdrag exempel
// }
// add_filter('excerpt_length', 'labb1_excerpt_length');

// bra funktion. men liknar inte den statiska sidan så kommenterar bort den
// function labb1_excerpt_more($more)
// {
//   return '... <a href="' . get_permalink() . '">Läs mer</a>';
// }
// add_filter('excerpt_more', 'labb1_excerpt_more');

// function labb1_gratis_cleanup_head()
// {
//   remove_action('wp_head', 'wp_generator'); // Tar bort WordPress version
// }
// add_action('init', 'labb1_gratis_cleanup_head');

// inget jag för tillfället vill ta bort
// function remove_unwanted_styles() {
//   if (is_page('no-style')) {
//     wp_dequeue_style('theme-style');
//   }
// }
// add_action('wp_enqueue_scripts', 'remove_unwanted_styles');



function labb_1_nav_menu_css_class($classes, $item, $args, $depth)
{
  // Anpassa klasser för menyalternativ - work in progress
  if ($args->theme_location == 'primary_menu') {
    $classes[] = 'custom-class';
  }
  return $classes;
}
add_filter('nav_menu_css_class', 'labb_1_nav_menu_css_class', 10, 4);


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
function labb1_navigation_markup_template($template)
{
  // Byt HTML-strukturen till statiska ver
  $template = '
    <nav class="navigation pagination" aria-label="Sidonumrering för inlägg">
        <h2 class="screen-reader-text">Sidonumrering för inlägg</h2>
        %3$s
    </nav>';
  return $template;
}
add_filter('navigation_markup_template', 'labb1_navigation_markup_template');

// inaktivera blockwidgets för användare i blockredigeraren
function disable_block_widgets()
{
  remove_theme_support('widgets-block-editor');
}
add_action('after_setup_theme', 'disable_block_widgets');


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

  register_sidebar(array(
    'name'          => 'Sidor Widget',
    'id'            => 'pages-widget',
    'before_widget' => '<li id="pages-2" class="widget widget_pages">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="widgettitle">',
    'after_title'   => '</h2>',
  ));

  // Undersidor sidomenu
  register_sidebar(array(
    'name'          => 'Undersida Sidomeny',
    'id'            => 'undersida-sidebar',
    'before_widget' => '<div id="%1$s" class="%2$s">',
    'after_widget'  => '</div>',
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
