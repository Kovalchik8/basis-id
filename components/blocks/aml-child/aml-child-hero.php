<?php $block = get_field('aml-child_hero') ?>
<div class="home-top">
  <div class="container container--wide">
    <div class="row">
      <div class="col-lg-6 home-top__left">
        <h1 class="title title--line"><?php echo $block['title'] ?></h1>
        <p><?php echo $block['under-title'] ?></p>
        <div class="buttons">
          <a href="<?php echo site_url('/about-us') ?>" class="btn btn--pink">Get in touch</a>
          <a href="#contact-form" class="btn btn--white scroll-to-form">Contact US</a>
        </div>
      </div>

      <div class="col-lg-6 home-top__right pl25-min-992 align-center-992">
        <img src="<?php echo $block['img'] ?>" alt="img" class="img-fluid">
      </div>
    </div>
  </div>
</div>