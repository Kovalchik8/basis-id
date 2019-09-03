<div class="hero hero--buttons">
  <div class="container">
    <div class="row">
      <div class="col-md-5 hero__left">
        <h1 class="title"><?php echo get_field('home_hero-title') ?></h1>
        <p><?php echo get_field('home_hero-text') ?>
        </p>
        <div class="buttons">
          <button class="btn btn--pink scroll-to-form">Get in touch</button>
          <div class="buttons__wrapper">
            <span> or </span>
            <a href="">Learn more</a>
          </div>
        </div>
      </div>
      <div class="col-md-7 hero__right">
        <picture>
          <img
            srcset="<?php echo get_field('home_hero-image') ?> 1920w, <?php echo get_field('home_hero-image-retina') ?> 3840w"
            class="img-fluid">
        </picture>
      </div>
    </div>
  </div>
</div>