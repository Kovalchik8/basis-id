<!doctype html>
<html lang="en">

<head>
  <title>Basis id</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Google fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">

  <!-- Font awesome 5 -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <?php wp_head(); ?>
</head>

<?php $spy_target = (is_page('faq') ) ? '#faq-nav' : '.section-tabs__tabs' ?>

<body data-spy="scroll" data-target="<?php echo $spy_target ?>" data-offset="250">

  <header class="header">
    <nav class="navbar navbar-expand-lg">
      <div class="container">

        <a class="navbar-brand" href="<?php echo site_url(); ?>"><img
            src="<?php echo get_theme_file_uri('/img/logo-header.svg') ?>" alt="logo"></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
          aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
          <img src="<?php echo get_theme_file_uri('/img/mobile-menu.svg') ?>" alt="menu">
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">

          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
              <a class="nav-link" href="<?php echo site_url(); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">Products</a>
              <div class="dropdown-menu" aria-labelledby="dropdownId">
                <a class="dropdown-item" href="<?php echo site_url('/product') ?>">Product</a>
                <a class="dropdown-item" href="<?php echo site_url('/documents') ?>">Documents</a>
                <a class="dropdown-item" href="#">Compliance</a>
                <a class="dropdown-item" href="#">FAQ</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('/documents') ?>">Documents</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('/compliance') ?>">Compliance</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('/faq') ?>">FAQ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" target="_blank" href="https://blog.basisid.com/">Blog</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo site_url('about-us') ?>">About Us</a>
            </li>
          </ul>

          <button class="btn btn--white scroll-to-form">Get in touch</button>

        </div>

      </div>
    </nav>
  </header>