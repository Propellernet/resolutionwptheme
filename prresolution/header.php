<?php
/**
 * The header
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="profile" href="http://gmpg.org/xfn/11">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather&display=swap">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <?php wp_body_open(); ?>

  <div id="page" class="site">
    <a class="skip-link sr-only" href="#content">Skip to content</a>

    <header role="banner">
      <?php get_template_part( 'template-parts/header' ); ?>
    </header>

    <div id="content">
