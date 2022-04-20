<!Doctype html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php echo $args["metaDescription"] ?>">
  <meta name="keywords" content="">
  <link delay-1 rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico" type="image/x-icon">
  <link delay-1 rel="icon" href="<?php echo get_template_directory_uri() ?>/favicon.ico" type="image/x-icon">
  <meta property="og:locale" content="pl_PL">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $args["ogTitle"] ?>">
  <meta property="og:url" content="<?php echo $args["ogUrl"] ?>">
  <meta property="og:site_name" content="<?php echo $args["ogSite_name"] ?>">
  <meta name="google-site-verification" content="R5AJbfNBkgSdKzfXyTUivPnor8Jm3tW4cHk6EnVvrN8" />
  <title><?php echo $args["title"] ?></title>
  <?php
  wp_head();
  ?>
</head>

<body>
  <!-- NAWIGACJA -->
  <div class="navigation container-fluid sticky-top">

    <div class="row align-items-center">
      <div class="col-6 col-md-2">
        <a href="<?php echo get_home_url() ?>"><img src="<?php echo get_template_directory_uri() . '/assets/logo.png'; ?>" alt="logo rebro" /></a>
      </div>

      <div class="toggle-navigation-curtain ml-auto mr-4" onclick="toggleNav(this)">
        <div class="bar1"></div>
        <div class="bar2"></div>
        <div class="bar3"></div>
      </div>

      <div class="col-sm-12 col-md-10 navigation-menu">

        <div class="col-sm-12">
          <ul class="nav d-flex justify-content-around">
            <li class="nav-item">
              <a class="nav-link delay-1" href="<?php echo get_home_url() ?>">O nas</a>
            </li>


            <li class="nav-item">
              <div class="dropdown">
                <a class="nav-link  delay-2 " href="#" role="button">
                  Nasza oferta <i class="fas fa-caret-square-down"></i>
                </a>

                <div class="dropdown-menu">
                  <a class="dropdown-item" href="<?php echo get_home_url() ?>/strony_internetowe">Strony internetowe</a>
                  <a class="dropdown-item" href="<?php echo get_home_url() ?>/sklepy_internetowe">Sklepy internetowe</a>

                </div>
              </div>
            </li>

            <li class="nav-item">
              <a class="nav-link delay-3" href="<?php echo get_home_url() ?>/portfolio">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link delay-4" href="<?php echo get_home_url() ?>/kontakt">Kontakt</a>
            </li>
          </ul>
        </div>
      </div>

      <div id="myNav" class="overlay">
        <div class="overlay-content">
          <a class="nav-link" href="<?php echo get_home_url() ?>">O nas</a>
          <div class="dropdown">

            <a class="nav-link  delay-2 " href="#" role="button" onclick="toggleDropDownMobileOferta()">
              Nasza oferta <i class="fas fa-caret-square-down align-self-center"></i>
            </a>

            <div id="dropdown-oferta" class="dropdown-menu-mobile">
              <a class="dropdown-item" href="<?php echo get_home_url() ?>/strony_internetowe">Strony internetowe</a>
              <a class="dropdown-item" href="<?php echo get_home_url() ?>/sklepy_internetowe">Sklepy internetowe</a>

            </div>

          </div>
          <a class="nav-link" href="<?php echo get_home_url() ?>/portfolio">Portfolio</a>
          <a class="nav-link" href="<?php echo get_home_url() ?>/kontakt">Kontakt</a>
        </div>
      </div>
    </div>
  </div>