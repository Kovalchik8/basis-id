<!doctype html>
<html lang="en">

<head>
  <title>BASIS ID</title>
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

  <!-- Slick -->
  <?php if (is_page_template( 'page-home.php' ) || is_page_template( 'page-about-new.php' )) { ?>
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <?php } ?>

  <?php wp_head(); ?>
</head>

<?php $spy_target = is_page('faq') ? '#faq-nav' : '.section-tabs__tabs';
  $body_class = is_front_page() ? 'front-page ' : 'not-front-page ';
  $body_class .= str_replace(['.php', 'page-templates/'], '', get_page_template_slug() ); 
  $body_class .= ' page-' .  get_the_id();
?>

<body class="<?php echo $body_class ?>" data-spy="scroll" data-target="<?php echo $spy_target ?>" data-offset="250">

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

          <?php wp_nav_menu( array(
            'theme_location'  => 'primary',
            'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
            'container'       => '',
            'menu_class'      => 'navbar-nav mr-auto mt-2 mt-lg-0',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
          )); ?>

          <?php if (!is_home() && get_post_type() != 'post' && !is_page_template('page-faq.php') && !is_page_template( 'page.php' ) && !is_page_template( 'page-hook.php' )) { ?>
          <button class="btn btn--white scroll-to-form navbar__to-form">Get in touch</button>
          <?php } ?>

        </div>

      </div>
    </nav>
  </header>