<div class="hero hero--compliance">
  <div class="container">
    <div class="row">
      <div class="col-md-6 hero__left">
        <span class="left-upper-text"><?php echo get_field('top_text') ?></span>
        <h1 class="title title--wave"><?php echo get_field('title') ?></h1>
        <p><?php echo get_field('bottom_text') ?>
        </p>
      </div>
      <div class="col-md-6 hero__right">
        <picture>
          <img srcset="<?php echo get_field('image') ?> 1920w, <?php echo get_field('image-retina') ?> 3840w"
            class="img-fluid">
        </picture>
      </div>
    </div>
  </div>
</div>