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

<link href="https://fonts.googleapis.com/css?family=Merriweather:300,700|Nunito+Sans:700&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

<style>
.bg-shapes-i-dots {
  background: url('<? echo get_theme_file_uri( 'assets/decoration/shapes-i-dots.svg' ) ?>') no-repeat center center;
}

.bg-shapes-i {
  background: url('<? echo get_theme_file_uri( 'assets/decoration/shapes-i.svg' ) ?>') no-repeat center center;
}

.bg-wave-dots {
  background: url('<? echo get_theme_file_uri( 'assets/decoration/wave-dots.svg' ) ?>') no-repeat bottom;
  background-size: 100% auto;
}

@include media-breakpoint-up(md) {

  .stripes {
    background: url('<? echo get_theme_file_uri( 'assets/decoration/stripes.svg' ) ?>');
    width: 86%;
    height: 100%;
    position: absolute;
    bottom: -16px;
    left: 0px;
  }

  .bg-curved-dots-left {
    background: url('<? echo get_theme_file_uri( 'assets/decoration/curved-dots-a.svg' ) ?>') no-repeat left 100px, url('<? echo get_theme_file_uri( 'assets/decoration/curved-dots-b.svg' ) ?>') no-repeat right 200px;
  }

}

@include media-breakpoint-up(lg) {

  .bg-time-flies {
    background: url('<? echo get_theme_file_uri( 'assets/decoration/time-flies.jpg' ) ?>') no-repeat right 20%, url('<? echo get_theme_file_uri( 'assets/decoration/shapes-i.svg' ) ?>') no-repeat -20px 105%;
  }

  .bg-stella {
    background: url('/images/podcast/stella-coloured.jpg' ) ?>') no-repeat right 50px;
  }

  .stripes {
    width: 92%;
    bottom: -26px;
    left: -6px;
  }

  .bg-shapes-i-dots-bottom {
    background: url('<? echo get_theme_file_uri( 'assets/decoration/shapes-i-dots.svg' ) ?>') no-repeat 102% 105%;
  }

  .bg-shapes-i-bottom {
    background: url('<? echo get_theme_file_uri( 'assets/decoration/shapes-i.svg' ) ?>') no-repeat -20px 105%;
  }

}
</style>

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
