<!DOCTYPE html>
<html <?php language_attributes(); ?> >

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="description" content="<?php bloginfo('description') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    <?php bloginfo('name'); ?> | 
    <?php is_front_page() ? bloginfo('description') :  wp_title(); ?>
  </title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="<?php bloginfo('template_url'); ?>/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
  <?php wp_head(); ?>
</head>

<body>


<!--Main Navigation-->
<header class="header">

  <nav class="navbar fixed-top navbar-expand-lg navbar-dark special-color-dark scrolling-navbar">
    <a class="navbar-brand" href="/wordpress"><strong><?php bloginfo('name'); ?></strong></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php
      wp_nav_menu( array(
          'menu'              => 'primary',
          'theme_location'    => 'primary',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'navbarSupportedContent',
          'menu_class'        => 'nav navbar-nav mr-auto',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker())
      ); 
    ?>
  </nav>

  <div class="view intro-2">
    <div class="full-bg-img">
      <div class="mask rgba-black-light flex-center">
        <div class="container text-center white-text">
          <div class="white-text text-center wow fadeInUp">
            <h2><?php bloginfo('name'); ?></h2>
            <h5><?php bloginfo('description'); ?></h5>
            <br>
          </div>
        </div>
      </div>
    </div>
  </div>

</header>
<!--Main Navigation-->