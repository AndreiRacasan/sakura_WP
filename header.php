<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php wp_head(); ?>

</head>

<body>
  <header class="header text-center">
    <a class="site-title pt-lg-4 mb-0" href="index.html">Sakura UI</a>

    <nav class="navbar navbar-expand-lg navbar-dark">

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div id="navigation" class="collapse navbar-collapse flex-column">
        <img class="mb-3 mx-auto logo" src="img/logo.png" alt="logo">

        <?php
        wp_nav_menu(
          array(
            'menu' => 'primary',
            'container' => '',
            'theme_location' => 'primary',
            'items_wrap' => '<ul id="" class="navbar-nav flex-column text-center">%3$s</ul>'
          )
        );
        ?>

      </div>
    </nav>
  </header>

  <div class="main-wrapper">

    <header class="page-title theme-bg-light text-center gradient py-5">
      <h1 class="heading"><?php the_title(); ?></h1>
    </header>