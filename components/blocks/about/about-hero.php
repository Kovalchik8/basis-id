<div class="hero hero--about">
  <div class="container">
    <div class="row">
      <div class="col-md-6 hero__left">
        <h1 class="title title--wave"><?php echo get_field('about_hero-title') ?></h1>
        <p><?php echo get_field('about_hero-text') ?>
        </p>
      </div>
      <div class="col-md-6 hero__right">
        <picture>
          <img
            srcset="<?php echo get_field('about_hero-image') ?> 1920w, <?php echo get_field('about_hero-image-retina') ?> 3840w"
            class="img-fluid">
        </picture>
      </div>
    </div>
  </div>
</div>