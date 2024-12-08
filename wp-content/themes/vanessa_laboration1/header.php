<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <title><?php wp_title(); ?> - <?php get_bloginfo('name'); ?></title>
  </title>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="wrap">

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-xs-8 col-sm-6">
            <a class="logo" href="<?php echo home_url(); ?>">Labb 1</a>
          </div>
          <div class="col-sm-6 hidden-xs">
            <?php get_search_form(); ?>
          </div>
          <div class="col-xs-4 text-right visible-xs">
            <div class="mobile-menu-wrap">
              <i class="fa fa-search"></i>
              <i class="fa fa-bars menu-icon"></i>
            </div>
          </div>
        </div>
      </div>
    </header>

    <nav id="nav">
      <div class="container">
        <div class="row">
          <div class="col-xs-12">
            <?php
            wp_nav_menu(array(
              'theme_location' => 'primary_menu',
              'menu_class' => 'menu',
            ));
            ?>
          </div>
        </div>
      </div>
    </nav>
