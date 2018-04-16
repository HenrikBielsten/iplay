<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="theme-color" content="#6d9aea">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header>
        <nav role="navigation">
            <?php // wp_nav_menu(['theme_location' => 'primary-menu']); ?>
        </nav>
    </header>

    <div class="home_container" style="width: 100vw;">
